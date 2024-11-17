<div class="pre-loader">
    <div class="pre-loader-box">
        <div class="loader-logo">
            <img src="<?php echo ASSETSURL?>Images/logo-umb.webp" alt="" />
        </div>
        <div class="loader-progress" id="progress_div">
            <div class="bar" id="bar1"></div>
        </div>
            <div class="percent" id="percent1">0%</div>
            <div class="loading-text">Cargando...</div>
        </div>
    </div>
</div>

<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="row">
					<div class="col-lg-6 col-md-12 col-sm-12 mb-30">
						<!-- With indicators -->
						<div class="card-box mb-30">
							<div class="clearfix pd-20">
								<div class="pull-left">
									<h4 class="h4">Noticias UMB</h4>
								</div>
							</div>
							<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
								<ol class="carousel-indicators">
									<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
									<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
									<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
									<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
								</ol>
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img class="d-block w-100" src="<?php echo ASSETSURL?>Images/5n.png" alt="First slide" />
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="<?php echo ASSETSURL?>Images/12.png" alt="Second slide" />
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="<?php echo ASSETSURL?>Images/Links-sospechosos.png" alt="Third slide" />
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="<?php echo ASSETSURL?>Images/Red-Wifi_Buc.jpg" alt="Fourth slide" />
									</div>
								</div>
								<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
									data-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
									data-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-12 col-sm-12 mb-30">
                        <div class="card-box mb-30">
                            <div class="clearfix pd-20">
								<div class="pull-left">
									<h4 class="h4">Benvenid@</h4>
                                    <h3>
                                    <?php echo $_SESSION['session']['userData']['firstName'].' '.$_SESSION['session']['userData']['lastName'] ?>
                                    </h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>