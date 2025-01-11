<x-app-layout>
    <div class="bg-cover bg-center min-h-screen" style="background-image: url('/images/food-background.jpg');">
        <div class="bg-black bg-opacity-50 min-h-screen flex items-center">
            <div class="container mx-auto px-4">
                <div class="max-w-3xl mx-auto text-center text-white">
                    <h1 class="text-5xl font-bold mb-6">Découvrez l'Art Culinaire</h1>
                    <p class="text-xl mb-8">Explorez, créez et partagez des recettes délicieuses</p>
                    <div class="flex justify-center space-x-4">
                        <a href="{{ route('recipes.index') }}" class="bg-yellow-500 text-gray-900 px-6 py-3 rounded-full text-lg font-semibold hover:bg-yellow-400 transition duration-300">Nos Recettes</a>
                        <a href="{{ route('workshops.index') }}" class="bg-green-500 text-white px-6 py-3 rounded-full text-lg font-semibold hover:bg-green-400 transition duration-300">Ateliers Culinaires</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-2xl font-bold mb-4 text-gray-800">Recettes Populaires</h2>
                    <p class="text-gray-600">Découvrez nos recettes les plus appréciées par la communauté.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-2xl font-bold mb-4 text-gray-800">Astuces Culinaires</h2>
                    <p class="text-gray-600">Apprenez les secrets des chefs pour sublimer vos plats.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-2xl font-bold mb-4 text-gray-800">Événements à Venir</h2>
                    <p class="text-gray-600">Participez à nos prochains ateliers et démonstrations culinaires.</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>