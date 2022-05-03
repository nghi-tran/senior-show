jQuery(document).ready(function() {
    jQuery('.toggle-nav').click(function(e) {
        e.preventDefault();
        if(jQuery('.menu ul').hasClass('open')) {
            jQuery('.menu ul').removeClass('open');
        } 
        else{
            jQuery('.menu ul').addClass('open');        
        }
    });  
});