<h3>Productos</h3>
@foreach ($products as $product)
  ID: {{$product->id}}
  Monto: {{$product->amount}}
  @if($product->type == 'TDC')
    <a class="btn btn-outline-light" href="/credit-cards/{{$product->id}}" role="button">TDC</a>
  @endif
  <a class="btn btn-outline-light" href="/tef/history/{{$product->id}}" role="button">Historial</a>
@endforeach
