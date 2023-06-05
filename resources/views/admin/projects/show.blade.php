@extends('layouts.admin')

@section('content')
    <h1>{{ $projects->titolo }}</h1>
    <p>{{ $projects->descrizione }}</p>
@endsection