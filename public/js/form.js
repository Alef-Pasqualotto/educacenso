$(function () {

	$('#sim, #nao').on('click', function (e) {
		e.preventDefault();
		$(this).attr('id') == 'sim' ? $('#form_valor_diferenca').css('display', 'block') : $('#form_valor_diferenca').css('display', 'none');
		
	});

});