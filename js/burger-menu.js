jQuery(document).ready(function() {
    jQuery('.toggle-nav').click(function(e) {
        jQuery('.menu ul').slideToggle(500);
  
        e.preventDefault();
    });
     
});