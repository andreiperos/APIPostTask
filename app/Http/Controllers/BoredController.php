<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Client;

class BoredController extends Controller
{
    public function getTask(){
        $client = new Client();
        $headers = [
            'Content-type' => 'application/json'
        ];
        $response = $client->request('GET','https://www.boredapi.com/api/activity/'
        ,
        [
            'headers' => $headers
        ]);
        return $response->getBody("activity");
    }
}
