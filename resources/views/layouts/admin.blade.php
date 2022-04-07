<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>@yield('title')</title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="{{ asset('assets') }}/admin/vendors/mdi/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="{{ asset('assets') }}/admin/vendors/css/vendor.bundle.base.css">
        <!-- Layout styles -->
        <link rel="stylesheet" href="{{ asset('assets') }}/admin/css/style.css">
        <!-- End layout styles -->
        <link rel="shortcut icon" href="{{ asset('assets') }}/admin/images/favicon.ico" />
         <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"     integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"     crossorigin="anonymous">
        @yield('javascript')
    </head>
    <body>
      <body>
        <div class="container-scroller">
          
          
            @include('admin._navbar')
          <div class="container-fluid page-body-wrapper">
            @include('admin._sidebar')
            <div class="main-panel">
              @yield('content')
              @include('admin._footer')
            </div>
          </div>

        </div>
    </body>
