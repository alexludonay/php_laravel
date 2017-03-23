@include('default')
<body>

<div class="wrapper">
    <div class="content-wrapper">
        <section class="content">
            @yield("content")
        </section>
    </div>
</div>
{!! Html::script("lib/jquery-3.1.0/jquery-3.1.0.min.js") !!}
{!! Html::script("lib/bootstrap-3.3.7/js/bootstrap.min.js") !!}
@yield("headerJS")

</body>
</html>
