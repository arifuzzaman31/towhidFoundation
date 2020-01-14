function getModal(url,text)
{
	$('#AdminModal').modal();
    $('.modal-title').text(text).css('font-weight', 'bold');
    $('.modal-body').load(url);
}
