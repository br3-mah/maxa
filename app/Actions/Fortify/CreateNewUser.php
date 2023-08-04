<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Repositories\UserRepository;
use App\Services\UserWelcomeEmailService;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;
    private $userRepository;
    private $userWelcomeEmailService;

    public function __construct(UserRepository $userRepository, UserWelcomeEmailService $userWelcomeEmailService)
    {
        $this->userRepository = $userRepository;
        $this->userWelcomeEmailService = $userWelcomeEmailService;
    }
    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        $user = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
        // Send the welcome email
        $this->userWelcomeEmailService->sendWelcomeEmail($input['email']);
        return $user;
    }
}
