<?php
/**
 *
 *
 * @package		mcc-itau
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		0.1.0
 *
 */
$page = 'error';
$subpage = '';
$type = 'page';
$title = 'Error 404';
$subpage_title = ' ';
include 'header.php';  ?>
<div class="container--error" style="background-image: url(assets/banner.jpg);">
    <div class="error--media">
        <img src="img/error.svg" alt="Error 404">
    </div><!-- /.error--media -->
    <div class="content">
        <p>
            Error 404: Página no encontrada. Este problema puede ser por una URL mal escrita o que la página ya no existe. Vuelve atrás y sigue navegando en nuestro sitio.
        </p>
    </div><!-- /.content -->
</div><!-- /.container--error -->
<?php include 'footer.php'; ?>