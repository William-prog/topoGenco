<form action="{{ url('/mantenimientoCien') }}" method="post">
    @csrf
    @include('cartaMantenimientoCien.form', ['modo'=>'Registrar']);
</form>
