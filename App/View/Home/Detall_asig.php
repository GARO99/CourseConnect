<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
					<div class="page-header">
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="title">
									<h4 style="color: RED;">Informacion Asignatura</h4>
								</div>
							</div>
						</div>
					</div>
                    <div>
                    <button type="button" class="btn btn-primary btn-sm" onclick="window.location.href='Gest_asig'">Crear Grupo</button>
                    </div>
					<!-- Export Datatable start -->
					<div class="card-box mb-30">
						<div class="pb-20">
							<table
								class="table hover data-table-export nowrap"
							>
								<thead>
									<tr>
										<th class="table-plus ">Nombre grupo</th>
										<th>Instructor</th>
										<th>cupos</th>
										<th>Cant Horas</th>	
                                        <th>Dias</th>
                                        <th>Hora Inicio</th>
                                        <th>Hora Final</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($data[0] as $row): ?>
										<tr>
											<td class="table-plus"><?php echo $row->nombregrupo; ?></td>
											<td><?php echo $row->instructor; ?></td>
											<td><?php echo $row->cupos; ?></td>
                                    	    <td><?php echo $row->canthoras; ?></td>
                                    	    <td>
                                     	       <table>
													<?php foreach ($data[0] as $row): ?>
                                    	           	 	<tr><td><?php echo $row->dias; ?></td></tr>
													<?php endforeach; ?>
                                     	       </table>
                                    	    </td>
                                    	    <td>
                                    	        <table>
													<?php foreach ($data[0] as $row): ?>
                                    	           	 	<tr><td><?php echo $row->horainicio; ?></td></tr>
													<?php endforeach; ?>
                                    	        </table>
                                    	    </td>
                                    	    <td>
												<table>
													<?php foreach ($data[0] as $row): ?>
                                    	           	 	<tr><td><?php echo $row->horafinal; ?></td></tr>
													<?php endforeach; ?>
                                    	        </table>
                                    	    </td>
											<td>
											<button type="button" class="btn btn-success" style="width: 50px; border-radius: 3px; margin: 3px; background-color:transparent; border-color:#f39c12" onclick="window.location.href='edit_grupo'"><i class="fa fa-fw fa-pencil-square-o text-yellow"></i></button>
											<button type="button" class="btn btn-success" style="width: 50px; border-radius: 3px; margin: 3px; background-color:transparent; border-color:red" onclick="window.location=''"><i class="fa fa-fw fa-trash text-orange"></i></button>
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