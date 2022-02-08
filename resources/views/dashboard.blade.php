<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="cursor-pointer transition ease-in-out delay-15 hover:-translate-y-1 max-w-7xl mx-auto sm:px-2 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <a href="/upload">
                    <div class="p-6 bg-white border-b border-gray-200">
                    Winter Semester 2022
                    </div>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
