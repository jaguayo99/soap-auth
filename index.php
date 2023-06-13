<!DOCTYPE HTML>
<!--
	Full Motion by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>

<head>
    <title>Concesionario Multimarca</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="main.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</head>

<body id="top">
    <section id="banner" data-video="images/banner">
        <div class="inner">
            <header>
                <h1>Concesionario Multimarca</h1>
                <p>Somos un Concesionario Multimarca Líder en su sector.</p>
                <p>Calidad y Precio garantizado</p>

            </header>
            <a href="#main" class="more scrolly">Learn More</a>
        </div>
    </section>

    <!-- Main -->
    <div id="main">
        <div class="inner">

            <!-- Boxes -->

            <div class="thumbnails">
                <?php
                            require_once "client.php";
                            $marcas = $client->ObtenerMarcasUrl();
                            foreach ($marcas as $marca => $url) {
                            ?>
                <div class="box">
                    <a href="<?= $url ?>" class="image fit" title="ver video"><img src="images/<?= $marca ?>.png"
                            alt="logo <?= $marca ?>" /></a>
                    <div class="inner">

                    <?php
					$modelos = $client->ObtenerModelosPorMarca($marca);
					?>
                        <!-- Agrega un botón o enlace que desencadene el evento de clic -->
                        <button onclick='openModal("<?=$marca?>")'>Modelos <?=$marca?></button>

                        <!-- Agrega el modal con un ID para poder manipularlo desde JavaScript -->
                        <div id="<?=$marca?>" class="modal" tabindex="-1" role="dialog">

                            <div class="modal-dialog" role="document">
                                <div class="modal-content" style="max-height: 400px; overflow-y: auto;">
                                    <div class="modal-header">
                                        <p>Modelos disponibles marca: <?=$marca?></p>
                                        <button onclick='closeModal("<?=$marca?>")'>Cerrar</button>

                                        <?php
                foreach($modelos as $m){
                ?>
                                        <figure class="figure">
                                            <img src="images/<?=$marca?>.png" alt="logo <?=$marca?>" width=100
                                                height=100 />
                                            <figcaption><?=$m?></figcaption>
                                        </figure>
                                        <?php
                }?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="<?= $url ?>" class="button style2 fit" data-poptrox="youtube,800x400">Ver video
                            <?= $marca ?></a>
                    </div>
                </div>
                <?php
                            }
                            ?>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer id="footer">
        <div class="inner">
            <h2>Sigue nuestras redes sociales</h2>
            <p>A responsive video gallery template with a functional lightbox<br />
                designed by <a href="https://templated.co/">Templated</a> and released under the Creative Commons
                License.</p>

            <ul class="icons">
                <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                <li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
            </ul>
            <p class="copyright">&copy; Untitled. Design: <a href="https://templated.co">TEMPLATED</a>. Images: <a
                    href="https://unsplash.com/">Unsplash</a>. Videos: <a href="http://coverr.co/">Coverr</a>.</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="http://dwes.byethost14.com/multimarca/assets/js/jquery.min.js"></script>
    <script src="http://dwes.byethost14.com/multimarca/assets/js/jquery.poptrox.min.js"></script>
    <script src="http://dwes.byethost14.com/multimarca/assets/js/jquery.scrolly.min.js"></script>
    <script src="http://dwes.byethost14.com/multimarca/assets/js/main.js"></script>
    <script src="http://dwes.byethost14.com/multimarca/assets/js/skel.min.js"></script>
    <script src="http://dwes.byethost14.com/multimarca/assets/js/util.js"></script>
    <script>
    // Función para abrir el modal
    function openModal(marca) {
        // Obtén una referencia al elemento del modal
        let modal = document.getElementById(marca);

        // Establece la propiedad style.display como "block" para mostrar el modal
        modal.style.display = "block";
    }

    function closeModal(marca) {
        // Obtén una referencia al elemento del modal
        let modal = document.getElementById(marca);

        // Establece la propiedad style.display como "block" para mostrar el modal
        modal.style.display = "none";
    }
    </script>

</body>

</html>