<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Name - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
        .home-button {
            display: inline-block;
            padding: 15px 30px;
            margin: 5px;
            font-size: 18px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            outline: none;
            color: #fff;
            background-color: #89CFF0;
            border: none;
            border-radius: 15px;
            box-shadow: 0 9px #76B4D0;
            transition: all 0.3s ease; 
        }

        .home-button:hover {
            background-color: #6CB7E0;
            box-shadow: 0 7x #5A9FBF;
        }

        .home-button:active {
            background-color: #549DBD;
            box-shadow: 0 5px #487E99;
            transform: translateY(4px);
        }
    </style>
<body>
    @include('partials.navbar')

    <main class="py-4">
        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
