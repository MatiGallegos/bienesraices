<?php

    require 'includes/funciones.php';    
    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en Venta frente al bosque</h1>
        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada.jpg" alt="Imagen de la propiedad">  
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">$3,000,000</p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitacion">
                <p>4</p>
                </li>                       
            </ul>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit voluptates exercitationem mollitia officiis tempore, fugit, 
                eligendi inventore dignissimos nostrum sint iusto officia. Quidem, ex debitis? Fugit accusantium rem aliquid quia! Lorem ipsum dolor sit, 
                amet consectetur adipisicing elit. Laboriosam harum repellendus quae voluptatem impedit iure aut enim id tenetur beatae eos, 
                ullam in accusantium ipsa. Deserunt quas vitae accusantium optio!
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit voluptates exercitationem mollitia officiis tempore, fugit, 
                eligendi inventore dignissimos nostrum sint iusto officia. Quidem, ex debitis? Fugit accusantium rem aliquid quia! Lorem ipsum dolor sit</p>
                
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis, nostrum! Eius, suscipit dolores totam officiis odit maiores quo
                    est eveniet culpa iste, nihil quae veritatis officia rem? Porro, illum ea!</p>
        </div>
    </main>

<?php

incluirTemplate('footer');

?>
