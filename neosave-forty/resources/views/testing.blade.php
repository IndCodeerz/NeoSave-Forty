<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NeoSave - Get started!</title>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-[rgb(249,243,239)] min-h-screen flex flex-col">
    <!-- Navbar -->
    <nav class="bg-[rgb(27,60,83)] text-[rgb(249,243,239)] px-8 py-4 shadow-lg">
        <div class="flex items-center justify-between max-w-7xl mx-auto">
            <!-- Logo and Name -->
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-[rgb(210,193,182)] rounded-full flex items-center justify-center text-[rgb(27,60,83)] font-bold text-lg">N</div>
                <div class="flex flex-col">
                    <span class="font-bold text-lg underline">NeoSave</span>
                    <span class="text-xs text-[rgb(210,193,182)]">Forty</span>
                </div>
            </div>
            
            <!-- Nav Options -->
            <div class="hidden md:flex gap-6">
                <a href="#" class="hover:text-[rgb(210,193,182)] transition">Features</a>
                <a href="#" class="hover:text-[rgb(210,193,182)] transition">About</a>
                <a href="#" class="hover:text-[rgb(210,193,182)] transition">Contact</a>
            </div>
            
            <!-- User -->
            <div class="w-10 h-10 bg-[rgb(69,104,130)] rounded-full flex items-center justify-center cursor-pointer hover:bg-[rgb(210,193,182)] hover:text-[rgb(27,60,83)] transition">U</div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-1 flex items-center justify-center px-6">
        <div class="text-center max-w-2xl">
            <h1 class="text-5xl md:text-6xl font-bold text-[rgb(27,60,83)] mb-4">
                Get Started Today
            </h1>
            <p class="text-xl text-[rgb(69,104,130)] mb-8">
                Take control of your finances and start saving smarter with NeoSave.
            </p>
            
            <!-- Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button class="px-8 py-3 bg-[rgb(27,60,83)] text-[rgb(249,243,239)] font-bold rounded-lg hover:bg-[rgb(69,104,130)] transition shadow-lg">
                    Login
                </button>
                <button class="px-8 py-3 bg-[rgb(210,193,182)] text-[rgb(27,60,83)] font-bold rounded-lg hover:bg-[rgb(69,104,130)] hover:text-[rgb(249,243,239)] transition shadow-lg">
                    Register
                </button>
            </div>
        </div>
    </main>

    <!-- Color Palette (Hidden) -->
    <div class="hidden flex-col gap-2 bg-blue-300 p-5 rounded-lg fixed bottom-0 left-0">
        <p class="text-[rgb(27,60,83)] font-bold text-3xl">Navy</p>
        <p class="text-[rgb(69,104,130)] font-bold text-3xl">Gray</p>
        <p class="text-[rgb(210,193,182)] font-bold text-3xl">Beige</p>
        <p class="text-[rgb(249,243,239)] font-bold text-3xl">Cream</p>
    </div>
</body>
</html>