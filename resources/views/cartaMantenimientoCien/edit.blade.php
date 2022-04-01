<form action="{{ url('/mantenimientoCien/'.$datoId ) }}" method="post">
    @csrf
    {{ method_field('PATCH') }}
    @include('cartaMantenimientoCien.form', ['modo'=>'Guardar cambios']);
</form>