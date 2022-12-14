<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="ظام الارشاد والتوجية" />
    <meta name="description" content="نظام المدرسة التقنية هو نظام اداري ارشادي لمساعدة المشرفين والاداريين في متابعه اجراءات الطلاب بالمدارس ." />
    <meta name="author" content="بدر العصيمي" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    @include('layouts.head')
</head>

<body style="" class="row">

    <div class="wrapper col-12">

        <!--=================================
 preloader -->

        <div id="pre-loader">
            <img src="{{asset('assets/images/pre-loader/loader-01.svg')}}" alt="">
        </div>

        <!--=================================
 preloader -->

        @include('layouts.main-header')

        @include('layouts.main-sidebar')

        <!--=================================
 Main content -->
        <!-- main-content -->
        <div class="content-wrapper mx-auto-auto" >

            @yield('page-header')

            @yield('content')

            <!--=================================
 wrapper -->

            <!--=================================
 flooter -->

{{--            @include('layouts.footer')--}}
        </div><!-- main content wrapper end-->
    </div>


    <!--=================================
 footer -->

    @include('layouts.footer-scripts')

</body>

</html>
