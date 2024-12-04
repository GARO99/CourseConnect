<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="pd-20 card-box mb-30">
                <div class="clearfix">
                    <div class="pull-left">
                        <h4 class="text-blue h4">Crear grupo</h4>
                    </div>
                </div>
                <form id="main-form">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input class="form-control" type="text" name="nombre" placeholder="Ingrese el nombre" />
                    </div>
                    <div class="form-group">
                        <label>Instructor</label>
                        <input class="form-control" type="text" name="instructor" placeholder="Ingrese el instructor" />
                    </div>
                    <div class="form-group">
                        <label>Cupos</label>
                        <input class="form-control" type="text" name="cupos" placeholder="Ingrese los cupos" />
                    </div>
                    <div class="form-group">
                        <label>Cantidad de Horas</label>
                        <input class="form-control" type="text" name="cantidad_horas" placeholder="Ingrese la cantidad de horas" />
                    </div>

                    <!-- Contenedor dinámico para horarios -->
                    <div id="schedule-container">
                        <div class="form-group">
                            <label>Día</label>
                            <input class="form-control" type="text" name="dia[]" placeholder="Ingrese el día" />
                        </div>
                        <div class="form-group">
                            <label>Hora de inicio</label>
                            <input class="form-control" type="text" name="hora_inicio[]" placeholder="Ingrese la hora de inicio" />
                        </div>
                        <div class="form-group">
                            <label>Hora Final</label>
                            <input class="form-control" type="text" name="hora_final[]" placeholder="Ingrese la hora final" />
                        </div>
                    </div>

                    <div class="form-group mb-0">
                        <input type="button" class="btn btn-primary" value="Agregar Horario" id="add-schedule-btn" />
                    </div>
                    <br>

                    <div class="form-group mb-0">
                        <input type="submit" class="btn btn-primary" value="Crear Materia" />
                        <input type="reset" class="btn btn-primary" value="Cancelar" id="cancel-btn" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    // Referencias a elementos
    const scheduleContainer = document.getElementById('schedule-container');
    const addScheduleButton = document.getElementById('add-schedule-btn');
    const cancelButton = document.getElementById('cancel-btn');
    const mainForm = document.getElementById('main-form');

    // Función para agregar nuevos grupos de campos
    addScheduleButton.addEventListener('click', () => {
        // Crear un contenedor para el nuevo grupo de campos
        const newScheduleGroup = document.createElement('div');
        newScheduleGroup.className = 'schedule-group';

        // Definir los campos a agregar
        newScheduleGroup.innerHTML = `
            <div class="form-group">
                <label>Día</label>
                <input class="form-control" type="text" name="dia[]" placeholder="Ingrese el día" />
            </div>
            <div class="form-group">
                <label>Hora de inicio</label>
                <input class="form-control" type="text" name="hora_inicio[]" placeholder="Ingrese la hora de inicio" />
            </div>
            <div class="form-group">
                <label>Hora Final</label>
                <input class="form-control" type="text" name="hora_final[]" placeholder="Ingrese la hora final" />
            </div>
        `;

        // Agregar el nuevo grupo al contenedor
        scheduleContainer.appendChild(newScheduleGroup);
    });

    // Función para borrar los campos generados dinámicamente
    cancelButton.addEventListener('click', (event) => {
        event.preventDefault(); // Evitar el comportamiento predeterminado del botón reset
        // Limpiar todos los campos del formulario
        mainForm.reset();
        // Borrar todos los grupos dinámicos excepto el original
        scheduleContainer.innerHTML = `
            <div class="form-group">
                <label>Día</label>
                <input class="form-control" type="text" name="dia[]" placeholder="Ingrese el día" />
            </div>
            <div class="form-group">
                <label>Hora de inicio</label>
                <input class="form-control" type="text" name="hora_inicio[]" placeholder="Ingrese la hora de inicio" />
            </div>
            <div class="form-group">
                <label>Hora Final</label>
                <input class="form-control" type="text" name="hora_final[]" placeholder="Ingrese la hora final" />
            </div>
        `;
        
    });
</script>
