<div class="w-full h-full">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-12">
        <h2 class="text-2xl font-bold mb-6 text-purple-600 pt-16">
            Kursus Anda
        </h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($courses as $course)
                <livewire:course-buy :course="$course" :wire:key="$course['id']" />
            @endforeach
        </div>
    </div>

    <livewire:order-history />
</div>
