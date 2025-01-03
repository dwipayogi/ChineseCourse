<div class="py-8">
    <h2 class="text-2xl font-bold mb-6 @if($title === 'Rekomendasi') text-purple-600 @else text-purple-500 @endif">
        {{ $title }}
    </h2>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($courses as $course)
            <livewire:course-card :course="$course" :wire:key="$course['id']" />
        @endforeach
    </div>
</div>
