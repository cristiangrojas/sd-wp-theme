jQuery(document).ready(function($) {
    // Get a element with "Aseguradoras en Colombia" text and add an id to the "li" parent
    $('a:contains("Aseguradoras en Colombia")').parent().attr('id', 'aseguradoras');

    $('li#aseguradoras > ul.children').attr('id', 'main-children');

    $('ul#main-children > li').each(function(){
        var self = $(this);
        self.children('a').addClass('piricuiclo');
    });

    $('ul#main-children').on('click', 'a.piricuiclo', function(e){
        e.preventDefault();

        var self = $(this);
        self.toggleClass('open');

        if( self.hasClass('open') ){
            self.siblings('ul.children').show();
        } else {
            self.siblings('ul.children').hide();
        }
    });
});