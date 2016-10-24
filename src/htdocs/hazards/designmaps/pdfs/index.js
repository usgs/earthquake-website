$(document).ready(function() {
  var start_offset = $('#map-preview').offset();

  $('.map-list a').click(function() {
    var a = this;

    $('.map-list .active-map').removeClass('active-map');
    $(a).closest('li').addClass('active-map');

    $('#map-preview').fadeOut(400, function() {
      $('#map-preview').children().remove();
      $('#map-preview')
        .append(
          '<h2>' +
          $(a).closest('div').find('h2').text() +
          ' - ' + $(a).text() + '</h2>' + '<a href="' + a.href +
          '" title="Click to download this map">' + '<img src="' +
          a.href.replace(/\/([^/]*).pdf$/, '/thumbnails/$1.png') +
          '" />' + '<span>Download PDF</span>' + '</a>' +
          '<p class="disclaimer">You will need a PDF viewer, such\
          as the free <a href="http://get.adobe.com/reader/"\
          target="_blank">Adobe Reader</a>, to display these\
          files.'
        )
        .css({visibility: 'hidden', display: 'block'});

      $('#map-preview')
        .css({paddingTop: Math.max(
          0,
          ($(document).scrollTop() - $('#map-preview').offset().top
          - 10)
        ), visibility: 'visible', display: 'none'});

      $('#map-preview').fadeIn();
    });

    return false;
  });
  $('.map-list a').click(function() { return false; });
  $('.section').each(function() {
    $(this).find('ul > li')
      .addClass(function(_idx) { return ['left', 'right'][_idx % 2] });
  });
});
