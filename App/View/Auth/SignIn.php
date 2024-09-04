<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>Iniciar Sesion</title>

		

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
		<link rel="stylesheet" type="text/css" href="Public/Assets/CSS/Auth/Sing_In/core.css" />
		<link
			rel="stylesheet"
			type="text/css"
			href="vendors/styles/icon-font.min.css"
		/>
		<link rel="stylesheet" type="text/css" href="Public/Assets/CSS/Auth/Sing_In/style.css" />


	</head>
	<body class="login-page">
		<div class="login-header box-shadow">
			<div
				class="container-fluid d-flex justify-content-between align-items-center"
			>
				<div class="brand-logo">
					<a href="login.html">
						<img  src="Public/Assets/Images/Logo-UMB-Blog-1.png" alt="" />
					</a>
				</div>		
			</div>
		</div>
		<div
			class="login-wrap d-flex align-items-center flex-wrap justify-content-center"
		>
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6 col-lg-7">
						<img src="Public/Assets/Images/logo-umb.webp" alt="" /> <!--Imagen que abarca gran parte de la pantalla-->
					</div>
					<div class="col-md-6 col-lg-5">
						<div class="login-box bg-white box-shadow border-radius-10">
							<div class="login-title">
								<h2 class="text-center text-primary">Iniciar Sesion</h2>
							</div>
							<form>
								<div class="select-role">
									<div class="btn-group btn-group-toggle" data-toggle="buttons">
										<label class="btn active">
											<input type="radio" name="options" id="admin" />
											<div class="icon">
												<img
													src="Public/Assets/Images/briefcase.svg"  
													class="svg"
													alt=""
												/>
											</div>
											<span>Soy</span>
											Docente
										</label>
										<label class="btn">
											<input type="radio" name="options" id="user" />
											<div class="icon">
												<img
													src="Public/Assets/Images/person.svg"
													class="svg"
													alt=""
												/>
											</div>
											<span>Soy</span>
											Estudiante
										</label>
										<label class="btn">
											<input type="radio" name="options" id="user" />
											<div class="icon">
												<img
													src="Public/Assets/Images/person.svg"
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
												id="customCheck1"
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
											<!--
											use code for form submit
											<input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">
										-->
											<a
												class="btn btn-primary btn-lg btn-block"
												href="index.html"
												>Iniciar Sesion</a
											>
										</div>
										<div
											class="font-16 weight-600 pt-10 pb-10 text-center"
											data-color="#707373"
										>
											
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- js -->
		<script src="Public/Assets/JS/Auth/Sing_In/core.js"></script>
		<script src="Public/Assets/JS/Auth/Sing_In/script.min.js"></script>
		<script src="Public/Assets/JS/Auth/Sing_In/process.js"></script>
		<script src="Public/Assets/JS/Auth/Sing_In/layout-settings.js"></script>
	</body>
</html>
