<?php
    
// app/Services/UserWelcomeEmailService.php

namespace App\Services;

use Illuminate\Support\Facades\Mail;

class UserWelcomeEmailService
{
    public function sendWelcomeEmail(string $recipientEmail)
    {
        // Customize the welcome email view and subject according to your needs
        $emailData = [
            'name' => 'New User', // You can fetch the user's name from the database if you have it.
        ];

        Mail::send('emails.welcome', $emailData, function ($message) use ($recipientEmail) {
            $message->to($recipientEmail)
                ->subject('Welcome to Our Website!');
        });
    }
}