<form method="POST" style="text-align: center;width:80%; margin:0px auto;" action="/clients/result">
  {{ csrf_field() }} <!--Sirve para evitar ataques modificando el html desde el navegador.-->
  <div class="form-row">
    <div class="col" align="center">
      <div class="form-group col-md-8">
        <label for="rut">RUT</label>
        <input type="integer" class="form-control" id="rut" name="rut" required>
      </div>
    </div>
      <button type="submit" align="center" class="btn">Seguir</button>
    </div>
  </form>
