<form action="{{ url('/servicio') }}" method="post">
    @csrf
    @include('registroServicio.form', ['modo'=>'Registrar']);
</form>
