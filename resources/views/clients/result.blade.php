@extends('layout.master')
@section('content')
  @foreach ($clients as $client)
    @if($rut == $client->rut)
      <div class="card" style="text-align: center;width:50%; margin:0px auto;">
        <img class="card-img-top" src="/images/test.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Mi perfil</h5>
          <p class="card-text">
            <table class="table table-hover" style="text-align: justify;">
              <tbody>
                <tr>
                  <td>Nombre: {{$client->fullName}}</td>
                </tr>
                <tr>
                  <td>RUT: {{$client->rut}}</td>
                </tr>
              </tbody>
            </table>
          </p>
          <a href="/clients/{{$client->rut}}/products" class="btn btn-primary">Ver mis productos</a><br><br>
        </div>
      </div>
    @endif
  @endforeach
@endsection
