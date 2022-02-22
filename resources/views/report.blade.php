<x-app-layout>
    <x-slot name="header">
        <h2 class="text-teal-500 font-semibold text-xl leading-tight">
            {{ __('PLO Report') }}
        </h2>
    </x-slot>

    @if($students->count() <= 0) <div class="flex max-w-7xl px-8 py-12">
        <div class="w-full bg-white overflow-hidden shadow-sm rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                No students added yet
            </div>
        </div>
    @else
    <div class="px-8 py-8">
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
                    <div class="overflow-hidden shadow-md sm:rounded-lg">
                        <table class="min-w-full">
                            <thead class="bg-gray-50 dark:bg-gray-700">
                                <tr>
                                    <th scope="col"
                                        class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                        CMS ID
                                    </th>
                                    <th scope="col"
                                        class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                        Name
                                    </th>
                                    <th scope="col"
                                        class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                        {{$column1}} Score
                                    </th>
                                    <th scope="col"
                                        class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                        {{$column2}} Score
                                    </th>
                                    <th scope="col"
                                        class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                        {{$column3}} Score
                                    </th>
                                    <th scope="col"
                                        class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                        {{$column4}} Score
                                    </th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($students as $student)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td
                                        class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{$student['cms_id']}}
                                    </td>
                                    <td
                                        class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{$student['name']}}
                                    </td>
                                    <td class="py-4 px-6 text-sm {{ ($student['clo1'] >= 50) ? 'text-teal-500' : 'text-red-500' }} whitespace-nowrap dark:text-gray-400">
                                        {{$student['clo1']}}

                                    </td>
                                    <td class="py-4 px-6 text-sm {{ ($student['clo2'] >= 50) ? 'text-teal-500' : 'text-red-500' }} whitespace-nowrap dark:text-gray-400">
                                        {{$student['clo2']}}

                                    </td>
                                    <td class="py-4 px-6 text-sm {{ ($student['clo3'] >= 50) ? 'text-teal-500' : 'text-red-500' }} whitespace-nowrap dark:text-gray-400">
                                        {{$student['clo3']}}

                                    </td>
                                    <td class="py-4 px-6 text-sm {{ ($student['clo4'] >= 50) ? 'text-teal-500' : 'text-red-500' }} whitespace-nowrap dark:text-gray-400">
                                        {{$student['clo4']}}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif


    <a class=' active:shadow-lg mouse shadow transition duration-200 focus:outline-none ' href="/map-plos/{{$sem_id}}/{{$id}}">
        <button id="fab"
            class="text-white content-center cursor-pointer fixed bottom-5 left-4 p-0 w-32 h-16 bg-teal-500 rounded-full hover:-translate-y-1 active:shadow-lg mouse shadow transition duration-200 focus:outline-none">
            Go Back
        </button>
    </a>

    {{-- <a class=' active:shadow-lg mouse shadow transition duration-200 focus:outline-none ' href=""> --}}
        <button type='button' id="fab"
            class="text-white cursor-pointer fixed bottom-5 right-4 p-0 w-32 h-16 bg-teal-500 rounded-full hover:-translate-y-1 active:shadow-lg mouse shadow transition duration-200 focus:outline-none">
            Graphs
        </button>
    {{-- </a> --}}

    <br><br><br>

</x-app-layout>