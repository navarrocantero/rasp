<html>
<head>
    <title>Laravel</title>
    @include('layout.scripts')
    @include('layout.styles')
    {{--<script src="js/releUno.js"></script>--}}

</head>
<body>
<div class="container-fluid">
    <div class="col-12">
        <div class="navbar bg-danger">

        </div>
    </div>
    @if($rele)
        {{$rele}}
        @if($rele === 0)
            <img src="images/trunk-open.png" alt="">
            <p>0</p>
            @elseif($rele === 1)
            <img src="images/trunk-open.png" alt="">
            <p>1</p>
        @endif
    @endif
    
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
