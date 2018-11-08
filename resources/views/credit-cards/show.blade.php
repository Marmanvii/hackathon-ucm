@foreach ($credit_cards as $credit_card)
  ID:{{$credit_card->id}}
  Monto: {{$credit_card->amount}}<br>
@endforeach
