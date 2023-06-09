@extends('layouts.admin')

@section('content')
    <h1>{{ $projects->titolo }}</h1>
    <h4>{{ $projects->type?->nome }}</h4>
    <p>{{ $projects->descrizione }}</p>

    <div>
        <h5>Tecnologie usate</h5>
        
        @forelse ($projects->technologies as $technology)
            <p>{{ $technology->nome }}</p>
        @empty
            <p>nessuna tecnologia</p>
        @endforelse
    </div>
@endsection