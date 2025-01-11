<x-app-layout>
    <div class="bg-green-50 py-8">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="p-8">
                    <h1 class="text-3xl font-bold text-gray-800 mb-6">{{ $workshop->name }}</h1>
                    <div class="mb-6">
                        <span class="bg-green-100 text-green-800 text-xs font-semibold px-2.5 py-0.5 rounded">{{ $workshop->date->format('d/m/Y H:i') }}</span>
                        <span class="text-gray-600 ml-4">Durée: {{ $workshop->duration }}h</span>
                    </div>
                    <p class="text-gray-600 mb-6">{{ $workshop->description }}</p>
                    <div class="flex justify-between items-center">
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
    </div>
</x-app-layout>