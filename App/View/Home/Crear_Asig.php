<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
					<div class="page-header">
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="title">
									<h4 style="color: RED;">Asignatura UMB</h4>
								</div>
							</div>
						</div>
					</div>
					
					<!-- Export Datatable start -->
					<div class="card-box mb-30">
						<div class="pd-20">
							<h4 class="h4" style="color: RED;">Cada falla equivale a una 1 hora de clase</h4>
						</div>
						<div class="pb-20">
							<table
								class="table hover data-table-export nowrap"
							>
								<thead>
									<tr>
										<th class="table-plus ">Nombre Asignatura</th>
										<th>Periodo Academico</th>
										<th>Facultad</th>
										<th>-</th>	
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="table-plus">Gloria F. Mead</td>
										<td>25</td>
										<td>Sagittarius</td>
										<td style="min-width:185px !important">
                                          <div class="trans">
                                            <div class="btn-toolbar">
                                              <div class="btn-group btn-group">
                                                <button type="button" class="btn btn-success" style="width: 50px; border-radius: 3px; margin:3px ; background-color:transparent; border-color:green" onclick="window.location='<?php echo ($data[5]=='id' || $data[5]=='name')? RUTURL.'c_product/'.$data[2].'/'.$row->idcategoria.'/view/'.$data[6].'/'.$data[7].'/'.$data[5]: RUTURL.'c_product/'.$data[2].'/'.$row->idcategoria.'/view'; ?>'"><i class="fa fa-fw fa-eye text-green"></i></button>
                                                <button type="button" class="btn btn-success" style="width: 50px; border-radius: 3px; margin: 3px; background-color:transparent; border-color:#f39c12" onclick="window.location='<?php echo ($data[5]=='id' || $data[5]=='name')? RUTURL.'c_product/'.$data[2].'/'.$row->idcategoria.'/update/'.$data[6].'/'.$data[7].'/'.$data[5]: RUTURL.'c_product/'.$data[2].'/'.$row->idcategoria.'/update'; ?>'"><i class="fa fa-fw fa-pencil-square-o text-yellow"></i></button>
                                                <button type="button" class="btn btn-success" style="width: 50px; border-radius: 3px; margin: 3px; background-color:transparent; border-color:red" onclick="window.location='<?php echo ($data[5]=='id' || $data[5]=='name')? RUTURL.'c_product/'.$data[2].'/'.$row->idcategoria.'/delete/'.$data[6].'/'.$data[7].'/'.$data[5]: RUTURL.'c_product/'.$data[2].'/'.$row->idcategoria.'/delete'; ?>'"><i class="fa fa-trash text-red"></i></button>
                                              </div>
                                            </div>
                                          </div>
                                        </td>
									</tr>
									<tr>
										<td class="table-plus">Andrea J. Cagle</td>
										<td>30</td>
										<td>Gemini</td>
										<td style="min-width:185px !important">
                                          <div class="trans">
                                            <div class="btn-toolbar">
                                              <div class="btn-group btn-group">
                                                <button type="button" class="btn btn-success" style="width: 50px; border-radius: 3px; margin:3px ; background-color:transparent; border-color:green" onclick="window.location=''"><i class="fa fa-fw fa-eye text-green"></i></button>
                                                <button type="button" class="btn btn-success" style="width: 50px; border-radius: 3px; margin: 3px; background-color:transparent; border-color:#f39c12" onclick="window.location=''"><i class="fa fa-fw fa-pencil-square-o text-yellow"></i></button>
                                                <button type="button" class="btn btn-success" style="width: 50px; border-radius: 3px; margin: 3px; background-color:transparent; border-color:#f39c12" onclick="window.location=''"><i class="fa fa-fw fa-pencil-square-o text-yellow"></i></button>
                                            </div>
                                          </div>
                                        </td>
									</tr>

								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>