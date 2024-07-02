$.noConflict();
jQuery(document).ready(function ($) {
  $.typer.options.highlightColor = "rgba(9,127,255,100)";
  $.typer.options.typerOrder = "sequential";
  $("[data-typer-targets]").typer();
});

///////
!(function (o, c) {
  var n = c.documentElement,
    t = " w-mod-";
  (n.className += t + "js"),
    ("ontouchstart" in o || (o.DocumentTouch && c instanceof DocumentTouch)) &&
      (n.className += t + "touch");
})(window, document);

//////
window.dataLayer = window.dataLayer || [];
function gtag() {
  dataLayer.push(arguments);
}
gtag("js", new Date());
gtag("config", "UA-74383838-1", { anonymize_ip: false });
