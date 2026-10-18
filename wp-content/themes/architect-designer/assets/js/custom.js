jQuery(document).ready(function() {
  jQuery("p.banner-text").each(function() {
    var architect_designer_t = jQuery(this).text();
    var architect_designer_splitT = architect_designer_t.split(" ");
    var architect_designer_SecondIndex = 1;
    var architect_designer_thirdIndex = 2;
    var architect_designer_newText = "";
    for (var architect_designer_i = 0; architect_designer_i < architect_designer_splitT.length; architect_designer_i++) {
        if (architect_designer_i == architect_designer_SecondIndex || architect_designer_i == architect_designer_thirdIndex) {
            architect_designer_newText += "<span style='color: var(--wp--preset--color--accent)'>";
            architect_designer_newText += architect_designer_splitT[architect_designer_i] + " ";
            architect_designer_newText += "</span>";
        } else {
          architect_designer_newText += architect_designer_splitT[architect_designer_i] + " ";
        }
    }
    jQuery(this).html(architect_designer_newText);
  });
});