<?php
/**
 *
 *
 * @package		mcc-itau
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		0.1.0
 *
 */
$page = 'indicadores-financieros';
$subpage = '';
$type = 'page';
$title = 'Indicadores financieros e informes';
$subpage_title = ' ';
include 'header.php';  ?>
<div class="wrap container--nosotros-page">
    <h1 class="title">Indicadores financieros e informes</h1><!-- /.title -->
    <div class="container--descargar descargar--financiero">
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