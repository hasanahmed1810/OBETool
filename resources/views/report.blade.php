<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('PLO Report') }}
        </h2>
    </x-slot>

    <a class=' active:shadow-lg mouse shadow transition duration-200 focus:outline-none ' href="/map-plos/{{$id}}">
        <button id="fab"
            class="text-white content-center cursor-pointer fixed bottom-5 left-4 p-0 w-32 h-16 bg-teal-500 rounded-full hover:-translate-y-1 active:shadow-lg mouse shadow transition duration-200 focus:outline-none">
            Go Back
        </button>
    </a>

    {{-- <a class=' active:shadow-lg mouse shadow transition duration-200 focus:outline-none ' href=""> --}}
        <button type='button' id="fab"
            class="text-white cursor-pointer fixed bottom-5 right-4 p-0 w-32 h-16 bg-teal-500 rounded-full hover:-translate-y-1 active:shadow-lg mouse shadow transition duration-200 focus:outline-none">
            Download
        </button>
    {{-- </a> --}}

</x-app-layout>