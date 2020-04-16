<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/AdminLTE.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/skins/_all-skins.min.css')}}"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/solid.css"
          integrity="sha384-QokYePQSOwpBDuhlHOsX0ymF6R/vLk/UQVz3WHa6wygxI5oGTmDTv8wahFOSspdm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/fontawesome.css"
          integrity="sha384-vd1e11sR28tEK9YANUtpIOdjGW14pS87bUBuOIoBILVWLFnS+MCX9T6MMf0VdPGq" crossorigin="anonymous">
{{--    <link rel="stylesheet" href="{{asset('css/datatables.min.css')}}"/>--}}
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!-- include summernote css/js-->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.css" rel="stylesheet">
    @yield('stylesheets')
    <script src="{{ asset('js/jquery/dist/jquery.min.js') }}"></script>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    @include('backend.partials.header')
    @include('backend.partials.sidebar')
    @yield('content')
</div>


<script src="{{ asset('js/jquery/dist/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap/dist/js/bootstrap.js') }}"></script>
<script src="{{ asset('js/bootstrap/dist/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('js/adminlte.min.js') }}"></script>


<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/init.js') }}"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>


<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.js"></script>
<script>
    $(document).ready(function () {
        $('.summernote').summernote({
            height: 200,
            dialogsInBody: true,
            callbacks: {
                onInit: function () {
                    $('body > .note-popover').hide();
                }
            },
        });
    });
</script>
@yield('scripts')
</body>
</html>
