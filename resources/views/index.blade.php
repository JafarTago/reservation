<!DOCTYPE html>

<html lang="en">
<head>
    <base href="">
    <meta charset="utf-8"/>
    <title>109有氧盃移地訓練預約</title>
    <meta name="description" content="Updates and statistics"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>
    <link href="{{ URL::asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css?v=7.0.5') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ URL::asset('assets/plugins/global/plugins.bundle.css?v=7.0.5') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ URL::asset('assets/plugins/custom/prismjs/prismjs.bundle.css?v=7.0.5') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ URL::asset('assets/css/style.bundle.css?v=7.0.5') }}" rel="stylesheet" type="text/css"/>
    <link rel="shortcut icon" href="{{ URL::asset('assets/media/icon/slalom.png') }}"/>
</head>
<body id="kt_body" class="header-fixed header-mobile-fixed page-loading">
<div id="kt_header_mobile" class="header-mobile bg-primary header-mobile-fixed">
    <a href="index.html">

        <img alt="Logo" src="{{ URL::asset('assets/media/icon/slalom.png') }}" class="max-h-40px"/>
    </a>
    <div class="d-flex align-items-center">
        {{--        漢堡--}}
        {{--        <button class="btn p-0 burger-icon burger-icon-left ml-4" id="kt_header_mobile_toggle">--}}
        {{--            <span></span>--}}
        {{--        </button>--}}
        {{--        <button class="btn p-0 ml-2" id="kt_header_mobile_topbar_toggle">--}}
        {{--        拿掉 kt_header_mobile_topbar_toggle 就不的出現往下滑的動作--}}
        <button class="btn p-0 ml-2" onclick="login()">
					<span class="svg-icon svg-icon-xl">

						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<polygon points="0 0 24 0 24 24 0 24"></polygon>
								<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000"
                                      fill-rule="nonzero" opacity="0.3"></path>
								<path
                                    d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                                    fill="#000000" fill-rule="nonzero"></path>
							</g>
						</svg>
                        <!--end::Svg Icon-->
					</span>
        </button>
    </div>
