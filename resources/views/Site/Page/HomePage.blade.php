@extends('Site.Layout.SiteMain')
@section('SiteContent')

    <div class="main-search">
        <div class="container">
            <div class="d-flex justify-content-center">
                <img src="{{asset('Site/img/hostzam.jpg')}}" alt="Laravel" class="logo">
            </div>
            <form action="{{ url('/') }}/search" method="get" class="search-form">
                <div class="input-group mb-3 position-relative">
                    <input type="text" class="form-control search_data" name="keyword" placeholder="Search Company" aria-label="Search" required="">
                    <div class="input-group-append search-btn">
                        <button class="btn search-btn1" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                    <div class="search-product-inner" id="live_data_show" style="display: none;"></div>
                </div>
            </form>
        </div>
    </div>

@endsection
@section('SiteScript')
    @yield('NewsSection4')
    <script>

    </script>
@endsection
