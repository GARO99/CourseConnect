<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="pd-20 card-box mb-30">
                <div class="clearfix">
                    <div class="pull-left">
                        <h4 class="text-blue h4">Editar Asignatura</h4>
                    </div>
                </div>
                <form id="main-form">
                    <div class="form-group">
                        <label>Nombre Asignatura</label>
                        <input class="form-control" type="text" name="nombre" placeholder="Ingrese el Nombre" />
                    </div>
                    <div class="form-group">
                        <label>Facultad</label>
                        <select class="form-control" name="Facultad" id="Facultad">
                            <option value="" disabled selected>Selecciona Facultad</option>
                            <?php foreach ($data[0] as $row): ?>
                                <option value=""><?php echo $row->faculty_name; ?></option>
                            <?php endforeach; ?>   
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Unidad</label>
                        <select class="form-control" name="instructor" id="instructor">
                            <option value="" disabled selected>Selecciona instructor</option>
                            <?php foreach ($data[0] as $row): ?>
                                <option value=""><?php echo $row->instructor; ?></option>
                            <?php endforeach; ?>   
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Cantidad Grupos</label>
                        <input class="form-control" type="number" name="grupos" placeholder="Ingrese numero de grupos" />
                    </div>
                    <div class="form-group mb-0">
                        <input type="submit" class="btn btn-primary" value="editar asignatura" />
                        <input type="reset" class="btn btn-primary" value="Cancelar" id="cancel-btn" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>