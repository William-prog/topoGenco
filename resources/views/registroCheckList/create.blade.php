<form action="{{ url('/checkList') }}" method="post">
    @csrf
    @include('registroCheckList.form', ['modo'=>'Registrar']);
</form>
