$(' a[href^="#"]').on('click', function(e) {
	e.preventDefault();
	var id = $(this).attr('href'),
		targetOffset = $(id).offset().top;
	$("html, body").animate({
	  scrollTop: targetOffset // ir para a secção cujo o id é o valor do atributo `data-section` do item do menu onde clicamos
	}, 500);
  });

  $('#header-mobile .action').on('click', function(){
	  $('#header-mobile .nav').toggleClass('active-menu');
  });