<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>
        {{ $title }}
    </title>

    @include('/layouts/head')

</head>
<body>

    @include('/layouts/header')
    <div class="font-bold text-3xl p-3">Registered Users</div>
    <div class='w-full overflow-scroll'>

        <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded m-3" type="button" onclick="window.location.href='/add'">
            Add New
        </button>

    <table class="min-w-full divide-y divide-gray-200">
        <thead>
        <tr>
            <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                No
            </th>
            <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                Full Name
            </th>
            <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                Email
            </th>
            <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                Phone
            </th>
            <th class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                
            </th>
        </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">

        @foreach($users as $key => $data)
        <tr>
            <td class="px-6 py-4 whitspace-wrap">
                <div class="text-center text-sm leading-5 font-medium text-gray-900">
                    {{ $key + 1 }}
                </div>
            </td>
            <td class="px-6 py-4 whitspace-wrap">
                <div class="text-center text-sm leading-5 font-medium text-gray-900">
                    {{ $data -> full_name }}
                </div>
            </td>
            <td class="px-6 py-4 whitspace-wrap">
                <div class="text-center text-sm leading-5 font-medium text-gray-900">
                    {{ $data -> email }}
                </div>
            </td>
            <td class="px-6 py-4 whitspace-wrap">
                <div class="text-center text-sm leading-5 font-medium text-gray-900">
                    {{ $data -> phone }}
                </div>
            </td>
            <td class="px-6 py-4 whitspace-wrap">
                <div class="ml-4">
                    <a href="edit" class="text-indigo-600 hover:text-indigo-900 m-3">Edit</a>
                </div>
            </td>
        </tr>
        @endforeach

        <!-- More rows... -->
        </tbody>
    </table>
    </div>
    @include('/layouts/footer')

</body>
</html>