<x-app-layout>
    <x-slot name="header">
        <h2 class="text-teal-500 font-semibold text-xl leading-tight">
            {{ __('Map PLOs') }}
        </h2>
    </x-slot>

    <form class='flex justify-center items-center py-10' id='form' method="post" action='/report/{{$sem_id}}/{{$id}}'>
        <div class="w-full max-w-xs flex flex-col bg-white shadow-md rounded-lg px-8 pt-6 pb-8 mb-4 mr-16">
            @csrf
            <label for="clo1">Map CLO 1 To</label>
            <br>
            <select
                class='transition ease-in-out appearance-none rounded-lg text-teal-500 border-0 focus:outline-none outline-none'
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
            <select
                class='transition ease-in-out appearance-none rounded-lg text-teal-500 border-0 focus:outline-none outline-none'
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
            <select
                class='transition ease-in-out appearance-none rounded-lg text-teal-500 border-0 focus:outline-none outline-none'
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
            <select
                class='transition ease-in-out appearance-none rounded-lg text-teal-500 border-0 focus:outline-none outline-none'
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
        <div class="w-full max-w-xs flex flex-col bg-white shadow-md rounded-lg px-8 pt-6 pb-8 mb-4">
            @csrf
            <label for="plvl1">CLO 1 Priority Level</label>
            <br>
            <select
                class='transition ease-in-out appearance-none rounded-lg text-teal-500 border-0 focus:outline-none outline-none'
                name="plvl1" id="plvl1">
                <option value="LOW">LOW</option>
                <option value="MEDIUM">MEDIUM</option>
                <option value="HIGH">HIGH</option>
            </select>
            <br>
            <label for="plvl2">CLO 2 Priority Level</label>
            <br>
            <select
                class='transition ease-in-out appearance-none rounded-lg text-teal-500 border-0 focus:outline-none outline-none'
                name="plvl2" id="plvl2">
                <option value="LOW">LOW</option>
                <option value="MEDIUM">MEDIUM</option>
                <option value="HIGH">HIGH</option>
            </select>
            <br>
            <label for="plvl3">CLO 3 Priority Level</label>
            <br>
            <select
                class='transition ease-in-out appearance-none rounded-lg text-teal-500 border-0 focus:outline-none outline-none'
                name="plvl3" id="plvl3">
                <option value="LOW">LOW</option>
                <option value="MEDIUM">MEDIUM</option>
                <option value="HIGH">HIGH</option>
            </select>
            <br>
            <label for="plvl4">CLO 4 Priority Level</label>
            <br>
            <select
                class='transition ease-in-out appearance-none rounded-lg text-teal-500 border-0 focus:outline-none outline-none'
                name="plvl4" id="plvl4">
                <option value="LOW">LOW</option>
                <option value="MEDIUM">MEDIUM</option>
                <option value="HIGH">HIGH</option>
            </select>
        </div>

        <button type='submit'
            class="text-white cursor-pointer fixed bottom-5 right-4 p-0 w-32 h-16 bg-teal-500 rounded-full hover:-translate-y-1 active:shadow-lg mouse shadow transition duration-200 focus:outline-none">
            PLO Report
        </button>
    </form>

    <a class=' active:shadow-lg mouse shadow transition duration-200 focus:outline-none '
        href="/data/{{$sem_id}}/{{$id}}">
        <button type="button" id="fab"
            class="text-white content-center cursor-pointer fixed bottom-5 left-4 p-0 w-32 h-16 bg-teal-500 rounded-full hover:-translate-y-1 active:shadow-lg mouse shadow transition duration-200 focus:outline-none">
            Go Back
        </button>
    </a>
</x-app-layout>