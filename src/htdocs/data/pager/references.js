
$(document).ready(function() {
	$("a").click(function () {
		var location = this.getAttribute('href',2).substr(1);
		$('li[id="' + location + '"]').effect('highlight', {}, 5000);
	});
});
