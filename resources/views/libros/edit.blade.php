<h1>
    Editar un ticket
    <a href="{{ route('libros.index')}}">volver</a>
</h1>

<form method="POST" action="{{route ('libros.update',$libro)}}">    
    @csrf
    @method('PUT')
    ID: <input type = "text" value="{{$libro -> id }}"disabled/><br/>
    Titulo: <input type = "text" name = "titulo" value="{{$libro -> titulo }}"/><br/>
    Autor: <input type = "text" name = "autor" value="{{$libro -> autor }}"/><br/>

    <button type="submit">Actualizar</button>
    
</form>