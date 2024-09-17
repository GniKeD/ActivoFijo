<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Iniciar Sesión</title>
        <link href="<?php echo base_url; ?>Assets/css/styles.css" rel="stylesheet" />
        <script src="<?php echo base_url;?>Assets/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Iniciar Sesión</h3></div>
                                    <div class="card-body">
                                        <form id="frmLogin">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="usuario" name="usuario" type="text" placeholder="ingresar usuario" />
                                                <label for="usuario" ><i class = "fas fa-user"></i> Usuario</i></label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="contraseña" name="contraseña" type="password" placeholder="ingresar contraseña" />
                                                <label for="contraseña"><i class="fas fa-key"></i> Contraseña</label>
                                            </div>
                                            <div class="alert alert-danger text-center d-none" id="alerta" role="alert">
                                                
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-primary" type="submit" onclick="frmLogin(event)">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; <a href="https://coapatap.gob.mx/">Comité de Agua Potable y Alcantarillado del Municipio de Tapachula.</a> 8a. Norte #13 Colonia 5 de Febrero Tapachula Chiapas. Teléfonos (962) 6268924. <?php echo date("Y"); ?></div>
                            <div>echo date
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="<?php echo base_url;?>Assets/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url;?>Assets/js/jquery.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url;?>Assets/js/scripts.js"></script>
        <script>
            const base_url = "<?php echo base_url;?>";
        </script>
        <script src="<?php echo base_url;?>Assets/js/funciones.js"></script>
    </body>
</html>
