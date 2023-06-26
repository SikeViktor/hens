<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Adatok szerkesztése
            </h2>
            <p class="mb-4">{{$hen->name}} adatainak szerkesztése</p>
        </header>

        <form method="POST" action="/hens/{{$hen->id}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-6">
                <label for="name" class="inline-block text-lg mb-2">Tyúk neve</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name"
                    value="{{ $hen->name }}" />

                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>



            <div class="mb-6">
                <label for="breed" class="inline-block text-lg mb-2">Tyúk fajtája</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="breed"
                    placeholder="Pl.: itáliai" value="{{ $hen->breed }}" />

                @error('breed')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>


            <div class="mb-6">
                <label for="birth" class="inline-block text-lg mb-2">Kelés éve</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="birth"
                    placeholder="Pl.: 2023" value="{{ $hen->birth }}" />

                @error('birth')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="sex" class="inline-block text-lg mb-2">Neme</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="sex"
                    value="{{ $hen->sex }}" />

                @error('sex')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="tags" class="inline-block text-lg mb-2">
                    Tegek (vesszővel elválasztva)
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags"
                    placeholder="Pl.: barna, tyúk, itáliai keverék" value="{{ $hen->tags }}" />

                @error('tags')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="logo" class="inline-block text-lg mb-2">
                    Kép
                </label>
                <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo" />

                <img class="w-48 mr-6 mb-6" src="{{$hen->logo ? asset('storage/'. $hen->logo) :  asset('images/no-image.png') }}" alt="" />

                @error('logo')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="description" class="inline-block text-lg mb-2">
                    Tyúk leírása
                </label>
                <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="5"
                    placeholder="Pár jellemző leírása">{{ $hen->description }}</textarea>

                @error('description')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button class="bg-green-700 text-white rounded py-2 px-4 hover:bg-black">
                    Módosít
                </button>

                <a href="/" class="text-black ml-4"> Vissza </a>
            </div>
        </form>
    </x-card>
</x-layout>
