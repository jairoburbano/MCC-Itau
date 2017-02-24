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
<div class="wrap content">
    <h1>Grumpy wizards make toxic brew for the evil Queen and Jack</h1>
    <h2>Grumpy wizards make toxic brew for the evil Queen and Jack</h2>
    <h3>Grumpy wizards make toxic brew for the evil Queen and Jack</h3>
    <h4>Grumpy wizards make toxic brew for the evil Queen and Jack</h4>
    <h5>Grumpy wizards make toxic brew for the evil Queen and Jack</h5>
    <h6>Grumpy wizards make toxic brew for the evil Queen and Jack</h6>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem vero debitis mollitia distinctio voluptatem veritatis veniam soluta excepturi laboriosam <strong>nostrum quibusdam</strong>, accusantium eum. Consectetur voluptatibus inventore illo accusantium illum, non eveniet laudantium, perspiciatis nobis consequuntur odio <b>ipsam nemo cumque</b> provident sunt itaque asperiores! Tempore architecto amet quas, consequuntur nostrum corporis?</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto nam, aliquam maiores culpa nisi consequatur assumenda, itaque <em>ducimus quae</em>, aspernatur reprehenderit quibusdam <a href="#">cupiditate non</a>. Unde maiores officia ex, tempore facere!</p>
    <p class="bajada">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam omnis dolores, ea, porro nihil perferendis repellendus vitae id animi aut corrupti pariatur, nam, dolore!</p><!-- /.bajada -->
    <a href="#" title="Ver más informes" class="btn btn--fill">Ver más informes</a>
    <ul>
        <li>Uno</li>
        <li>Dos</li>
        <li>Tres
            <ol>
                <li>Primero</li>
                <li>Segundo</li>
            </ol>
        </li>
        <li>Cuatro</li>
        <li>Cinco
            <ul>
                <li>Primero</li>
                <li>Segundo</li>
            </ul>
        </li>
        <li>Seis</li>
    </ul>
    <ol>
        <li>Uno</li>
        <li>Dos</li>
        <li>Tres
            <ol>
                <li>Primero</li>
                <li>Segundo</li>
            </ol>
        </li>
        <li>Cuatro</li>
        <li>Cinco
            <ul>
                <li>Primero</li>
                <li>Segundo</li>
            </ul>
        </li>
        <li>Seis</li>
    </ol>
    <div class="formulario">
        <form action="">
            <div class="input-group group">
                <label for="nickname">Nombre</label>
                <input type="text" name="nickname" id="nickname">
            </div><!-- /.input-group group -->
            <div class="input-group group">
                <label for="email">Mail</label>
                <input type="email" name="email" id="email">
            </div><!-- /.input-group group -->
            <div class="select-group group">
                <label for="select">Es peligroso andar solo, toma uno <span>*</span></label>
                <select name="select" id="select">
                    <option value="default">Selecciona una opcion</option>
                    <option value="one">Bulbasaur</option>
                    <option value="two">Charmander</option>
                    <option value="three">Squirtle</option>
                </select>
                <svg><use xlink:href="#shape-icon-down" /></svg>
            </div><!-- /.select-group group -->
            <div class="textarea-group group">
                <label for="message">Mensaje <span>*</span></label>
                <textarea name="message" id="message"></textarea>
            </div><!-- /.textarea-group group -->
            <div class="file-group group">
                <label for="file">Archivo</label>
                <div class="style-file">
                    <p>Selecionar archivo...</p>
                    <button>Seleccionar archivo <svg><use xlink:href="#shape-icon-up" /></svg></button>
                    <input type="file" name="file" id="file">
                </div><!-- /.style-file -->
            </div><!-- /.textarea-group group -->
            <div class="search-group group">
                <input type="text">
                <div class="send-button">
                    <svg><use xlink:href="#shape-icon-lupa" /></svg>
                    <input type="submit" value=" ">
                </div><!-- /.sennd-button -->
            </div><!-- /.search-group group -->
            <div class="send-group">
                <input type="submit" value="Enviar">
            </div><!-- /.send-group -->
            <div class="message">
                <h2>Feedback Status</h2>
                <p class="message__text">Suspendisse potenti. Nunc a tincidunt nulla, vitae blandit lacus. Quisque porttitor imperdiet arcu id aliquet.</p>
                <button class="message__link">Ok/Cerrar</button>
            </div><!-- /.message -->
        </form>
    </div><!-- /.formulario -->
    <div class="container">
        <h2>Ultimos informes</h2>
        <div class="container--informes">
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
        </div><!-- /.container--informes -->
    </div><!-- /.container -->
</div><!-- /.wrap -->
<?php include 'footer.php'; ?>