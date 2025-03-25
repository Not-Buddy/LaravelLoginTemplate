<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auth Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<!-- Background Container -->
<body class="flex items-center justify-center min-h-screen bg-cover bg-center relative" style="background-image: url('/images/Sora.png');">
    
    <!-- Background Overlay (Fades the background for better readability) -->
    <div class="absolute inset-0 bg-black/40 bg-gradient-to-t from-black to-transparent z-0"></div>

    <!-- Main Authentication Container -->
    <div class="relative z-10 w-full max-w-md p-6 bg-white rounded-lg shadow-lg">
        
        @auth
            <!-- Logged-in Message -->
            <p class="text-center text-lg font-semibold text-green-600">Congrats, you are logged in.</p>

            <!-- Logout Form -->
            <form action="/logout" method="POST" class="mt-4 text-center">
                @csrf 
                <button class="w-full px-4 py-2 text-white bg-red-500 rounded-lg hover:bg-red-600">Log out</button>
            </form>
        @else
            <!-- Welcome Message -->
            <h1 class="text-2xl font-bold text-center text-gray-800">Welcome</h1>

            <!-- Registration Form Container -->
            <div class="mt-6">
                <h2 class="text-lg font-semibold text-gray-700">Register</h2>
                <form action="/register" method="POST" class="mt-2 space-y-3">
                    @csrf
                    <input name="name" type="text" placeholder="Name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                    <input name="email" type="text" placeholder="Email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                    <input name="password" type="password" placeholder="Password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                    <button class="w-full px-4 py-2 text-white bg-blue-500 rounded-lg hover:bg-blue-600">Register</button>
                </form>
            </div>
            <!-- End Registration Form -->

            <!-- Login Form Container -->
            <div class="mt-6">
                <h2 class="text-lg font-semibold text-gray-700">Login</h2>
                <form action="/login" method="POST" class="mt-2 space-y-3">
                    @csrf
                    <input name="loginname" type="text" placeholder="Name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                    <input name="loginpassword" type="password" placeholder="Password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                    <button class="w-full px-4 py-2 text-white bg-green-500 rounded-lg hover:bg-green-600">Log in</button>
                </form>
            </div>
            <!-- End Login Form -->
        @endauth

    </div> 
    <!-- End Main Authentication Container -->

</body>
</html>
