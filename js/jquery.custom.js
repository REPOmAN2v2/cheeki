jQuery(document).ready(function($) {

	/* Pre line numbers*/
    $("pre code").html(function(index, html) {
    return html.trim().replace(/^(.*)$/mg, "<span class=\"line\">$1</span>");
    });
});