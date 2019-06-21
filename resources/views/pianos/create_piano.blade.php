@extends('layouts.template')

@section('content')
    <h1> Ajouter ici votre piano favoris</h1>
    <form method="POST" action="{{route('store')}}" style="width:50%; margin:auto; display:grid">
        @csrf
        <div class="form-group">
            <label for="exampleInputName">Nom</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">

        </div>
        <div class="form-group">
            <label for="exampleInputGenre">Genre</label>
            <select name="genre_id">
                @foreach($genres as $genre)
                    <option value="{{$genre->id}}">{{$genre->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputDescription">Description</label>
            <input type="text" class="form-control" id="exampleInputDescription" aria-describedby="description Help" name="description">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection