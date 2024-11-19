<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>Registrar</title>

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
    <div class="login-header box-shadow">
			<div
				class="container-fluid d-flex justify-content-between align-items-center"
			>
				<div class="brand-logo">
					<a href="../SignIn">
						<img  src="<?php echo ASSETSURL?>Images/Logo-UMB-Blog-1.png" alt="" />
					</a>
				</div>
				<div class="login-menu">
					<ul>
						<li><a href="../SignIn">Login</a></li>
					</ul>
				</div>	
			</div>
		</div>
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
								<h2 class="text-center text-primary">Registrar</h2>
							</div>
							<form  action="<?php echo htmlspecialchars(RUTURL.'Register/register');?>" method="post" autocomplete="off">
							<div class="form-wrap max-width-600 mx-auto">
											<div class="form-group row">
												<label class="col-sm-4 col-form-label" for="id"
													>Código de Usuario:</label
												>
												<div class="col-sm-8">
													<input type="number" class="form-control" id="id" name="id" required/>
												</div>
											</div>
											<div class="form-group row">
												<label for="email" class="col-sm-4 col-form-label">Correo Electrónico:</label>
												<div class="col-sm-8">
													<input type="email" class="form-control" id="email" name="email" required/>
												</div>
											</div>
											<div class="form-group row">
												<label for="password" class="col-sm-4 col-form-label">Contraseña:</label>
												<div class="col-sm-8">
													<input type="password" class="form-control" id="password" name="password" required/>
												</div>
											</div>
											<div class="form-group row">
												<label for="role_id" class="col-sm-4 col-form-label"
													>Rol:</label
												>
												<div class="col-sm-8">
													<select id="role_id" class="form-control" name="role_id" required>
														<option value="" disabled selected>Selecciona un rol</option>
														<option value="1">Administrador</option>
														<option value="2">Estudiante</option>
														<option value="3">Profesor</option>
													</select>
												</div>
											</div>
										</div>
									<button type="submit" class="btn btn-primary btn-lg btn-block ">Registrar</button>
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