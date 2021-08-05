//cargar spinner al hacer login
if (document.getElementById('sendLogin')) {
    document.getElementById('sendLogin').onclick = () => {
        document.getElementById('sendLogin').className += ' spinner-border text-light';
    }
}


//funcion para filtrar clientes en tiempo real
if (document.getElementById("search")) {
    let textSearch = document.getElementById("search");
    textSearch.onkeyup = function() {
        search(this);
    }

    function search(inputSearch) {
        let valueSearch = (inputSearch.value).toLowerCase().trim();
        let table_tr = document.getElementById("table").getElementsByTagName("tbody")[0].rows;
        for (let i = 0; i < table_tr.length; i++) {
            let tr = table_tr[i];
            let textTr = (tr.innerText).toLowerCase();
            // tr.className = (textTr.indexOf(valueSearch) >= 0) ? "show " : "hide";
            tr.className = (textTr.indexOf(valueSearch) >= 0) ? " " : "hide";

        }
    };
}

//check habilita edicion password mostrando campos
if (document.getElementById('checkChangePassword')) {
    document.getElementById('checkChangePassword').addEventListener('change', (event) => {
        document.getElementById('CurrentPassword').classList.toggle('hide');
        document.getElementById('NewPassword').classList.toggle('hide');
        document.getElementById('RepeatNewPassword').classList.toggle('hide');


    });
};


//habilita boton guardar en formulario profile si hay cambios
if (document.getElementById('userProfileForm')) {
    document.getElementById('userProfileForm').addEventListener('change', (event) => {
        document.getElementById('saveChangeProfile').disabled = false;

    })
}

if (document.getElementById('checkShowPass')) {
    document.getElementById('checkShowPass').addEventListener('click', (event) => {

        if (document.getElementById('inputNewPassword').type === 'password') {

            document.getElementById('inputNewPassword').type = "text";
            document.getElementById('inputRepeatNewPassword').type = "text";
            // document.querySelector('.bi-eye-fill').className -= (' bi-eye-fill');
            document.getElementById('iconShowPass').className -= (' bi-eye-slash-fill');
            document.getElementById('iconShowPass').className += (' bi-eye-fill');
            document.getElementById('textShowPassword').innerHTML = 'Ocultar';


        } else {
            document.getElementById('inputNewPassword').type = "password";
            document.getElementById('inputRepeatNewPassword').type = "password";
            document.getElementById('iconShowPass').className -= (' bi-eye-fill');
            document.getElementById('iconShowPass').className += (' bi-eye-slash-fill');
            document.getElementById('textShowPassword').innerHTML = 'Mostrar';

        }

    })

}





//funcion para cargar datos del registro a eliminar en modal
var confirmationModalDelete = document.getElementById('confirmationModalDelete')
if (document.getElementById('confirmationModalDelete')) {
    confirmationModalDelete.addEventListener('show.bs.modal', function(event) {

        var button = event.relatedTarget;

        // var recipient = document.getElementById('btnDeleteClient').getAttribute('data-bs-client');
        // var idClientDelete = document.getElementById('btnDeleteClient').getAttribute('data-bs-clientId');
        var recipient = button.getAttribute('data-bs-recordName');
        var idClientDelete = button.getAttribute('data-bs-recordId');

        confirmationModalDelete.querySelector('.modal-body').innerHTML = recipient;
        confirmationModalDelete.querySelector("div.modal-footer input[name='idDelete']").value = idClientDelete;
    });
};

//funcion para cargar desde api select localidad dependiendo del select provincia
// if (document.getElementById("selectProvinces")) {
//     document.getElementById("selectProvinces").onchange = () => {
//         let idProvinceSelected = document.getElementById("selectProvinces").value;

//         fetch('https://apis.datos.gob.ar/georef/api/municipios?provincia=' + idProvinceSelected + '&campos=id,nombre&max=100')
//             .then(response => response.json())
//             .then(json => {
//                 for (let i = document.getElementById('selectLocalities').options.length; i >= 0; i--) {
//                     document.getElementById('selectLocalities').remove(i);
//                 }
//                 for ($i = 0; $i < json.total; $i++) {
//                     option = document.createElement("option");
//                     option.value = json.municipios[$i].nombre;
//                     option.text = json.municipios[$i].nombre;
//                     document.getElementById("selectLocalities").appendChild(option);
//                 }
//                 option.value = 'Otra Localidad';
//                 option.text = 'Otra Localidad';
//                 document.getElementById("selectLocalities").appendChild(document.createElement("option"));

//             })


//     }
// }

//cerrar notificaciones
if (document.getElementById('notification')) {
    let notification = document.getElementById('notification');

    function notificationHide() {
        notification.className += " hide";
    }

    setTimeout(notificationHide, 12000);
}





formLoadClientData.addEventListener("load", load());

function load() {
    let idProvinceSelected;
    if (document.getElementById("selectProvinces")) {
        if (document.getElementById("selectProvinces").value != 0) {
            idProvinceSelected = document.getElementById("selectProvinces").value;
            idLocationSelected = document.getElementById("selectLocalities").getAttribute('data-location');
            let combo = document.getElementById("selectProvinces");
            let selected = combo.options[combo.selectedIndex].text;
            document.getElementById('inputSelectProvinces').value = selected;
            consultApi(idProvinceSelected, idLocationSelected);
        } else {
            document.getElementById("selectProvinces").onchange = () => {
                idProvinceSelected = document.getElementById("selectProvinces").value;
                consultApi(idProvinceSelected);
            }
        }
    }


}
document.getElementById("selectProvinces").onchange = () => {
    idProvinceSelected = document.getElementById("selectProvinces").value;
    let combo = document.getElementById("selectProvinces");
    let selected = combo.options[combo.selectedIndex].text;
    document.getElementById('inputSelectProvinces').value = selected;
    consultApi(idProvinceSelected);
}



function consultApi(idProvinceSelected, idLocationSelected) {
    fetch('https://apis.datos.gob.ar/georef/api/municipios?provincia=' + idProvinceSelected + '&campos=id,nombre&max=100')
        .then(response => response.json())
        .then(json => {
            for (let i = document.getElementById('selectLocalities').options.length; i >= 0; i--) {
                document.getElementById('selectLocalities').remove(i);
            }
            for ($i = 0; $i < json.total; $i++) {
                option = document.createElement("option");
                option.value = json.municipios[$i].nombre;
                option.text = json.municipios[$i].nombre;
                if (idLocationSelected != null) {
                    if (json.municipios[$i].nombre == idLocationSelected) { option.selected = "selected" }
                }
                document.getElementById("selectLocalities").appendChild(option);
            }
            // option.value = 'Otra Localidad';
            // option.text = 'Otra Localidad';
            // document.getElementById("selectLocalities").appendChild(document.createElement("option"));

        });
}






// formLoadClientData.addEventListener("load", load());

// function load() {
//     if (document.getElementById("selectProvinces").value != 0) {
//         let idProvinceSelected = document.getElementById("selectProvinces").value;
//         alert(idProvinceSelected);
//     }

// }