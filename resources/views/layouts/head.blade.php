<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="description" content="description here">
<meta name="keywords" content="keywords,here">
<link href="https://fonts.googleapis.com/css?family=Nunito:400,700,800" rel="stylesheet">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
<!--Replace with your tailwind.css once created-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
<!-- <link rel="stylesheet" href="{{ url('/css/style.css') }}"> -->

<style>
    hover\:border-none:hover {
        border-style: none;
    }

    #sidebar {
        transition: ease-in-out all .3s;
        z-index: 9999;
    }

    #sidebar span {
        opacity: 0;
        position: absolute;
        transition: ease-in-out all .1s;
    }

    #sidebar:hover {
        width: 150px;
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        /*shadow-2xl*/
    }

    #sidebar:hover span {
        opacity: 1;
    }

    .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
    }
    
    /* Hide default HTML checkbox */
    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }
    
    /* The slider */
    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
    }
    
    .slider:before {
        position: absolute;
        content: "";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }
    
    input:checked + .slider {
        background-color: #9F7AEA;
    }
    
    input:focus + .slider {
        box-shadow: 0 0 1px #2196F3;
    }
    
    input:checked + .slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
    }
    
    /* Rounded sliders */
    .slider.round {
        border-radius: 34px;
    }
    
    .slider.round:before {
        border-radius: 50%;
    }

    .modal {
      transition: opacity 0.25s ease;
    }
    
    body.modal-active {
      overflow-x: hidden;
      overflow-y: visible !important;
    }
</style>