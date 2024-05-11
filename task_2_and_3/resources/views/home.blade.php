{{-- resources/views/home.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h1>Willkommen zu unserer Anwendung</h1>
    <br><br><br>
    <div class="link-buttons">
        <a href="{{ route('jobs.index') }}" class="home-button">Jobs</a>
        <a href="{{ route('companies.index') }}" class="home-button">Company</a>
        <a href="{{ route('categories.index') }}" class="home-button">Category</a>
        <a href="{{ route('users.index') }}" class="home-button">User</a>
    </div>
</div>
@endsection

