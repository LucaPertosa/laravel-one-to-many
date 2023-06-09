@extends('layouts.admin')

@section('content')
    <div class="mb-4">
        <a class="btn btn-primary" href="{{ url()->previous() }}">Torna indietro</a>
    </div>
    <h1 class="text-center mt-3">{{ $type->name }}</h1>
    <div class="d-md-flex justify-content-between">
        @if ($type)
            <h6 class="text-muted">{{ $type->name }}</h6>
        @else
            <h6 class="text-muted">Nessuna tipologia assegnata</h6>
        @endif
        <h6 class="text-md-end text-muted">{{ $type->slug }}</h6>
    </div>

    <ul>
        @forelse ($type->projects as $project)
            <li>
                <a href="{{ route('admin.projects.show', $project->slug) }}">
                    {{ $project->title }}
                </a>
            </li>
        @empty
            <li>Nessun progetto collegato a questa tipologia</li>
        @endforelse
    </ul>
@endsection