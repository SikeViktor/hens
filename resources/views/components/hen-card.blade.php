@props(['hen'])

<x-card>
    <div class="flex">
        <img class="hidden w-48 max-h-48 mr-6 md:block" 
        src="{{$hen->logo ? asset('storage/'. $hen->logo) :  asset('images/no-image.png') }}" 
        alt="" />
        <div>
            <h3 class="text-2xl">
                <a href="/hens/{{ $hen->id }}">{{ $hen->name }}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{ $hen->breed }}</div>
                <x-hen-tags :tagsCsv="$hen->tags" />
            <div class="text-lg mt-4">
                <i class="fa-solid fa-egg"></i> {{ $hen->birth }}
            </div>
        </div>
    </div>
</x-card>

