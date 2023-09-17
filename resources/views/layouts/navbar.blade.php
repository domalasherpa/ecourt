<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Law Firm</title>
    <!-- Include the Tailwind CSS stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
    <!-- Font Awesome Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha384-" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-gray-100">
    <!-- Header Section -->
    <header class="bg-blue-900 text-white py-0" style="padding-left: 200px; padding-right: 200px;">
        <div class="container mx-auto flex justify-between items-center">
            <div class="">
                <img src="{{url('imgs/logo_white.png')}}" alt="Logo" height="65px" width="65px">
            </div>
            <nav class="space-x-4">
                <a href="{{ url('home') }}" class="hover:text-gray-300">Home</a>
                <a href="{{ url('attorneys') }}" class="hover:text-gray-300">Attorneys</a>
                <a href="#" class="hover:text-gray-300">Contact</a>
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="hover:text-gray-300">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="hover:text-gray-300">Register</a>
                    @endif
                @endauth
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
        {{ $slot }}
    </main>

    <!-- Footer Section -->
    <footer class="bg-gray-900 text-white py-6">
        <div class="container mx-auto text-center">
            <p>&copy; 2023 Law Firm. All rights reserved.</p>
        </div>
    </footer>

</body>

</html>
