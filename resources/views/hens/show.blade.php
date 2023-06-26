<x-layout>
    <a href="/" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back</a>
    <div class="mx-4">
        <x-card class="p-10">
            <div class="flex flex-col items-center justify-center text-center">
                <img class="w-48 mr-6 mb-6" src="{{$hen->logo ? asset('storage/'. $hen->logo) :  asset('images/no-image.png') }}" alt="" />

                <h3 class="text-2xl mb-2">{{$hen->name}}</h3>
                <div class="text-xl font-bold mb-4">{{$hen->breed}}</div>

                <x-hen-tags :tagsCsv="$hen->tags" />
                    
                <div class="text-lg my-4">
                    <i class="fa-solid fa-egg"></i> {{$hen->birth}}
                </div>
                <div class="border border-gray-200 w-full mb-6"></div>                
                <div>
                    <h3 class="text-3xl font-bold mb-4">
                        Leírás
                    </h3>
                    <div class="text-lg space-y-6">
                        <p>{{$hen->description}}</p>
                        {{-- <a href="mailto:{{$hen->user->email}}"
                            class="block bg-green-700 text-white mt-6 py-2 rounded-xl hover:opacity-80"><i
                                class="fa-solid fa-envelope"></i>
                            Üzenet a gazdának</a> --}}
                        
                    </div>
                </div>
            </div>
        </x-card>
    @auth
    <x-card class="mt-4 p-2 flex space-x-6">
        <a href="/hens/{{$hen->id}}/edit"><i class="fa-solid fa-pencil"></i> Szerkesztés</a>

        <form method="POST" action="/hens/{{$hen->id}}">
            @csrf
            @method('DELETE')
            <button class="text-red-500"><i class="fa-solid fa-trash"></i> Törlés</button>
        </form>
    </x-card>
    @endauth
    </div>
</x-layout>
