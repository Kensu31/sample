@include('partials.__header',['title'=> "Dashboard"])
@include('partials.__sidebar')
<div class="p-4 sm:ml-64">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    firstname
                </th>
                <th scope="col" class="px-6 py-3">
                    Lastname
                </th>
                <th scope="col" class="px-6 py-3">
                    gender
                </th>
                <th scope="col" class="px-6 py-3">
                    age
                </th>
                <th scope="col" class="px-6 py-3">
                    position
                </th>
                <th scope="col" class="px-6 py-3">
                    email
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employee as $emplo)
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$emplo->first_name}}
                </th>
                <td class="px-6 py-4">
                    {{$emplo->last_name}}
                </td>
                <td class="px-6 py-4">
                    {{$emplo->gender}}
                </td>
                <td class="px-6 py-4">
                    {{$emplo->age}}
                </td>
                <td class="px-6 py-4">
                    {{$emplo->position}}
                </td>
                <td class="px-6 py-4">
                    {{$emplo->email}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@include('partials.__footer')