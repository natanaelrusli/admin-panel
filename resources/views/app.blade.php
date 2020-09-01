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

    @include($components)            

    @include('/layouts/footer')

</body>
</html>
