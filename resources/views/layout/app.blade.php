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
    @isset($rele)
        <p id="rele">{{$rele}}</p>
    @endisset
    @empty($rele)
        no
    @endempty
    <div class="col jumbotron">
        <form action="{{url('/abrir')}}" method="post">
            {{csrf_field()}}
            <button class="btn btn-success col-12 mt-5" type="submit">ABRIR</button>
        </form>

        <form action="{{url('/cerrar')}}" method="post">
            {{csrf_field()}}
            <button class="btn btn-danger col-12 mt-5" type="submit">CERRAR</button>
        </form>
    </div>
</div>
</body>
</html>
