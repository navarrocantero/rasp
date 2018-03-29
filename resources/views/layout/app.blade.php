<html>
<head>
    <title>Laravel</title>
    @include('layout.scripts')
    @include('layout.styles')
    <script src="js/releUno.js"></script>

</head>
<body>
<div class="container-fluid">
    <div class="col-12">
        <div class="navbar bg-danger">

        </div>
    </div>
    <div class="col">
        <form action="{{url('/rele')}}" method="post">
            {{csrf_field()}}
            <button class="btn btn-danger col-12 mt-5" type="submit">Rele 1</button>
        </form>
    </div>
</div>
</body>
</html>
