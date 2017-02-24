<?php
/**
 * Archivo principal.
 *
 * Aquí se muestra todo lo que se ve en la portada de la página
 *
 * @package		mcc-itau
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		0.1.0
 */
$page = 'home';
$subpage = '';
include 'header.php'; ?>
<div class="banner banner__home">
    <div class="content">
        <div class="banner__media">
            <img src="assets/banner.jpg" alt="Titulo">
        </div><!-- /.banner__media -->
        <div class="banner__content">
            <p>
                Especialistas en la administración de patrimonios. Brindamos a nuestros clientes una correcta asesoría según sus objetivos.
            </p>
        </div><!-- /.banner__content -->
    </div><!-- /.content -->
</div><!-- /.banner banner__home -->
<div class="wrap content">
    <div class="container container--informes">
        <h2 class="sub-title">Últimos informes</h2>
        <div class="informe__item">
            <div class="informe__meta">
                <svg><use xlink:href="#shape-icon-avatar" /></svg>
                <span class="informe__user">BBA Chile</span>
                <p>[Español]</p>
                <p>/ 03 feb 2016</p>
            </div><!-- /.informe__meta -->
            <h2 class="informe__title">
                <a href="single-informe.php" title="Titulo">Mauris elementum egestas orci, ut euismod justo</a>
            </h2><!-- /.informe__title -->
            <p>
                Praesent lacinia consequat massa nec vestibulum. Praesent rhoncus molestie dictum. Quisque mattis lacus.
            </p>
        </div><!-- /.informe__item -->
        <div class="informe__item">
            <div class="informe__meta">
                <svg><use xlink:href="#shape-icon-avatar" /></svg>
                <span class="informe__user">BBA Chile</span>
                <p>[Español]</p>
                <p>/ 03 feb 2016</p>
            </div><!-- /.informe__meta -->
            <h2 class="informe__title">
                <a href="single-informe.php" title="Titulo">Mauris elementum egestas orci, ut euismod justo</a>
            </h2><!-- /.informe__title -->
            <p>
                Praesent lacinia consequat massa nec vestibulum. Praesent rhoncus molestie dictum. Quisque mattis lacus.
            </p>
        </div><!-- /.informe__item -->
        <div class="informe__item">
            <div class="informe__meta">
                <svg><use xlink:href="#shape-icon-avatar" /></svg>
                <span class="informe__user">BBA Chile</span>
                <p>[Español]</p>
                <p>/ 03 feb 2016</p>
            </div><!-- /.informe__meta -->
            <h2 class="informe__title">
                <a href="single-informe.php" title="Titulo">Mauris elementum egestas orci, ut euismod justo</a>
            </h2><!-- /.informe__title -->
            <p>
                Praesent lacinia consequat massa nec vestibulum. Praesent rhoncus molestie dictum. Quisque mattis lacus.
            </p>
        </div><!-- /.informe__item -->
        <a href="page-informes.php" title="Ver más informes" class="btn btn--fill">Ver más informes</a>
    </div><!-- /.container -->
</div><!-- /.wrap -->
<div class="container container--nosotros">
    <div class="nosotros__content">
        <h2 class="nosotros__title">Nosotros</h2>
        <p>
            MCC representa hoy en día la banca privada de Itaú en Chile, lo que nos ha permitido sumar todos los beneficios y oportunidades que este Grupo, líder en Latinoamérica y que cuenta con más de 90 años de trayectoria.
        </p>
        <a href="page-nosotros.php" title="Ver mas" class="btn btn--fill">Ver más</a>
    </div><!-- /.nosotros__content -->
    <div class="nosotros__media">
        <img src="assets/nosotros.jpg" alt="Titulo">
    </div><!-- /.nosotros__media -->
</div><!-- /.container container--nosotros -->
<?php include 'footer.php'; ?>