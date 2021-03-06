@csrf

<div class="form-group">
    <label for="ingresos">Ingresos:</label>
    <input type="number" class="form-control" name="ingresos" id="ingresos" oninput="calcular()" placeholder="Ingresos del día(obligatorio)" data-decimals="2" min="0" step="0.01" 
        value="{{ old('ingresos', $contabilidad->ingresos) }}">
</div>
<div class="form-group">
    <label for="gastos">Gastos:</label>
    <input type="number" class="form-control" name="gastos" id="gastos" oninput="calcular()" placeholder="gastos del día(obligatorio)" data-decimals="2" min="0" step="0.01" 
        value="{{ old('gastos', $contabilidad->gastos) }}">
</div>
<div class="form-group">
    <label for="descripcion">Descripción</label>
    <textarea class="form-control" name="descripcion" id="descripcion" rows="3"
        placeholder="Ingrese una descripción (opcional)">{{ old('descripcion', $contabilidad->descripcion) }}</textarea>
</div>
<div class="form-group ">
    <label for="fecha">Fecha:</label>
    <div class="d-flex align-items-center ">
        <input type="date"
        class="form-control col-lg-4 col-lg-4 col-md-4 @error('fecha') is-invalid @else border-0 @enderror"
            name="fecha" id="fecha" value="{{ old('fecha', $contabilidad->fecha) }}">
        <span class="text-black-50 ml-2">(obligatorio)</span>
        @error('fecha')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
<div class="form-group ">
    <label for="total">Saldo del día:</label>
    <div class="d-flex align-items-center ">
        ₡  <input  type="number" class="form-control col-lg-4 col-md-4 "
            name="total" id="total" value="{{ old('total', $contabilidad->total) }}" data-decimals="2" step=".01" readonly style="border: solid #FC9D2C">
        
    </div>
</div>

<div class="d-flex justify-content-end mt-5 mb-5">
    <a class="btn btn-primary mr-3" href="{{ route('contabilidads.index') }}" role="button">Volver</a>
    <button class="btn btn-secondary text-white">{{ $btnText ?? '' }}</button>
</div>


        <script>
            function calcular(){
                var a =  parseFloat(document.getElementById('ingresos',2).value) || 0, b = parseFloat(document.getElementById('gastos',2).value )|| 0;
                document.getElementById('total').value = a - b;
    
            }
        </script>