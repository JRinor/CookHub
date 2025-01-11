<x-app-layout>
    <div class="bg-yellow-50 py-8">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="p-8">
                    <h1 class="text-3xl font-bold text-gray-800 mb-6">{{ $recipe->title }}</h1>
                    <img src="{{ $recipe->image_url }}" alt="{{ $recipe->title }}" class="w-full h-64 object-cover mb-6 rounded">
                    <div class="mb-6">
                        <span class="bg-green-100 text-green-800 text-xs font-semibold px-2.5 py-0.5 rounded">{{ $recipe->category }}</span>
                    </div>
                    <p class="text-gray-600 mb-6">{{ $recipe->description }}</p>
                    <h2 class="text-2xl font-bold text-gray-800 mb-4">Ingrédients</h2>
                    <p class="text-gray-600 mb-6">{{ $recipe->ingredients }}</p>
                    <h2 class="text-2xl font-bold text-gray-800 mb-4">Étapes</h2>
                    <p class="text-gray-600 mb-6">{{ $recipe->steps }}</p>
                    <div class="flex justify-between items-center">
                        <a href="{{ route('recipes.edit', $recipe) }}" class="text-yellow-500 hover:text-yellow-700">Modifier</a>
                        <form action="{{ route('recipes.destroy', $recipe) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-700">Supprimer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>