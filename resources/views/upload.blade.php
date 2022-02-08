<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Upload') }}
        </h2>
    </x-slot>

    {{-- <div class="py-12">
        <div class="cursor-pointer transition ease-in-out delay-15 hover:-translate-y-1 max-w-7xl mx-auto sm:px-2 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <a href="/upload">
                    <div class="p-6 bg-white border-b border-gray-200">
                    Winter Semester 2022
                    </div>
                </a>
            </div>
        </div>
    </div> --}}

    <div class="flex w-full h-96 items-center justify-center bg-grey-lighter">
    <label class="transition ease-in-out delay-15 hover:-translate-y-1 w-64 flex flex-col items-center px-4 py-6 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
        <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
        </svg>
        <span class="mt-2 text-base leading-normal">Select an excel file</span>
        <input type='file' accept=".csv,.xlsx" class="hidden" />
    </label>
</div>
</x-app-layout>
