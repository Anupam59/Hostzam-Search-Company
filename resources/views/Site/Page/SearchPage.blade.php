@extends('Site.Layout.SiteMain')
@section('SiteContent')

    <nav class="navbar navbar-expand-lg navbar-light bg-white pt-4 pb-3">
        <div class="container-fluid">
            <div class="justify-content-between navbar-collapse" id="navbarSupportedContent">
                <ul class="align-items-center flex-sm-row mb-2 mb-lg-0 navbar-nav w-100 w-md-75">
                    <li class="nav-item me-md-5 mb-2 mb-sm-0 me-2">
                        <a class="" href="{{ url('/') }}">
                            <img src="{{asset('Site/img/hostzam.jpg')}}" alt="Laravel" class="logo_details">
                        </a>
                    </li>
                    <li class="nav-item w-100">
                        <form action="{{ url('/') }}/search" method="get" class="search-form search_data_details">
                            <div class="input-group position-relative">
                                <input type="text" class="form-control search_data search_data_details" name="keyword" placeholder="Search Company" value="{{ Request::get('keyword') }}" aria-label="Search" required="">
                                <div class="input-group-append search-btn">
                                    <button class="btn search-btn1" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                                <div class="search-product-inner" id="live_data_show"></div>
                            </div>
                        </form>
                    </li>
                </ul>

                <div class="pt-3">
                    <div class="row fixed-column">
                        <div class="col-12 ads-parent-responsive d-block d-xl-none d-lg-none d-md-block d-sm-block">
                            <div class="text-center">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex">

                </div>
            </div>
        </div>
    </nav>




    <div class="main-search-deatails py-3 container">
        <div class="row">
            <div class="col-12 col-md-8">
                <div class="">
                    <h3 class="search-results-title">Search Results for '{{ Request::get('keyword') }}'</h3>
                    <p class="search-results-keyword">About {{ $Company->count() }} results in {{ number_format( $Time, 2 ) }} Seconds</p>

                    @if(!$Company->isEmpty())
                        @foreach($Company as $key=>$CompanyItem)
                            <div class="border-bottom mb-2 py-3 result row">
                                <div class="col-12 col-md-8">
                                    <h5 class="company-title"><a href="{{ $CompanyItem->company_link }}" target="_blank">{{ $CompanyItem->company_title }}</a></h5>
                                    <p style="margin-bottom: 8px !important; margin-top: -2px; font-size: 14px;">{{ $CompanyItem->company_desc }}</p>

                                </div>
                                <div class="col-12 col-md-4">
                                    <p class="meta_social_box d-flex">

                                        <a class="text-brand d-inline-block meta_social_link me-2" href="{{ $CompanyItem->company_link }}" target="_blank" rel="noopener noreferrer">
                                            <img src="{{asset('Site/img/domain.png')}}" alt="Laravel" class="details-img">
                                        </a>

                                        <a class="text-brand d-inline-block meta_social_link me-2" href="tel:{{$CompanyItem->company_number}}" target="_blank">
                                            <img src="{{asset('Site/img/phone.png')}}" alt="Laravel" class="details-img">
                                        </a>

                                        <a class="text-brand d-inline-block meta_social_link " href="mailto:{{$CompanyItem->company_email}}" target="_blank">
                                            <img src="{{asset('Site/img/mail.png')}}" alt="Laravel" class="details-img">
                                        </a>
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    @else
                        @include('Admin.Common.DataNotFound')
                    @endif


                    <div class="row">
                        <div class="col d-flex align-items-center justify-content-center mt-4">
                            {{ $Company->onEachSide(3)->links('Site.Common.Paginate') }}
                        </div>
                    </div>

                    <div class="row mt-2 mb-3">
                        <div class="col d-flex align-items-center justify-content-center mt-4">
                            <a class="" href="{{ url('/') }}">
                                <img src="{{asset('Site/img/hostzam.jpg')}}" alt="HOSTZAM" class="logo_details">
                            </a>
                        </div>
                    </div>

                </div>

            </div>


            <div class="col-12 col-md-4 fixed-column layout-section custom-sponsored">
                <div class="row fixed-column">
                    <div class="col-12 ads-parent-responsive d-none d-xl-block d-lg-block d-md-none d-sm-none">
                        <div class="text-center">
                            <a href="#" target="_blank">
                                <img border="0" alt="" src="{{asset('Site/img/1707725831.png')}}" width="160" height="600">
                            </a>
                            <a href="#" target="_blank">
                                <img border="0" alt="" src="{{asset('Site/img/1708270092.jpg')}}" width="160" height="600">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
@section('SiteScript')
    @yield('NewsSection4')
    <script>

    </script>
@endsection
