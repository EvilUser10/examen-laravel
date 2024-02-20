@extends('master')

@section('content')
@isset($artists)
    <h1>Artistas</h1>
    @foreach ($artists as $artists => $artist)
        <table>
            <thead>
                <th>ID</th>
                <th>Nombre</th>
                <th>Numero de albumes</th>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $artist->id }}</td>
                    <td>{{ $artist->name }}</td>
                    <td>{{ sizeof($artist->album) }}</td>
                </tr>
            </tbody>
        </table>
    @endforeach
@endisset
@endsection
