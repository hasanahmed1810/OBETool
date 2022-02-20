<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Student Data') }}
        </h2>
    </x-slot>

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
                                        Name
                                    </th>
                                    <th scope="col"
                                        class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                        Subject
                                    </th>
                                    <th scope="col"
                                        class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                        CLO 1 Score
                                    </th>
                                    <th scope="col"
                                        class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                        CLO 2 Score
                                    </th>
                                    <th scope="col"
                                        class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                        CLO 3 Score
                                    </th>
                                    <th scope="col"
                                        class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                        CLO 4 Score
                                    </th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($students as $student)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td
                                        class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{$student['name']}}
                                    </td>
                                    <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                        {{$student['subject']}}
                                    </td>
                                    <td class="py-4 px-6 text-sm text-teal-400 whitespace-nowrap dark:text-gray-400">
                                        {{$student['clo1']}}

                                    </td>
                                    <td class="py-4 px-6 text-sm text-teal-400 whitespace-nowrap dark:text-gray-400">
                                        {{$student['clo2']}}

                                    </td>
                                    <td class="py-4 px-6 text-sm text-teal-400 whitespace-nowrap dark:text-gray-400">
                                        {{$student['clo3']}}

                                    </td>
                                    <td class="py-4 px-6 text-sm text-teal-400 whitespace-nowrap dark:text-gray-400">
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

    <a class=' active:shadow-lg mouse shadow transition duration-200 focus:outline-none ' href="/upload/{{$id}}">
        <button id="fab"
            class="text-white content-center cursor-pointer fixed bottom-5 left-4 p-0 w-32 h-16 bg-teal-500 rounded-full hover:-translate-y-1 active:shadow-lg mouse shadow transition duration-200 focus:outline-none">
            Go Back
        </button>
    </a>

    <a class=' active:shadow-lg mouse shadow transition duration-200 focus:outline-none ' href="/map-plos/{{$id}}">
        <button id="fab"
            class="text-white cursor-pointer fixed bottom-5 right-4 p-0 w-32 h-16 bg-teal-500 rounded-full hover:-translate-y-1 active:shadow-lg mouse shadow transition duration-200 focus:outline-none">
            Map PLOs
        </button>
    </a>

</x-app-layout>