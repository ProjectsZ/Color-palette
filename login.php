
<?php require_once("resources/config.php"); ?>


<?php include(TEMPLATE_FRONT .DS. "header.php") ?>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h1 class="panel-title">Login</h1>
                    <h2 class="text-center bg-warning">
                        <?php dsp_mensaje(); ?>
                    </h2>
                </div>
                <div class="panel-body">
                    <form action="" role="form" method="post" enctype="multipart/form-data">
                        <?php login_user(); ?>
                        <fieldset>
                            <div class="form-group"><label for="">
                                Username<input type="text" class="form-control" placeholder="Usuario" name="username"></label>
                            </div>
                            <div class="form-group"><label for="">
                                Password<input type="password" name="password" class="form-control" placeholder="Password" ></label>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-primary">
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include(TEMPLATE_FRONT .DS. "footer.php") ?>