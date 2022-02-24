<x-app-layout>
    <x-slot name="header">
        <h2 class="text-teal-500 font-semibold text-xl leading-tight">
            {{ __('Map PLOs') }}
        </h2>
    </x-slot>

    <div class="flex justify-center items-center py-10">
        <form method="post" action='/report/{{$sem_id}}/{{$id}}'
            class="w-full max-w-xs flex flex-col bg-white shadow-md rounded-lg px-8 pt-6 pb-8 mb-4">
            @csrf
            <label for="clo1">Map CLO 1 To</label>
            <br>
            <select class='transition ease-in-out appearance-none rounded-lg text-teal-500 border-0 focus:outline-none outline-none'
                name="clo1" id="clo1">
                <option value="PLO 1">PLO 1</option>
                <option value="PLO 2">PLO 2</option>
                <option value="PLO 3">PLO 3</option>
                <option value="PLO 4">PLO 4</option>
                <option value="PLO 5">PLO 5</option>
                <option value="PLO 6">PLO 6</option>
                <option value="PLO 7">PLO 7</option>
                <option value="PLO 8">PLO 8</option>
                <option value="PLO 9">PLO 9</option>
                <option value="PLO 10">PLO 10</option>
                <option value="PLO 11">PLO 11</option>
                <option value="PLO 12">PLO 12</option>
            </select>
            <br>
            <label for="clo2">Map CLO 2 To</label>
            <br>
            <select class='transition ease-in-out appearance-none rounded-lg text-teal-500 border-0 focus:outline-none outline-none'
                name="clo2" id="clo2">
                <option value="PLO 1">PLO 1</option>
                <option value="PLO 2">PLO 2</option>
                <option value="PLO 3">PLO 3</option>
                <option value="PLO 4">PLO 4</option>
                <option value="PLO 5">PLO 5</option>
                <option value="PLO 6">PLO 6</option>
                <option value="PLO 7">PLO 7</option>
                <option value="PLO 8">PLO 8</option>
                <option value="PLO 9">PLO 9</option>
                <option value="PLO 10">PLO 10</option>
                <option value="PLO 11">PLO 11</option>
                <option value="PLO 12">PLO 12</option>
            </select>
            <br>
            <label for="clo3">Map CLO 3 To</label>
            <br>
            <select class='transition ease-in-out appearance-none rounded-lg text-teal-500 border-0 focus:outline-none outline-none'
                name="clo3" id="clo3">
                <option value="PLO 1">PLO 1</option>
                <option value="PLO 2">PLO 2</option>
                <option value="PLO 3">PLO 3</option>
                <option value="PLO 4">PLO 4</option>
                <option value="PLO 5">PLO 5</option>
                <option value="PLO 6">PLO 6</option>
                <option value="PLO 7">PLO 7</option>
                <option value="PLO 8">PLO 8</option>
                <option value="PLO 9">PLO 9</option>
                <option value="PLO 10">PLO 10</option>
                <option value="PLO 11">PLO 11</option>
                <option value="PLO 12">PLO 12</option>
            </select>
            <br>
            <label for="clo4">Map CLO 4 To</label>
            <br>
            <select class='transition ease-in-out appearance-none rounded-lg text-teal-500 border-0 focus:outline-none outline-none'
                name="clo4" id="clo4">
                <option value="PLO 1">PLO 1</option>
                <option value="PLO 2">PLO 2</option>
                <option value="PLO 3">PLO 3</option>
                <option value="PLO 4">PLO 4</option>
                <option value="PLO 5">PLO 5</option>
                <option value="PLO 6">PLO 6</option>
                <option value="PLO 7">PLO 7</option>
                <option value="PLO 8">PLO 8</option>
                <option value="PLO 9">PLO 9</option>
                <option value="PLO 10">PLO 10</option>
                <option value="PLO 11">PLO 11</option>
                <option value="PLO 12">PLO 12</option>
            </select>
    </div>
    </div>

    <a class=' active:shadow-lg mouse shadow transition duration-200 focus:outline-none '
        href="/data/{{$sem_id}}/{{$id}}">
        <button type="button" id="fab"
            class="text-white content-center cursor-pointer fixed bottom-5 left-4 p-0 w-32 h-16 bg-teal-500 rounded-full hover:-translate-y-1 active:shadow-lg mouse shadow transition duration-200 focus:outline-none">
            Go Back
        </button>
    </a>

    <button type='submit' id="fab"
        class="text-white cursor-pointer fixed bottom-5 right-4 p-0 w-32 h-16 bg-teal-500 rounded-full hover:-translate-y-1 active:shadow-lg mouse shadow transition duration-200 focus:outline-none">
        PLO Report
    </button>


</x-app-layout>