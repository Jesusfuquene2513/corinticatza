<div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-12 text-center">
                <h2 class="text-white mb-4">VISITAS</h2>  
                <h3 class="text-white mb-4"><?php echo  $_SESSION["visitantes"]; ?></h3>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Nuestra oficina</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    <div class="d-flex pt-3">
                        <a class="btn btn-square btn-secondary rounded-circle me-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-secondary rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-secondary rounded-circle me-2" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-secondary rounded-circle me-2" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Mapa del sitio</h5>
                    <a class="btn btn-link" href="../index.php/Home">Inicio</a>
                    <a class="btn btn-link" href="../index.php/About">Nosotros</a>
                    <a class="btn btn-link" href="../index.php/Portafolio">Programas</a>
                    <a class="btn btn-link" href="../index.php/Publicaciones">Publicaciones</a>
                    <a class="btn btn-link" href="../index.php/Blog">Galería</a>
                    
                    <a class="btn btn-link" href="../index.php/Contacto">Contactanos</a>
                </div>
              
                <div class="col-lg-6 col-md-12">
                    <h5 class="text-white mb-4">Ubicanos</h5>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.662999052456!2d-76.54279238476781!3d3.431946952304928!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e30a7673b6d8c77%3A0x97cfd3d57b3d0e70!2sCorporaci%C3%B3n%20Empresarial%20Internacional%20Redepyme!5e0!3m2!1ses!2sco!4v1680024923661!5m2!1ses!2sco" style="width:100%" height="250px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-lg-12">
                <?php
$this->load->view('vistas/formulario_contacto');
?>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


   
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript ../plantilla/libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../plantilla/lib/wow/wow.min.js"></script>
    <script src="../plantilla/lib/easing/easing.min.js"></script>
    <script src="../plantilla/lib/waypoints/waypoints.min.js"></script>
    <script src="../plantilla/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../plantilla/lib/counterup/counterup.min.js"></script>
    <script src="../plantilla/lib/parallax/parallax.min.js"></script>
    <script src="../plantilla/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="../plantilla/js/main.js"></script>
    <script src="../plantilla/js/slider.js"></script>
    <script src="../plantilla/js/programas.js"></script>
    <script src="../plantilla/js/talento.js"></script>
    <script src="../plantilla/js/publicaciones.js"></script>
    <script src="../plantilla_front/js/footer_original.js"></script>
    <script src="../plantilla/js/fotos.js"></script>
</body>

</html>