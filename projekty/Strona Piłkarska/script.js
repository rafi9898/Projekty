$(document).ready(function(){
$('.pick1').click(function(){
$('.pick').slideToggle();
})
});

$(document).ready(function(){
$('.login-up').click(function(){
$('.login-push').slideToggle();
})
$('.cancel-icon').click(function(){
$('.login-push').slideToggle();
})
});

$(document).ready(function(){
 
		$('*[data-animate]').addClass('hide').each(function(){
      $(this).viewportChecker({
        classToAdd: 'show animated ' + $(this).data('animate'),
        classToRemove: 'hide',
        offset: '30%'
      });
    });
 
	});
