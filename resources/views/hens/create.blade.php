<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Tyúk regisztrálás
            </h2>
            <p class="mb-4">Tyúk adatainak felvitele</p>
        </header>

        <form method="POST" action="/hens" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label for="name" class="inline-block text-lg mb-2">Tyúk neve</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name"
                    value="{{ old('name') }}" />

                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>



            <div class="mb-6">
                <label for="breed" class="inline-block text-lg mb-2">Tyúk fajtája</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="breed"
                    placeholder="Pl.: itáliai" value="{{ old('breed') }}" />

                @error('breed')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>


            <div class="mb-6">
                <label for="birth" class="inline-block text-lg mb-2">Kelés éve</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="birth"
                    placeholder="Pl.: 2023" value="{{ old('birth') }}" />

                @error('birth')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="sex" class="inline-block text-lg mb-2">Neme</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="sex"
                    value="{{ old('sex') }}" placeholder="tyúk vagy kakas" />

                @error('sex')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="tags" class="inline-block text-lg mb-2">
                    Tegek (vesszővel elválasztva)
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags"
                    placeholder="Pl.: barna, tyúk, itáliai keverék" value="{{ old('tags') }}" />

                @error('tags')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="logo" class="inline-block text-lg mb-2">
                    Kép
                </label>
                <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo" />

                @error('logo')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="description" class="inline-block text-lg mb-2">
                    Tyúk leírása
                </label>
                <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="5"
                    placeholder="Pár jellemző leírása">{{ old('description') }}</textarea>

                @error('description')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button class="bg-green-700 text-white rounded py-2 px-4 hover:bg-black">
                    Tyúk létrehozása
                </button>

                <a href="/" class="text-black ml-4"> Vissza </a>
            </div>
        </form>
    </x-card>
</x-layout>
