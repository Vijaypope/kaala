<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/x-icon" href="kaaladp.PNG">
    <title>Kaala</title>
</head>
<body class="flex flex-col items-center justify-center min-h-screen overflow-hidden bg-black">
   <section class="relative w-full h-screen lg:w-[30vw] lg:h-screen bg-[url(kaalasad.png)] bg-cover bg-center overflow-hidden flex flex-col justify-between">
        <!-- Top: Title -->
        <div class="text-center pt-8 px-4 shrink-0">
            <span class="text-6xl sm:text-7xl bg-gradient-to-r from-yellow-400 via-orange-500 to-red-500 bg-clip-text text-transparent font-bold animate-pulse">Login :)</span>
            <p class="text-gray-300 mt-2 text-sm">Login fast, I'm waiting for you!</p>
        </div>
        <!-- Middle: Form -->
        <div class="flex-1 flex items-center justify-center px-6">
            <form action="{{ route('login') }}" class="text-center w-full max-w-xs" method="POST">
                @csrf
                <input
                    name="name"
                    class="w-full border rounded-2xl bg-transparent backdrop-blur-sm border-orange-300 hover:border-orange-500 text-orange-500 px-6 py-2 text-sm mb-4 outline-none focus:border-orange-500"
                    type="text"
                    placeholder="Username"
                ><br>
                <input
                    name="password"
                    class="w-full border rounded-2xl bg-transparent backdrop-blur-sm border-orange-300 hover:border-orange-500 text-orange-500 px-6 py-2 text-sm mb-4 outline-none focus:border-orange-500"
                    type="password"
                    placeholder="Password"
                ><br>
                <button class="rounded-2xl bg-gradient-to-r from-yellow-400 via-orange-500 to-red-500 font-bold hover:scale-105 transition-transform px-10 py-2 mt-2">
                    Login
                </button>
            </form>
        </div>
        <div class="text-center pb-5 shrink-0">
            <div>
                <span class="bg-gradient-to-r from-yellow-400 via-orange-500 to-red-500 bg-clip-text text-transparent text-xs">Copyright © 2026 - All rights reserved.</span>
            </div>
            <div>
                <span class="text-gray-400 text-xs">Designed By - ABUBAKKAR SIDHIK</span>
            </div>
        </div>
   </section>
</body>
</html>
