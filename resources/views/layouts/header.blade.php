<header class="bg-white dark:bg-gray-800 shadow">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center py-4">
            <div class="flex items-center">
                <img src="/images/logo.png" alt="Logo" class="h-10 w-auto mr-3">
                <h1 class="text-2xl font-bold text-gray-900 dark:text-gray-100">
                    {{ config('app.name', 'Laravel') }}
                </h1>
            </div>
            <nav class="hidden md:flex space-x-6">
                <a href="{{ route('home') }}" class="text-gray-600 hover:text-gray-900 dark:text-gray-300 dark:hover:text-white">Accueil</a>
                <a href="{{ route('recipes.index') }}" class="text-gray-600 hover:text-gray-900 dark:text-gray-300 dark:hover:text-white">Recettes</a>
                <a href="{{ route('workshops.index') }}" class="text-gray-600 hover:text-gray-900 dark:text-gray-300 dark:hover:text-white">Ateliers</a>
                <a href="{{ route('about') }}" class="text-gray-600 hover:text-gray-900 dark:text-gray-300 dark:hover:text-white">À propos</a>
            </nav>
            <div class="flex items-center">
                @auth
                    <a href="{{ route('profile') }}" class="text-sm text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white mr-4">Mon profil</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-sm text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white">Déconnexion</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white mr-4">Connexion</a>
                    <a href="{{ route('register') }}" class="text-sm bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-2 rounded-md">Inscription</a>
                @endauth
            </div>
        </div>
    </div>
</header>