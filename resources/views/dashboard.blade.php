<!-- resources/views/dashboard.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg p-6">
                <h3 class="text-2xl font-semibold mb-6">Upload Pet Details</h3>

                @if(session('success'))
                    <div class="bg-green-100 text-green-800 p-4 rounded mb-6">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="/pests" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700">Pet Name:</label>
                        <input type="text" name="name" id="name" class="w-full border rounded px-3 py-2" required>
                    </div>

                    <div class="mb-4">
                        <label for="image" class="block text-gray-700">Upload Image:</label>
                        <input type="file" name="image" id="image" class="w-full border rounded px-3 py-2" required>
                    </div>

                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Upload Pest
                    </button>
                </form>

                <h3 class="text-2xl font-semibold mt-8 mb-4">Uploaded Pests</h3>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
                    @foreach($pests as $pest)
                        <div class="bg-white shadow rounded-lg overflow-hidden">
                            <img src="{{ asset('storage/' . $pest->image) }}" alt="{{ $pest->name }}" class="w-full h-48 object-cover">
                            <div class="p-4">
                                <h4 class="font-semibold">{{ $pest->name }}</h4>
                                <p>Likes: {{ $pest->likes }}</p>
                                <button class="mt-2 bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-4 rounded">
                                    Contact Owner
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
