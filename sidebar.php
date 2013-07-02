<div id="sidebar1" class="fluid-sidebar sidebar span3" role="complementary">

    <div id="quote-now-button" class="widget widget-quote-button clearfix">
        <h4 class="nmt mb5 center">Seguros para Vehículos</h4>
        <h5 class="nmt mb20 center">Cotiza en línea tu seguro todo riesgo</h5>
        <ul class="unstyled mb20">
            <li class="no-margin"><i class="icon-ok orange"></i>Cotiza en menos de <strong>5 minutos!</strong></li>
            <li class="no-margin"><i class="icon-ok orange"></i>Compara precios y coberturas</li>
            <li class="no-margin"><i class="icon-ok orange"></i>Solicita tu póliza desde tu casa</li>
        </ul>
        <div class="row-fluid center">
            <a href="/seguros-para-vehiculos/aplicar/" class="btn btn-primary btn-large center">¡Cotiza ahora!</a>
        </div>
    </div>

    <hr/>

    <?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

        <?php dynamic_sidebar( 'sidebar1' ); ?>

    <?php else : ?>

        <!-- This content shows up if there are no widgets defined in the backend. -->

        <div class="alert alert-message">

            <p><?php _e("Please activate some Widgets","bonestheme"); ?>.</p>

        </div>

    <?php endif; ?>

</div>