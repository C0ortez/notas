 $(document).ready(function () {
window.alert("alerta");
     $("#idpais").change(function(event){

        var dato = $("#idpais").find(":selected").val();
        
        jQuery.post("../utileria/assets/js/llenardepartamento.php", {
            idpais: dato
        }, function (data) {
            $("#departamento select").html(data).fadeIn();
        });
    });

 });
