<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Upload') }}
        </h2>
    </x-slot>

    <form action="/upload" method="post" enctype="multipart/form">
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
                        <input accept=".csv,.xlsx" class="hidden" id="file" name="file" type="file">
                    </div>
                </div>
            </label>
            <div class='flex w-full h-24 items-center justify-center bg-grey-lighter'>
                <button
                    class='transition ease-in-out delay-15 hover:-translate-y-1 w-64 flex flex-col items-center px-4 py-6 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer'
                    type="submit">UPLOAD</button>
            </div>
        </div>
    </form>
</x-app-layout>