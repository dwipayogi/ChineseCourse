<main class="h-full">
    <div class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Course Header Section -->
            <div class="mb-8">
                <div class="relative">
                    <img 
                        src="{{ Storage::url($course->thumbnail) }}" 
                        alt="{{ $course->title }}"
                        class="w-full h-64 object-cover rounded-xl shadow-lg"
                    >
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-6 rounded-b-xl">
                        <h1 class="text-3xl font-bold text-white mb-2">{{ $course->title }}</h1>
                        <div class="flex items-center gap-4 text-white/90">
                            <span class="bg-purple-600 px-3 py-1 rounded-full text-sm">
                                {{ ucfirst($course->level) }}
                            </span>
                            <span class="flex items-center gap-1">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                {{ $course->duration }} menit
                            </span>
                            <span class="flex items-center gap-1">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                </svg>
                                {{ number_format($course->total_enrolled) }} Siswa
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Main Content -->
                <div class="lg:col-span-2">
                    <div class="bg-white rounded-xl shadow-sm overflow-hidden">
                        <!-- Course Description -->
                        <div class="p-6">
                            <h2 class="text-2xl font-bold text-gray-800 mb-4">Deskripsi Kursus</h2>
                            <div class="prose max-w-none">
                                {!! $course->description !!}
                            </div>
                        </div>

                        <!-- What Will Learn -->
                        @if($course->what_will_learn)
                        <div class="p-6 border-t border-gray-100">
                            <h2 class="text-2xl font-bold text-gray-800 mb-4">Yang Akan Dipelajari</h2>
                            <div class="prose max-w-none">
                                {!! $course->what_will_learn !!}
                            </div>
                        </div>
                        @endif

                        <!-- Requirements -->
                        @if($course->requirements)
                        <div class="p-6 border-t border-gray-100">
                            <h2 class="text-2xl font-bold text-gray-800 mb-4">Persyaratan</h2>
                            <div class="prose max-w-none">
                                {!! $course->requirements !!}
                            </div>
                        </div>
                        @endif
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="lg:col-span-1">
                    <div class="bg-white rounded-xl shadow-sm p-6 sticky top-8">
                        <div class="text-center mb-6">
                            <div class="text-3xl font-bold text-gray-900 mb-2">
                                Rp {{ number_format($course->price, 0, ',', '.') }}
                            </div>
                        </div>
                        <button wire:click="enrollCourse('{{ $course->id }}', '{{ $course->price }}')"  wire:confirm="Are you sure you want to enroll this course?" class="w-full bg-purple-600 text-white py-3 px-4 rounded-lg font-semibold hover:bg-purple-700 transition duration-200">
                            Daftar Sekarang
                        </button>
                        
                        <div class="mt-6 space-y-4 text-gray-600">
                            <div class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>Durasi: {{ $course->duration }} menit</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                                <span>Level: {{ ucfirst($course->level) }}</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                </svg>
                                <span>{{ number_format($course->total_enrolled) }} siswa terdaftar</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>