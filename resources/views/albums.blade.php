@extends('master')

@section('content')
    @isset($albums)
        <h1>Artistas</h1>
        <h2>Numero de albumes: {{sizeof($albums)}}</h2>
        @foreach ($albums as $albums => $album)
            <table>
                <thead>
                    <th>Nombre Album</th>
                    <th>Año Lanzamiento</th>
                    <th>Nombre Artista</th>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $album->name }}</td>
                        <td>{{ $album->year }}</td>
                        <td>{{ $album->artist->name }}</td>
                        <td><a href={{ route('albums.show', $album->artist_id)}}>Canciones</a></td>
                    </tr>
                </tbody>
            </table>
        @endforeach
    @endisset
@endsection
