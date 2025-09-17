<x-layout>
    <x-page-heading>Results</x-page-heading>
        <div class="mt-6 space-y-5">
            @foreach($jobs as $job)
                <x-expanded-job-card :job="$job"></x-expanded-job-card>
            @endforeach
        </div>
</x-layout>