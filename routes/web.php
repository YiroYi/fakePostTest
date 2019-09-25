<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use GuzzleHttp\Client;

Route::get('/', function () {


    /*$client = new \GuzzleHttp\Client();
    $request = $client->get('https://jsonplaceholder.typicode.com/posts');
    $response = $request->getBody()->getContents();
    return json_decode($response);*/

    $client = new \GuzzleHttp\Client();
    $url = "https://jsonplaceholder.typicode.com/posts";
    $request = $client->post($url,  ['form_params'=>[
      'id'=>1,
      'titleXX'=>"Laravel",
      'body'=>"Hello world",
      'userId'=>1]
    ]);
    $response1 = $request->getBody()->getContents();
    $response = $request->getStatusCode();

    return [$response,$response1];

});
