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
        <tr class="bg-gray-100">
            <th colspan='2' scope="col"
                class="text-center py-3 px-6 text-sm font-medium tracking-wider text-gray-700 uppercase dark:text-gray-400">
                Weightages%
            </th>
            <th scope="col"
                class="py-3 px-6 text-sm font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                {{$weightage1}}%
            </th>
            <th scope="col"
                class="py-3 px-6 text-sm font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                {{$weightage2}}%
            </th>
            <th scope="col"
                class="py-3 px-6 text-sm font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                {{$weightage3}}%
            </th>
            <th scope="col"
                class="py-3 px-6 text-sm font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                {{$weightage4}}%
            </th>
        </tr>
        <tr class="bg-white">
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

        <tr class='bg-gray-100'>
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
            class="odd:bg-white even:bg-gray-100 bg-white dark:bg-gray-800 dark:border-gray-700">
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