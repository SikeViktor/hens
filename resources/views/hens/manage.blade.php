<x-layout>
    <x-card class="p-10">
        <header>
            <h1 class="text-3xl text-center font-bold my-6 uppercase">
                Tyúkjaim
            </h1>
        </header>

        <table class="w-full table-auto rounded-sm">
            <tbody>
                <hr>
                @unless ($hens->isEmpty())
                    @foreach ($hens as $hen)
                        <tr class="border-gray-300">

                            <td class="col-sm-4 px-4 py-8 border-t border-b border-gray-300">
                                <a href="/hens/{{ $hen->id }}">
                                    <img class="w-24 mr-6"
                                        src="{{ $hen->logo ? asset('storage/' . $hen->logo) : asset('images/no-image.png') }}"
                                        alt="" />
                                </a>
                            </td>

                            <td class="col-sm-4 px-4 py-8 border-t border-b border-gray-300">
                                <a href="/hens/{{ $hen->id }}">{{ $hen->name }}</a>
                            </td>

                            <td class="col-sm-2 px-4 py-8 border-t border-b border-gray-300 text-right">
                                <a href="/hens/{{ $hen->id }}/edit"
                                    class="text-blue-400 px-6 py-2 rounded-lg flex items-center justify-center">
                                    <i class="fa-solid fa-pen-to-square"></i> Szerkeszt
                                </a>
                            </td>
                            
                            <td class="col-sm-2 px-4 py-8 border-t border-b border-gray-300 text-right">
                                <form method="POST" action="/hens/{{ $hen->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="text-red-500 flex items-center justify-center">
                                        <i class="fa-solid fa-trash"></i> Töröl
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr class="border-gray-300">
                        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                            <p class="text-center">Nem található tyúk</p>
                        </td>
                    </tr>
                @endunless

            </tbody>
        </table>
    </x-card>
</x-layout>
