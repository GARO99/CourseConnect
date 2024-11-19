    <head>
    <!-- Basic Page Info -->
        <meta charset="utf-8" />
        <title>Pagina de Inicio</title>|
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
        <link rel="stylesheet" type="text/css" href="<?php echo ASSETSURL?>CSS/styles/core.css" />
        <link
            rel="stylesheet"
            type="text/css"
            href="<?php echo ASSETSURL?>CSS/styles/icon-font.min.css"
        />
        <link
            rel="stylesheet"
            type="text/css"
            href="<?php echo ASSETSURL?>src/plugins/datatables/css/dataTables.bootstrap4.min.css"
        />
        <link
            rel="stylesheet"
            type="text/css"
            href="<?php echo ASSETSURL?>src/plugins/datatables/css/responsive.bootstrap4.min.css"
        />
        <link
            rel="stylesheet"
            type="text/css"
            href="<?php echo ASSETSURL?>src/plugins/fullcalendar/fullcalendar.css"
        />
        <link rel="stylesheet" type="text/css" href="<?php echo ASSETSURL?>CSS/styles/style.css" />
    </head>

    <div class="header">
            <div class="header-left">
                <div class="menu-icon bi bi-list"></div>
                <div
                    class="search-toggle-icon bi bi-search"
                    data-toggle="header_search"
                ></div>
                
            </div>
            <div class="header-right">
                <div class="dashboard-setting user-notification">
                    <div class="dropdown">
                        <a
                            class="dropdown-toggle no-arrow"
                            href="javascript:;"
                            data-toggle="right-sidebar"
                        >
                            <i class="dw dw-settings2"></i>
                        </a>
                    </div>
                </div>
                <div class="user-notification">
                    <div class="dropdown">
                        <a
                            class="dropdown-toggle no-arrow"
                            href="#"
                            role="button"
                            data-toggle="dropdown"
                        >
                            <i class="icon-copy dw dw-notification"></i>
                            <span class="badge notification-active"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="notification-list mx-h-350 customscroll">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="vendors/images/img.jpg" alt="" />
                                            <h3>John Doe</h3>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit, sed...
                                            </p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="vendors/images/photo1.jpg" alt="" />
                                            <h3>Lea R. Frith</h3>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit, sed...
                                            </p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="user-info-dropdown">
                    <div class="dropdown">
                        <a
                            class="dropdown-toggle"
                            href="#"
                            role="button"
                            data-toggle="dropdown"
                        >
                            <span class="user-icon">
                                <img src="vendors/images/photo1.jpg" alt="" />
                            </span>
                            <span class="user-name">
                                <?php echo $_SESSION['session']['userData']['firstName'].' '.$_SESSION['session']['userData']['lastName'] ?>
                                <small><?php echo $_SESSION['session']['userData']['role'];?></small>
                            </span>
                        </a>
                        <div
                            class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
                        >
                            <a class="dropdown-item" href="profile.html"
                                ><i class="dw dw-user1"></i> Profile</a
                            >
                            <a class="dropdown-item" href="faq.html"
                                ><i class="dw dw-help"></i> Help</a
                            >
                            <a class="dropdown-item" href="<?php echo RUTURL.'SignIn/logout' ?>"
                                ><i class="dw dw-logout"></i> Log Out</a
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="right-sidebar">
            <div class="sidebar-title">
                <h3 class="weight-600 font-16 text-blue">
                    configuración de diseño
                    <span class="btn-block font-weight-400 font-12"
                        >Configuracion interfaz de usuario</span
                    >
                </h3>
                <div class="close-sidebar" data-toggle="right-sidebar-close">
                    <i class="icon-copy ion-close-round"></i>
                </div>
            </div>
            <div class="right-sidebar-body customscroll">
                <div class="right-sidebar-body-content">
                    <h4 class="weight-600 font-18 pb-10">Header Background</h4>
                    <div class="sidebar-btn-group pb-30 mb-10">
                        <a
                            href="javascript:void(0);"
                            class="btn btn-outline-primary header-white active"
                            >White</a
                        >
                        <a
                            href="javascript:void(0);"
                            class="btn btn-outline-primary header-dark"
                            >Dark</a
                        >
                    </div>

                    <h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
                    <div class="sidebar-btn-group pb-30 mb-10">
                        <a
                            href="javascript:void(0);"
                            class="btn btn-outline-primary sidebar-light"
                            >White</a
                        >
                        <a
                            href="javascript:void(0);"
                            class="btn btn-outline-primary sidebar-dark active"
                            >Dark</a
                        >
                    </div>


                    <div class="reset-options pt-30 text-center">
                        <button class="btn btn-danger" id="reset-settings">
                            Reset Settings
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
