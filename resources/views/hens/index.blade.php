<x-layout>
@include('partials._hero')
@include('partials._search')

    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

        @unless (count($hens) == 0)
            @foreach ($hens as $hen)
                <x-hen-card :hen="$hen" />
            @endforeach
        @else
            <p>Nincs tyúk!</p>
        @endunless

    </div>

    <div class="mt-6 p-4">
        {{$hens->links()}}
    </div>
</x-layout>
