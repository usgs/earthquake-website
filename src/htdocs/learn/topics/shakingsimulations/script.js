$(document).ready(function() {

  // setup tooltips (mouseover titles)
  $("#content a, #content area").tooltip({
      track: true,
      delay: 0,
      showURL: false
  });

  // default: hide all content, highlight first tab, display content associated w/ first tab
  $(".section").hide();
  highlightTab("div#sections li:first-child a");
  var id = getId("div#sections li:first-child a");
  showContent(id, 'instant');

  $("div#sections a").bind("click", function(e) {
    // prevent browser from following link and hide all content
    e.preventDefault();
    $(".section").hide();

    // highlight selected tab and show selected content
    highlightTab($(this));
    var id = getId($(this));
    showContent(id, 'fade');
  });
  $("div#sections li#back a").unbind("click");
});

function getId(elem) {
  var href = $(elem).attr("href");
  var id = href.substr(1,href.length);
  return id;
}

function highlightTab(tab) {
  $("div#sections li").filter(".selected").removeClass("selected");
  $(tab).parent().addClass("selected");
}

function showContent(id, style) {
  (style == 'fade') ? $("div#" + id).fadeIn(500) : $("div#" + id).show();
}
