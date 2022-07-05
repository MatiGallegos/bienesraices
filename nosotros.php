<?php include 'includes/templates/header.php'; ?>

    <main class="contenedor seccion">
        <h1>Conoce sobre Nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>25 Años de Experiencia</blockquote>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit voluptates exercitationem mollitia officiis tempore, fugit, 
                    eligendi inventore dignissimos nostrum sint iusto officia. Quidem, ex debitis? Fugit accusantium rem aliquid quia! Lorem ipsum dolor sit, 
                    amet consectetur adipisicing elit. Laboriosam harum repellendus quae voluptatem impedit iure aut enim id tenetur beatae eos, 
                    ullam in accusantium ipsa. Deserunt quas vitae accusantium optio!
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit voluptates exercitationem mollitia officiis tempore, fugit, 
                    eligendi inventore dignissimos nostrum sint iusto officia. Quidem, ex debitis? Fugit accusantium rem aliquid quia! Lorem ipsum dolor sit</p>
                    <p>amet consectetur adipisicing elit. Laboriosam harum repellendus quae voluptatem impedit iure aut enim id tenetur beatae eos, 
                        ullam in accusantium ipsa. Deserunt quas vitae accusantium optio!
                        amet consectetur adipisicing elit. Laboriosam harum repellendus quae voluptatem impedit iure aut enim id tenetur beatae eos, 
                    ullam in accusantium ipsa. Deserunt quas vitae accusantium optio!</p>
            </div>
        </div>
    </main>

    <section class="contenedor">
        <h1>Más Sobre Nosotros</h1>
        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono Seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore modi reprehenderit tenetur ipsa autem vitae nam,
                obcaecati atque sint at mollitia necessitatibus vel blanditiis quia unde impedit pariatur maiores quo!</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono Seguridad" Precio="lazy">
                <h3>precio</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore modi reprehenderit tenetur ipsa autem vitae nam,
                obcaecati atque sint at mollitia necessitatibus vel blanditiis quia unde impedit pariatur maiores quo!</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
                <h3>A tiempo</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore modi reprehenderit tenetur ipsa autem vitae nam,
                obcaecati atque sint at mollitia necessitatibus vel blanditiis quia unde impedit pariatur maiores quo!</p>
            </div>
        </div>
    </section>

    <footer class="footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="nosotros.html">Nosotros</a>
                <a href="anuncios.html">Anuncios</a>
                <a href="blog.html">Blog</a>
                <a href="contacto.html">Contacto</a>
            </nav>
        </div>

        <p class="copyright">Todos los Derechos Reservados 2022 &copy;</p>
    </footer>
    
    <script src="build/js/bundle.min.js"></script>
</body>
</html>