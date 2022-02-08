<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="flex cursor-pointer transition ease-in-out delay-15 hover:-translate-y-1 max-w-7xl px-8">
            <div class="w-11/12 mr-4 bg-white overflow-hidden shadow-sm rounded-lg">
                <a href="/upload">
                    <div class="p-6 bg-white border-b border-gray-200">
                    Winter Semester 2022
                    </div>
                </a>
        </div>
            <button class="cursor-pointer transition ease-in-out delay-15 hover:-translate-y-1 max-w-7xl  ">
            <div class="bg-white overflow-hidden shadow-sm rounded-lg">
                <a href="">
                    <div class="p-6 bg-white border-b border-gray-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 flex items-center text-red-500 mx-auto" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                </svg>
                    </div>
                </a>
            </div>
            </button>
        </div>
        
    </div>
        
    
    <a href="/">
        <button
                class="fixed bottom-5 right-5 p-0 w-16 h-16 bg-blue-600 rounded-full hover:-translate-y-1  active:bg-blue-700 active:shadow-lg mouse shadow transition duration-200 focus:outline-none">
          <svg viewBox="0 0 20 20" enable-background="new 0 0 20 20" class="w-6 h-6 inline-block">
            <path fill="#FFFFFF" d="M16,10c0,0.553-0.048,1-0.601,1H11v4.399C11,15.951,10.553,16,10,16c-0.553,0-1-0.049-1-0.601V11H4.601
                                    C4.049,11,4,10.553,4,10c0-0.553,0.049-1,0.601-1H9V4.601C9,4.048,9.447,4,10,4c0.553,0,1,0.048,1,0.601V9h4.399
                                    C15.952,9,16,9.447,16,10z" />
          </svg>
        </button>
    </a>
</x-app-layout>
