<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ url('/') }}">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('jobs.index') }}">Jobs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('companies.index') }}">Company</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('categories.index') }}">Category</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('users.index') }}">User</a>
            </li>
        </ul>
    </div>
</nav>
