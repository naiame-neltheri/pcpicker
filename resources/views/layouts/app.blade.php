<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>{{ config('app.name', 'PC Builder') }}</title>
        <link href="/auth/css/styles.css" rel="stylesheet" />
        <script src="/js/all.min.js" crossorigin="anonymous"></script>
        <style type="text/css">
            .bg-primary {
                background-color: #343A40 !important;
            }
        </style>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    @yield('content')
                </main>
            </div>
        </div>
        <script src="/js/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="/auth/js/scripts.js"></script>
    </body>
</html>