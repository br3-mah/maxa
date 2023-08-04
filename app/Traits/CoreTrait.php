<?php

namespace App\Traits;

trait CoreTrait {
    public function __constructor(){
        $url = '';
        $data = [
            'client_id' => '30fc1271-ef6f-4ccb-ba6e-28facd59dda5' ,
            'client_secret' =>  '230902390920390290923',
            'grant_type' => 'client_credentials',
        ];
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
        ]);

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            // Handle error if needed
            curl_close($ch);
            return false;
        }

        curl_close($ch);
        return $response;
    }
}