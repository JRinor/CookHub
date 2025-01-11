<x-app-layout>
    <div class="bg-green-50 py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-bold text-gray-800 mb-6 text-center">Nos Ateliers Culinaires</h1>
            <div class="mb-8 text-center">
                <a href="{{ route('workshops.create') }}" class="bg-green-500 text-white px-6 py-3 rounded-full text-lg font-semibold hover:bg-green-600 transition duration-300">Ajouter un atelier</a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($workshops as $workshop)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:scale-105">
                        <div class="p-6">
                            <h2 class="text-2xl font-semibold text-gray-800 mb-2">{{ $workshop->name }}</h2>
                            <p class="text-gray-600 mb-4">{{ Str::limit($workshop->description, 100) }}</p>
                            <div class="flex items-center justify-between mb-4">
                                <span class="bg-green-100 text-green-800 text-xs font-semibold px-2.5 py-0.5 rounded">{{ $workshop->date->format('d/m/Y H:i') }}</span>
                                <span class="text-gray-600">Durée: {{ $workshop->duration }}h</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <a href="{{ route('workshops.show', $workshop) }}" class="text-green-500 hover:text-green-700">Voir détails</a>
                                <div class="flex space-x-2">
                                    <a href="{{ route('workshops.edit', $workshop) }}" class="text-yellow-500 hover:text-yellow-700">Modifier</a>
                                    <form action="{{ route('workshops.destroy', $workshop) }}" method="POST" class="inline">
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
