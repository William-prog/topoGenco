<form action="{{ url('/mantenimientoCientoCincuenta/'.$datoId ) }}" method="post">
    @csrf
    {{ method_field('PATCH') }}
    @include('cartaMantenimientoCientoCincuenta.form', ['modo'=>'Guardar cambios']);
</form>