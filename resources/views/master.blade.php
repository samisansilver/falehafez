<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Product example · Bootstrap v5.0</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/product/">
    <!-- Bootstrap core CSS -->
    <link href="/assets/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <link href="/assets/dist/css/product.css" rel="stylesheet">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
</head>
<body class="background">
<main>
    <div class="d-md-flex flex-md-equal w-100 background">
        <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden background">
            <div class="row p-3 pb-0">
                <img class="col" src="/assets/dist/images/13.png">
                <img class="col mb-5" src="/assets/dist/images/11.png">
            </div>
                @yield('poet')
                @yield('translate')
                @yield('button')
            <div class="shadow-sm mx-auto p-3 mt-5 mb-0" style="width: 60%; height: 70%; border-radius: 21px 21px 0 0;">
                <p><img class="w-75" src="/assets/dist/images/logop.png"></p>
            </div>
        </div>
    </div>
</main>



<script src="/assets/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>
