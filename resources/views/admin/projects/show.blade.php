@extends('layouts.admin')

@section('content')
    <h1>{{ $projects->titolo }}</h1>
    <h4>{{ $projects->type?->nome }}</h4>
    <p>{{ $projects->descrizione }}</p>
@endsection