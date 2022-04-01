<form action="{{ url('/mantenimientoCientoCincuenta') }}" method="post">
    @csrf
    @include('cartaMantenimientoCientoCincuenta.form', ['modo'=>'Registrar']);
</form>
