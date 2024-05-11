{{-- resources/views/jobs/index.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Stellenangebote</h1>
    <div class="row mb-3">
        <div class="col-md-4">
            <a href="{{ route('jobs.index', ['type' => 'full-time']) }}" class="btn btn-primary">Vollzeit</a>
            <a href="{{ route('jobs.index', ['type' => 'part-time']) }}" class="btn btn-secondary">Teilzeit</a>
        </div>
        <div class="col-md-8">
            <form action="{{ route('jobs.index') }}" method="GET" class="form-inline">
                <input type="text" name="search" class="form-control mr-2" placeholder="Stelle suchen" aria-label="Job suchen">
                <br>
                <button type="submit" class="btn btn-success">Suchen</button>
            </form>
        </div>
    </div>
    <div class="list-group">
        @forelse ($jobs as $job)
            <a href="#" class="list-group-item list-group-item-action">
                <h5 class="mb-1">{{ $job->title }}</h5>
                <p class="mb-1">{{ $job->description }}</p>
            </a>
        @empty
            <p>Keine Stellen gefunden.</p>
        @endforelse
    </div>
</div>
@endsection

