
function enviar(){
    event.preventDefault()
    let nombre = document.querySelector('[name="nombre"]').value;
    let apellido = document.querySelector('[name="apellido"]').value;
    let cedula = document.querySelector('[name="cedula"]').value;
    let lugartrabajo= document.querySelector('[name="lugartrabajo"]').value;
    let departamento= document.querySelector('[name="departamento"]').value;
    let sueldo= document.querySelector('[name="sueldo"]').value;

    data = {
        registro: "success",
        nombre: nombre,
        apellido: apellido,
        cedula: cedula,
        lugartrabajo: lugartrabajo,
        departamento: departamento,
        sueldo:sueldo
    };

    // console.log(data);


    $.ajax({
        url: "process.php",
        type: "POST",
        data: data,
        success: function(result) {
            let resultado = JSON.parse(result);
            console.log(result);
            alert(resultado.mensaje);
            if(resultado.data != null) {
                addrow(resultado.data);
            }
        }
    });

}

function addrow(i) {
    let tbody = document.querySelector('#tbody');
    tbody.innerHTML += ` <tr>
                            <td>${i.nombre}</td>
                            <td>${i.apellido}</td>
                            <td>${i.cedula}</td>
                            <td>${i.lugartrabajo}</td>
                            <td>${i.departamento}</td>
                            <td>${i.sueldo}</td>
                        </tr>`;
}
