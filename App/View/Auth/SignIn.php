<!DOCTYPE html>
<html>
    <head>
        <!-- Basic Page Info -->
        <meta charset="utf-8" />
        <title>Iniciar Sesion</title>

        <link
        rel="icon"
        type="image/png"
        sizes="16x16"
        href="<?php echo ASSETSURL?>Images/favicon-rojo.webp"
        />
        

        <!-- Mobile Specific Metas -->
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, maximum-scale=1"
        />

        <!-- Google Font -->
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
            rel="stylesheet"
        />
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="<?php echo ASSETSURL?>CSS/Auth/Sing_In/core.css" />
        <link
            rel="stylesheet"
            type="text/css"
            href="vendors/styles/icon-font.min.css"
        />
        <link rel="stylesheet" type="text/css" href="<?php echo ASSETSURL?>CSS/Auth/Sing_In/style.css" />


    </head>
    <body class="login-page">
        
        <div
            class="login-wrap d-flex align-items-center flex-wrap justify-content-center"
        >
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-7">
                        <img src="<?php echo ASSETSURL?>Images/logo-umb.webp" alt="" />
                    </div>
                    <div class="col-md-6 col-lg-5">
                        <div class="login-box bg-white box-shadow border-radius-10">
                            <div class="login-title">
                                <h2 class="text-center text-primary">Iniciar Sesion</h2>
                            </div>
                            <?php if (isset($_SESSION['error'])): ?>
                                <div class="alert-danger pd-10">
                                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                                    <p><?php echo $_SESSION['error']['message'];unset($_SESSION['error']) ?></p>
                                </div>
                            <?php endif; ?>
                            <form  action="<?php echo htmlspecialchars(RUTURL.'SignIn/login');?>" method="post" autocomplete="off">
                                <div class="select-role">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                        <label class="btn active">
                                            <input type="radio" name="rol" id="teacher" value="2"/>
                                            <div class="icon">
                                                <img
                                                    src="<?php echo ASSETSURL?>Images/briefcase.svg"
                                                    class="svg"
                                                    alt=""
                                                />
                                            </div>
                                            <span>Soy</span>
                                            Docente
                                        </label>
                                        <label class="btn">
                                            <input type="radio" name="rol" id="user" value="3"/>
                                            <div class="icon">
                                                <img
                                                    src="<?php echo ASSETSURL?>Images/person.svg"
                                                    class="svg"
                                                    alt=""
                                                />
                                            </div>
                                            <span>Soy</span>
                                            Estudiante
                                        </label>
                                        <label class="btn">
                                            <input type="radio" name="rol" id="admin" value="1"/>
                                            <div class="icon">
                                                <img
                                                    src="<?php echo ASSETSURL?>Images/person.svg"
                                                    class="svg"
                                                    alt=""
                                                />
                                            </div>
                                            <span>Soy</span>
                                            Administrador
                                        </label>
                                    </div>
                                </div>
                                <div class="input-group custom">
                                    <input
                                        type="text"
                                        class="form-control form-control-lg"
                                        placeholder="Correo Institucional"
                                        name="email"
                                    />
                                    <div class="input-group-append custom">
                                        <span class="input-group-text"
                                            ><i class="icon-copy dw dw-user1"></i
                                        ></span>
                                    </div>
                                </div>
                                <div class="input-group custom">
                                    <input
                                        type="password"
                                        class="form-control form-control-lg"
                                        placeholder="Contraseña"
                                        name="password"
                                    />
                                    <div class="input-group-append custom">
                                        <span class="input-group-text"
                                            ><i class="dw dw-padlock1"></i
                                        ></span>
                                    </div>
                                </div>
                                <div class="row pb-30">
                                    <div class="col-6">
                                
                                        <div class="custom-control custom-checkbox">
                                            <input
                                                type="checkbox"
                                                class="custom-control-input"
                                            />
                                            <label class="custom-control-label" for="customCheck1"
                                                >Recordarme</label
                                            >
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="forgot-password">
                                            <a href="forgot-password.html">recuperar contraseña</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="input-group mb-0">
                                            <input class="btn btn-primary btn-lg btn-block" type="submit" value="Inicar Sesion">
                                        </div>
                                        <div
                                            class="font-16 weight-600 pt-10 pb-10 text-center"
                                            data-color="#707373"
                                        >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <a href="<?php echo RUTURL . 'Register/index'; ?>" class="col-sm-12 text-center">
                                        <div class="btn btn-primary btn-lg btn-block ">Registrar</div>
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- js -->
        <script src="<?php echo ASSETSURL?>JS/Auth/Sing_In/core.js"></script>
        <script src="<?php echo ASSETSURL?>JS/Auth/Sing_In/script.min.js"></script>
        <script src="<?php echo ASSETSURL?>JS/Auth/Sing_In/process.js"></script>
        <script src="<?php echo ASSETSURL?>JS/Auth/Sing_In/layout-settings.js"></script>
    </body>
</html>