@extends('layouts.admin')

@section('content')
    <form action="{{route('admin.projects.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Descrizione</label>
            <textarea class="form-control" id="content" rows="3" name="content" value="{{ old('content') }}"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Aggiungi</button>
    </form>
@endsection
