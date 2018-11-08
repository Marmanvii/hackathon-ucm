<h3>Productos</h3>
@foreach ($products as $product)
  ID: {{$product->id}}<br>
  Monto: {{$product->amount}}<br>
  Limite: {{$product->limitAmount}}<br>
  @if($product->type == 'TDC')
    <a class="btn btn-outline-light" href="/credit-cards/{{$product->id}}" role="button">TDC</a><br>
    <form method="POST" action="/tef/{{$product->id}}/create">
      {{ csrf_field() }} <!--Sirve para evitar ataques modificando el html desde el navegador.-->
      <div class="form-row">
      <div class="col">
          <input name="id" type="hidden" value={{$product->id}}>
          <input name="limitAmount" type="hidden" value={{$product->limitAmount}}>
      </div>
        <button type="submit" class="btn">Transferir</button>
      </div>
    </form>
  @endif
  <a class="btn btn-outline-light" href="/tef/history/{{$product->id}}" role="button">Historial</a><br>
@endforeach
