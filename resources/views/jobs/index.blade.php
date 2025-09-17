<x-layout>
    <div class="space-y-10">
    <section class="pt-6 text-center">
       <h1 class="font-bold text-4xl">Let's find your next job</h1>

       {{-- <form action="" class="mt-6">
        <input type="text" placeholder="Web developer.." class="rounded-xl bg-white/5 px-5 py-4 border-white/10 w-full max-w-xl">
       </form> --}}
       <x-forms.form method="GET" action="/search">
        <x-forms.input :label="false" name="search" placeholder="Web developer.." class="rounded-xl bg-white/5 px-5 py-4 border-white/10 w-full max-w-xl"/>
         </x-forms.form>
    </section>
    <section  class="pt-10">
        <x-section-heading>Featured Jobs</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-8 mt-6">
            @foreach($featuredJobs as $job)
                <x-job-card :job="$job"></x-job-card>
            @endforeach
            </div>
    </section>
    <section>
        <x-section-heading>Tags</x-section-heading>
        <div class="mt-6 space-x-1">
            @foreach($tags as $tag)
                <x-tag :tag="$tag"></x-tag>
            @endforeach
        </div>
    </section>
    <section>
        <x-section-heading>Recent Jobs</x-section-heading>
        <div class="mt-6 space-y-5">
            @foreach($jobs as $job)
                <x-expanded-job-card :job="$job"></x-expanded-job-card>
            @endforeach
        </div>
    </section>
    </div>
    
</x-layout>