
{{-- resources/views/users/index.blade.php --}}
@extends('layouts.app')

@section('title', 'Benutzerverwaltung')

@section('content')
<div class="container">
    <h1>Benutzerbereich</h1>
    <br><br><br>
    <div class="row">
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <h2 class="card-title">Anmelden</h2>
                    <p class="card-text">Melden Sie sich als Benutzer an.</p>
                    <!-- Beispiel für einen einfachen Button ohne Funktion -->
                    <button class="btn btn-primary">Anmelden</button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <h2 class="card-title">Registrieren</h2>
                    <p class="card-text">Registrieren Sie sich als neuer Benutzer.</p>
                    <!-- Beispiel für einen einfachen Button ohne Funktion -->
                    <button class="btn btn-success">Registrieren</button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <h2 class="card-title">Arbeitgeber-Login</h2>
                    <p class="card-text">Anmelden für Arbeitgeber.</p>
                    <!-- Beispiel für einen einfachen Button ohne Funktion -->
                    <button class="btn btn-info">Arbeitgeber Anmelden</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
