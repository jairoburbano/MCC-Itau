<?php
/**
 *
 *
 * @package		mcc-itau
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		0.1.0
 *
 */
$page = 'denuncias';
$subpage = '';
$type = 'page';
$title = 'Denuncias Ley 20.393';
$subpage_title = ' ';
include 'header.php';  ?>
<div class="wrap">
    <h1 class="title">Denuncias Ley 20.393</h1><!-- /.title -->
    <div class="denuncias">
        <div class="content denuncia--text">
            <p>
                En cumplimiento a lo dispuesto por la Ley N°20.393 que establece la Responsabilidad Penal de las Personas Jurídicas en los delitos de lavado de activos, financiamiento del terrorismo y cohecho a funcionario público, y como parte de nuestro Modelo de Prevención de Delitos, MCC S.A.
            </p>
            <p>
                Corredores de Bolsa pone a disposición de sus clientes, empleados, proveedores y público en general, este Buzón de Denuncias.A través de este canal, se podrá denunciar al Encargado de Prevención de Delitos toda información, hecho o circunstancia que digan relación con los delitos antes mencionados. La denuncia deberá hacerse incorporando toda la información que esté en conocimiento del denunciante, incluyendo la mayor cantidad de detalles que resulte posible.
            </p>
            <p>
                MCC S.A. Corredores de Bolsa garantiza la total confidencialidad de la información recibida, protegiendo asimismo la identidad del denunciante, ofreciendo además la opción de efectuar una denuncia anónima.
            </p>
        </div><!-- /.content -->
        <hr>
        <form action="" class="formulario form-denuncia">
            <div class="textarea-group group">
                <label for="detalle">Detalle la denuncia <span>*</span></label>
                <textarea name="detalle" id="detalle"></textarea>
            </div><!-- /.textarea-group group -->
            <div class="input-group group">
                <label for="rut">Rut <span>*</span></label>
                <input type="text" name="rut" id="rut" class="required rut">
            </div><!-- /.input-group group -->
            <div class="input-group group">
                <label for="username">Nombre <span>*</span></label>
                <input type="text" name="username" id="username">
            </div><!-- /.input-group group -->
            <div class="input-group group">
                <label for="lastname">Apellido Paterno <span>*</span></label>
                <input type="text" name="lastname" id="lastname">
            </div><!-- /.input-group group -->
            <div class="input-group group">
                <label for="lastname2">Apellido Materno <span>*</span></label>
                <input type="text" name="lastname2" id="lastname2">
            </div><!-- /.input-group group -->
            <div class="input-group group">
                <label for="email">Email <span>*</span></label>
                <input type="email" name="email" id="email">
            </div><!-- /.input-group group -->
            <div class="input-group group">
                <label for="direccion">Dirección</label>
                <input type="text" name="direccion" id="direccion">
            </div><!-- /.input-group group -->
            <div class="input-group group">
                <label for="comuna">Comuna <span>*</span></label>
                <input type="text" name="comuna" id="comuna">
            </div><!-- /.input-group group -->
            <div class="input-group group">
                <label for="ciudad">Ciudad <span>*</span></label>
                <input type="text" name="ciudad" id="ciudad">
            </div><!-- /.input-group group -->
            <div class="input-group group">
                <label for="telefono">Teléfono <span>*</span></label>
                <input type="text" name="telefono" id="telefono">
            </div><!-- /.input-group group -->
            <div class="send-group group">
                <p class="requeridos"><span>*</span> Campos obligatorios</p><!-- /.requeridos -->
                <input type="submit" value="Enviar">
            </div><!-- /.send-group -->
        </form><!-- /.formulario form-denuncia -->
        <hr>
        <div class="content">
            <p>
                Ingresa información relevante a cualquier hecho, circunstancia o situación irregular que digan relación con Lavado de Activos, financiamiento del terrorismo y cohecho. Recuerda que la información ingresada será tratada en forma confidencial.
            </p>
        </div><!-- /.content -->
    </div><!-- /.denuncias -->
</div><!-- /.wrap -->
<?php include 'footer.php'; ?>