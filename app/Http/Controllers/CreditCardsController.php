<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class CreditCardsController extends Controller
{
    public function show($id){
      $credit_card = new Client([
        'base_uri' => 'http://apifintech-team1.3it.cl/hackathon/',
      ]);
      $response = $credit_card->request('GET', "credit-card/{$id}");
      $credit_cards = json_decode($response->getBody()->getContents());
      return view('credit-cards.show', compact('credit_cards'));
    }
}
