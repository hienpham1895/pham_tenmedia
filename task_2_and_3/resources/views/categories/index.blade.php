{{-- resources/views/categories/index.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Kategorien</h1>
    <br>
    <div class="row">
        <div class="col-md-12">
            <h2>Branche</h2>
            <ul class="list-group">
                <li class="list-group-item"><a href="{{ route('categories.show', ['category' => 'fachinformatik']) }}">Fachinformatik</a></li>
                <li class="list-group-item"><a href="{{ route('categories.show', ['category' => 'verkauf']) }}">Verkauf</a></li>
                <li class="list-group-item"><a href="{{ route('categories.show', ['category' => 'kundenberatung']) }}">Kundenberatung</a></li>
            </ul>
        </div>
    </div>
</div>
@endsection

