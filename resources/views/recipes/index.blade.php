<x-app-layout>
    <div class="bg-yellow-50 py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-bold text-gray-800 mb-6 text-center">Nos Délicieuses Recettes</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($recipes as $recipe)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:scale-105">
                        <img src="{{ $recipe->image_url }}" alt="{{ $recipe->title }}" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h2 class="text-xl font-semibold text-gray-800 mb-2">{{ $recipe->title }}</h2>
                            <p class="text-gray-600 mb-4">{{ Str::limit($recipe->description, 100) }}</p>
                            <div class="flex items-center justify-between">
                                <span class="bg-green-100 text-green-800 text-xs font-semibold px-2.5 py-0.5 rounded">{{ $recipe->category }}</span>
                                <div class="flex space-x-2">
                                    <a href="{{ route('recipes.show', $recipe) }}" class="text-blue-500 hover:text-blue-700">Voir</a>
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
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
