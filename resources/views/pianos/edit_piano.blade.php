@extends('layouts.template')

@section('content')
    <div style="display: flex; margin:auto">
        <h1>Vous etes la pour modifier</h1>
    </div>
    <form method="POST" action="{{route('update',$piano->id)}}" style="width:50%; margin:auto; display:grid">
        @csrf
        <div class="form-group">
            <label for="exampleInputName">Nom</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name"placeholder="Entrer nom du livre" value="{{$piano->name}}">

        </div>
        <div class="form-group">
            <label for="exampleInputDescription">Description</label>
            <input type="text" class="form-control" id="exampleInputDescription" aria-describedby="descriptionHelp" name="description" placeholder="decrivez moi ce piano" value="{{$piano->description}}">
        </div>
        <div class="form-group">
            <label for="exampleInputGenre">Genre</label>
            <select name="genre_id">
                @foreach($genres as $genre)
                    <option value="{{$genre->id}}" @if($genre->id == $piano->genre_id)
                    selected
                            @endif>{{$genre->name}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection