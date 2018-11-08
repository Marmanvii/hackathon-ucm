<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class TEFsController extends Controller
{
    public function show($id){
      $history = new Client([
        'base_uri' => 'http://apifintech-team1.3it.cl/hackathon/',
      ]);
      $response = $history->request('GET', "tef/history/{$id}");
      $histories = json_decode($response->getBody()->getContents());
      return view('tefs.show', compact('histories'));
    }
}
