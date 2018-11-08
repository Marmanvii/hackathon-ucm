<h3>Datos</h3>
<h1>----</h1>
@foreach ($clients as $client)
  @if($client->rut == '331714')
    Edad: {{$client->age}}
    RUT: {{$client->formattedRut}}
    <a class="btn btn-outline-light" href="/clients/{{$client->rut}}/products" role="button">👁</a>
  @endif
@endforeach
