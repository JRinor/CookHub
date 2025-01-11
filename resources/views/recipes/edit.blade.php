<x-app-layout>
    <div class="bg-yellow-50 py-8">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="p-8">
                    <h1 class="text-3xl font-bold text-gray-800 mb-6">Modifier la recette</h1>
                    <form action="{{ route('recipes.update', $recipe) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="space-y-6">
                            <div>
                                <label for="title" class="block text-sm font-medium text-gray-700">Titre</label>
                                <input type="text" name="title" id="title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-yellow-500 focus:ring focus:ring-yellow-200" value="{{ $recipe->title }}" required>
                            </div>
                            <div>
                                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                                <textarea name="description" id="description" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-yellow-500 focus:ring focus:ring-yellow-200" required>{{ $recipe->description }}</textarea>
                            </div>
                            <div>
                                <label for="category" class="block text-sm font-medium text-gray-700">Catégorie</label>
                                <input type="text" name="category" id="category" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-yellow-500 focus:ring focus:ring-yellow-200" value="{{ $recipe->category }}" required>
                            </div>
                            <div>
                                <label for="ingredients" class="block text-sm font-medium text-gray-700">Ingrédients</label>
                                <textarea name="ingredients" id="ingredients" rows="5" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-yellow-500 focus:ring focus:ring-yellow-200" required>{{ $recipe->ingredients }}</textarea>
                            </div>
                            <div>
                                <label for="steps" class="block text-sm font-medium text-gray-700">Étapes</label>
                                <textarea name="steps" id="steps" rows="5" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-yellow-500 focus:ring focus:ring-yellow-200" required>{{ $recipe->steps }}</textarea>
                            </div>
                            <div>
                                <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                                <input type="file" name="image" id="image" class="mt-1 block w-full">
                            </div>
                            <div>
                                <button type="submit" class="w-full bg-yellow-500 text-white px-4 py-2 rounded-md hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2">Modifier la recette</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