</div>
<div class="d-flex flex-column flex-root">
    <div class="d-flex flex-row flex-column-fluid page">
        <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
            <div id="kt_header" class="header flex-column header-fixed">
                <div class="header-top">
                    <div class="container">

                        <div class="d-none d-lg-flex align-items-center mr-3">
                            <a href="index.html" class="mr-20">

                                <img alt="Logo" src="{{ URL::asset('assets/media/img/2018LOGO-外框-02.png') }}" class="max-h-55px"/>
                            </a>
                            <ul class="header-tabs nav align-self-end font-size-lg" role="tablist">
                                <li class="nav-item">
                                    {{--                                    <a href="#" class="nav-link py-4 px-6 active" data-toggle="tab" data-target="#kt_header_tab_1" role="tab">預約練習場</a>--}}
                                </li>
                            </ul>
                        </div>
                        <div class="topbar bg-primary">
                            <!--begin::Search-->
                            <div class="dropdown">
                                <!--begin::Toggle-->
                                <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                                    <div class="btn btn-icon btn-hover-transparent-white btn-lg btn-dropdown mr-1" onclick="login()">

                                        <span class="svg-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24"/>
                                                <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000"
                                                      fill-rule="nonzero" opacity="0.3"/>
                                                <path
                                                    d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                                                    fill="#000000" fill-rule="nonzero"/>
                                            </g>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--                <div class="header-bottom">--}}
                {{--                    <div class="container">--}}
                {{--                        <div class="header-navs header-navs-left" id="kt_header_navs">--}}
                {{--                            <ul class="header-tabs p-5 p-lg-0 d-flex d-lg-none nav nav-bold nav-tabs" role="tablist">--}}
                {{--                                <li class="nav-item mr-2">--}}
                {{--                                    <a href="#" class="nav-link btn btn-clean active" data-toggle="tab" data-target="#kt_header_tab_1" role="tab">預約日期切換</a>--}}
                {{--                                </li>--}}
                {{--                            </ul>--}}
                {{--                            <div class="tab-content">--}}
                {{--                                <div class="tab-pane py-5 p-lg-0 show active" id="kt_header_tab_1">--}}
                {{--                                    <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">--}}
                {{--                                        <ul class="menu-nav">--}}
                {{--                                            <li class="menu-item menu-item-active" aria-haspopup="true">--}}
                {{--                                                <a href="index.html" class="menu-link">--}}
                {{--                                                    <span class="menu-text">預約 8月 10號</span>--}}
                {{--                                                </a>--}}
                {{--                                            </li>--}}
                {{--                                            <li class="menu-item menu-item-active" aria-haspopup="true">--}}
                {{--                                                <a href="index.html" class="menu-link">--}}
                {{--                                                    <span class="menu-text">預約 8月 11號</span>--}}
                {{--                                                </a>--}}
                {{--                                            </li>--}}
                {{--                                            <li class="menu-item menu-item-active" aria-haspopup="true">--}}
                {{--                                                <a href="index.html" class="menu-link">--}}
                {{--                                                    <span class="menu-text">預約 8月 12號</span>--}}
                {{--                                                </a>--}}
                {{--                                            </li>--}}




                {{--                                        </ul>--}}
                {{--                                    </div>--}}
                {{--                                </div>--}}

                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
            </div>

            <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                <div class="d-flex flex-column-fluid">

                    <div class="container">
                        <div class="row ">

                            @if (session('error'))
                                <div class="col-xl-12 alert alert-danger " >
                                    <h4 class="alert-heading">您慢了一步！</h4>
                                    <p>這個時段已被搶先，請重新預約！</p>
                                </div>
                            @endif
                            <div class="col-xl-12">
                                <div class="card card-custom card-stretch gutter-b" style="background-color: #22B9FF">
                                    <div class="card-header align-items-center border-0 mt-4">
                                        <div class="card-body ">
                                            @if (is_null(auth()->user()))
                                                <h3 class="text-white text-center mb-7">Hi！需要預約練習時段嗎？請 <a href="{{ route('login') }}" class="text-dark">登入</a> 進行預約</h3>
                                            @else
                                                <h1 class="text-white text-center mb-7">Hi {{ $userInfo->team_name }}！</h1>
                                                @if (is_null($userInfo->reservation))
                                                    <h5 class="text-white text-center my-lg-5">您還未預約時段，直接點擊下列時段可進行預約</h5>
                                                @else
                                                    <h5 class="text-white text-center my-lg-5">您預約的時段為</h5>
                                                    <h5 class="text-white text-center mb-8">{{ $userInfo->reservation->time }}</h5>
                                                    <input type="hidden" id="reservationTimeHidden" value="{{ $userInfo->reservation->time }}">
                                                    <img class="" style="display:block; margin:auto;" src='https://chart.googleapis.com/chart?chs=200x200&cht=qr&chld=H&chl={{ $reservationInfo }}'/>
                                                    <h6 class="text-white text-center mt-8"> - 入場時請出示 QRcode 掃描入場 - </h6>
                                                    <h6 class="text-white text-center"> - 祝您比賽勇奪佳績 - </h6>
                                                @endif
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card card-custom card-stretch gutter-b">
                                    <div class="card-header align-items-center border-0 mt-4">
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="font-weight-bolder text-dark">八月十號</span>
                                            <span class="text-muted mt-3 font-weight-bold font-size-sm">預約狀況</span>
                                        </h3>
                                        <div class="card-toolbar">
                                            <div class="dropdown dropdown-inline"></div>
                                        </div>
                                    </div>
                                    <div class="card-body pt-4">
                                        <div class="timeline timeline-5 mt-3">

                                            @foreach ($day1 as $d1)
                                                <div class="timeline-item align-items-start">
                                                    <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">
                                                        {{ date('H:i',strtotime($d1->time)) }}
                                                    </div>
                                                    <div class="timeline-badge">
                                                        <i class="fa fa-genderless {{ is_null($d1->user) ? 'text-success' : 'text-danger' }} icon-xl"></i>
                                                    </div>
                                                    @if (isset($d1->user->team_name))
                                                        <div class="timeline-content d-flex">
                                                            <span class="font-weight-bolder text-dark-75 pl-3 font-size-lg">
                                                                {{ $d1->user->team_name }}
                                                            </span>
                                                        </div>
                                                    @else
                                                        <div class="reservation-text timeline-content font-weight-mormal font-size-lg text-muted pl-3">預約
                                                            <input type="hidden" value="{{ $d1->time }}">
                                                        </div>
                                                    @endif
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card card-custom card-stretch gutter-b">
                                    <div class="card-header align-items-center border-0 mt-4">
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="font-weight-bolder text-dark">八月十一號</span>
                                            <span class="text-muted mt-3 font-weight-bold font-size-sm">預約狀況</span>
                                        </h3>
                                        <div class="card-toolbar">
                                            <div class="dropdown dropdown-inline"></div>
                                        </div>
                                    </div>
                                    <div class="card-body pt-4">
                                        <div class="timeline timeline-5 mt-3">
                                            @foreach ($day2 as $d2)
                                                <div class="timeline-item align-items-start">
                                                    <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">
                                                        {{ date('H:i',strtotime($d2->time)) }}
                                                    </div>
                                                    <div class="timeline-badge">
                                                        <i class="fa fa-genderless {{ is_null($d2->user) ? 'text-success' : 'text-danger' }} icon-xl"></i>
                                                    </div>
                                                    @if (isset($d2->user->team_name))
                                                        <div class="timeline-content d-flex">
                                                            <span class="font-weight-bolder text-dark-75 pl-3 font-size-lg">
                                                                {{ $d2->user->team_name }}
                                                            </span>
                                                        </div>
                                                    @else
                                                        <div class="reservation-text timeline-content font-weight-mormal font-size-lg text-muted pl-3">預約
                                                            <input type="hidden" value="{{ $d2->time }}">
                                                        </div>
                                                    @endif
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card card-custom card-stretch gutter-b">
                                    <div class="card-header align-items-center border-0 mt-4">
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="font-weight-bolder text-dark">八月十二號</span>
                                            <span class="text-muted mt-3 font-weight-bold font-size-sm">預約狀況</span>
                                        </h3>
                                        <div class="card-toolbar">
                                            <div class="dropdown dropdown-inline"></div>
                                        </div>
                                    </div>
                                    <div class="card-body pt-4">
                                        <div class="timeline timeline-5 mt-3">
                                            @foreach ($day3 as $d3)
                                                <div class="timeline-item align-items-start">
                                                    <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">
                                                        {{ date('H:i',strtotime($d3->time)) }}
                                                    </div>
                                                    <div class="timeline-badge">
                                                        <i class="fa fa-genderless {{ is_null($d3->user) ? 'text-success' : 'text-danger' }} icon-xl"></i>
                                                    </div>
                                                    @if (isset($d3->user->team_name))
                                                        <div class="timeline-content d-flex">
                                                            <span class="font-weight-bolder text-dark-75 pl-3 font-size-lg">
                                                                {{ $d3->user->team_name }}
                                                            </span>
                                                        </div>
                                                    @else
                                                        <div class="reservation-text timeline-content font-weight-mormal font-size-lg text-muted pl-3">預約
                                                            <input type="hidden" value="{{ $d3->time }}">
                                                        </div>
                                                    @endif
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

            <div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
                <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
                    <div class="text-dark order-2 order-md-1">
                        <span class="text-muted font-weight-bold mr-2">Copyright 2020©</span>
                        <a href="http://keenthemes.com/metronic" target="_blank" class="text-dark-75 text-hover-primary">宇犬多媒體形象工作室</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<form id="reservationForm" action="{{ route('reservation') }}" method="POST">
    @csrf
    <input type="hidden" id="reservationTime" name="reservationTime">
</form>

<script src="{{ URL::asset('assets/plugins/global/plugins.bundle.js?v=7.0.5') }}"></script>
<script src="{{ URL::asset('assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.5') }}"></script>
<script>

    function login() {
        window.location.href = './login';
    }

    $('.reservation-text').on('click', function (e) {
        e.preventDefault();

        var reservationTime = $(this).find('input').val();
        var text = "確定預約「"+reservationTime+"」？";

        if ($("#reservationTimeHidden").val() !== '') {
            text += "<br>原先預約的時段將會替您取消";
        }

        swal.fire({
            html: text,
            icon: "question",
            showCloseButton: true,
            showCancelButton: true,
            focusConfirm: false,
            confirmButtonText: '確定',
            cancelButtonText: '取消',
            customClass: {
                confirmButton: "btn font-weight-bold btn-light-primary",
                cancelButton: "btn font-weight-bold  btn-light-danger"

            },
        }).then(function (result) {
            if (result.value) {
                $("#reservationTime").val(reservationTime);
                Swal.fire(
                    '預約成功！',
                    '請於入場時出示預約畫面',
                    'success'
                ).then(function() {
                    $("#reservationForm").submit();
                })

            }
        });
    });

</script>
</body>
</html>
