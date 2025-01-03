<div class="min-h-screen flex items-center justify-center bg-purple-50">
    <div class="max-w-md w-full bg-white rounded-lg shadow-lg p-8">
        <!-- Logo -->
        <div class="flex justify-center mb-8">
            <div class="w-16 h-16 bg-purple-600 rounded-xl flex items-center justify-center">
                <span class="text-white text-2xl font-bold">CC</span>
            </div>
        </div>

        <!-- Title -->
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-2">Masuk</h2>
        <p class="text-center text-gray-500 mb-8">Selamat datang kembali</p>

        <form wire:submit.prevent="login">
            <!-- Alert Messages -->
            @if (session()->has('error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
                    {{ session('error') }}
                </div>
            @endif

            <!-- Email Input -->
            <div class="mb-6">
                <label for="email" class="block text-gray-700 mb-2">Email</label>
                <input type="email" 
                    id="email"
                    wire:model.lazy="email"
                    class="w-full px-4 py-3 rounded-lg border border-purple-200 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                    placeholder="Masukkan email anda">
                @error('email')
                    <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                @enderror
            </div>

            <!-- Password Input -->
            <div class="mb-6">
                <label for="password" class="block text-gray-700 mb-2">Password</label>
                <input type="password"
                    id="password"
                    wire:model.lazy="password"
                    class="w-full px-4 py-3 rounded-lg border border-purple-200 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                    placeholder="Masukkan password anda">
                @error('password')
                    <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                @enderror
            </div>

            <!-- Login Button -->
            <button type="submit"
                    class="w-full bg-purple-600 text-white py-3 rounded-lg font-semibold hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-opacity-50 mb-6"
                    wire:loading.attr="disabled"
                    wire:loading.class="opacity-75">
                <span wire:loading.remove>Masuk</span>
                <span wire:loading>
                    <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white inline-block" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    Memproses...
                </span>
            </button>

            <!-- Register Link -->
            <div class="text-center text-sm">
                <span class="text-gray-600">Belum memiliki akun?</span>
                <a href="/register" class="text-purple-600 font-semibold hover:text-purple-700 ml-1">Daftar</a>
            </div>
        </form>
    </div>
</div>