<style>
    .padding-left {
        padding-left: 1px !important;
    }
</style>

<x-app-layout>
    <x-slot name="header">
        <h2 class="text-teal-500 font-semibold text-xl leading-tight">
            {{ __($semester_name." ".$subject_name) }}
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
                                <thead class="bg-gray-100 dark:bg-gray-700">
                                    <tr>
                                        <th scope="col"
                                            class="py-3 px-6 text-sm font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            CMS ID
                                        </th>
                                        <th scope="col"
                                            class="py-3 px-6 text-sm font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Name
                                        </th>
                                        <th scope="col"
                                            class="py-3 px-6 text-sm font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            CLO 1 Score
                                        </th>
                                        <th scope="col"
                                            class="py-3 px-6 text-sm font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            CLO 2 Score
                                        </th>
                                        <th scope="col"
                                            class="py-3 px-6 text-sm font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            CLO 3 Score
                                        </th>
                                        <th scope="col"
                                            class="py-3 px-6 text-sm font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            CLO 4 Score
                                        </th>
                                        <th scope="col"
                                            class="py-3 px-6 text-sm font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">

                                        </th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($students as $student)
                                    <tr class="odd:bg-white even:bg-gray-100 bg-white dark:bg-gray-800 ">
                                        <td
                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{$student['cms_id']}}
                                        </td>
                                        <td
                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{$student['name']}}
                                        </td>
                                        <td
                                            class="py-4 px-6 text-sm {{ ($student['clo1'] >= 50) ? 'text-teal-500' : 'text-red-500' }} whitespace-nowrap dark:text-gray-400">
                                            {{$student['clo1']}}

                                        </td>
                                        <td
                                            class="py-4 px-6 text-sm {{ ($student['clo2'] >= 50) ? 'text-teal-500' : 'text-red-500' }} whitespace-nowrap dark:text-gray-400">
                                            {{$student['clo2']}}

                                        </td>
                                        <td
                                            class="py-4 px-6 text-sm {{ ($student['clo3'] >= 50) ? 'text-teal-500' : 'text-red-500' }} whitespace-nowrap dark:text-gray-400">
                                            {{$student['clo3']}}

                                        </td>
                                        <td
                                            class="py-4 px-6 text-sm {{ ($student['clo4'] >= 50) ? 'text-teal-500' : 'text-red-500' }} whitespace-nowrap dark:text-gray-400">
                                            {{$student['clo4']}}
                                        </td>
                                        <td
                                            class="w-24 text-sm whitespace-nowrap dark:text-gray-400 transition ease-in-out text-red-500 hover:bg-red-500 hover:text-white">
                                            <a class="" href="/delete-student/{{$student['id']}}">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-14 mx-auto"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    <tr class="bg-white border-t dark:bg-gray-800 dark:border-gray-700">
                                        <form autocomplete="off" method='post' action="/add-student/{{$id}}">
                                            <td class="py-4 px-6 text-sm whitespace-nowrap dark:text-gray-400">
                                                @csrf
                                                <input required name='cms' id="cms"
                                                    class="transition ease-in-out padding-left px-0 rounded-lg text-sm bg-transparent w-20 border-none text-gray-700 leading-tight placeholder-gray-400"
                                                    type="text" placeholder="CMS ID">
                                            </td>
                                            <td class="py-4 px-6 text-sm whitespace-nowrap dark:text-gray-400">
                                                <input required name='name' id="name"
                                                    class="transition ease-in-out padding-left px-0 rounded-lg text-sm bg-transparent w-24 border-none text-gray-700 leading-tight placeholder-gray-400"
                                                    type="text" placeholder="NAME">
                                            </td>
                                            <td class="py-4 px-6 text-sm whitespace-nowrap dark:text-gray-400">
                                                <input required name='clo1' id="clo1"
                                                    class="transition ease-in-out padding-left px-0 rounded-lg text-sm bg-transparent w-20 border-none text-gray-700 leading-tight placeholder-gray-400"
                                                    type="text" placeholder="CLO 1">
                                            </td>
                                            <td class="py-4 px-6 text-sm whitespace-nowrap dark:text-gray-400">
                                                <input required name='clo2' id="clo2"
                                                    class="transition ease-in-out padding-left px-0 rounded-lg text-sm bg-transparent w-20 border-none text-gray-700 leading-tight placeholder-gray-400"
                                                    type="text" placeholder="CLO 2">
                                            </td>
                                            <td class="py-4 px-6 text-xs whitespace-nowrap dark:text-gray-400">
                                                <input required name='clo3' id="clo3"
                                                    class="transition ease-in-out padding-left px-0 rounded-lg text-sm bg-transparent w-20 border-none text-gray-700 leading-tight placeholder-gray-400"
                                                    type="text" placeholder="CLO 3">
                                            </td>
                                            <td class="py-4 px-6 text-sm whitespace-nowrap dark:text-gray-400">
                                                <input required name='clo4' id="clo4"
                                                    class="transition ease-in-out padding-left px-0 rounded-lg text-sm bg-transparent w-20 border-none text-gray-700 leading-tight placeholder-gray-400"
                                                    type="text" placeholder="CLO 4">
                                            </td>
                                            <td
                                                class="text-sm whitespace-nowrap dark:text-gray-400 transition ease-in-out text-teal-500 hover:bg-teal-500 hover:text-white">
                                                <button class="w-full" type='submit'>
                                                    <svg viewBox="0 0 20 20" enable-background="new 0 0 20 20"
                                                        class="w-6 h-16 mx-auto inline-block" fill="currentColor">
                                                        <path d="M16,10c0,0.553-0.048,1-0.601,1H11v4.399C11,15.951,10.553,16,10,16c-0.553,0-1-0.049-1-0.601V11H4.601
                                                                    C4.049,11,4,10.553,4,10c0-0.553,0.049-1,0.601-1H9V4.601C9,4.048,9.447,4,10,4c0.553,0,1,0.048,1,0.601V9h4.399
                                                                    C15.952,9,16,9.447,16,10z" />
                                                    </svg>
                                                </button>
                                            </td>
                                        </form>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        <a class=' active:shadow-lg mouse shadow transition duration-200 focus:outline-none '
            href="/upload/{{$sem_id}}/{{$id}}">
            <button id="fab" type="button"
                class="text-white content-center cursor-pointer fixed bottom-5 left-4 p-0 w-32 h-16 bg-teal-500 rounded-full hover:-translate-y-1 active:shadow-lg mouse shadow transition duration-200 focus:outline-none">
                Go Back
            </button>
        </a>

        <a class=' active:shadow-lg mouse shadow transition duration-200 focus:outline-none '
            href="/map-plos/{{$sem_id}}/{{$id}}">
            <button id="fab" type="button"
                class="text-white cursor-pointer fixed bottom-5 right-4 p-0 w-32 h-16 bg-teal-500 rounded-full hover:-translate-y-1 active:shadow-lg mouse shadow transition duration-200 focus:outline-none">
                Map PLOs
            </button>
        </a>

        <br><br><br>

</x-app-layout>