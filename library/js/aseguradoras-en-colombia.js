jQuery(document).ready(function($) {
    // Get a element with "Aseguradoras en Colombia" text and add an id to the "li" parent
    $('a:contains("Aseguradoras en Colombia")').parent().attr('id', 'aseguradoras');

    $('li#aseguradoras > ul.children').attr('id', 'main-children');

    $('ul#main-children > li').each(function(){
        var self = $(this);
        self.children('a').addClass('collapse');
    });

    /*$('ul#main-children').on('click', 'a.collapse', function(e){
        e.preventDefault();

        var self = $(this);
        self.toggleClass('open');

        if( self.hasClass('open') ){
            self.closest('ul.children').show();
        } else {
            self.closest('ul.children').hide();
        }
    });*/
});