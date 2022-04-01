<form action="{{ url('/mantenimientoCincuenta/'.$datoId ) }}" method="post">
    @csrf
    {{ method_field('PATCH') }}
    @include('cartaMantenimientoCincuenta.form', ['modo'=>'Guardar cambios']);
</form>