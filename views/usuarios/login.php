<!--<body style="background-color: #508bfc;"> -->
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <section class="vh-100">
<div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
    <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
        class="img-fluid" alt="Phone image">
    </div>
    <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">

    <?php

if (isset($_GET["msg"])) {
    $msg = 1;
} else {
    $msg = 2;
}
if ($msg == 1) { ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>ERROR Usuario o Password incorrectos!</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php } ?> 

    <form action="<?php echo "index.php?c=".seg::codificar("usuarios")."&m=".seg::codificar("validar")?>  " method="post">
    <h1 style="text-align:center">Login</h1>
    <p></p>
    <!-- User input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="form1Example13">Usuario</label>
            <input type="text" id="form1Example13" class="form-control form-control-lg" name="txtusuario" placeholder="Escriba su Usuario" aria-describedby="textHelp"/>
        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">
        <label class="form-label" for="form1Example23">Contraseña</label>
            <input type="password" id="form1Example23" name="txtpassword" aria-describedby="passwordHelp" class="form-control form-control-lg" placeholder="Escriba su Contraseña"/>
        </div>

        <div class="d-flex justify-content align-items-center mb-5">
            <!-- CHECKBOX RECORDAR -->
            <div class="form-check">
            <input class="form-check-input" name="chkrecordar" type="checkbox" value="1" id="form1Example3" />
            <label class="form-check-label" for="form1Example3"> Recordarme </label>
            </div>
        </div>

        <!-- Submit button -->
        <div style="text-align: center;">
        <!-- EN TODOS LOS FORMULARIOS SE DEBE AGREGAR EL TOKEN-->
        <input type="hidden" value="<?php echo seg::getToken()?>" name="token">
        <button type="submit" class="btn btn-success btn-lg btn-block">Entrar</button>
        </div>
        </form>
</div>
    </div>
</div>
</section>

        </div>
        
    </div>
    
</div>
<!--</body> -->

<style>
.divider:after,
.divider:before {
content: "";
flex: 1;
height: 1px;
background: #eee;
}
</style>
