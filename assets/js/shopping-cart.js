function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}

function recalculateTotal() {
	var subtotal = 0;
	$('.price-total-product').each(function () {
		subtotal += parseFloat($(this).text().substring(1, $(this).text().length));
	});
	
	$('#subtotal').text("$" + subtotal.toFixed(2));

	var total = subtotal + parseFloat($('#shipping').text().substring(1, $('#shipping').text().length));
	$('#total').text("$" + total);

	return total;
}

$(document).ready(function() {
	$('.add-to-cart').click(function() {
		var form = $(this).parent().find('input[name=product_id], input[name=amount]').serialize();
		$.ajax({
			url:"/cart/cart/add_product_cart",
			type: 'POST',
			data: form,
			success: function() {
						$('#cart-popover').trigger('mouseenter');
						setTimeout(function(){$('#cart-popover').trigger('mouseleave');}, 2000);
			}
		});
		$('#cart-popover .glyphicon-shopping-cart').effect("shake", {times:4, distance:15},  900);

	});

	$('#cart-popover').hover(function() {
	    var e=$(this);
	    $.get(e.data('poload'),function(d) {
	        e.popover({content: d, html:true}).popover('show');
	    });
	    $(document).click(function() {
	    	$('#cart-popover').trigger('mouseleave');
	    })
	}, function() { var e = $( this ); e.popover( 'destroy' ) });

	$('.product-quantity').bind("keyup change", function() {
		var e = $(this);
		var price = e.parent().parent().find('.price-single-product').text();
		price = parseFloat(price.substring(1, price.length));
		var total = price * e.val();
		e.parent().parent().find('.price-total-product').html("<strong>$" + total.toFixed(2) + "</strong>");
		recalculateTotal();
		var form = e.parents("tr").find('input[name=product_id], input[name=amount]').serialize();
		$.ajax({
			url:"/cart/cart/edit_product_cart",
			type: 'POST',
			data: form
		});
	});

	$('.remove-product').click(function() {
		if(confirm("Are you sure you want to remove this product?")){
			$(this).parents("tr").remove();
			recalculateTotal();
			var form = $(this).parents("tr").find('input[name=product_id]').serialize();
			$.ajax({
				url:"/cart/cart/remove_product_cart",
				type:"POST",
				data: form
			});
		}
	});

});



