<div class="relative mt-3 md:mt-0">
    <input wire:model.debounce.500ms="search" type="text"
        class="bg-gray-800 text-sm rounded-full w-64 px-4 pl-8 py-1 focus:outline-none focus:shadow-outline"
        placeholder="Search">
    <div class="absolute top-0">
        <svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-4 text-gray-500 mt-1 ml-2" width="20" height="20"
            viewBox="0 0 50 50">
            <path
                d="M21 3C11.621 3 4 10.621 4 20s7.621 17 17 17c3.71 0 7.14-1.195 9.938-3.219l13.156 13.125 2.812-2.812-13-13.032A16.923 16.923 0 0 0 38 20c0-9.379-7.621-17-17-17Zm0 2c8.297 0 15 6.703 15 15s-6.703 15-15 15S6 28.297 6 20 12.703 5 21 5Z" />
        </svg>
    </div>

    {{-- <div wire:loading.delay wire:target="search" class="spinner top-0 right-0 mr-4 mt-3"></div> --}}

    @if (strlen($search) >= 2)
    <div class="absolute text-sm bg-gray-800 rounded w-64 mt-4">
        @if ($searchResults->count() > 0)
        <ul>
            @foreach ($searchResults as $result)
            <li class="border-b border-gray-700">
                <a href="{{ route('movie.show', $result['id']) }}"
                    class="hover:bg-gray-700 px-3 py-3 flex items-center">
                    @if ($result['poster_path'])
                    <img src="{{ " https://image.tmdb.org/t/p/w92" . $result['poster_path'] }}" alt="poster"
                        class="w-8">
                    @else
                    <img src="https://via.placeholder.com/50x75" alt="poster" class="w-8">
                    @endif
                    <span class="ml-4">{{$result['title'] }}</span>
                </a>
            </li>
            @endforeach
        </ul>
        @else
        <div class="px-3 py-3">No results for "{{ $search }}"</div>
        @endif
    </div>
    @endif

</div>
