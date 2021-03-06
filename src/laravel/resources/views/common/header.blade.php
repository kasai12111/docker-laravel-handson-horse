<!DOCTYPE html>
<html lang="ja">
    <!-- ヘッダーメニュー -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>カケゴトクン</title>
        <!-- cssをインポート -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">
    </head>
    <body>
        @include('parts.header')
        @yield('content')
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>