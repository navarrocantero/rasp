pressButon = '#f8f9fa';
unpressButton = '#6c757d';
$(function () {
    loadProgressBar()
    comprobar();

});
//
//
//
// $("#trunkButton").bind("tap",  tapHandler);
//
// function tapHandler( event ){
//     $( event.target ).addClass( "tap" );
// }
//
// $("#trunkButton").on('tap',abrir);
$("#trunkButton").on('click', abrir);


function abrir() {
    $("#trunkButton").css('background-color',pressButon);
    axios.get('/abrir').then(function (response) {
        var respuesta = response.data;
        trataErrores(respuesta,true);

    }).catch(function (error) {
        console.log(error);
    });
}

function comprobar() {

    axios.get('/comprobar').then(function (response) {
        var respuesta = response.data;
        trataErrores(respuesta,false);

    }).catch(function (error) {
        console.log(error);
    });
}

function trataErrores(respuesta, boton) {
    if (respuesta === 1) {
        $('#trunk').html(' <i class="fas fa-lock-open fa-10x mt-5 p-5 offset-1"></i>')
    } else if (respuesta === 0) {
        $('#trunk').html(' <i class="fas fa-lock fa-10x mt-5 p-5 offset-1"></i>')
    }
console.log("ok")
    if (boton){
        $("#trunkButton").css('background-color',unpressButton);

    }

}