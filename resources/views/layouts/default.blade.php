<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @if (trim($__env->yieldContent('title')))
            <title>@yield('title')-{{ env('APP_NAME') }}</title>
        @else
            <title>{{ env('APP_NAME') }}</title>
        @endif
        <link rel="icon" href="/favicon.ico" type="image/x-icon" />
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" type="text/css" href="//at.alicdn.com/t/font_3016653_zrx55fw5h2.css">
        <script src="{{ mix('js/app.js') }}"></script>
    </head>

    <body>
        @include('layouts._header')
        <div class="container">
            @yield('content')
        </div>
        @include('layouts._footer')

        <script type="text/javascript">
          $(function () {
            @if (count($errors) > 0)
                $('#errModal').modal();
            @else
                $('#msgModal').modal();
            @endif
          });
        </script>
    </body>
</html>
