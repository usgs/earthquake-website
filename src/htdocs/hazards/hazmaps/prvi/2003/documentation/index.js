addEvent(window, 'load', function(_event) {
	window.IO = new Dialog();

	$('.figure').click(function(__event) {
		var d = document.createElement('div');
		var gif = $(this).attr('href')
		var pdf = gif.substring(0, gif.length - 4) + '.pdf';
		gif = gif.replace('.gif', '-600.gif');
		var title = $(this).attr('title');

		$(d).append('<img src="'+gif+'" alt="'+title+'" />' +
			'<p>' +
				'[<a href="'+pdf+'" title="PDF Format">PDF</a> | ' +
				'<a href="'+gif+'" title="GIF Format">GIF</a>]' +
			'</p>'
		);

		window.IO.alert(d,
			{
				'title': title,
				'ctype': 'text/html',
				'width': '610'
			}
		);
		$('#io_btn_ok').remove();
		return preventDefault(__event);
	});

});
