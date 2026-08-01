<!DOCTYPE html>
<html lang="id">
<head>
    <link rel="icon" type="image/png" href="{{ asset('captureit_logo_v2.png') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CaptureIt</title>

    {{-- Tailwind Using CDN--}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#F3FAFC', 100: '#E3F3F8', 200: '#C3E6EF',
                            300: '#9DD5E4', 400: '#6DBCD3', 500: '#4A9FBD',
                            600: '#357D99', 700: '#295F76',
                        },
                        sunshine: {
                            50: '#FFFBF0', 100: '#FFF3D6', 200: '#FEE7A8',
                            300: '#FDDB79', 400: '#F4B942', 500: '#FFC93C', 600: '#E0A61C',
                        },
                        coral: {
                            50: '#FFF4EF', 100: '#FFE3D6', 200: '#FFC7AE',
                            300: '#FFA37E', 400: '#FF8C61', 500: '#F76A46', 600: '#DD4F2C',
                        },
                        sky: {
                            50: '#EFFCFB', 100: '#D3F5F1', 200: '#A9EBE3',
                            300: '#7AD9CF', 400: '#4ECDC4', 500: '#3BB8AC', 600: '#2F9A8F',
                        },
                        cream: '#FFF8F0',
                        charcoal: '#2D2A26',
                    }
                }
            }
        }
    </script>

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    {{-- Custom stylesheet: the handful of things Tailwind utilities don't cover cleanly --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="water-bg water-glints min-h-screen text-charcoal">

    {{--DECORATIVE ACCENTS--}}
    {{-- fixed + pointer-events-none for backside as not disturb--}}
    <div class="fixed -top-24 -left-24 w-[300px] h-[300px] rounded-full bg-sunshine-200 opacity-30 blur-[110px] pointer-events-none z-0"></div>
    <div class="fixed bottom-0 right-0 w-[320px] h-[320px] rounded-full bg-sky-200 opacity-30 blur-[110px] pointer-events-none z-0"></div>
    <div class="hidden lg:block fixed top-1/3 left-10 text-sunshine-400 text-3xl opacity-70 animate-float pointer-events-none z-0">✦</div>
    <div class="hidden lg:block fixed bottom-24 right-16 text-sky-400 text-2xl opacity-70 animate-float pointer-events-none z-0">✧</div>

    @auth
    <nav class="sticky top-0 z-30 bg-white/70 backdrop-blur-lg border-b border-primary-100">
        <div class="max-w-5xl mx-auto flex items-center justify-between px-6 py-4">
            <a href="{{ route('posts.index') }}" class="flex flex-col leading-none">
                <span class="title-font text-2xl text-primary-500">CaptureIt</span>
                <span class="text-[10px] text-primary-400 tracking-widest">CAPTURE • SHARE • REMEMBER</span>
            </a>

            <div class="flex items-center gap-4">
                <a href="{{ route('posts.create') }}"
                   class="flex items-center gap-1.5 px-4 py-2 rounded-full bg-gradient-to-r from-sunshine-400 to-coral-500 text-white text-sm font-medium shadow-md shadow-coral-200 hover:from-sunshine-500 hover:to-coral-600 hover:scale-105 transition duration-300">
                    <span>📸</span> Capture
                </a>

                <div class="flex items-center gap-2 pl-3 border-l border-primary-100">
                    <div class="w-8 h-8 rounded-full bg-gradient-to-br from-coral-400 to-sunshine-400 flex items-center justify-center text-white text-xs font-semibold">
                        {{ strtoupper(substr(auth()->user()->username, 0, 1)) }}
                    </div>
                    <span class="text-sm text-charcoal/70 font-medium">{{ auth()->user()->username }}</span>
                </div>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="text-sm text-gray-400 hover:text-coral-500 transition">Logout</button>
                </form>
            </div>
        </div>
    </nav>
    @endauth

    <main class="relative z-10 max-w-2xl mx-auto px-4 py-8">
        @if (session('status'))
            <div class="mb-5 flex items-center gap-2 rounded-2xl bg-sky-100 text-sky-600 border border-sky-200 px-4 py-3 text-sm font-medium shadow-sm">
                <span>☀️</span> {{ session('status') }}
            </div>
        @endif

        {{ $slot ?? '' }}
        @yield('content')
    </main>
</body>
</html>
