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

    <div>
        <h1>
            Admin Panel
        </h1>
    </div>

    @include('/layouts/footer')

</body>
</html>