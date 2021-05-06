function getScrollHeight(elm){
	var savedValue = elm.value
	elm.value = ''
	elm._baseScrollHeight = elm.scrollHeight
	elm.value = savedValue
}

function onExpandableTextareaInput({ target:elm }){
	if( !elm.classList.contains('autoExpand') || !elm.nodeName == 'TEXTAREA' ) return

		var minRows = elm.getAttribute('data-min-rows') | 0, rows;
	!elm._baseScrollHeight && getScrollHeight(elm)

	elm.rows = minRows
	rows = Math.floor((elm.scrollHeight - elm._baseScrollHeight) / 24)
	elm.rows = rows + minRows
}

document.addEventListener('input', onExpandableTextareaInput)