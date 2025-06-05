<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Users Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top shadow">
            <div class="container">
                <a class="navbar-brand fw-bold" href="{{ url('/') }}">
                    <i class="bi bi-people-fill me-2"></i>Users Dashboard
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
                    aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                    <div class="form-check form-switch ms-auto">
                        <input class="form-check-input" type="checkbox" id="darkModeToggle">
                        <label class="form-check-label" for="darkModeToggle">
                            <i class="bi bi-moon-fill"></i> Modo Escuro
                        </label>
                    </div>
            </div>
        </nav>
    </header>

    <main class="pt-5 mt-4">
        @yield('content')
    </main>

    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</body>
</html>
