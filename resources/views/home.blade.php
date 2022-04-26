@extends('plantilla')
@section('titulo')
    home
@endsection

@section('content')
<h2>Gestio de casals</h2>
<a href="{{route('crearcasal')}}"><button>Afegir</button></a>
    <table>
        <tr>
            <td>Nom</td>
            <td>Data inici</td>
            <td>data final</td>
            <td>num places</td>
            <td>ciutat</td>
            <td>editar</td>
            <td>eliminar</td>
        </tr>
        
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr> 
       
        
    </table>
@endsection