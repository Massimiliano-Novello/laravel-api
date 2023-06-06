@extends('layouts.admin')

@section('content')
    <form action="{{route('admin.projects.update', $projects->slug)}}" method="POST">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="titolo" value="{{ $projects->titolo}}">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Descrizione</label>
            <textarea class="form-control" id="content" rows="3" name="descrizione" value="{{ $projects->descrizione}}"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Aggiungi</button>
    </form>
@endsection