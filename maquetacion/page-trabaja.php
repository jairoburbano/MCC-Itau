<?php
/**
 *
 *
 * @package		mcc-itau
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		0.1.0
 *
 */
$page = 'trabaja';
$subpage = '';
$type = 'page';
$title = 'Trabaja con nosotros';
$subpage_title = ' ';
include 'header.php';  ?>
<div class="wrap container--trabaja">
    <h1 class="title">Trabaja con nostros</h1><!-- /.title -->
    <div class="content">
        <p>Si quieres unirte a MCC Itaú, postula enviándonos tu Currículum Vitae:</p>
    </div><!-- /.content -->
    <div class="trabaja">
        <form action="" class="formulario form--trabaja">
            <div class="input-group group">
                <label for="nickname">Nombre</label>
                <input type="text" name="nickname" id="nickname">
            </div><!-- /.input-group group -->
            <div class="input-group group">
                <label for="email">Mail</label>
                <input type="email" name="email" id="email">
            </div><!-- /.input-group group -->
            <div class="file-group group">
                <label for="file">Archivo</label>
                <div class="style-file">
                    <p>Selecionar archivo...</p>
                    <div class="file__button"><span>Seleccionar archivo</span> <svg><use xlink:href="#shape-icon-up" /></svg></div>
                    <input type="file" name="file" id="file" accept="application/pdf">
                </div><!-- /.style-file -->
            </div><!-- /.textarea-group group -->
            <div class="send-group">
                <input type="submit" value="Enviar">
            </div><!-- /.send-group -->
        </form><!-- /.formulario form--trabaja -->
    </div><!-- /.trabaja -->
</div><!-- /.wrap container--trabaja -->
<?php include 'footer.php'; ?>