$(function(){
	$('#TIPOCHAMADO').change(function(){
		if( $(this).val() ) {
			$('#SERVICOS').hide();
			$('.carregando').show();
			$.getJSON('CatalogoDeServicos.php?search=',{TIPOCHAMADO: $(this).val(), ajax: 'true'}, function(j){
				var options = '<option value=""></option>';	
				for (var i = 0; i < j.length; i++) {
					options += '<option value="' + j[i].SERVICOS + '">' + j[i].nome + '</option>';
				}	
				$('#SERVICOS').html(options).show();
				$('.carregando').hide();
			});
		} else {
			$('#SERVICOS').html('<option value="">-- Escolha um estado --</option>');
		}
	});
});