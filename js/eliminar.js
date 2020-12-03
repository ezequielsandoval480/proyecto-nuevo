var inicio=function () {
    $(".eliminar").click(function(e){
        e.preventDefault();
        var id=$(this).attr('data-id');
        $(this).parentsUntil('.productofinal').remove();
        $.post('eliminar.php',{
            Id:id
        },function(a){
            if(a=='0'){
                location.href="./carritodecompras.php";
            }
        });

    });
}   
$(document).on('ready',inicio);