loadProgressBar()


$(function () {
    comprobar();
    $("#trunkButton").on("click",  abrir);
    $("#trunkButton").on("tap",  abrir);
});
function abrir() {
    axios.get('/abrir').then(function (response) {
        let respuesta = response.data;
        trataErrores(respuesta);

    }).catch(function (error) {
        console.log(error);
    });
}

function comprobar() {

    axios.get('/comprobar').then(function (response) {
        let respuesta = response.data;
        trataErrores(respuesta);

    }).catch(function (error) {
        console.log(error);
    });
}

function trataErrores(respuesta) {

    if (respuesta === 1) {
        $('#trunk').html(' <i class="fas fa-lock-open fa-10x mt-5 p-5 offset-1"></i>')
    } else if (respuesta === 0) {
        $('#trunk').html(' <i class="fas fa-lock fa-10x mt-5 p-5 offset-1"></i>')

    }

}