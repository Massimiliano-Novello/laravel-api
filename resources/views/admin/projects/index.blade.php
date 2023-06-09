@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Tutti i progetti</h1>
        <a class="btn btn-primary" href="{{route('admin.projects.create')}}">Aggiungi un nuovo progetto</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <th>{{ $project->id }}</th>
                        <td>{{ $project->titolo }}</td>
                        <td>{{ $project->type?->nome }}</td>
                        <td>{{ $project->slug }}</td>
                        <td>
                            <a class="btn btn-success" href="{{ route('admin.projects.show', $project->slug) }}">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                            <a class="btn btn-warning" href="{{ route('admin.projects.edit', $project->slug) }}">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <form action="{{route('admin.projects.destroy', $project->slug)}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
