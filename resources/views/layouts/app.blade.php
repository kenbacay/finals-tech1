<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'TFA1 POS' }}</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            color: #1f2937;
        }

        nav {
            background: #172554;
            padding: 20px 8%;
            display: flex;
            justify-content: space-between;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
        }

        .brand {
            font-weight: bold;
            font-size: 20px;
        }

        main {
            max-width: 1100px;
            margin: 40px auto;
            padding: 20px;
        }

        .card {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px #00000015;
        }

        h1 {
            color: #172554;
        }

        .button {
            display: inline-block;
            background: #2563eb;
            color: white;
            padding: 12px 18px;
            border-radius: 6px;
            text-decoration: none;
        }

        table {
            width: 100%;
            background: white;
            border-collapse: collapse;
        }

        th, td {
            padding: 15px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            background: #172554;
            color: white;
        }

        footer {
            text-align: center;
            padding: 20px;
            color: #64748b;
        }
    </style>
</head>
<body>

<nav>
    <a class="brand" href="{{ route('home') }}">TFA1 POS</a>

    <div>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('about') }}">About</a>
        <a href="{{ route('customers.index') }}">Customers</a>
        <a href="{{ route('users.index') }}">Users</a>
    </div>
</nav>

<main>
    @yield('content')
</main>

<footer>
    TFA1 POS Laravel Application
</footer>

</body>
</html>