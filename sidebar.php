<div id="sidebar1" class="fluid-sidebar sidebar span4" role="complementary">

    <div id="quote-now-button" class="widget widget-quote-button clearfix">
        <h3 class="nmt mb10 center">Seguros para Vehículos</h3>
        <h4 class="nmt mb20 center">Cotiza en línea tu seguro todo riesgo</h4>
        <ul class="unstyled mb20">
            <li class="no-margin"><i class="icon-ok icon-2x orange"></i><span class="lead">Cotiza en menos de <strong>5 minutos!</strong></span></li>
            <li class="no-margin"><i class="icon-ok icon-2x orange"></i><span class="lead">Compara precios y coberturas</span></li>
            <li class="no-margin"><i class="icon-ok icon-2x orange"></i><span class="lead">Solicita tu póliza desde tu casa</span></li>
        </ul>
        <div class="row-fluid center">
            <a href="/seguros-para-vehiculos/aplicar/" class="btn btn-primary btn-large center">¡Cotiza ahora!</a>
        </div>
    </div>

    <?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

        <?php dynamic_sidebar( 'sidebar1' ); ?>

    <?php else : ?>

        <!-- This content shows up if there are no widgets defined in the backend. -->

        <div class="alert alert-message">

            <p><?php _e("Please activate some Widgets","bonestheme"); ?>.</p>

        </div>

    <?php endif; ?>

</div>