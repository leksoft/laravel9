<!-- resources/views/layouts/frontend.blade.php -->
<!doctype html>
<html lang="{{ config('app.locale') }}">
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>App Name - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.min.css" rel="stylesheet">

    @yield('css_before')
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark" aria-label="Main navigation">
        <div class="container-fluid">
            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home Page</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">หน้าหลัก</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/posts') }}">บทความ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/category') }}">ประเภทบทความ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/products') }}">สินค้า</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/aboute') }}">เกี่ยวกับเรา</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">

        @yield('content')
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.all.min.js"></script>

@if (Session::has('success'))
    <script>
        Swal.fire(
            'แจ้งเตือนการทำรายการ!',
            '{{ Session::get('success') }}',
            'success'
        )
    </script>
@endif

@yield('js_before')

</html>
