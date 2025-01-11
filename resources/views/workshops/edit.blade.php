<x-app-layout>
    <div class="bg-green-50 py-8">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="p-8">
                    <h1 class="text-3xl font-bold text-gray-800 mb-6">Modifier l'atelier</h1>
                    <form action="{{ route('workshops.update', $workshop) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="space-y-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700">Nom de l'atelier</label>
                                <input type="text" name="name" id="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-200" value="{{ $workshop->name }}" required>
                            </div>
                            <div>
                                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                                <textarea name="description" id="description" rows="4" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-200" required>{{ $workshop->description }}</textarea>
                            </div>
                            <div>
                                <label for="date" class="block text-sm font-medium text-gray-700">Date et heure</label>
                                <input type="datetime-local" name="date" id="date" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-200" value="{{ $workshop->date->format('Y-m-d\TH:i') }}" required>
                            </div>
                            <div>
                                <label for="duration" class="block text-sm font-medium text-gray-700">Durée (en heures)</label>
                                <input type="number" name="duration" id="duration" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring focus:ring-green-200" value="{{ $workshop->duration }}" required>
                            </div>
                            <div>
                                <button type="submit" class="w-full bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">Modifier l'atelier</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
