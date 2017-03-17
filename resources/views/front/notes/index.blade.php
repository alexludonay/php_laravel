@include('front.commun.header')
<body id="index" class="home page">
    @include("front.commun.alert")
    <div class="wrapper">
        @include('front.commun.menu')
        <div class="content-wrapper">
            <section class="content">

                @yield("content")
            </section>
        </div>
        @include("front.commun.footer")

        <div class="control-sidebar-bg"></div>
    </div>
