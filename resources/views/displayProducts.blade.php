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
    <div class="font-bold text-3xl p-3">Product List</div>
    <div class='w-full overflow-scroll'>

        <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded m-3" type="button" onclick="window.location.href='products/add'">
            Add New
        </button>

        <table class="min-w-full divide-y divide-gray-200">
            <thead>
            <tr>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                    Product Name
                </th>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                    Logo
                </th>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                    Status
                </th>
                <th class="px-6 py-3 bg-gray-50 text-center text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                    Actions
                </th>
            </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">

            @foreach($products as $key => $data)
            <tr>
                <td class="px-6 py-4 whitspace-wrap">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 h-10 w-15 ">
                            <img class="h-10 w-10 rounded-full" src='{{ $data -> product_logo }}' alt="">
                        </div>
                        <div class="ml-4">
                        <div class="text-sm leading-5 font-medium text-gray-900">
                            {{ $data -> product_name }}
                        </div>
                        </div>
                    </div>
                </td>

                <td class="px-6 py-4 whitespace-wrap">
                    <div class="text-sm leading-5 text-gray-900 overflow-hidden"><a href="{{ $data -> product_image }}" target="_blank">Link</a></div>
                </td>

                <td class="px-6 py-4 whitespace-no-wrap">
                @if($data -> product_status === 'on')
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                        Active
                    </span>
                @endif
                @if($data -> product_status === null)
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                        Inactive
                    </span>
                @endif
                </td>

                <td class="px-6 py-4 whitespace-no-wrap text-center text-sm leading-5 font-medium">
                    <a href="/products/edit/{{ $data -> id }}" class="text-indigo-600 hover:text-indigo-900 m-3">Edit</a>
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