<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HOSTZAM</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('Site/img/favicon.jpg')}}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{asset('Site/plugins/fontawesome/css/all.css')}}" rel="stylesheet">
    <link href="{{asset('Site/css/style.css')}}" rel="stylesheet">

</head>
<body>

<!--begin::Content wrapper-->
@yield('SiteContent')
<!--end::Content wrapper-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- jQuery -->
<script src="{{asset('Site/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('Site/plugins/fontawesome/js/all.js')}}"></script>
<script src="{{asset('Site/js/axios.min.js')}}"></script>
@yield('SiteScript')
</body>
</html>
