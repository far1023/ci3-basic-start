// JQuery needed
//
// and .bg-kis for css styling
//
// .bg-kis {
// 	background-color: #004A99 !important;
// 	color: #FFF !important;
// }

$('select').change(function(){
	var text = $(this).find('option:selected').text()
	var $aux = $('<select/>').append($('<option/>').text(text))
	$(this).after($aux)
	$(this).width($aux.width())
	$aux.remove()
	if ($(this).val()) {
		$(this).addClass('bg-kis')
	} else {
		$(this).removeClass('bg-kis')
	}
}).change();