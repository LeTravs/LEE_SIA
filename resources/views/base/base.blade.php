<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NavigationHTMX</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://unpkg.com/htmx.org@1.9.12"></script>
</head>
<body class="flex h-screen bg-gray-100">
    <div class="w-64 h-full overflow-auto bg-gray-700 text-white flex flex-col">
        <div class="text-center mb-8">
            <img src="https://www.labels-sp.com/wp-content/uploads/2022/11/white-logo-on-transparent.png" alt="Logo" class="mx-auto mb-4 h-30 w-50">
        </div>
        <nav id="main-nav" class="flex flex-col mt-4">
            <a href="/" class="p-3 hover:bg-blue-600 text-center">Home</a>
            <a href="/about" class="p-3 hover:bg-blue-600 text-center">About</a>
            <a href="/products" class="p-3 hover:bg-blue-600 text-center">Products</a>
            <a href="/contact" class="p-3 hover:bg-blue-600 text-center">Contact Us</a>
        </nav>
    </div>
    <div class="flex-1 flex flex-col overflow-auto">
        <section class="flex-1 p-6">
            <article id="content" class="bg-white shadow-md rounded-lg p-6">
                <h1 class="text-3xl font-bold mb-4">@yield('contentTitle')</h1>
                <div class="prose">
                    @yield('content')
                </div>
            </article>
        </section>
        <footer class="text-center text-gray-500 py-3 mt-auto">
            &copy; 2024. All rights reserved.
        </footer>
    </div>
</body>
</html>
