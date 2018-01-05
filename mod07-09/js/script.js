// $('p').hide();  /*targetting an element*/

// $('.para-to-hide').hide(); /*targetting a class*/

// $('#para-to-hide').hide(); /*targetting a id*/

// $('p').click(function(){
// 	$(this).hide();

// })

// function hideThisElement(){
// 	$(this).hide();
// }

// $('p').click(hideThisElement);

$('#para-to-hide').hover(function(){
	$(this).html("I am a changed paragraph.");
});

$('p').click(function(){
	$(this).attr("align", "right");
	$(this).css("color", "red");
})