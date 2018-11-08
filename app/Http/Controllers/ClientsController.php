<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ClientsController extends Controller
{
    public function index(){
      return view('clients.index');
    }
    public function result(Request $request){
      $rut = $request->rut;
      $client = new Client([
        'base_uri' => 'http://apifintech-team1.3it.cl/hackathon/',
      ]);
      $response = $client->request('GET', 'clients/all');
      $clients = json_decode($response->getBody()->getContents());
      return view('clients.result', compact('clients','rut'));
    }
    public function show($rut){
      $product = new Client([
        'base_uri' => 'http://apifintech-team1.3it.cl/hackathon/',
      ]);
      $response = $product->request('GET', "clients/{$rut}/products");
      $products = json_decode($response->getBody()->getContents());
      return view('clients.show', compact('products'));
    }
}
