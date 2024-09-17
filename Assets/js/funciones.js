let tblUsuarios;
$('#tblUsuarios').DataTable({
    ajax: {
        url: base_url + "Usuarios/listar",
        dataSrc: function (json) {
            console.log(json); // Verifica los datos aquí
            return json;
        }
    },
    columns: [
        { 'data': 'id_usuario' },
        { 'data': 'usuario' },
        { 'data': 'contraseña' }
    ],
    language: {
        url: "//cdn.datatables.net/plug-ins/1.11.5/i18n/Spanish.json"
    }
});



function frmLogin(e){
    e.preventDefault();
    const usuario = document.getElementById("usuario");
    const contraseña = document.getElementById("contraseña");

    usuario.classList.remove("is-invalid");
    contraseña.classList.remove("is-invalid");
    
    if(usuario.value == ""){
        usuario.classList.add("is-invalid");
        usuario.focus();
    } else if(contraseña.value == ""){
        contraseña.classList.add("is-invalid");
        contraseña.focus();
    } else {
        const url = base_url + "Usuarios/validar";
        const frm = document.getElementById("frmLogin");
        const http = new XMLHttpRequest();
        http.open("POST", url, true);
        http.send(new FormData(frm));
        http.onreadystatechange = function(){
            if (this.readyState == 4 && this.status == 200){
                const res = JSON.parse(this.responseText);
                if ( res == "ok"){
                    window.location = base_url + "Usuarios";
                } else {
                    document.getElementById("alerta").classList.remove("d-none");
                    document.getElementById("alerta").innerHTML = "Usuario o contraseña es incorrecta";
                }
            }
        }
    }
} 