<h1>
    Agregar un libro
    <a href="{{ route('libros.index')}}">volver</a>
</h1>
@include('partials.error')
<form method="POST" action="{{ route('libros.store')}}">
    @csrf
    TITULO: <input type = "text" name = "titulo"/><br/>
    AUTOR: <input type = "text" name = "autor"/><br/>
    <input type = "radio" name = "disponibilidad" value ="Disponible"/>DIPONIBLE?
    <button type = "submit">Guardar</button>
</form>
