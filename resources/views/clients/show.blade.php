<h3>Productos</h3>
@foreach ($products as $product)
  ID: {{$product->id}}
  Monto: {{$product->amount}}
@endforeach
