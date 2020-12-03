$(document).ready(function() {
    //Capturo el valor parcial del subtotal
    var total = $('.total').html();

    //Opera sobre cada producto
    $('.product').on('change', 'input.qty', function() {
        //ejecuto esto cuando typeo
        var precioProducto = $(this).data('price');
        var qty = $(this).val();
        var newTotal = precioProducto * qty;

        $(this).parent('.product').find('.subtotal').text(parseFloat(newTotal));
        //Ejecuto la funcion
        calcularTotal();
    });
     //Calculo sobre todos los subtotales

    function calcularTotal() {
        //Sumar todos los valores de subtotal

        var suma = 0;
        $('.subtotal').each(function() {
            suma += parseFloat($(this).text());
        });
        
          //Imprimo ese valor en el span total global
        $('.precioTotal').html(suma);
        console.log(suma);
    };


    $(".eliminar").click(function(e) {
        e.preventDefault();

        var id = $(this).attr('data-id');


        $.post('eliminar.php', {
            Id: id
        }, function(a) {
            console.log(a);
            if (a) {
                $(this).closest('.product').remove();
                //alert('Si se borro');
                //location.href='./carritodecompras.php'
            }
        });

    });

    $('.agregarProducto').on('click',function(e){
        e.preventDefault();
        alert('si lo tomo');
        var id = $(this).attr('data-id');

        $.post('acciones/agregar.php', {
            id: id
        }, function(a) {
            console.log(a);
            if (a) {
               alert('El producto se agrego a tu carrito');
            }
        });
    })

    //animación del registro de usuario
    $('.toggle').click(function(){
        $('.form').animate({
            height:"toggle",
            'padding-top': 'toggle',
            'padding-bottom':'toggle',
            'opacity': 'toggle'
        }, "slow");
    });
