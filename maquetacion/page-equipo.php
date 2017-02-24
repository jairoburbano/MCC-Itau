<?php
/**
 *
 *
 * @package		mcc-itau
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		0.1.0
 *
 */
$page = 'nosotros';
$subpage = '';
$type = 'page';
$title = 'Nosotros';
$subpage_title = ' ';
include 'header.php';  ?>
<div class="banner">
    <div class="content">
        <div class="banner__media">
            <img src="assets/banner.jpg" alt="Titulo">
        </div><!-- /.banner__media -->
        <div class="banner__title">Nosotros</div><!-- /.banner__title -->
    </div><!-- /.content -->
</div><!-- /.banner -->
<div class="page-nosotros">
    <div class="wrap container--nosotros-page">
        <div class="menu__box">
            <form action="" class="form--nosotros">
                <div class="select-group group">
                    <select onChange="window.location.href=this.value" class="filtros--select">
                        <option value="page-equipo.php">Equipo</option>
                        <option value="page-nosotros.php">Quienes somos</option>
                    </select>
                    <svg><use xlink:href="#shape-icon-down" /></svg>
                </div>
            </form>
            <nav class="menu--inside">
                <a href="page-nosotros.php" class="btn--nav" title="Quienes somos">Quienes somos</a>
                <a href="page-equipo.php" class="btn--nav active" title="Equipo">Equipo</a>
            </nav><!-- /.menu--inside -->
        </div><!-- /.menu__box -->
        <!--
