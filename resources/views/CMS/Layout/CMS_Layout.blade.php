<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>
    @include('CMS.Include.style')
</head>

<body id="page-top">
    <div id="wrapper">
        @include('CMS.Include.sidebar')
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                @include('CMS.Include.topbar')
                @yield('main')
            </div>
            @include('CMS.Include.footer')
        </div>
    </div>
    @include('CMS.Include.feature')
    @include('CMS.Include.script')
    
</body>

</html>