@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Tutti i progetti</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <th>{{ $project->id }}</th>
                        <td>{{ $project->titolo }}</td>
                        <td>{{ $project->slug }}</td>
                        <td>{{ $project->descrizione }}</td>
                        <td>
                            <a class="btn btn-success" href="{{ route('admin.projects.show', $project->slug) }}">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
