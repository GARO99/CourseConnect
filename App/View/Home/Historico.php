<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
					<div class="page-header">
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="title">
									<h4>Historico UMB</h4>
								</div>
							</div>
						</div>
					</div>
					
					<!-- Export Datatable start -->
					<div class="card-box mb-30">
						<div class="pd-20">
							<p>
                            Cordial saludo <?php echo $_SESSION['session']['userData']['firstName'].' '.$_SESSION['session']['userData']['lastName'] ?>, a continuación se muestra su histórico, si encuentra alguna inconsistencia en los datos,
                             por favor comunicarse con Registro y Control Académico e informe la novedad del caso.
                            </p>
                            <strong>
                            La Información que aparece a continuación no es válida como certificado de ninguna clase, para tales efectos 
                            debera acercarse a la facultad y pida una en Registro y Control
                            </strong>
                            <hr>
						</div>
						<div class="pb-20">
                            <p style = "text-align: center;">Listado de Materias del Periodo ...</p>
							<table
								class="table hover data-table-export nowrap"
							>
								<thead>
									<tr>
										<th class="table-plus ">Codigo</th>
										<th>Materia</th>
										<th>Nota Cuantitativa</th>
										<th>Estado</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="table-plus">Gloria F. Mead</td>
										<td>25</td>
										<td>Sagittarius</td>
										<td>2829 Trainer </td>
									</tr>
									<tr>
										<td class="table-plus">Andrea J. Cagle</td>
										<td>30</td>
										<td>Gemini</td>
										<td>1280 Prospect </td>
									</tr>

								</tbody>
							</table>
						</div>
					</div>
					<!-- Export Datatable End -->
				</div>
			</div>
		</div>