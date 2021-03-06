<x-guest-layout>

    <x-slot name="title">Science of Maintenance - International journal</x-slot>
    <x-slot name="description">{{ $page->description }}</x-slot>
    <x-slot name="keywords">{{ $page->keywords }}</x-slot>

    <slider-component></slider-component>

    <div class="mx-auto sm:px-6 lg:px-8 bg-white">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg py-5 p-6">
            <div class="bg-white">
                <h1 class="text-2xl font-semibold mt-2 pb-4">Science of Maintenance</h1>
                <hr>
                <div class="flex flex-wrap py-4">
                    <div class="w-full sm:w-1/4 px-2">
                        @foreach($images as $image)
                        <a href="{{ $image->link }}" target="_blank"><img class="mx-auto my-6" src="{{ asset($image->path) }}" alt="open_access"></a>
                        @endforeach
                    </div>
                    <div class="w-full sm:w-3/4 px-2">
                        <p class="ck-content">
                            {!! $page->content !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-guest-layout>
