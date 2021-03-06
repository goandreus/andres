<?php 
    include('header.php');
?>

    <!-- ***** Wellcome Area Start ***** -->
    <section class="cabeceraBienvenida" id="home">
       

            <div class="metrica" style="">

                <div class="tituloCabecera">
                    
                    <h2 ><span style="color:#fff">|</span> Transporte</h2>

                    
                </div>
                <div class="metricaGeneral">

                <!-- Single Cool Fact-->
                <div class="col-12 col-md-3 col-lg-3">
                    <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.2s">
                        <div class="counter-area">
                            <h3><span class="counter">190</span></h3>
                        </div>
                        <div class="cool-facts-content">
                            <i class="ion-sad-outline"></i>
                            <p>Casos <br> Reportados</p>
                        </div>
                    </div>
                </div>
                <!-- Single Cool Fact-->
                <div class="col-12 col-md-3 col-lg-3">
                    <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.4s">
                        <div class="counter-area">
                            <h3><span class="counter">120</span></h3>
                        </div>
                        <div class="cool-facts-content">
                            <i class="ion-happy-outline"></i>
                            <p>Casos <br> Solucionados</p>
                        </div>
                    </div>
                </div>
                <!-- Single Cool Fact-->
                <div class="col-12 col-md-3 col-lg-3">
                    <div class="single-cool-fact d-flex justify-content-center wow fadeInUp" data-wow-delay="0.6s">
                        <div class="counter-area">
                            <h3><span class="counter">40</span></h3>
                        </div>
                        <div class="cool-facts-content">
                            <i class="ion-person"></i>
                            <p>Empresas <br>Sancionadas</p>
                        </div>
                    </div>
                </div>
                <!-- Single Cool Fact-->
                
            </div>
            <div class="consultaProveedor">
                    <div class="get-start-area">
                        <!-- Form Start -->
                        <form action="#" method="post" class="form-inline">
                            <input type="text" class="form-control consulta" placeholder="Proveedor a consultar">
                            <input type="submit" class="submit" value="Consultar">
                        </form>
                        <!-- Form End -->
                    </div>
                
            </div>

        </div>
        <!-- Welcome thumb -->
        <div class="welcome-thumb wow fadeInDown" data-wow-delay="0.5s">
            <img src="img/bg-img/welcome-salud.png" alt="">
        </div>
    </section>
    <!-- ***** Wellcome Area End ***** -->
<br>
        <!-- ***** Mapa Area Start ***** -->
    <div class="video-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Mapa Area Start -->
                    <div  class="mapasEstadistico">
                        <div class="mapaRiesgo">
                            <h1 style="color: #a865e1">Mapa de Riesgo</h1><br>
                            <div id="map"></div>
                        </div>
                        <div class="detalleRiesgo">
                        <h1 style="color:#ccc;">Detalles de Riesgo</h1>
                            <div id="sitio" style="display:block;padding: 4%">
                       
                                    <table >
                                        <TR >
                                            <TH style="border:1px solid #ab43da">Actividad Económica</TH>
                                            <TD style="border:1px solid #ab43da">TRANSPORTES</TD> 
                                        </TR>
                                        <TR>
                                            <TH style="border:1px solid #ab43da">Provincia</TH>
                                            <TD style="border:1px solid #ab43da">LIMA</TD> 
                                        </TR>
                                        <TR><TH style="border:1px solid #ab43da">% Reclamos</TH>
                                            <TD style="border:1px solid #ab43da">10%</TD> 
                                        </TR>
                                        <TR><TH style="border:1px solid #ab43da">Abandono</TH>
                                            <TD style="border:1px solid #ab43da">5</TD> 
                                        </TR>
                                    </table>

                                <br>
                                <style>
                                    th,td{width: 200px;padding: 2%}
                                </style>
                                    <table >
                                        <TR >
                                            <TH style="border:1px solid #ab43da">Total Reportados</TH>
                                            <TD style="border:1px solid #ab43da">150</TD> 
                                        </TR>
                                        <TR>
                                            <TH style="border:1px solid #ab43da">Conciliados</TH>
                                            <TD style="border:1px solid #ab43da">50</TD> 
                                        </TR>
                                        <TR><TH style="border:1px solid #ab43da">No Conciliados</TH>
                                            <TD style="border:1px solid #ab43da">20</TD> 
                                        </TR>
                                        <TR><TH style="border:1px solid #ab43da">Abandono</TH>
                                            <TD style="border:1px solid #ab43da">5</TD> 
                                        </TR>
                                    </table>
                                    <br>
                                    <table >
                                        <TR>
                                            <TH style="border:1px solid #ab43da">Proveedores Sancionados</TH>
                                            <TD style="border:1px solid #ab43da">20  | <a href="denuncias.php">Descúbrelos</a></TD> 
                                        </TR>
                                      
                                    </table>
                              

                            </div>
                        </div>
                    </div>

                        
                       
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Video Area End ***** -->

<div class="popup" style="z-index: 9999999">
  <div class="popup-content">
    <h3 style="color:#833ce8; font-weight: 700;">Haz tu reclamo</h3>
    <p>

   

    </p>

       <button class="accordion">Virtual</button>
        <div class="panel">
          <p><img src="img/bg-img/aqui.svg" width="30px">Ir a Presentar Reclamo</p>
        </div>

        <button class="accordion">Presencial</button>
        <div class="panel">
          <p><img src="img/bg-img/ubicacion.svg" width="30px">Oficina más cercana</p>
        </div>

     
  </div>  
  <a class="button" ><img src="img/bg-img/reclamo.svg" width="40" /></a>
</div>







    <!-- ***** Donde reclamar ***** -->
    <section class="dondeReclamar clearfix">
        <div class="container" style="display: inline-flex;padding: 0% 15%">
            <h1 style="color:#fff">¿Dónde Reclamar?</h1> <img src="img/bg-img/opsitel.png" style="padding: 0 0 0 25px">

        </div>
    </section>
    <!-- ***** Cool Facts Area End ***** -->

    <!-- ***** Contact Us Area Start ***** -->
    <section class="footer-contact-area section_padding_100 clearfix" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- Heading Text  -->
                    <div class="section-heading">
                        <h2>Get in touch with us!</h2>
                        <div class="line-shape"></div>
                    </div>
                    <div class="footer-text">
                        <p>We'll send you epic weekly blogs, whitepapers and things to make your app startup thrive, all FREE!</p>
                    </div>
                    <div class="address-text">
                        <p><span>Address:</span> 40 Baria Sreet 133/2 NewYork City, US</p>
                    </div>
                    <div class="phone-text">
                        <p><span>Phone:</span> +11-225-888-888-66</p>
                    </div>
                    <div class="email-text">
                        <p><span>Email:</span> info.deercreative@gmail.com</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- Form Start-->
                    <div class="contact_from">
                        <form action="#" method="post">
                            <!-- Message Input Area Start -->
                            <div class="contact_input_area">
                                <div class="row">
                                    <!-- Single Input Area Start -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Your E-mail" required>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Your Message *" required></textarea>
                                        </div>
                                    </div>
                                    <!-- Single Input Area Start -->
                                    <div class="col-12">
                                        <button type="submit" class="btn submit-btn">Send Now</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Message Input Area End -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Contact Us Area End ***** -->

   <!-- ***** Footer Area Start ***** -->
       <?php
        include('footer.php');
     ?>