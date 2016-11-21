
<?php require_once("resources/config.php"); ?>

<?php include(TEMPLATE_FRONT .DS. "header.php") ?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h2 class="section-heading">Contactando</h2>
            <h3 class="section-subheading">
                <?php dsp_mensaje(); ?>
            </h3>
        </div>
    </div> <!--End: Row (Contactando a ...)-->
    <div class="row">
        <div class="col-lg-12">
            <form action="" name="sntMessage" id="contactForm" method="post">
               
               <?php snd_message(); ?>
               
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="name" id="name" class="form-control" placeholder="Tu nombre *" data-validation-required-message="Por favor introduce tu nombre" required>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" id="email" class="form-control" placeholder="Email *" data-validation-required-message="Por favor introduce tu email" required>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <input type="text" name="subject" id="phone" class="form-control" placeholder="Telefono *" data-validation-required-message="Por favor introduce tu telefono" required>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="message" id="message" class="form-control" cols="30" rows="10" placeholder="Tu mensaje *" data-validation-required-message="Por favor introduce un mensaje moderado." required></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-lg-12 text-center">
                        <div id="success"></div>
                        <button name="submit" type="submit" class="btn btn-x1">
                            Enviar mensaje
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div> <!--End row (datos)-->
</div>


<?php include(TEMPLATE_FRONT .DS. "footer.php") ?>
