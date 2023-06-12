@extends('layouts.admin')

@section('content')
    <form action="{{ route('admin.projects.update', $projects->slug) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="titolo" value="{{ $projects->titolo }}">
            @error('titolo')
                <div class="invalid-feedback d-block">
                    {{ $message }}
                </div>
            @enderror
        </div>


        <div class="mb-3">
            <label for="type">Seleziona il tipo</label>
            <select class="form-select" id="type" aria-label="Default select example" name="type_id">
                <option selected value=""></option>
                @foreach ($types as $type)
                    <option @selected($type->id == old('type_id', $projects->type?->id)) value="{{ $type->id }}">{{ $type->nome }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            @foreach ($technologies as $technology)
                <div class="form-check">
                    <input type="checkbox" id="technology-{{ $technology->id }}" name="technologies[]"
                        class="form-check-input" value="{{ $technology->id }}" @checked($projects->technologies->contains($technology))>
                    <label class="form-check-label" for="technology-{{ $technology->id }}">{{ $technology->nome }}</label>
                </div>
            @endforeach
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Descrizione</label>
            <textarea class="form-control" id="content" rows="3" name="descrizione">{{ $projects->descrizione }}</textarea>
            @error('descrizione')
                <div class="invalid-feedback d-block">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Aggiungi</button>
    </form>
@endsection
