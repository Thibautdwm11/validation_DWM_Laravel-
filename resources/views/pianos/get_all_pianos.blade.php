@extends('layouts.template')
@section ('content')
    <h1>Page concernant la liste des Pianos crées </h1>
    <br>
    <table>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Genre</th>
            <th>Description</th>
            <th>Modifier</th>
            <th>Delete</th>

        </tr>
        @foreach($pianos as $piano)
            <tr>
                <td>####</td>
                <td>{{($piano->name)}}</td>
                <td>{{($piano->genre->name)}}</td>
                <td>{{$piano->description}}</td>
                <td><a href="{{route('edit', $piano->id)}}"><button class="btn btn-primary">Modifier</button></a></td>
                <td>
                    <form method="POST", action="{{route('delete', $piano->id)}}">@csrf
                        <button class="btn btn-primary" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection


