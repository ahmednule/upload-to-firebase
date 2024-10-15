<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Puppet Overview</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="antialiased bg-gray-100 min-h-screen">
        <div class="w-full bg-white shadow-md">
            <div class="max-w-7xl mx-auto flex justify-between items-center px-6 py-4">
                <div class="text-2xl font-semibold">Puppet Management</div>
                <div class="flex space-x-4">
                    <a href="/login" class="text-gray-600 hover:underline">Login</a>
                    <a href="/register" class="text-gray-600 hover:underline">Register</a>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto p-6 mt-10">
            <h1 class="text-4xl font-bold text-center mb-6">What is Puppet?</h1>
            <p class="text-lg text-gray-700 leading-relaxed mb-4">
                Puppet is a dating site designed for pets so that they can connect with each other especially in times when the owners have moved to a new place. This way, they don't become bored.
            </p>

            <h2 class="text-2xl font-semibold mt-8 mb-4">How Puppet Works</h2>
            <p class="text-lg text-gray-700 leading-relaxed mb-4">
                A user uploads a picture of their pet, and other pet owners can respond when they like what they see, saving time and resources.
            </p>

            <h2 class="text-2xl font-semibold mt-8 mb-4">Available Pests</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="bg-white shadow rounded-lg overflow-hidden">
                    <img src="{{ asset('images/image1.jpg') }}" alt="Pest 1" class="w-full h-48 object-cover">
                    <div class="p-4 text-center font-medium">Pest 1</div>
                </div>
                <div class="bg-white shadow rounded-lg overflow-hidden">
                    <img src="{{ asset('images/image2.jpg') }}" alt="Pest 2" class="w-full h-48 object-cover">
                    <div class="p-4 text-center font-medium">Pest 2</div>
                </div>
                <div class="bg-white shadow rounded-lg overflow-hidden">
                    <img src="{{ asset('images/image3.jpg') }}" alt="Pest 3" class="w-full h-48 object-cover">
                    <div class="p-4 text-center font-medium">Pest 3</div>
                </div>
                <div class="bg-white shadow rounded-lg overflow-hidden">
                    <img src="{{ asset('images/image4.jpg') }}" alt="Pest 4" class="w-full h-48 object-cover">
                    <div class="p-4 text-center font-medium">Pest 4</div>
                </div>
            </div>

            <h2 class="text-2xl font-semibold mt-8 mb-4">Why Use Puppet?</h2>
            <p class="text-lg text-gray-700 leading-relaxed">
                Puppet helps pet owners:
            </p>
            <ul class="list-disc pl-6 text-lg text-gray-700 space-y-2 mt-2">
                <li>Reduce pet boredom</li>
                <li>Encourage faster reproduction</li>
                <li>Maintain consistent and reproducible environments</li>
                <li>Improve security and compliance through preference-based choices</li>
            </ul>

            <h2 class="text-2xl font-semibold mt-8 mb-4">Getting Started with Puppet</h2>
            <p class="text-lg text-gray-700 leading-relaxed">
                Create an account and log in to start using the application.
            </p>

            <p class="text-lg text-gray-700 leading-relaxed mt-4">
                Puppet also provides a web-based GUI called "Puppert," offering a list of different types of pets for users to choose based on their preferences.
            </p>
        </div>

        <footer class="mt-10 text-center">
            <p>Designed by margretmbithi &copy; 2024. All rights reserved.</p>
        </footer>
    </body>
</html>
