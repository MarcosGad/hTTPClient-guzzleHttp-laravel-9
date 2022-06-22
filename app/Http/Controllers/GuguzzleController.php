<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GuguzzleController extends Controller
{
    public function index()
    {
        //$res = Http::get('https://jsonplaceholder.typicode.com/posts');
        //return $res->body();
        //return $res->status();
        //return $res->object();
        //return $res->headers();
        //return $res->json();

        //$client = new \GuzzleHttp\Client(); 
        //$res = $client->request('GET', 'https://jsonplaceholder.typicode.com/posts');
        //echo $res->getStatusCode();
        //echo $res->getHeader('content-type')[0];
        //echo $res->getBody();

        $res = Http::PUT('https://jsonplaceholder.typicode.com/posts/11', [
            'userId' => '999',
        ]);

        return $res->body();
    

    }
}
 