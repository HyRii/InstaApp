<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InstaApp</title>
    {{-- Tailwind lewat CDN supaya tidak perlu setup build tools (npm/vite) --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; }
    </style>
</head>
<body class="bg-gradient-to-b from-pink-50 via-white to-purple-50 min-h-screen">

    @auth
    <nav class="bg-white/80 backdrop-blur border-b border-gray-200 sticky top-0 z-10">
        <div class="max-w-2xl mx-auto flex items-center justify-between px-4 py-3">
            <a href="{{ route('posts.index') }}" class="text-2xl font-bold bg-gradient-to-r from-pink-500 to-purple-600 bg-clip-text text-transparent">
                InstaApp
            </a>
            <div class="flex items-center gap-3">
                <a href="{{ route('posts.create') }}" class="px-3 py-1.5 rounded-full bg-purple-600 text-white text-sm font-medium hover:bg-purple-700 transition">
                    + Post
                </a>
                <span class="text-sm text-gray-600">{{ auth()->user()->username }}</span>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="text-sm text-gray-500 hover:text-red-500 transition">Logout</button>
                </form>
            </div>
        </div>
    </nav>
    @endauth

    <main class="max-w-2xl mx-auto px-4 py-6">
        @if (session('status'))
            <div class="mb-4 rounded-xl bg-green-100 text-green-700 px-4 py-2 text-sm">
                {{ session('status') }}
            </div>
        @endif

        {{ $slot ?? '' }}
        @yield('content')
    </main>
</body>
</html>
