<x-guest-layout>

    <x-slot name="title">Science of Maintenance | {{ 'Issues' }}</x-slot>
    <x-slot name="description">{{ 'Issues' }}</x-slot>
    <x-slot name="keywords">{{ 'issues, science, of, maintenance, journal' }}</x-slot>

    <div class="mx-auto sm:px-6 lg:px-8 pb-60 bg-white">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg py-5 p-5">

            <div class="flex flex-wrap py-4">

                @include('components.browse-issues-side-menu')

                <div class="w-full sm:w-3/4 px-8">
                    <h1 class="text-2xl font-semibold mt-2 pb-4 text-yellow-500">{{ $currentSelection->title }}</h1>
                    <hr>

                    <div class="flex flex-wrap -m-4 mt-2">
                        @foreach($selectedIssues as $issue)
                        <div class="px-4 w-full">
                            <div class="py-2 text-left flex border-b">
                                <img class="h-20" src="{{ asset('/images/'.$issue->image) }}" alt="{{ $issue->title }}">
                                <div>
                                    <h3 class="px-4 pt-2 title-font font-medium text-xl text-gray-900">
                                        <a class="hover:text-yellow-500 transition-all" href="/issue/{{ $currentSelection->slug }}/{{ $issue->slug }}">
                                            {{ $issue->title }} </a>
                                    </h3>
                                    <div class="px-4">{!! $issue->description !!}</div>
                                </div>

                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>

            </div>
        </div>
    </div>

</x-guest-layout>
