jQuery(document).ready(function($) {
    // Get a element with "Aseguradoras en Colombia" text and add an id to the "li" parent
    $('a:contains("Aseguradoras en Colombia")').parent().attr('id', 'aseguradoras');

    $('li#aseguradoras > ul.children').attr('id', 'main-children');
});