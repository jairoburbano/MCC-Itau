<?php
/**
 *
 *
 * @package		mcc-itau
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		0.1.0
 *
 */
$page = 'informacion-legal';
$subpage = '';
$type = 'page';
$title = 'Informacion legal';
$subpage_title = ' ';
include 'header.php';  ?>
<div class="wrap container--nosotros-page">
    <h1 class="title">Informacion legal</h1><!-- /.title -->
    <!--
NOTE: 
content--gray : clase para definir background gray 
content--column : clase para hacer columnas
content--center : clase para centrar el texto
-->
    <div class="content--flex">
        <div class="content--flex__column">
            <h2 class="sub-title">Descargo de responsabilidad</h2><!-- /.sub-title -->
            <div class="content">
                <p>
                    MCC procura que la información entregada en este sitio web sea lo más precisa posible, pero no puede garantizar ni asumir responsabilidad alguna respecto a diferencias que se puedan presentar entre los precios reales de mercados y los publicados en este sitio, tomando en consideración, además, que los precios informados en este sitio tienen algunos minutos de desfase. MCC no se hace responsable y no necesariamente aprueba las informaciones contenidas en otros sitios web que estén enlazados a través de links con este sitio web.
                </p>
            </div><!-- /.content -->
        </div><!-- /.content--flex__column -->
        <div class="content--flex__column">
            <div class="content">
                <h2 class="sub-title">Condiciones de uso del sitio web</h2><!-- /.sub-title -->
                <p>
                    Al acceder y hacer uso de la página www.mcc.cl, usted se sujeta a los siguientes términos y condiciones, y a las leyes nacionales vigentes y aplicables.
                </p>
                <p>
                    MCC autoriza la reproducción total o parcial de la información que contiene este sitio web, siempre que la persona (natural o jurídica) que haga uso de la información en cuestión haga mención de la fuente.
                </p>
            </div><!-- /.content -->
        </div><!-- /.content--flex__column -->
    </div><!-- /.content--flex -->
</div><!-- /.wrap container--nosotros-page -->
<div class="content--column content--gray">
    <div class="wrap container--nosotros-page">
        <div class="content">
            <p>
                Todas las marcas, nombres, diseños y logotipos que aparezcan en todos los sitios anteriormente nombrados, son marcas registradas y/o usadas bajo licencia por MCC o sus afiliadas, excepto aquellas que sean visiblemente identificadas de otra manera.
            </p>
            <p>
                Está estrictamente prohibido el uso de estas marcas registradas o cualquier otro signo contenido en este sitio de Internet, excepto en los casos en que se indique expresamente lo contrario en el contenido de esta página o bien se haya solicitado y autorizado su uso por escrito.
            </p>
            <p>
                Cualquier información o material electrónico que remita a MCC por medio de Internet, es y será tratado como información no confidencial, excepto la información que sea personal e individualmente identificable, obtenida conforme a la Declaración de Privacidad y a su aceptación a través de este sitio web.
            </p>
            <p>
                Al remitir cualquier comunicación o material electrónico a este sitio, se entenderá que Usted acepta que MCC o cualquiera de sus Sociedades Relacionadas, pueden usar la información para cualquier propósito lícito, incluyendo reproducción, transmisión, publicación, emisión o impresión. MCC lleva a cabo su trabajo en Chile, por lo que este sitio de Internet está dirigido a residentes de Chile, y toda la publicidad presentada en el mismo es válida sólo en Chile.
            </p>
            <p>
                Aquella persona que incumpla con las condiciones aquí establecidas estará sujeta a las penas y sanciones establecidas por el Código Penal, Leyes de Propiedad Intelectual, Derechos de Autor y otras aplicables.
            </p>
        </div><!-- /.content -->
    </div><!-- /.wrap container--nosotros-page -->
</div><!-- /.content--gray -->
<div class="wrap container--nosotros-page">
    <div class="container--descargar">
        <h3>Descargas</h3>
        <div class="descargas--box">
            <a href="#" download title="Titulo" class="descargas__item">
                <span class="descarga__title">Manual de Prevención de Delitos de acuerdo a la ley 20.393</span>
                <span class="descarga__button">Descargar<svg><use xlink:href="#shape-icon-down" /></svg></span>
            </a>
            <a href="#" download title="Titulo" class="descargas__item">
                <span class="descarga__title">Código de Ética</span>
                <span class="descarga__button">Descargar<svg><use xlink:href="#shape-icon-down" /></svg></span>
            </a>
            <a href="#" download title="Titulo" class="descargas__item">
                <span class="descarga__title">Manual de Manejo de Información y Control de Conflictos de Interés</span>
                <span class="descarga__button">Descargar<svg><use xlink:href="#shape-icon-down" /></svg></span>
            </a>
            <a href="#" download title="Titulo" class="descargas__item">
                <span class="descarga__title">Certificación que contamos con modelo de prevención de delitos</span>
                <span class="descarga__button">Descargar<svg><use xlink:href="#shape-icon-down" /></svg></span>
            </a>
        </div><!-- /.descargas--box -->
    </div><!-- /.container--descargar -->
</div><!-- /.wrap -->
<?php include 'footer.php'; ?>