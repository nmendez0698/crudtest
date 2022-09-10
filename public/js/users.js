$(document).ready(function () {
    $('#usertable').DataTable();
});

function editarUsuario(id) {
    $.ajax({
        type: "GET",
        url: "users/edit/"+id, 
        success: function(result){
            result.forEach(r => {
                document.getElementById("id_user").value=r.id_user;
                document.getElementById("nombre_edit").value=r.name;
                document.getElementById("usuario_edit").value=r.username;
                document.getElementById("correo_edit").value=r.email;
                document.getElementById("contra_edit").value=r.pass;
                document.getElementById("tel_edit").value=r.phone;

            });
           
        }
    });
}