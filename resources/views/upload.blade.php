<style>
    .center-button {
       left: 40%; 
    }
</style>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Upload') }}
        </h2>
    </x-slot>

    <form action="/upload/{{$sem_id}}/{{$id}}" method="post" enctype="multipart/form">
        <div class="flex flex-col w-full h-96 items-center justify-center bg-grey-lighter">
            <label
                class="transition ease-in-out delay-15 hover:-translate-y-1 w-64 flex flex-col items-center px-4 py-6 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
                <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path
                        d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                </svg>
                <span class="mt-2 text-base leading-normal">Select an excel file</span>

                @csrf
                <div class="flex justify-center">
                    <div>
                        <input required accept=".csv,.xlsx" class="hidden" id="file" name="file" type="file">
                    </div>
                </div>
            </label>
            <div class='flex w-full h-24 items-center justify-center bg-grey-lighter'>
                <button
                    class='transition ease-in-out delay-15 hover:-translate-y-1 w-64 flex flex-col items-center px-4 py-6 bg-white text-teal-500 rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer'
                    type="submit">UPLOAD</button>
            </div>
        </div>
    </form>

    <a class=' active:shadow-lg mouse shadow transition duration-200 focus:outline-none ' href="/subjects/{{$sem_id}}">
        <button id="fab"
            class="text-white content-center cursor-pointer fixed bottom-5 left-4 p-0 w-32 h-16 bg-teal-500 rounded-full hover:-translate-y-1 active:shadow-lg mouse shadow transition duration-200 focus:outline-none">
            Go Back
        </button>
    </a>

    <a class=' active:shadow-lg mouse shadow transition duration-200 focus:outline-none ' href="/download-template">
        <button id="fab"
            class="text-white cursor-pointer center-button fixed bottom-5 p-0 w-64 h-16 bg-teal-500 rounded-full hover:-translate-y-1 active:shadow-lg mouse shadow transition duration-200 focus:outline-none">
            Download Template
        </button>
    </a>

    <a class=' active:shadow-lg mouse shadow transition duration-200 focus:outline-none '
        href="/data/{{$sem_id}}/{{$id}}">
        <button id="fab"
            class="text-white cursor-pointer fixed bottom-5 right-4 p-0 w-32 h-16 bg-teal-500 rounded-full hover:-translate-y-1 active:shadow-lg mouse shadow transition duration-200 focus:outline-none">
            View Data
        </button>
    </a>

</x-app-layout>