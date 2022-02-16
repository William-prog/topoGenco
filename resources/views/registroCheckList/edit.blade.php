<form action="{{ url('/checkList/'.$datoId ) }}" method="post">
    @csrf
    {{ method_field('PATCH') }}
    @include('registroCheckList.form', ['modo'=>'Guardar cambios']);
</form>