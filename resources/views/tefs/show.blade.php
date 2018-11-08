@foreach ($histories as $history)
  ID: {{$history->id}}<br>
  Monto: {{$history->amount}}<br>
  Tipo: {{$history->type}}<br><br>
@endforeach
