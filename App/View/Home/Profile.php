<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="row">
					<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
						<div class="card-box height-100-p overflow-hidden">
							<div class="profile-tab height-100-p">
								<div class="tab height-100-p">
									<ul class="nav nav-tabs customtab" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" data-toggle="tab" href="#Profile"
												role="tab">Pefil</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#setting"
												role="tab">Settings</a>
										</li>
									</ul>
									<div class="tab-content">
										<!-- Profile Tab start -->
										<div class="tab-pane fade show active" id="Profile" role="tabpanel">
											<div class="pd-20 card-box height-100-p">
												<div class="profile-photo">
													<a href="modal" data-toggle="modal" data-target="#modal"
														class="edit-avatar"><i class="fa fa-pencil"></i></a>
													<img src="<?php echo ASSETSURL?>Images/Predefinida.png" alt="" class="avatar-photo" />
													<div class="modal fade" id="modal" tabindex="-1" role="dialog"
														aria-labelledby="modalLabel" aria-hidden="true">
														<div class="modal-dialog modal-dialog-centered" role="document">
															<div class="modal-content">
																<div class="modal-body pd-5">
																	<div class="img-container">
																		<img id="image" src=""
																			alt="Picture" />
																	</div>
																</div>
																<div class="modal-footer">
																	<input type="submit" value="Update"
																		class="btn btn-primary" />
																	<button type="button" class="btn btn-default"
																		data-dismiss="modal">
																		Close
																	</button>
																</div>
															</div>
														</div>
													</div>
												</div>
												<h5 class="text-center h5 mb-0">
                                                <?php echo $_SESSION['session']['userData']['firstName'].' '.$_SESSION['session']['userData']['lastName'] ?>
                                                </h5>
												<div class="profile-info">
													<h5 class="mb-20 h5 text-blue">Informacion</h5>
													<ul>
														<li>
															<span>Email:</span>
															<?php echo $_SESSION['session']['userData']['email'];?>
														</li>
														<li>
															<span>Codigo:</span>
															---------
														</li>
														<li>
															<span>Rol:</span>
															<?php echo $_SESSION['session']['userData']['role'];?>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<!-- Profile Tab End -->
										<!-- Setting Tab start -->
										<div class="tab-pane fade height-100-p" id="setting" role="tabpanel">
											<div class="profile-setting">
												<form>
													<ul class="profile-edit-list row">
														<li class="weight-500 col-md-6">
															<h4 class="text-blue h5 mb-20">
																Edit Your Personal Setting
															</h4>
															<div class="form-group">
																<label>Nombres</label>
																<input class="form-control form-control-lg"
																	type="text" />
															</div>
															<div class="form-group">
																<label>Apellidos</label>
																<input class="form-control form-control-lg"
																	type="text" />
															</div>
															<div class="form-group mb-0">
																<input type="submit" class="btn btn-primary"
																	value="Update Information" />
															</div>

														<li class="weight-500 col-md-6">
														
														</li>
													</ul>
												</form>
											</div>
										</div>
										<!-- Setting Tab End -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>