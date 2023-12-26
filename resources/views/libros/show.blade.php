<h1>
    ver un libro
    <a href="{{ route('libros.index')}}">volver</a>
</h1>
@include('partials.error')
<form >
    ID: <input type = "text" value="{{$libro -> id }}"/><br/>
    TITULO: <input type = "text" value ="{{$libro -> titulo }}"/><br/>
    AUTOR: <input type = "text" value = "{{$libro -> autor}}"/><br/>
    
</form>
