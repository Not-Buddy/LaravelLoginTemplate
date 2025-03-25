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


        @auth
            @include('logged-in')
        @else
            @include('authentication')
        @endauth

        

</body>
</html>
