<a class="bg-white dark:bg-black dark:border-2 dark:border-purple-500 rounded-lg shadow-lg overflow-hidden hover:shadow-lg transition duration-300 cursor-pointer hover:-translate-y-2">
    @if($course->thumbnail)
        <img src="{{ Storage::url($course->thumbnail) }}" 
            alt="{{ $course->title }}" 
            class="w-full h-48 object-cover">
    @else
        <div class="w-full h-48 bg-purple-100 flex items-center justify-center">
            <span class="text-purple-500">No Image Available</span>
        </div>
    @endif
    
    <div class="p-4">
        <div class="flex justify-between items-start mb-2">
            <h3 class="text-lg font-semibold flex-1 text-black dark:text-white">{{ $course->title }}</h3>
            <span class="text-xs bg-purple-100 text-purple-800 px-2 py-1 rounded">
                {{ ucfirst($course->level) }}
            </span>
        </div>
        
        <article class="text-gray-600 text-sm mb-4 line-clamp-3 prose">
            {{ strip_tags($course->description) }}
        </article>
        
        <div class="flex items-center justify-between">
            <span class="text-lg font-bold text-purple-600">
                Rp{{ number_format($course->price, 2) }}
            </span>
            <div>
                <button wire:click="showCourse('{{ $course->slug }}')" class="border-2 border-purple-600 text-purple-600 hover:text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition-colors">
                    Lihat
                </button>
                <button type="button" wire:click="enrollCourse('{{ $course->id }}', '{{ $course->price }}')" class="beli border-2 border-purple-600 bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition-colors">
                    Beli
                </button>
            </div>
        </div>
    </div>
</a>

