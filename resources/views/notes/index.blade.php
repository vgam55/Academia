<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Listado de notas</title>
</head>
<body>
    <table>
        <thead>
            <th>ID</th>
            <th>Título</th>
            <th>Acción</th>
        </thead>
        <tbody>
            @foreach ($notes as $note)
                <tr>
                    <td>{{ $note->id }}</td>
                    <td>{{ $note->title }}</td>
                    <td>
                        @can('destroy_notes')
                         
                            <a href="{{url ('/notes/'.$note->id.'/destroy')}}">Eliminar nota</a>
                        @else
                            Usted no puede eliminar esta nota
                        @endcan
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
       <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit" title="Salir">Salir</button>
            </form>
</body>
</html>