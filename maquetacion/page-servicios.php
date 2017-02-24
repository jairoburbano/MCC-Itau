<?php
/**
 *
 *
 * @package		mcc-itau
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		0.1.0
 *
 */
$page = 'servicios';
$subpage = '';
$type = 'page';
$title = 'Servicios';
$subpage_title = ' ';
include 'header.php';  ?>
<div class="banner">
    <div class="content">
        <div class="banner__media">
            <img src="assets/banner.jpg" alt="Titulo">
        </div><!-- /.banner__media -->
        <div class="banner__title">Servicios</div><!-- /.banner__title -->
    </div><!-- /.content -->
</div><!-- /.banner -->
<div class="wrap page-servicios">
    <div class="content">
        <p>
            Ofrecemos a nuestros clientes un servicio integral y personalizado. En MCC diseñamos soluciones para los distintos perfiles de clientes o estrategias de inversión, asegurando siempre la calidad de los instrumentos que componen su cartera.
        </p>
        <p>
            Nos importa que toda recomendación de inversión que damos a nuestros clientes se ajuste a su perfil de riesgo, considerando sus necesidades personales y demás factores regulatorios.
        </p>
        <p>
            Contamos con un equipo multidisciplinario, dedicado a entregar el mejor servicio a nuestros clientes.  Dicho equipo procura abarcar en su propuesta todas las perspectivas de una correcta estrategia de inversión, incluyendo:
        </p>
    </div><!-- /.content -->
    <div class="container--servicios">
        <div class="servicios__item">
            <div class="servicios__icon">
                <img src="img/servicios-1.svg" alt="titulo">
            </div><!-- /.servicios__icon -->
            <div class="servicios__content">
                <p>
                    Plan de Inversión, para obtener la mayor rentabilidad posible.
                </p>
            </div><!-- /.servicios__content -->
        </div><!-- /.servicios__item -->
        <div class="servicios__item">
            <div class="servicios__icon">
                <img src="img/servicios-2.svg" alt="titulo">
            </div><!-- /.servicios__icon -->
            <div class="servicios__content">
                <p>
                    Servicios Bancarios, ofreciendo una diversidad de productos y servicios tanto en Chile como en los mercados extranjeros.
                </p>
            </div><!-- /.servicios__content -->
        </div><!-- /.servicios__item -->
        <div class="servicios__item">
            <div class="servicios__icon">
                <img src="img/servicios-3.svg" alt="titulo">
            </div><!-- /.servicios__icon -->
            <div class="servicios__content">
                <p>
                    Planificación Estratégica Integral a cargo de nuestros “Wealth Planners”.
                </p>
            </div><!-- /.servicios__content -->
        </div><!-- /.servicios__item -->
    </div><!-- /.container--servicios -->
</div><!-- /.wrap -->
<?php include 'footer.php'; ?>