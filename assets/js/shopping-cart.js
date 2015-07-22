function addToCart() {
	var form = $('input[name=product_id], input[name=amount]').serialize();

	$.ajax({
		url:"/cart/cart/add_product_cart",
		type: 'POST',
		data: form
	});
}


$(document).ready(function() {

		$('*[data-poload]').hover(function() {
		    var e=$(this);
		    $.get(e.data('poload'),function(d) {
		        e.popover({content: d, html:true}).popover('show');
		    });
		}, function() { var e = $( this ); e.popover( 'destroy' ) });
});



