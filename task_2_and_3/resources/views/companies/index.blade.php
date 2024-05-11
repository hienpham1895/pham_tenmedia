{{-- resources/views/companies/index.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Unternehmen</h1>
    <br>
    <div class="row mb-3">
        <div class="col-md-4">
            <a href="{{ route('companies.index', ['filter' => 'popular']) }}" class="btn btn-primary">Beliebte Firmen</a>
            <a href="{{ route('companies.index', ['filter' => 'all']) }}" class="btn btn-secondary">Alle Firmen</a>
        </div>
        <div class="col-md-8">
            <form action="{{ route('companies.index') }}" method="GET" class="form-inline">
                <input type="text" name="search" class="form-control mr-2" placeholder="Firma suchen" aria-label="Firma suchen">
                <br>
                <button type="submit" class="btn btn-success">Suchen</button>
            </form>
        </div>
    </div>
    <div class="list-group">
        @forelse ($companies as $company)
            <a href="{{ route('companies.show', $company) }}" class="list-group-item list-group-item-action">
                <h5 class="mb-1">{{ $company->name }}</h5>
                <p class="mb-1">{{ $company->description }}</p>
            </a>
        @empty
            <p>Keine Firmen gefunden.</p>
        @endforelse
    </div>
</div>
@endsection

