<form action="{{ url('/mantenimientoCincuenta') }}" method="post">
    @csrf
    @include('cartaMantenimientoCincuenta.form', ['modo'=>'Registrar']);
</form>
