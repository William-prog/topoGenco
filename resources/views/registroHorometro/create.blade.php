<form action="{{ url('/horometro') }}" method="post">
    @csrf
    @include('registroHorometro.form', ['modo'=>'Registrar']);
</form>
