<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/png" href="{{ asset('captureit_logo_v2.png') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CaptureIt</title>

    {{-- Tailwind --}}
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#F3FAFC',
                            100: '#E3F3F8',
                            200: '#C3E6EF',
                            300: '#9DD5E4',
                            400: '#6DBCD3',
                            500: '#4A9FBD',
                            600: '#357D99',
                            700: '#295F76',
                        },
                        sunshine: {
                            50: '#FFFBF0',
                            100: '#FFF3D6',
                            200: '#FEE7A8',
                            300: '#FDDB79',
                            400: '#F4B942',
                            500: '#FFC93C',
                            600: '#E0A61C',
                        },
                        coral: {
                            50: '#FFF4EF',
                            100: '#FFE3D6',
                            200: '#FFC7AE',
                            300: '#FFA37E',
                            400: '#FF8C61',
                            500: '#F76A46',
                            600: '#DD4F2C',
                        },
                        sky: {
                            50: '#EFFCFB',
                            100: '#D3F5F1',
                            200: '#A9EBE3',
                            300: '#7AD9CF',
                            400: '#4ECDC4',
                            500: '#3BB8AC',
                            600: '#2F9A8F',
                        },
                        charcoal: '#2D2A26',
                    }
                }
            }
        }
    </script>

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    {{-- Custom stylesheet--}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body
class="relative
min-h-screen
water-bg
water-glints">

<!--BACKGROUND BLOBS-->

<div class="absolute -top-36 -left-36 w-[420px] h-[420px] rounded-full bg-primary-200 opacity-35 blur-[120px]"></div>
<div class="absolute top-32 right-0 w-[340px] h-[340px] rounded-full bg-coral-200 opacity-40 blur-[100px]"></div>
<div class="absolute bottom-0 left-1/3 w-[300px] h-[300px] rounded-full bg-primary-100 opacity-40 blur-[100px]"></div>
<div class="absolute bottom-20 right-32 w-[240px] h-[240px] rounded-full bg-sky-200 opacity-30 blur-[80px]"></div>

<!--NAVBAR-->

<nav class="w-full py-6">
<div class="max-w-7xl mx-auto px-10">
<div class="flex items-center justify-between">

<!-- Logo -->

<div>
    <h1 class="title-font text-4xl text-primary-500">
        CaptureIt
    </h1>
    <p class="text-xs text-primary-500 mt-1 tracking-widest">

        Capture • Share • Remember

    </p>

</div>

<!-- Menu -->

<div class="flex items-center gap-10">
    <a href="#"
        class="text-primary-500 font-medium hover:text-primary-700 transition">

        Home

    </a>

    <a href="#"
        class="text-gray-600 hover:text-primary-500 transition">

        Features

    </a>

    <a href="#"
        class="text-gray-600 hover:text-primary-500 transition">

        About

    </a>

</div>

<!-- Button -->

<div class="flex items-center gap-4">

    <a
        href="{{ route('login') }}"
        class="px-6 py-2 rounded-full
        border border-primary-300
        text-primary-500
        hover:bg-primary-50
        transition">

        Login

    </a>

    <a
        href="{{ route('register') }}"
        class="px-7 py-2 rounded-full
        bg-gradient-to-r
        from-sunshine-400
        to-coral-500
        text-white
        shadow-lg
        shadow-coral-200
        hover:from-sunshine-500
        hover:to-coral-600
        transition">

        Register

    </a>

</div>

</div>

</div>

</nav>

<!--DECORATION EMOJI-->

<div class="absolute top-16 left-20 rotate-12 opacity-70">
    <div class="bg-primary-300 w-14 h-14 rounded-full blur-xl"></div>
        <div class="absolute top-3 left-3 text-5xl">

            📸

        </div>

    </div>

<div class="absolute top-44 right-24">

<div class="bg-white rounded-full w-24 h-24 shadow-xl flex items-center justify-center text-6xl">

    ☀️

</div>

</div>

<div class="absolute left-1/2 top-28 text-sunshine-500 text-5xl animate-pulse">
    ✦
</div>


<div class="absolute right-1/4 bottom-28 text-sky-500 text-4xl animate-pulse">
    ✧
</div>


<div class="absolute left-8 bottom-35 text-primary-500 text-3xl animate-pulse">
    ✦
</div>

<!-- <div class="absolute left-8 bottom-35 text-primary-500 text-3xl animate-pulse">
✦
</div> -->

<div
    class="absolute
    bottom-36
    right-20
    text-6xl
    opacity-20">
    🧭
</div>


<section class="relative">

<div class="max-w-7xl mx-auto px-10 py-16">

<div class="grid grid-cols-2 gap-12 items-center">

    <div>

        <span class="inline-block px-5 py-2 rounded-full bg-sunshine-100 text-sunshine-600 text-sm font-medium shadow-sm">

            ☀️ Perfect Corner for Every New Adventure

        </span>

        <h1 class="title-font text-7xl text-primary-500 mt-8 leading-tight">

            CaptureIt
            <br>
            Yours

        </h1>

        <p class="mt-8 text-lg leading-9 text-gray-600 max-w-xl">

            Every new hobby, every random adventure,
            every spontaneous idea, and every unforgettable moment
            deserves a place to be remembered.

            <br><br>

            You! Yes you. CaptureIt is more than just a social media platform —
            it's your personal diary to capture every curiosity, Especially ENFP out there,
            share your cute, silly, fav moments, and share it if you want others know
            Lost of people who's just as excited about life as you are.

        </p>

        <div class="flex items-center gap-5 mt-10">

            <a href="{{ route('register') }}"
               class="px-8 py-4 rounded-full bg-gradient-to-r from-sunshine-400 to-coral-500 text-white shadow-xl shadow-coral-200 hover:from-sunshine-500 hover:to-coral-600 transition duration-300">

                Let's Go Journalling!

            </a>

            <a href="{{ route('login') }}"
               class="px-8 py-4 rounded-full border border-primary-300 text-primary-500 hover:bg-primary-50 transition">

                I already Joined ^^

            </a>

        </div>

        <div class="flex gap-10 mt-14">

            <div>

                <h2 class="text-3xl font-bold text-primary-500">

                    10K+

                </h2>

                <p class="text-gray-500">

                    Memories

                </p>

            </div>

            <div>

                <h2 class="text-3xl font-bold text-primary-500">

                    5K+

                </h2>

                <p class="text-gray-500">

                    Happy Users

                </p>

            </div>

            <div>

                <h2 class="text-3xl font-bold text-primary-500">

                    24/7

                </h2>

                <p class="text-gray-500">

                    Positive Vibes

                </p>

            </div>

        </div>

    </div>

    <!-- RIGHT -->

    <div class="relative flex justify-center">

        <!-- Glow -->

        <div class="absolute w-96 h-96 rounded-full bg-primary-200 blur-3xl opacity-40">

        </div>

        <!-- Phone -->

        <div class="relative bg-white rounded-[40px] border-8 border-primary-200 shadow-2xl w-[340px] h-[650px] overflow-hidden">

            <!-- Header -->

            <div class="bg-primary-100 h-16 flex items-center justify-center">

                <h3 class="title-font text-2xl text-primary-500">

                    CaptureIt as Your Diary

                </h3>

            </div>

            <!-- Fake Story -->

            <div class="flex gap-4 px-5 py-4">

                <div class="w-14 h-14 rounded-full bg-primary-300"></div>

                <div class="w-14 h-14 rounded-full bg-sunshine-400"></div>

                <div class="w-14 h-14 rounded-full bg-primary-500"></div>

                <div class="w-14 h-14 rounded-full bg-sky-400"></div>

            </div>

            <!-- Fake Post -->

            <div class="px-5">

                <div class="bg-primary-50 rounded-3xl p-4">

                    <div class="w-full h-72 rounded-2xl bg-gradient-to-br from-primary-200 to-sunshine-300 flex items-center justify-center text-8xl">

                        🏺

                    </div>

                    <h3 class="mt-4 font-semibold text-primary-500">

                        First time Pottery
                        <div class="flex items-center gap-2 mt-3">

<div class="w-8 h-8 rounded-full bg-sky-400"></div>

<div>

<p class="text-xs font-semibold text-primary-500">

Rapunzel

</p>

<p class="text-[10px] text-gray-400">

2 minutes ago

</p>

</div>

</div>

                    </h3>

                    <p class="text-gray-500 text-sm mt-2">

                        Obsessed with this experience, I'll give 10/10 for Meee XD

                    </p>

                    <div class="flex gap-5 mt-5 text-xl">

                        ❤️

                        💬

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

</div>

</section>

<!-- ================= FEATURES ================= -->

<section class="py-15">
    <div
        class="absolute
        left-24
        mt-20
        w-60
        h-60
        rounded-full
        bg-primary-100
        opacity-40
        blur-[90px]">

    </div>

<div
    class="absolute
    right-24
    mt-72
    w-72
    h-72
    rounded-full
    bg-coral-100
    opacity-40
    blur-[90px]">

</div>

<div class="max-w-7xl mx-auto px-10">

    <div class="text-center">

        <span
        class="px-5 py-2 rounded-full bg-primary-100 text-primary-500 font-medium">

            Why You'll Love CaptureIt??

        </span>

        <h2
        class="title-font text-5xl text-primary-500 mt-6">

            Every Moment Deserves
            <br>
            Memories

        </h2>

        <p
        class="max-w-2xl mx-auto mt-6 text-gray-500 leading-8">

            Designed to help you journaling memories,
            And share it maybe? Your Choice
            Create your own digital diary with peace

        </p>

    </div>

    <!-- Cards -->

    <div class="grid grid-cols-2 gap-8 mt-20">
    <!-- CARD 1 -->
     <div
    class="bg-white/70 backdrop-blur-lg rounded-[30px]
    p-10 shadow-xl hover:-translate-y-3
hover:shadow-2xl
    transition duration-500 border border-primary-100">

    <div
    class="w-20 h-20 rounded-3xl
    bg-primary-100
    flex items-center justify-center
    text-4xl">

    📸

    </div>

    <h3
    class="mt-8 text-2xl font-semibold text-primary-500">

    Capture Moments

    </h3>

    <p
    class="mt-4 text-gray-500 leading-8">

    Save your cute, funny, silly, fav memories

    </p>

    </div>

    <!-- CARD 2 -->
    <div
    class="bg-white/70 backdrop-blur-lg rounded-[30px]
    p-10 shadow-xl hover:-translate-y-3
hover:shadow-2xl
    transition duration-500 border border-primary-100">

    <div
    class="w-20 h-20 rounded-3xl
    bg-coral-100
    flex items-center justify-center
    text-4xl">

    ❤️

    </div>

    <h3
    class="mt-8 text-2xl font-semibold text-primary-500">

    Spread Love to other's posts

    </h3>

    <p
    class="mt-4 text-gray-500 leading-8">

    Like inspiring stories and show appreciation
    to people who brighten your day.

    </p>

    </div>

    <!-- CARD 3 -->
     <div
    class="bg-white/70 backdrop-blur-lg rounded-[30px]
    p-10 shadow-xl hover:-translate-y-3
hover:shadow-2xl
    transition duration-500 border border-primary-100">

    <div
    class="w-20 h-20 rounded-3xl
    bg-sky-100
    flex items-center justify-center
    text-4xl">

    💬

    </div>

    <h3
    class="mt-8 text-2xl font-semibold text-primary-500">

    Comments

    </h3>

    <p
    class="mt-4 text-gray-500 leading-8">

    Apreciation and Connect with people same hobby?
    Yes for sure

    </p>

    </div>

    <!-- CARD 3 -->
     <div
    class="bg-white/70 backdrop-blur-lg rounded-[30px]
    p-10 shadow-xl hover:-translate-y-3
hover:shadow-2xl
    transition duration-500 border border-primary-100">

    <div
    class="w-20 h-20 rounded-3xl
    bg-coral-100
    flex items-center justify-center
    text-4xl">

    🔒

    </div>

    <h3
    class="mt-8 text-2xl font-semibold text-primary-500">

    Safe & Secure

    </h3>

    <p
    class="mt-4 text-gray-500 leading-8">

    Your account is protected with authentication,
    ensuring only you can manage your memories.
    Others can see your memories only if you share it to public

    </p>

    </div>

        </div>

</div>

<!-- ================= CTA SECTION ================= -->

<section class="py-28 relative">

    <!-- Background Blur -->

    <div class="absolute left-32 top-10 w-72 h-72 rounded-full bg-primary-100 blur-[120px] opacity-40"></div>
    <div class="absolute right-24 bottom-0 w-96 h-96 rounded-full bg-coral-100 blur-[140px] opacity-40"></div>
    <div class="max-w-6xl mx-auto px-10">

        <div
        class="rounded-[45px]
        bg-white/70
        backdrop-blur-xl
        border border-primary-100
        shadow-2xl
        p-16
        relative
        overflow-hidden">

            <!-- Decorative Circle -->

            <div
            class="absolute
            -right-16
            -top-16
            w-64
            h-64
            rounded-full
            bg-primary-200
            opacity-30">

            </div>

            <div
            class="absolute
            -left-10
            bottom-0
            w-52
            h-52
            rounded-full
            bg-coral-100
            opacity-40">

            </div>

            <div class="text-center relative">

                <span
                class="inline-block
                px-5
                py-2
                rounded-full
                bg-sunshine-100
                text-sunshine-600
                font-medium">

                    ☀️ Join Our Curious Adventurer Community

                </span>

                <h2
                class="title-font
                text-6xl
                text-primary-500
                mt-8">

                    Ready for Your Next Adventure?

                </h2>

                <p
                class="mt-8
                text-gray-500
                text-lg
                leading-9
                max-w-3xl
                mx-auto">

                    Every moment tells a story.

                    Share your latest obsession,
                    inspire other curious minds,
                    and build your own colorful corner
                    of adventures inside CaptureIt.

                </p>

            </div>
    <div class="grid grid-cols-3 gap-10 mt-16 text-center">

    <div>

        <h2 class="text-5xl font-bold text-primary-500">

            10K+

        </h2>

        <p class="mt-3 text-gray-500">

            Curious Users

        </p>

    </div>

    <div>

        <h2 class="text-5xl font-bold text-primary-500">

            50K+

        </h2>

        <p class="mt-3 text-gray-500">

            Memories

        </p>

    </div>

    <div>

        <h2 class="text-5xl font-bold text-primary-500">

            300K+

        </h2>

        <p class="mt-3 text-gray-500">

            Hearts Apreciation

        </p>

    </div>

    <div class="mt-16 text-center">

    <a
    href="{{ route('register') }}"
    class="inline-block
    px-12
    py-5
    rounded-full
    bg-gradient-to-r
    from-sunshine-400
    to-coral-500
    text-white
    text-lg
    font-medium
    shadow-xl
    shadow-coral-200
    hover:from-sunshine-500
    hover:to-coral-600
    hover:scale-105
    transition
    duration-300">

        Create My Account

    </a>

</div>
</div>
</div>
</div>

</section>

<!-- ================= FOOTER ================= -->

<footer class="relative py-5">

    <!-- Background Decoration -->

    <div class="absolute left-16 top-8 w-40 h-40 rounded-full bg-primary-100 opacity-40 blur-[80px]"></div>

    <div class="absolute right-20 bottom-10 w-48 h-48 rounded-full bg-coral-100 opacity-40 blur-[90px]"></div>

    <div class="max-w-7xl mx-auto px-10">

        <div class="grid grid-cols-3 gap-16">

            <!-- Logo -->

            <div>

                <h2 class="title-font text-5xl text-primary-500">

                    CaptureIt

                </h2>

                <p class="mt-6 leading-8 text-gray-500">

                    A sunny perfect corner to collect every adventure,
                    share your latest curiosity,
                    and connect with people who spread
                    good vibes every day.

                </p>

                <p class="mt-8 italic text-primary-500">

                    "Every moment tells a story, Deserve to be Memory"

                </p>

            </div>

            <!-- Quick Links -->

            <div>

                <h3 class="text-xl font-semibold text-primary-500">

                    Quick Links

                </h3>

                <ul class="space-y-4 mt-8 text-gray-500">

                    <li>
                        <a href="#" class="hover:text-primary-500 transition">
                            Home
                        </a>
                    </li>

                    <li>
                        <a href="#" class="hover:text-primary-500 transition">
                            Features
                        </a>
                    </li>

                    <li>
                        <a href="#" class="hover:text-primary-500 transition">
                            About
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('login') }}" class="hover:text-primary-500 transition">
                            Login
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('register') }}" class="hover:text-primary-500 transition">
                            Register
                        </a>
                    </li>

                </ul>

            </div>

            <!-- Contact -->

            <div>

                <h3 class="text-xl font-semibold text-primary-500">

                    Connect With Us

                </h3>

                <div class="space-y-5 mt-8">

                    <div class="flex items-center gap-4">

                        <div class="w-12 h-12 rounded-full bg-primary-100 flex items-center justify-center">

                            💻

                        </div>

                        <span class="text-gray-500">

                            GitHub

                        </span>

                    </div>

                </div>

            </div>

        </div>

        <!-- Divider -->

        <div class="border-t border-primary-100 mt-16 pt-8">

            <div class="flex justify-between items-center">

                <p class="text-gray-400">

                    © 2026 CaptureIt. All Rights Reserved.

                </p>

                <p class="text-primary-500">

                    Made with ❤ using Laravel

                </p>

</footer>

</body>

</html>