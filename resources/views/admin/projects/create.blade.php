@extends('layouts.admin')

@section('content')
    <form action="{{route('admin.projects.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="titolo" value="{{ old('title') }}">
        </div>

        <label for="type">Seleziona il tipo</label>
        <select class="form-select" id="type" aria-label="Default select example" name="type_id">
            <option selected value=""></option>
            @foreach ($types as $type)
            <option @selected(old('type_id') == $type->id) value="{{$type->id}}">{{ $type->nome }}</option>
            @endforeach
        </select>

        <div class="mb-3">
            <label for="content" class="form-label">Descrizione</label>
            <textarea class="form-control" id="content" rows="3" name="descrizione" value="{{ old('content') }}"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Aggiungi</button>
    </form>
@endsection
