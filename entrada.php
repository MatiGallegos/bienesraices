<?php

    require 'includes/funciones.php';    
    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Guía para la decoración de tu hogar</h1>

        
        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <source srcset="build/img/destacada2.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada2.jpg" alt="Imagen de la propiedad">  
        </picture>

        <p class="informacion-meta">Escrito el: <span>2/07/2022</span> por: <span>Admin</span></p>

        <div class="resumen-propiedad">            
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
