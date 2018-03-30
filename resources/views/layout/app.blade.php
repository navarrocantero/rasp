<html>
<head>
    <title>Laravel</title>
    @include('layout.scripts')
    @include('layout.styles')
    <script src="js/releUno.js" defer></script>

</head>
<body>

<div class="container-fluid bg-secondary h-100">
    <div class="col-12">
        <div class="navbar bg-dark p-4 mb-5"></div>

        <div class="d-inline-flex col-12  w-100">
            <div class="col-3 mt-5">
                <div id="trunk"></div>

            </div>
            <div class="col-8 offset-1">
                <input type="image" src="images/trunk-open.png "
                       name="saveForm"
                       id="trunkButton"
                       class="submit img-thumbnail img-fluid p-3 btn btn-outline-light borde"/>
            </div>

        </div>
    </div>
</div>

</body>
</html>
