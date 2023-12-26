<h1>
    Lista de libros
    <a href="{{ route('libros.create')}}">Nuevo libro</a>
</h1>

@include('partials.info')
<table border = "1" >
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Fecha</th>
            <th>Operaciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($libro as $libros)
            <tr>
                <td>{{$libros->titulo}}</td>
                <td>{{$libros->autor}}</td>
                <td>{{$libros->disponibilidad}}</td>
                <td>
                    <a title="ver" href="{{route('libros.show',$libros)}}">
                        ver 
                    </a>
                    <a title="editar" href="{{route('libros.edit',$libros)}}">
                        editar
                    </a>

                    <form method="POST" action ="{{route('libros.destroy',$libros)}}">
                        @csrf
                        @method('DELETE')
                        <button type = "subimt">ELIMINAR</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Fecha</th>
            <th>Operaciones</th>
             

        </tr>
    </tfoot>
</table>