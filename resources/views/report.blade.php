<x-app-layout>
    <x-slot name="header">
        <h2 class="text-teal-500 font-semibold text-xl leading-tight">
            {{ __('PLO Scores For '.$semester_name." ".$subject_name) }}
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
                        <div id="chart" style="height: 300px"></div>
                        <div class="overflow-hidden shadow-md sm:rounded-lg">
                            <table class="min-w-full">
                                <thead class="bg-gray-100 dark:bg-gray-700">
                                    <tr>
                                        <th colspan='2' scope="col"
                                            class="text-center py-3 px-6 text-sm font-medium tracking-wider text-gray-700 uppercase dark:text-gray-400">
                                            BT level
                                        </th>
                                        <th scope="col"
                                            class="py-3 px-6 text-sm font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            {{$bt1}}
                                        </th>
                                        <th scope="col"
                                            class="py-3 px-6 text-sm font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            {{$bt2}}
                                        </th>
                                        <th scope="col"
                                            class="py-3 px-6 text-sm font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            {{$bt3}}
                                        </th>
                                        <th scope="col"
                                            class="py-3 px-6 text-sm font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            {{$bt4}}
                                        </th>
                                    </tr>
                                    <tr class="bg-white">
                                        <th colspan='2' scope="col"
                                            class="text-center py-3 px-6 text-sm font-medium tracking-wider text-gray-700 uppercase dark:text-gray-400">
                                            KPI%
                                        </th>
                                        <th scope="col"
                                            class="py-3 px-6 text-sm font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            50%
                                        </th>
                                        <th scope="col"
                                            class="py-3 px-6 text-sm font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            50%
                                        </th>
                                        <th scope="col"
                                            class="py-3 px-6 text-sm font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            50%
                                        </th>
                                        <th scope="col"
                                            class="py-3 px-6 text-sm font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            50%
                                        </th>
                                    </tr>
                                    <tr>
                                        <th colspan='2' scope="col"
                                            class="text-center py-3 px-6 text-sm font-medium tracking-wider text-gray-700 uppercase dark:text-gray-400">
                                            Emphasis level
                                        </th>
                                        <th scope="col"
                                            class="py-3 px-6 text-sm font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            {{$plevel1}}
                                        </th>
                                        <th scope="col"
                                            class="py-3 px-6 text-sm font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            {{$plevel2}}
                                        </th>
                                        <th scope="col"
                                            class="py-3 px-6 text-sm font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            {{$plevel3}}
                                        </th>
                                        <th scope="col"
                                            class="py-3 px-6 text-sm font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            {{$plevel4}}
                                        </th>
                                    </tr>
                                    
                                    <tr class='bg-white'>
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
                                            {{$column1}} Score
                                        </th>
                                        <th scope="col"
                                            class="py-3 px-6 text-sm font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            {{$column2}} Score
                                        </th>
                                        <th scope="col"
                                            class="py-3 px-6 text-sm font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            {{$column3}} Score
                                        </th>
                                        <th scope="col"
                                            class="py-3 px-6 text-sm font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            {{$column4}} Score
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($students as $student)
                                    <tr
                                        class="even:bg-white odd:bg-gray-100 bg-white dark:bg-gray-800 dark:border-gray-700">
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


        <a class=' active:shadow-lg mouse shadow transition duration-200 focus:outline-none '
            href="/map-plos/{{$sem_id}}/{{$id}}">
            <button id="fab"
                class="text-white content-center cursor-pointer fixed bottom-5 left-4 p-0 w-32 h-16 bg-teal-500 rounded-full hover:-translate-y-1 active:shadow-lg mouse shadow transition duration-200 focus:outline-none">
                Go Back
            </button>
        </a>

        {{-- <button type='button' id="fab"
            class="text-white cursor-pointer fixed bottom-5 right-4 p-0 w-40 h-16 bg-teal-500 rounded-full hover:-translate-y-1 active:shadow-lg mouse shadow transition duration-200 focus:outline-none">
            Download Report
        </button> --}}
        <br><br><br>


</x-app-layout>

<!-- Charting library -->
<script src="https://unpkg.com/chart.js@^2.9.3/dist/Chart.min.js"></script>
<!-- Chartisan -->
<script src="https://unpkg.com/@chartisan/chartjs@^2.1.0/dist/chartisan_chartjs.umd.js"></script>

<script>
    const chart = new Chartisan({
        el: '#chart',
        url: "@chart('plo_attainment_chart')",
        hooks: new ChartisanHooks()
        .title('PLO Attainment Graph')
        .colors(['#EF4444','#14B8A6'])
        .borderColors(['#EF4444','#14B8A6'])
        .beginAtZero()
        .responsive(true)
        .datasets([{ type: 'line', fill: false }, 'bar']),
      });
</script>