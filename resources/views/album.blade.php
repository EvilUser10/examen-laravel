@extends('master')

@section('content')
    @isset($albums)

        <p></p>
        <h1>Artista: {{$albums[0]->artist->name}}</h1>
        <h2>Numero de canciones: {{sizeof($albums)}}</h2>
        @foreach ($albums as $albums => $album)
            <table>
                <thead>
                    <th>Nombre Album</th>
                    <th>Año Lanzamiento</th>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $album->name }}</td>
                        <td>{{ $album->year }}</td>
                    </tr>
                </tbody>
            </table>
        @endforeach
    @endisset
@endsection
