function CerrarSesion() {
    if (confirm("Seguro que desea salir de la cuenta?")) {
        document.location = '../Index.php';
    } else { }
}

function EliminarVehiculo() {
    if (confirm("Seguro que desea eliminar el vehiculo seleccionado?")) {
        document.location = '../GestionVehiculosView.php';
    } else { }
}

function EliminarSolicitante() {
    if (confirm("Seguro que desea eliminar al solicitante seleccionado?")) {
        document.location = '../GestionSolicitantesView.php';
    } else { }
}

function EliminarChofer() {
    if (confirm("Seguro que desea eliminar al chofer seleccionado?")) {
        document.location = '../GestionChoferesView.php';
    } else { }
}

function EliminarGira() {
    if (confirm("Seguro que desea eliminar la gira seleccionada?")) {
        document.location = './GestionGirasView.php';
    } else { }
}

function activarEmpleado(id, activo) {
    if (confirm("Seguro que desea activar el empleado?")) {
        const data = new FormData();//crea formulario
        data.append("action", "cambiar");//le indica la acción del formulario como parametro de nombre action con valor logOut
        data.append("idEmpleado", id);//indica la variable que quiere enviar al action php
        data.append("empleadoActivo", activo);//indica la variable que quiere enviar al action php
        var http = new XMLHttpRequest();//crea la variable http para el envió de datos a la controller 
        http.open('POST', '../business/EstadoEmpleadoAction.php', true);//define el metodo de envio post o get y la ruta de archivo de la controller 
        http.send(data);//envia el formulario
        http.onreadystatechange = function () {//espera respuesta
            if (http.readyState === 4) {//respuesta correcta
                alert(http.responseText);
                document.location = '../view/EstadoEmpleadoView.php';
            }
        };
    } else { }
}
