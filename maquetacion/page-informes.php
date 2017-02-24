<?php
/**
 *
 *
 * @package		mcc-itau
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		0.1.0
 *
 */
$page = 'informes';
$subpage = '';
$type = 'page';
$title = 'Informes';
$subpage_title = ' ';
include 'header.php';  ?>
<div class="wrap page-informes">
    <h1 class="title">Informes</h1><!-- /.title -->
    <div class="buscador">
        <form action="page-informes.php" class="form-buscador--form formulario">
            <div class="search-group group">
                <input type="text" placeholder="Buscar...">
                <div class="send-button">
                    <svg><use xlink:href="#shape-icon-lupa" /></svg>
                    <input type="submit" value=" ">
                </div><!-- /.sennd-button -->
            </div><!-- /.search-group group -->
        </form><!-- /.form-buscador--form formulario -->
    </div><!-- /.buscador -->
    <div class="container--sidebar">
        <div class="container container--informes">
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
            <ul class="paginador">
                <li>
                    <a href="#" title="Anterior" class="disable">
                        <svg><use xlink:href="#shape-icon-prev" /></svg>
                    </a>
                </li>
                <li>
                    <a href="#" title="1" class="current">1</a>
                </li>
                <li>
                    <a href="#" title="2">2</a>
                </li>
                <li>
                    <a href="#" title="3">3</a>
                </li>
                <li>
                    <a href="#" title="Siguiente">
                        <svg><use xlink:href="#shape-icon-next" /></svg>
                    </a>
                </li>
            </ul><!-- /.paginador -->
        </div><!-- /.container -->
        <aside class="sidebar">
            <form action="" class="formulario form--sidebar">
                <div class="checkbox__box">
                    <h3 class="checkbox__title">Fuente de publicación <svg><use xlink:href="#shape-icon-down" /></svg></h3><!-- /.checkbox__title -->
                    <div class="checkbox__content">
                        <div class="checkbox-group group">
                            <input type="checkbox" id="one" name="one">
                            <label for="one">BBA Brasil</label>
                        </div><!-- /.checkbox-group group -->
                        <div class="checkbox-group group">
                            <input type="checkbox" id="two" name="two">
                            <label for="two">BBA Chile</label>
                        </div><!-- /.checkbox-group group -->
                        <div class="checkbox-group group">
                            <input type="checkbox" id="three" name="three">
                            <label for="three">GWS International</label>
                        </div><!-- /.checkbox-group group -->
                        <div class="checkbox-group group">
                            <input type="checkbox" id="four" name="four">
                            <label for="four">Itaú Asset Management</label>
                        </div><!-- /.checkbox-group group -->
                    </div><!-- /.checkbox__content -->
                </div><!-- /.checkbox__box -->
                <div class="checkbox__box">
                    <h3 class="checkbox__title">Tipo de <svg><use xlink:href="#shape-icon-down" /></svg></h3><!-- /.checkbox__title -->
                    <div class="checkbox__content">
                        <div class="checkbox-group group">
                            <input type="checkbox" id="five" name="five">
                            <label for="five">Informes públicos</label>
                        </div><!-- /.checkbox-group group -->
                        <div class="checkbox-group group">
                            <input type="checkbox" id="six" name="six">
                            <label for="six">Informes para clientes</label>
                        </div><!-- /.checkbox-group group -->
                    </div><!-- /.checkbox__content -->
                </div><!-- /.checkbox__box -->
            </form><!-- /.formulario form--sidebar -->
        </aside><!-- /.sidebar -->
    </div><!-- /.container--sidebar -->
</div><!-- /.wrap -->
<?php include 'footer.php'; ?>