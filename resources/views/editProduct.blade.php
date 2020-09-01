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

    <div class="font-bold text-3xl p-5">Edit Product</div>
    <div class='p-5 w-screen'>
        @foreach($products as $key => $data)
        <form class="sm:w-1/2 md:w-1/1" action = "/products/edit/{{ $data -> id }}" method = "POST" enctype="multipart/form-data">
            @csrf
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="items-start text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                        Product Name
                    </label>
                </div>
                <div class="md:w-2/3">
                    <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" value="{{ $data -> product_name }}" name='product_name'>
                </div>
            </div>
            <!-- <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="items-start text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                        Payment Method
                    </label>
                </div>
                <div class="md:w-2/3 w-auto">
                    <div class="md:flex md:items-top">
                        <div class='md:w-1/3'>
                            <input type="checkbox" id="ovo" name="ovo" value="OVO">
                            <label for="ovo">OVO</label><br>

                            <input type="checkbox" id="linkaja" name="linkaja" value="linkaja">
                            <label for="linkaja">Link Aja</label><br>

                            <input type="checkbox" id="dana" name="dana" value="dana">
                            <label for="dana">Link Aja</label><br>

                            <input type="checkbox" id="bca" name="bca" value="bca">
                            <label for="bca">BCA</label><br>
                        </div>
                        <div class='md:w-1/3'>
                            <input type="checkbox" id="permata" name="permata" value="permata">
                            <label for="bca">Permata</label><br>

                            <input type="checkbox" id="mandiri" name="mandiri" value="mandiri">
                            <label for="bca">Mandiri</label><br>

                            <input type="checkbox" id="bri" name="bri" value="bri">
                            <label for="bca">BRI</label><br>
                        </div>
                        <div class='md:w-1/3'>
                            <input type="checkbox" id="bni" name="bni" value="bni">
                            <label for="bca">BNI</label><br>

                            <input type="checkbox" id="alfamart" name="alfamart" value="alfamart">
                            <label for="bca">Alfamart</label><br>

                            <input type="checkbox" id="indomaret" name="indomaret" value="indomaret">
                            <label for="bca">Indomaret</label><br>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="items-start text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
                        Product Logo
                    </label>
                </div>
                <div class="md:w-2/3">
                <input type="file" name='product_logo'>
                <a href="{{ $data -> product_logo }}" target='_blank'>Show</a>
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
                    <a href="{{ $data -> product_image }}" target='_blank'>Show</a>
                </div>
            </div>

            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="items-start text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                        Product Description
                    </label>
                </div>
                <div class="md:w-2/3">
                    <textarea class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" name='description' id="inline-full-name">
                        {{ $data -> description }}
                    </textarea>
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
                        @if($data -> product_status === 'on')
                            <input type="checkbox" name='product_status' checked>
                        @else
                            <input type="checkbox" name='product_status'>
                        @endif
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
                        Update
                    </button>
                </div>
                <div class="md:w-1/3"></div>
            </div>

        </form>
        
        <form action="/products/delete/{{ $data -> id }}" method="POST">
            @csrf
            <div class="md:flex md:items-center mt-8">
                <div class="md:w-1/3 mb-3">
                    <button class="inline-block align-baseline font-bold text-sm text-red-500 hover:text-red-600" type='submit'>
                        Delete Product
                    </button>
                </div>
            </div>
        </form>
        @endforeach
    </div>

    @include('/layouts/footer')

</body>
</html>