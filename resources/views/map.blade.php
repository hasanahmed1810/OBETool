<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Map PLOs') }}
        </h2>
    </x-slot>

    <div class="flex justify-center items-center py-8">
        <form class="w-full max-w-xs flex flex-col bg-white shadow-md rounded-lg px-8 pt-6 pb-8 mb-4">
            <label for="clo1">Map CLO1 To</label>
            <br>
            <select class=' appearance-none rounded-lg text-teal-400 border-0 focus:outline-none outline-none'
                name="clo1" id="clo1">
                <option value="PLO1">PLO1</option>
                <option value="PLO2">PLO2</option>
                <option value="PLO3">PLO3</option>
                <option value="PLO4">PLO4</option>
                <option value="PLO5">PLO5</option>
                <option value="PLO6">PLO6</option>
                <option value="PLO7">PLO7</option>
                <option value="PLO8">PLO8</option>
                <option value="PLO9">PLO9</option>
                <option value="PLO10">PLO10</option>
                <option value="PLO11">PLO11</option>
                <option value="PLO12">PLO12</option>
            </select>
            <br>
            <label for="clo2">Map CLO2 To</label>
            <br>
            <select class=' appearance-none rounded-lg text-teal-400 border-0 focus:outline-none outline-none'
                name="clo2" id="clo2">
                <option value="PLO1">PLO1</option>
                <option value="PLO2">PLO2</option>
                <option value="PLO3">PLO3</option>
                <option value="PLO4">PLO4</option>
                <option value="PLO5">PLO5</option>
                <option value="PLO6">PLO6</option>
                <option value="PLO7">PLO7</option>
                <option value="PLO8">PLO8</option>
                <option value="PLO9">PLO9</option>
                <option value="PLO10">PLO10</option>
                <option value="PLO11">PLO11</option>
                <option value="PLO12">PLO12</option>
            </select>
            <br>
            <label for="clo3">Map CLO3 To</label>
            <br>
            <select class=' appearance-none rounded-lg text-teal-400 border-0 focus:outline-none outline-none'
                name="clo3" id="clo3">
                <option value="PLO1">PLO1</option>
                <option value="PLO2">PLO2</option>
                <option value="PLO3">PLO3</option>
                <option value="PLO4">PLO4</option>
                <option value="PLO5">PLO5</option>
                <option value="PLO6">PLO6</option>
                <option value="PLO7">PLO7</option>
                <option value="PLO8">PLO8</option>
                <option value="PLO9">PLO9</option>
                <option value="PLO10">PLO10</option>
                <option value="PLO11">PLO11</option>
                <option value="PLO12">PLO12</option>
            </select>
            <br>
            <label for="clo4">Map CLO4 To</label>
            <br>
            <select class=' appearance-none rounded-lg text-teal-400 border-0 focus:outline-none outline-none'
                name="clo4" id="clo4">
                <option value="PLO1">PLO1</option>
                <option value="PLO2">PLO2</option>
                <option value="PLO3">PLO3</option>
                <option value="PLO4">PLO4</option>
                <option value="PLO5">PLO5</option>
                <option value="PLO6">PLO6</option>
                <option value="PLO7">PLO7</option>
                <option value="PLO8">PLO8</option>
                <option value="PLO9">PLO9</option>
                <option value="PLO10">PLO10</option>
                <option value="PLO11">PLO11</option>
                <option value="PLO12">PLO12</option>
            </select>
        </div>
    </div>

    <a class=' active:shadow-lg mouse shadow transition duration-200 focus:outline-none ' href="/data/{{$id}}">
        <button type="button" id="fab"
            class="text-white content-center cursor-pointer fixed bottom-5 left-4 p-0 w-32 h-16 bg-teal-500 rounded-full hover:-translate-y-1 active:shadow-lg mouse shadow transition duration-200 focus:outline-none">
            Go Back
        </button>
    </a>

    {{-- <a class=' active:shadow-lg mouse shadow transition duration-200 focus:outline-none ' href=""> --}}
        <button type='submit' id="fab"
            class="text-white cursor-pointer fixed bottom-5 right-4 p-0 w-32 h-16 bg-teal-500 rounded-full hover:-translate-y-1 active:shadow-lg mouse shadow transition duration-200 focus:outline-none">
            PLO Report
        </button>
    {{-- </a> --}}

</x-app-layout>