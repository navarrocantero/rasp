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
        <i class="fas fa-lock-open fa-10x mt-5 p-5 offset-1"></i>
        <div class="d-inline-flex   w-100">
            <input type="image" src="images/trunk-open.png "
                   name="saveForm"
                   id="trunkButton"
                   class="submit img-thumbnail img-fluid p-3 btn btn-outline-light borde"/>
            <div id="trunk"></div>
        </div>
    </div>
</div>

</body>
</html>
