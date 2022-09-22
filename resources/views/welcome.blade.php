<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required minlength="4" maxlength="100" size="10">

            <label for="email">email</label>
            <input type="text" id="email" name="email" required minlength="4" maxlength="100" size="10">

            <input type="tel" id="phone" name="phone" maxlength="14" size="10">

            <input type="text" id="city" name="city" maxlength="100" size="20">

            <input type="text" id="state" name="state" maxlength="2" size="10">

            <input type="submit" value="Enviar">
        </form>
    </div>
</body>

</html>
