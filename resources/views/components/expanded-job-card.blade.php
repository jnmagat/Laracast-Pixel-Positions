@props(['job'])
<x-panel class="gap-x-6">
    <div>
            {{-- <img class="rounded-xl" src="https://placehold.co/90x90" alt="" > --}}
            <x-employer-logo></x-employer-logo>
    </div>
    <div class="flex-1 flex flex-col">
            <a class="text-gray-400 text-sm">{{$job->employer->name}}</a>
            <h3 class="group-hover:text-blue-800 font-bold text-lg transition-colors duration-300">{{$job->title}}</h3>
            <p class="text-gray-400 text-sm mt-auto">Full time from $70,000</p>
        </div>
        <div>
            @foreach($job->tags as $tag)
                <x-tag :tag="$tag"></x-tag>
            @endforeach
        </div>
</x-panel>