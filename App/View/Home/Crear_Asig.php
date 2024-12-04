<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
					<div class="page-header">
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="title">
									<h4 style="color: RED;">Gestionar Asignatura</h4>
								</div>
							</div>
						</div>
					</div>
				
					<!-- Export Datatable start -->
					<div class="card-box mb-30">
						<div class="pb-20">
							<table
								class="table hover data-table-export nowrap"
							>
								<thead>
									<tr>
										<th class="table-plus ">Nombre Asignatura</th>
										<th>Periodo Academico</th>
										<th>Facultad</th>
										<th> </th>	
									</tr>
								</thead>
								<tbody>
									<?php foreach ($data[0] as $row): ?>
										<tr>
											<td class="table-plus"><?php echo $row->signature_name; ?></td>
											<td><?php echo $row->academic_period; ?></td>
											<td><?php echo $row->faculty_name; ?></td>
											<td style="min-width:185px !important">
                                          	<div class="trans">
                                            	<div class="btn-toolbar">
                                              	<div class="btn-group btn-group">
                                                	<button type="button" class="btn btn-success" style="width: 50px; border-radius: 3px; margin:3px ; background-color:transparent; border-color:green" onclick="window.location.href='Detall_asig'"><i class="fa fa-fw fa-eye text-green"></i></button>
                                                	<button type="button" class="btn btn-success" style="width: 50px; border-radius: 3px; margin: 3px; background-color:transparent; border-color:#f39c12" onclick="window.location.href='edit_asig'"><i class="fa fa-fw fa-pencil-square-o text-yellow"></i></button>
                                                	<button type="button" class="btn btn-success" style="width: 50px; border-radius: 3px; margin: 3px; background-color:transparent; border-color:red" onclick="window.location=''"><i class="fa fa-fw fa-trash text-orange"></i><a href="#"></a></button>
                                            	</div>
                                          	</div>
                                        	</td>
										</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
