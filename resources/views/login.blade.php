

<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
<head><base href="../../../../">
    <meta charset="utf-8" />
    <title>109有氧盃移地訓練預約</title>
    <meta name="description" content="Login page example" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Custom Styles(used by this page)-->
    <link href="{{ URL::asset('assets/css/pages/login/classic/login-4.css?v=7.0.5') }}" rel="stylesheet" type="text/css" />
    <!--end::Page Custom Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="{{ URL::asset('assets/plugins/global/plugins.bundle.css?v=7.0.5') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/plugins/custom/prismjs/prismjs.bundle.css?v=7.0.5') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('assets/css/style.bundle.css?v=7.0.5') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <!--end::Layout Themes-->
    <link rel="shortcut icon" href="assets/media/icon/slalom.png" />
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled page-loading">
<!--begin::Main-->
<div class="d-flex flex-column flex-root">
    <!--begin::Login-->
    <div class="login login-4 login-signin-on d-flex flex-row-fluid" id="kt_login">
        <div class="d-flex flex-center flex-row-fluid bgi-size-cover bgi-position-top bgi-no-repeat" style="background-image: url('assets/media/bg/bg-3.jpg');">
            <div class="login-form text-center p-7 position-relative overflow-hidden">
                <!--begin::Login Header-->
                <div class="d-flex flex-center mb-15">
                    <a href="#">
                        <img src="{{ URL::asset('assets/media/icon/slalom.png')}}" class="max-h-225px" alt="" />
                    </a>
                </div>
                <!--end::Login Header-->
                <!--begin::Login Sign in form-->
                <div class="login-signin">
                    <div class="mb-13">
                        <h3>登入場地預約系統</h3>
                        <div class="text-muted font-weight-bold">為您的選手進行移地訓練，保持最佳狀態</div>
                    </div>
                    <form class="form" id="kt_login_signin_form">
                        <div class="form-group mb-5">
                            <input class="form-control h-auto form-control-solid py-4 px-8" type="text" placeholder="手機號碼" name="account" autocomplete="off" />
                        </div>
                        <div class="form-group mb-5">
                            <input class="form-control h-auto form-control-solid py-4 px-8" type="password" placeholder="密碼" name="password" />
                        </div>
                        <div class="form-group d-flex flex-wrap justify-content-between align-items-center">
                            <div class="checkbox-inline">
{{--                                <label class="checkbox m-0 text-muted">--}}
{{--                                    <input type="checkbox" name="remember" />--}}
{{--                                    <span></span>Remember me</label>--}}
                            </div>
                            <a href="javascript:;" id="kt_login_forgot" class="text-muted text-hover-primary">忘記密碼 ?</a>
                        </div>
                        <button id="kt_login_signin_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4">登入</button>
                    </form>
                    <div class="mt-10">
                        <span class="opacity-70 mr-4">沒有帳號嗎？</span>
                        <a href="javascript:;" id="kt_login_signup" class="text-muted text-hover-primary font-weight-bold">那來註冊吧!</a>
                    </div>
                </div>
                <!--end::Login Sign in form-->
                <!--begin::Login Sign up form-->
                <div class="login-signup">
                    <div class="mb-13">
                        <h3>註冊</h3>
                        <div class="text-muted font-weight-bold">建立一個帳號替您的選手登記移地訓練時段</div>
                    </div>
                    <form class="form" id="kt_login_signup_form">
                        <div class="form-group mb-5">
                            <input class="form-control h-auto form-control-solid py-4 px-8" type="text" placeholder="手機號碼" name="account" required/>
                        </div>
                        <div class="form-group mb-5">
                            <input class="form-control h-auto form-control-solid py-4 px-8" type="password" placeholder="密碼" name="password" required />
                        </div>
                        <div class="form-group mb-5">
                            <input class="form-control h-auto form-control-solid py-4 px-8" type="text" placeholder="單位名稱" name="team_name"  required/>
                        </div>
                        <div class="form-group d-flex flex-wrap flex-center mt-10">
                            <button id="kt_login_signup_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-2">註冊</button>
                            <button id="kt_login_signup_cancel" class="btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-2">取消</button>
                        </div>
                    </form>
                </div>
                <!--end::Login Sign up form-->
                <!--begin::Login forgot password form-->
                <div class="login-forgot">
                    <div class="mb-10">
                        <h3>忘記登入資訊嗎？</h3>
                        <div class="text-muted font-weight-bold mt-5">請洽曾大宇教練協助查詢登入資訊</div>
                    </div>
                    <form class="form" id="kt_login_forgot_form">
{{--                        <div class="form-group mb-10">--}}
{{--                            <input class="form-control form-control-solid h-auto py-4 px-8" type="text" placeholder="Email" name="email" autocomplete="off" />--}}
{{--                        </div>--}}
                        <div class="form-group d-flex flex-wrap flex-center mt-5">
                            <button id="kt_login_forgot_cancel" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-2">回登入頁頁</button>
                        </div>
                    </form>
                </div>
                <!--end::Login forgot password form-->
            </div>
        </div>
    </div>
    <!--end::Login-->
</div>
<!--end::Main-->
<script>var HOST_URL = "https://keenthemes.com/metronic/tools/preview";</script>
<!--begin::Global Config(global config for global JS scripts)-->
<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#6993FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#E1E9FF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
<!--end::Global Config-->
<!--begin::Global Theme Bundle(used by all pages)-->
<script src="{{ URL::asset('assets/plugins/global/plugins.bundle.js?v=7.0.5') }}"></script>
<script src="{{ URL::asset('assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.5') }}"></script>
<script src="{{ URL::asset('assets/js/scripts.bundle.js?v=7.0.5') }}"></script>
<!--end::Global Theme Bundle-->
<!--begin::Page Scripts(used by this page)-->
<script src="{{ URL::asset('assets/js/pages/custom/login/login-general.js?v=7.0.5') }}"></script>
<!--end::Page Scripts-->
</body>
<!--end::Body-->
</html>
