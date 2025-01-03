<nav class="bg-purple-600 px-6 py-4">
    <div class="container mx-auto flex items-center justify-between">
        <!-- Logo and Brand -->
        <div class="flex items-center">
            <a href="/" class="text-white text-2xl font-bold">
                ChineseCourse
            </a>
            <!-- <button id="theme-toggle" type="button"
                class="text-gray-200 rounded-lg text-sm p-2.5">
                <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                </svg>
                <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                        fill-rule="evenodd" clip-rule="evenodd"></path>
                </svg>
            </button> -->
        </div>

        <!-- Navigation Links -->
        <div class="hidden md:flex items-center space-x-8">
            @auth
                <a href="/faq" class="text-white hover:text-purple-300 transition-colors duration-200">
                    FAQ
                </a>
                <a href="/dashboard" class="text-white hover:text-purple-300 transition-colors duration-200">
                    Dashboard
                </a>
                <button wire:click="logout" class="block w-full text-left text-sm bg-white text-purple-600 px-6 py-2 rounded-full font-medium hover:bg-purple-50 transition-colors duration-200">
                    Logout
                </button>

                @else
                <a href="/faq" class="text-white hover:text-purple-300 transition-colors duration-200">
                    FAQ
                </a>
                <a href="/login" 
                    class="text-white hover:text-purple-200 transition-colors duration-200 mr-4">
                    Login
                </a>
                <a href="/register" 
                    class="bg-white text-purple-600 px-4 py-2 rounded-md hover:bg-purple-100 transition-colors duration-200">
                    Register
                </a>
            @endauth
        </div>

        <!-- Mobile Menu Button -->
        <div class="md:hidden" x-data="{ open: false }">
            <button @click="open = !open" class="text-white focus:outline-none">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>

            <!-- Mobile Menu -->
            <div x-show="open" 
                @click.away="open = false"
                class="absolute top-16 left-0 right-0 bg-purple-600 shadow-lg">
                @auth
                    <a href="/dashboard" class="block text-white hover:bg-purple-700 px-4 py-2">Dashboard</a>
                    <button wire:click="logout" class="block w-full text-left px-4 py-2 text-sm text-white hover:bg-purple-700 transition-colors duration-200">
                        Logout
                    </button>
                @else
                    <a href="/login" class="block text-white hover:bg-purple-700 px-4 py-2">Login</a>
                    <a href="/register" class="block text-white hover:bg-purple-700 px-4 py-2">Register</a>
                @endauth
            </div>
        </div>
    </div>
</nav>