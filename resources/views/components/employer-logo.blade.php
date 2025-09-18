@props(['employer','width' => 90])
<img class="rounded-xl" src="{{ asset('storage/' . $employer->logo) }}" alt="" width="{{ $width }}" >