<div class="max-w-7xl mx-auto my-10">
        <h2 class="text-4xl font-bold mb-4 text-center">FAQ</h2>

        <div x-data="{ open: null }" class="space-y-2">
            <!-- Pertanyaan 1 -->
            <div class="border rounded-lg overflow-hidden">
                <button 
                    @click="open = open === 1 ? null : 1" 
                    class="w-full text-left px-6 py-4 bg-purple-500 text-white text-xl font-medium flex justify-between items-center">
                    <span>Apakah saya perlu memiliki dasar bahasa Mandarin sebelum bergabung?</span>
                    <span x-show="open !== 1" class="text-xl">▼</span>
                    <span x-show="open === 1" class="text-xl">▲</span>
                </button>
                <div x-show="open === 1" x-collapse class="bg-purple-100 text-lg px-4 py-3 text-purple-700">
                    Tidak perlu! Kami menyediakan kelas untuk semua level, mulai dari pemula absolute hingga tingkat mahir. Untuk pemula, kami akan memulai dari dasar seperti pelafalan (pinyin), karakter dasar, dan percakapan sederhana. Sistem pembelajaran kami dirancang step-by-step sehingga mudah diikuti oleh siapa saja.
                </div>
            </div>

            <!-- Pertanyaan 2 -->
            <div class="border rounded-lg overflow-hidden">
                <button 
                    @click="open = open === 2 ? null : 2" 
                    class="w-full text-left px-6 py-4 bg-purple-500 text-white text-xl font-medium flex justify-between items-center">
                    <span>Pembayaran apa saja yang digunakan pada ChineseCourse?</span>
                    <span x-show="open !== 2" class="text-xl">▼</span>
                    <span x-show="open === 2" class="text-xl">▲</span>
                </button>
                <div x-show="open === 2" x-collapse class="bg-purple-100 text-lg px-4 py-3 text-purple-700">
                    Kami menerima berbagai metode pembayaran seperti transfer bank, e-wallet, dan kartu kredit untuk kemudahan Anda.
                </div>
            </div>

            <!-- Pertanyaan 3 -->
            <div class="border rounded-lg overflow-hidden">
                <button 
                    @click="open = open === 3 ? null : 3" 
                    class="w-full text-left px-6 py-4 bg-purple-500 text-white text-xl font-medium flex justify-between items-center">
                    <span>Kemana saya dapat melakukan laporan jika terdapat kendala?</span>
                    <span x-show="open !== 3" class="text-xl">▼</span>
                    <span x-show="open === 3" class="text-xl">▲</span>
                </button>
                <div x-show="open === 3" x-collapse class="bg-purple-100 text-lg px-4 py-3 text-purple-700">
                    Jika Anda mengalami kendala, silakan hubungi tim dukungan kami melalui email support@chinesecourse.com
                </div>
            </div>
            <a href="/chatbot" class="text-purple-500 text-center w-full">
                Chat
            </a>
        </div>
    </div>

