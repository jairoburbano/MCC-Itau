<?php
/**
 *
 *
 * @package		mcc-itau
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		0.1.0
 *
 */
$page = 'contacto';
$subpage = '';
$type = 'page';
$title = 'Contacto';
$subpage_title = ' ';
include 'header.php';  ?>
<div class="wrap">
    <h1 class="title">Contacto</h1><!-- /.title -->
    <div class="contact">
        <div class="contact__block">
            <div class="content">
                <p>
                    Quisque sit amet vestibulum ipsum. Nam sodales viverra nulla, scelerisque pharetra augue consectetur eget. Praesent elementum, risus nec aliquam dignissim, magna lorem vulputate urna, a tempor est lectus id odio. Sed convallis ipsum ligula, nec rutrum urna bibendum vitae.
                </p>
                <hr>
                <div class="contact__info">
                    <h2>Teresita Carvallo</h2>
                    <a href="tel:24728000" title="Telefono de contacto" class="contact__icon"><svg><use xlink:href="#shape-icon-phone" /></svg> <span>2472 8000</span></a>
                    <a href="mailto:tcarvallo@mcc.cl" title="Telefono de contacto" class="contact__icon"><svg><use xlink:href="#shape-icon-mail" /></svg> <span>tcarvallo@mcc.cl</span></a>
                </div><!-- /.contact__info -->
            </div><!-- /.content -->
        </div><!-- /.contact__block -->
        <div class="contact__block">
            <form action="" class="formulario form-contact" data-text="close" data-send="Enviando">
                <div class="input-group group" data-message="Usa solo letras.">
                    <label for="username">Nombre <span>*</span></label>
                    <input type="text" name="username" id="username">
                </div><!-- /.input-group group -->
                <div class="input-group group" data-message="Usa solo números.">
                    <label for="phone">Teléfono</label>
                    <input type="number" name="phone" id="phone">
                </div><!-- /.input-group group -->
                <div class="input-group group" data-message="Ingresa un e-mail válido.">
                    <label for="email">Email <span>*</span></label>
                    <input type="email" name="email" id="email">
                </div><!-- /.input-group group -->
                <div class="textarea-group group" data-message="Ingresa al menos 20 caracteres.">
                    <label for="message">Mensaje <span>*</span></label>
                    <textarea name="message" id="message"></textarea>
                </div><!-- /.textarea-group group -->
                <div class="send-group">
                    <p class="requeridos"><span>*</span> Campos obligatorios</p><!-- /.requeridos -->
                    <input type="submit" value="Enviar">
                </div><!-- /.send-group -->
            </form><!-- /.formulario form-contact -->
        </div><!-- /.contact__block -->
    </div><!-- /.contact -->
</div><!-- /.wrap -->
<?php include 'footer.php'; ?>