NOTE: 
content--gray : clase para definir background gray 
content--flex : clase para hacer columnas
content--center : clase para centrar el texto
-->
        <div class="content--center">
            <h2 class="sub-title">Equipo</h2><!-- /.sub-title -->
            <div class="content">
                <p>
                    Nuestro equipo está conformado por destacados profesionales que cuentan con un perfil especializado y gran expertise en la administración de patrimonios. Así, el equipo MCC ofrece a sus clientes una correcta asesoría según sus objetivos, perfil de riesgo/retorno y horizonte de inversión. Contamos además con equipos multidisciplinarios, lo que nos permite ofrecer una asesoría integral y personalizada a todos nuestros clientes.
                </p>
            </div><!-- /.content -->
        </div><!-- /.content--center -->
    </div><!-- /.wrap -->
    <div class="gerentes">
        <h2 class="sub-title">Gerentes</h2><!-- /.sub-title -->
        <div class="container__gerentes">
            <div class="gerentes__item">
                <div class="gerentes--flex">
                    <div class="gerentes__media">
                        <img src="assets/team.jpg" alt="Titulo">
                    </div><!-- /.gerentes__media -->
                    <div class="gerentes__content">
                        <div class="gerentes__block">
                            <h2 class="gerentes__title">Ramón Suárez</h2><!-- /.gerentes__title -->
                            <p class="gerentes__cargo">Gerente general</p>
                        </div><!-- /.gerentes__block -->
                        <div class="gerentes__icon">
                            <svg><use xlink:href="#shape-icon-down" /></svg>
                        </div><!-- /.gerentes__icon -->
                    </div><!-- /.gerentes__content -->
                </div><!-- /.gerentes--flex -->
                <div class="gerentes__text">
                    <div class="gerentes__close">
                        <svg><use xlink:href="#shape-icon-close" /></svg>
                    </div><!-- /.gerentes__close -->
                    <div class="gerentes__text__content">
                        <h2 class="gerentes__title">Ramón Suárez</h2><!-- /.gerentes__title -->
                        <p class="gerentes__cargo">Gerente general</p>
                        <div class="content">
                            <p>
                                Proin odio eros, elementum ut convallis vitae, finibus in erat. Sed elementum lectus enim, et venenatis ante porttitor vel. Vestibulum vehicula facilisis enim.
                            </p>
                            <p>
                                Sed sit amet enim tellus. Pellentesque lobortis sapien id posuere rhoncus. Sed feugiat, nunc sit amet tincidunt maximus, mi mauris dictum arcu, sit amet tincidunt nibh urna sit amet nisl. Vestibulum sodales ac lacus sed pellentesque.
                            </p>
                        </div><!-- /.content -->
                    </div><!-- /.gerentes__text__content -->
                </div><!-- /.gerentes__text -->
            </div><!-- /.gerentes__item -->
            <div class="gerentes__item">
                <div class="gerentes--flex">
                    <div class="gerentes__media">
                        <img src="assets/team.jpg" alt="Titulo">
                    </div><!-- /.gerentes__media -->
                    <div class="gerentes__content">
                        <div class="gerentes__block">
                            <h2 class="gerentes__title">Patricio Eskenazi</h2><!-- /.gerentes__title -->
                            <p class="gerentes__cargo">Gerente comercial</p>
                        </div><!-- /.gerentes__block -->
                        <div class="gerentes__icon">
                            <svg><use xlink:href="#shape-icon-down" /></svg>
                        </div><!-- /.gerentes__icon -->
                    </div><!-- /.gerentes__content -->
                </div><!-- /.gerentes--flex -->
                <div class="gerentes__text">
                    <div class="gerentes__close">
                        <svg><use xlink:href="#shape-icon-close" /></svg>
                    </div><!-- /.gerentes__close -->
                    <div class="gerentes__text__content">
                        <h2 class="gerentes__title">Patricio Eskenazi</h2><!-- /.gerentes__title -->
                        <p class="gerentes__cargo">Gerente comercial</p>
                        <div class="content">
                            <p>
                                Proin odio eros, elementum ut convallis vitae, finibus in erat.
                            </p>
                            <p>
                                Sed sit amet enim tellus. Pellentesque lobortis sapien id posuere rhoncus. Sed feugiat, nunc sit amet mi mauris dictum arcu, sit amet tincidunt nibh urna sit amet nisl. Vestibulum sodales ac lacus sed pellentesque.
                            </p>
                        </div><!-- /.content -->
                    </div><!-- /.gerentes__text__content -->
                </div><!-- /.gerentes__text -->
            </div><!-- /.gerentes__item -->
            <div class="gerentes__item">
                <div class="gerentes--flex">
                    <div class="gerentes__media">
                        <img src="assets/team.jpg" alt="Titulo">
                    </div><!-- /.gerentes__media -->
                    <div class="gerentes__content">
                        <div class="gerentes__block">
                            <h2 class="gerentes__title">Pablo Lewin</h2><!-- /.gerentes__title -->
                            <p class="gerentes__cargo">Head of GWS Chile</p>
                        </div><!-- /.gerentes__block -->
                        <div class="gerentes__icon">
                            <svg><use xlink:href="#shape-icon-down" /></svg>
                        </div><!-- /.gerentes__icon -->
                    </div><!-- /.gerentes__content -->
                </div><!-- /.gerentes--flex -->
                <div class="gerentes__text">
                    <div class="gerentes__close">
                        <svg><use xlink:href="#shape-icon-close" /></svg>
                    </div><!-- /.gerentes__close -->
                    <div class="gerentes__text__content">
                        <h2 class="gerentes__title">Pablo Lewin</h2><!-- /.gerentes__title -->
                        <p class="gerentes__cargo">Head of GWS Chile</p>
                        <div class="content">
                            <p>
                                Proin odio eros, elementum ut convallis vitae, finibus in erat. Sed elementum lectus enim, et venenatis ante porttitor vel. Vestibulum vehicula facilisis enim.
                            </p>
                        </div><!-- /.content -->
                    </div><!-- /.gerentes__text__content -->
                </div><!-- /.gerentes__text -->
            </div><!-- /.gerentes__item -->
            <div class="gerentes__item">
                <div class="gerentes--flex">
                    <div class="gerentes__media">
                        <img src="assets/team.jpg" alt="Titulo">
                    </div><!-- /.gerentes__media -->
                    <div class="gerentes__content">
                        <div class="gerentes__block">
                            <h2 class="gerentes__title">Stefan Jenni</h2><!-- /.gerentes__title -->
                            <p class="gerentes__cargo">Gerente de operaciones</p>
                        </div><!-- /.gerentes__block -->
                        <div class="gerentes__icon">
                            <svg><use xlink:href="#shape-icon-down" /></svg>
                        </div><!-- /.gerentes__icon -->
                    </div><!-- /.gerentes__content -->
                </div><!-- /.gerentes--flex -->
                <div class="gerentes__text">
                    <div class="gerentes__close">
                        <svg><use xlink:href="#shape-icon-close" /></svg>
                    </div><!-- /.gerentes__close -->
                    <div class="gerentes__text__content">
                        <h2 class="gerentes__title">Stefan Jenni</h2><!-- /.gerentes__title -->
                        <p class="gerentes__cargo">Gerente de operaciones</p>
                        <div class="content">
                            <p>
                                Proin odio eros, elementum ut convallis vitae, finibus in erat. Sed elementum lectus enim, et venenatis ante porttitor vel. Vestibulum vehicula facilisis enim.
                            </p>
                            <p>
                                Sed sit amet enim tellus. Pellentesque lobortis sapien id posuere rhoncus. Sed feugiat, nunc sit amet tincidunt maximus, mi mauris dictum arcu, sit amet tincidunt nibh urna sit amet nisl. Vestibulum sodales ac lacus sed pellentesque.
                            </p>
                        </div><!-- /.content -->
                    </div><!-- /.gerentes__text__content -->
                </div><!-- /.gerentes__text -->
            </div><!-- /.gerentes__item -->
            <div class="gerentes__item">
                <div class="gerentes--flex">
                    <div class="gerentes__media">
                        <img src="assets/team.jpg" alt="Titulo">
                    </div><!-- /.gerentes__media -->
                    <div class="gerentes__content">
                        <div class="gerentes__block">
                            <h2 class="gerentes__title">Joao Meneghello</h2><!-- /.gerentes__title -->
                            <p class="gerentes__cargo">Gerente de Finanzas</p>
                        </div><!-- /.gerentes__block -->
                        <div class="gerentes__icon">
                            <svg><use xlink:href="#shape-icon-down" /></svg>
                        </div><!-- /.gerentes__icon -->
                    </div><!-- /.gerentes__content -->
                </div><!-- /.gerentes--flex -->
                <div class="gerentes__text">
                    <div class="gerentes__close">
                        <svg><use xlink:href="#shape-icon-close" /></svg>
                    </div><!-- /.gerentes__close -->
                    <div class="gerentes__text__content">
                        <h2 class="gerentes__title">Joao Meneghello</h2><!-- /.gerentes__title -->
                        <p class="gerentes__cargo">Gerente de Finanzas</p>
                        <div class="content">
                            <p>
                                Proin odio eros, elementum ut convallis vitae, finibus in erat. Sed elementum lectus enim, et venenatis ante porttitor vel. Vestibulum vehicula facilisis enim.
                            </p>
                            <p>
                                Sed sit amet enim tellus. Pellentesque lobortis sapien id posuere rhoncus. Sed feugiat, nunc sit amet tincidunt maximus, mi mauris dictum arcu, sit amet tincidunt nibh urna sit amet nisl. Vestibulum sodales ac lacus sed pellentesque.
                            </p>
                        </div><!-- /.content -->
                    </div><!-- /.gerentes__text__content -->
                </div><!-- /.gerentes__text -->
            </div><!-- /.gerentes__item -->
            <div class="gerentes__item">
                <div class="gerentes--flex">
                    <div class="gerentes__media">
                        <img src="assets/team.jpg" alt="Titulo">
                    </div><!-- /.gerentes__media -->
                    <div class="gerentes__content">
                        <div class="gerentes__block">
                            <h2 class="gerentes__title">Joao Meneghello</h2><!-- /.gerentes__title -->
                            <p class="gerentes__cargo">Gerente de Finanzas</p>
                        </div><!-- /.gerentes__block -->
                        <div class="gerentes__icon">
                            <svg><use xlink:href="#shape-icon-down" /></svg>
                        </div><!-- /.gerentes__icon -->
                    </div><!-- /.gerentes__content -->
                </div><!-- /.gerentes--flex -->
                <div class="gerentes__text">
                    <div class="gerentes__close">
                        <svg><use xlink:href="#shape-icon-close" /></svg>
                    </div><!-- /.gerentes__close -->
                    <div class="gerentes__text__content">
                        <h2 class="gerentes__title">Joao Meneghello</h2><!-- /.gerentes__title -->
                        <p class="gerentes__cargo">Gerente de Finanzas</p>
                        <div class="content">
                            <p>
                                Proin odio eros, elementum ut convallis vitae, finibus in erat. Sed elementum lectus enim, et venenatis ante porttitor vel. Vestibulum vehicula facilisis enim.
                            </p>
                            <p>
                                Sed sit amet enim tellus. Pellentesque lobortis sapien id posuere rhoncus. Sed feugiat, nunc sit amet tincidunt maximus, mi mauris dictum arcu, sit amet tincidunt nibh urna sit amet nisl. Vestibulum sodales ac lacus sed pellentesque.
                            </p>
                        </div><!-- /.content -->
                    </div><!-- /.gerentes__text__content -->
                </div><!-- /.gerentes__text -->
            </div><!-- /.gerentes__item -->
            <div class="gerentes__item">
                <div class="gerentes--flex">
                    <div class="gerentes__media">
                        <img src="assets/team.jpg" alt="Titulo">
                    </div><!-- /.gerentes__media -->
                    <div class="gerentes__content">
                        <div class="gerentes__block">
                            <h2 class="gerentes__title">Joao Meneghello</h2><!-- /.gerentes__title -->
                            <p class="gerentes__cargo">Gerente de Finanzas</p>
                        </div><!-- /.gerentes__block -->
                        <div class="gerentes__icon">
                            <svg><use xlink:href="#shape-icon-down" /></svg>
                        </div><!-- /.gerentes__icon -->
                    </div><!-- /.gerentes__content -->
                </div><!-- /.gerentes--flex -->
                <div class="gerentes__text">
                    <div class="gerentes__close">
                        <svg><use xlink:href="#shape-icon-close" /></svg>
                    </div><!-- /.gerentes__close -->
                    <div class="gerentes__text__content">
                        <h2 class="gerentes__title">Joao Meneghello</h2><!-- /.gerentes__title -->
                        <p class="gerentes__cargo">Gerente de Finanzas</p>
                        <div class="content">
                            <p>
                                Proin odio eros, elementum ut convallis vitae, finibus in erat. Sed elementum lectus enim, et venenatis ante porttitor vel. Vestibulum vehicula facilisis enim.
                            </p>
                            <p>
                                Sed sit amet enim tellus. Pellentesque lobortis sapien id posuere rhoncus. Sed feugiat, nunc sit amet tincidunt maximus, mi mauris dictum arcu, sit amet tincidunt nibh urna sit amet nisl. Vestibulum sodales ac lacus sed pellentesque.
                            </p>
                        </div><!-- /.content -->
                    </div><!-- /.gerentes__text__content -->
                </div><!-- /.gerentes__text -->
            </div><!-- /.gerentes__item -->
        </div><!-- /.container__gerentes -->
    </div><!-- /.wrap gerentes -->
</div><!-- /.page-nosotros -->
<?php include 'footer.php'; ?>