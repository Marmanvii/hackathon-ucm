<h3>Datos</h3>
<h1>----</h1>
@foreach ($clients as $client)
  @if($rut == $client->rut)
    Edad: {{$client->age}}<br>
    RUT: {{$client->formattedRut}}
    <a class="btn btn-outline-light" href="/clients/{{$client->rut}}/products" role="button">Ver mis tarjetas</a><br><br>
  @endif
@endforeach
