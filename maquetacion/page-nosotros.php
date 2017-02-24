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
                        <option value="page-nosotros.php">Quienes somos</option>
                        <option value="page-equipo.php">Equipo</option>
                    </select>
                    <svg><use xlink:href="#shape-icon-down" /></svg>
                </div>
            </form>
            <nav class="menu--inside">
                <a href="page-nosotros.php" class="btn--nav active" title="Quienes somos">Quienes somos</a>
                <a href="page-equipo.php" class="btn--nav" title="Equipo">Equipo</a>
            </nav><!-- /.menu--inside -->
        </div><!-- /.menu__box -->
        <!--
NOTE: 
content--gray : clase para definir background gray 
content--flex : clase para hacer columnas
content--center : clase para centrar el texto
-->
        <div class="content--flex">
            <h2 class="sub-title">Quienes somos</h2><!-- /.sub-title -->
            <div class="content--flex__column">
                <div class="content">
                    <p>
                        Somos una prestigiosa compañía de servicios financieros, con reconocida trayectoria en renta fija, enfocada en brindar asesoría financiera a clientes de alto patrimonio. 
                    </p>
                    <p>
                        Ofrecemos un servicio integral y adaptado a las necesidades de nuestros clientes, cubriendo las áreas de inversiones, crédito y planificación patrimonial.
                    </p>
                    <p>
                        Realizamos nuestro trabajo cumpliendo altos estándares éticos, normativos y de gestión. Nuestros profesionales cumplen con estrictas normas de ética, honestidad y transparencia en su trabajo. Además, contamos con un sistema de control de riesgos que nos permite operar en un ambiente protegido y estructurar las inversiones de acuerdo al perfil de riesgo de cada uno de nuestros clientes.
                    </p>
                    <p>
                        Durante el año 2014, Grupo Itau Unibanco – institución financiera líder en Latinoamérica -, adquiere el control de MCC, lo cual nos permitió incorporar a nuestro servicio una robusta plataforma de operaciones tanto en Santiago como en Sao Paulo, Miami y Zurich.
                    </p>
                </div><!-- /.content -->
            </div><!-- /.content--flex__column -->
            <div class="content--flex__column">
                <div class="content">
                    <p>
                        MCC es hoy en día la banca privada de Itaú en Chile, lo cual nos ha permitido extender a nuestros clientes todos los beneficios y oportunidades que este Grupo, líder en Latinoamérica y que cuenta con más de 90 años de trayectoria ofrece a sus clientes, incluyendo:
                    </p>
                    <ul>
                        <li>
                            Plataformas de inversión y gestión patrimonial en Miami, Zúrich, Sao Paulo y Santiago.
                        </li>
                        <li>
                            Profundo conocimiento de la región y de mercados globales.
                        </li>
                        <li>
                            Equipo de estrategia internacional basado en EE.UU., Europa y Latinoamérica, con dedicación exclusiva a clientes de alto patrimonio.
                        </li>
                        <li>
                            Más de 30 años de experiencia y sólida trayectoria en el mercado financiero local.
                        </li>
                        <li>
                            Acceso a múltiples clases de activo y productos de inversión de primer nivel con una reconocida especialidad en renta fija.
                        </li>
                    </ul>
                </div><!-- /.content -->
            </div><!-- /.content--flex__column -->
        </div><!-- /.content--flex -->
    </div><!-- /.wrap container--nosotros-page -->
    <div class="content--gray">
        <div class="wrap container--nosotros-page">
            <div class="content--flex">
                <div class="content--flex__column">
                    <h2 class="sub-title">Misión</h2><!-- /.sub-title -->
                    <div class="content">
                        <p>
                            Entregar un servicio de asesoría financiera de excelencia, con el objeto de preservar el patrimonio de nuestros clientes en el largo plazo, incorporando atractivas rentabilidades, sobre la base de la experiencia, compromiso y trayectoria de nuestro equipo.
                        </p>
                        <h2 class="sub-title">Visión</h2><!-- /.sub-title -->
                        <p>
                            Ser líderes en performance sustentable y satisfacción de nuestros clientes.
                        </p>
                    </div><!-- /.content -->
                </div><!-- /.content--flex__column -->
                <div class="content--flex__column">
                    <div class="content">
                        <h2 class="sub-title">Valores</h2><!-- /.sub-title -->
                        <ol>
                            <li>
                                Sólo es bueno para nosotros si es bueno para el cliente.
                            </li>
                            <li>
                                Fanáticos del performance.
                            </li>
                            <li>
                                Las personas son lo más importante.
                            </li>
                            <li>
                                El mejor argumento es lo que vale.
                            </li>
                            <li>
                                Simple, siempre.
                            </li>
                            <li>
                                Pensamos y actuamos como dueños.
                            </li>
                            <li>
                                La ética es innegociable.
                            </li>
                        </ol>
                    </div><!-- /.content -->
                </div><!-- /.content--flex__column -->
            </div><!-- /.content--flex -->
        </div><!-- /.wrap container--nosotros-page -->
    </div><!-- /.content--gray -->
    <div class="wrap container--nosotros-page">
        <div class="content--center">
            <h2 class="sub-title">Historia</h2><!-- /.sub-title -->
            <div class="content">
                <p>
                    MCC fue fundada en 1983 como Munita y Cruzat S.A Corredores de Bolsa. Al poco tiempo se transformó en un importante actor dentro del mercado chileno, destacando por su gestión vanguardista y pionera en los mercados internacionales, lo que permitió a sus clientes invertir en el exterior.
                </p>
                <p>
                    Sus fundadores, Alberto Munita Izquierdo, Gastón Cruzat Larraín y Eugenio Claro Grez llevan más de 30 años ligados al sector financiero. Hoy se mantienen como miembros del directorio aportando constantemente con su experiencia y visión en las decisiones de negocio.
                </p>
            </div><!-- /.content -->
        </div><!-- /.content--center -->
    </div><!-- /.wrap container--nosotros-page -->
    <div class="content--gray">
        <div class="wrap container--nosotros-page">
            <h2 class="sub-title sub--center">Socios fundadores</h2><!-- /.sub-title sub--center -->
            <div class="container--team">
                <div class="team__item">
                    <div class="team__image">
                        <img src="assets/team.jpg" alt="Titulo">
                    </div><!-- /.team__image -->
                    <div class="team__content">
                        <div class="team__title">Alberto Munita</div><!-- /.team__title -->
                        <p>
                            Se desempeñó como director en Compañía de Seguros de Vida La Previsión S.A., Compañía de Seguros Generales La Previsión S.A., Financiera Condell S.A. y la Bolsa de Comercio de Santiago. Actualmente es director de empresas.
                        </p>
                    </div><!-- /.team__content -->
                </div><!-- /.team__item -->
                <div class="team__item">
                    <div class="team__image">
                        <img src="assets/team.jpg" alt="Titulo">
                    </div><!-- /.team__image -->
                    <div class="team__content">
                        <div class="team__title">Alberto Munita</div><!-- /.team__title -->
                        <p>
                            Se desempeñó como director en Compañía de Seguros de Vida La Previsión S.A., Compañía de Seguros Generales La Previsión S.A., Financiera Condell S.A. y la Bolsa de Comercio de Santiago. Actualmente es director de empresas.
                        </p>
                    </div><!-- /.team__content -->
                </div><!-- /.team__item -->
                <div class="team__item">
                    <div class="team__image">
                        <img src="assets/team.jpg" alt="Titulo">
                    </div><!-- /.team__image -->
                    <div class="team__content">
                        <div class="team__title">Alberto Munita</div><!-- /.team__title -->
                        <p>
                            Se desempeñó como director en Compañía de Seguros de Vida La Previsión S.A., Compañía de Seguros Generales La Previsión S.A., Financiera Condell S.A. y la Bolsa de Comercio de Santiago. Actualmente es director de empresas.
                        </p>
                    </div><!-- /.team__content -->
                </div><!-- /.team__item -->
            </div><!-- /.container--team -->
        </div><!-- /.wrap container--nosotros-page -->
    </div><!-- /.content--gray -->
    <div class="wrap">
        <div class="content--map">
            <h2 class="sub-title sub--centro">Itaú. Banco especialista en la región de Latinoamérica</h2><!-- /.sub-title sub--centro -->
            <div class="content">
                <p>
                    Itaú está presente en los principales centros financieros del mundo, con una reputación intachable y es reconocido por su profundo conocimiento de la región.
                </p>
            </div><!-- /.content -->
            <div class="content--map__image">
                <picture>
                    <source srcset="img/mapa-desktop.svg" media="(min-width: 980px)">
                    <source srcset="img/mapa-tablet.svg" media="(min-width: 740px)">
                    <source srcset="img/mapa-mobile.svg" media="(max-width: 740px)">
                    <img src="img/mapa-tablet.svg" alt="Titulo">
                </picture>
            </div><!-- /.content--map__image -->
        </div><!-- /.content--map -->
    </div><!-- /.wrap -->
</div><!-- /.page-nosotros -->
<?php include 'footer.php'; ?>