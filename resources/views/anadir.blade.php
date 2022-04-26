@extends('plantilla')
@section('titulo')
    añadir
@endsection

@section('content')
    <h2>Añadir casals</h2>
    <form action="{{route('anadircasal')}}" method="post">
        @csrf
        <label for="nom">Nom
            <input type="text" name="nom">
        </label><br>
        <label for="data_inici">Data inici
            <input type="date" name="data_inici">
        </label><br>
        <label for="data_final">Data final
            <input type="date" name="data_final">
        </label><br>
        <label for="n_places">Numero de places
            <input type="number" name="n_places">
        </label><br>
        <label for="">Ciutat</label>
        <select name="id_ciutat" id="">
            @foreach ($todos as $todo)
            <option value="{{$todo->id}}">{{$todo->nom}}</option>
            @endforeach
        </select><br>
        <input type="submit" value="Crear casal">
    </form>
@endsection