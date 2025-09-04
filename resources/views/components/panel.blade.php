    @php
        $classes = 'bg-white/10 p-4 flex rounded-xl border border-transparent hover:border-blue-800 group transition-colors duration-300'
    @endphp
    
    <div {{ $attributes(['class'=> $classes]) }}>
        {{ $slot }}
    </div>