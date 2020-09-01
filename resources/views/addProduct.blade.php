<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>
        {{ $title }}
    </title>
    
    @include('/layouts/head')

</head>
<body>
<div>

    @include('/layouts/header')

    <div class="font-bold text-3xl p-5">Add New Product</div>
    <div class='p-5 w-screen'>
        <form action = "/products/add" method = "POST" enctype="multipart/form-data" class="sm:w-1/2 md:w-1/1">
            @csrf
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="items-start text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                        Product Name
                    </label>
                </div>
                <div class="md:w-2/3">
                    <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" name='product_name' id="inline-full-name" type="text" value="">
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="items-start text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
                        Product Logo
                    </label>
                </div>
                <div class="md:w-2/3">
                <input type="file" name='product_logo'>
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="items-start text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
                        Banner Image
                    </label>
                </div>
                <div class="md:w-2/3">
                    <input type="file" name='product_image'>
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="items-start text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                        Product Description
                    </label>
                </div>
                <div class="md:w-2/3">
                    <textarea class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" name='description' id="inline-full-name" type="text" value=""></textarea>
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="items-start text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
                        Product Status
                    </label>
                </div>
                <div class="md:w-2/3">
                    <label class="switch">
                        <input type="checkbox" name='product_status'>
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
            <div class="md:flex md:items-center">
                <div class="md:w-1/3 mb-3">
                    <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="/products">
                        Back
                    </a>
                </div>
                <div class="md:w-1/3">
                    <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                        Create
                    </button>
                </div>
                <div class="md:w-1/3"></div>
            </div>
        </form>
    </div>

    @include('/layouts/footer')

</body>
</html>