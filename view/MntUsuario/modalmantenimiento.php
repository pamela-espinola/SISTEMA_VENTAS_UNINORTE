<div id="modalmantenimiento" class="modal fade" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" id="producto_form">
                <div class="modal-header">
                    <h4 class="modal-title" id="mdltitulo"></h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="prod_id" name="prod_id">

                    <div class="form-group">
                        <label class="form-label" for="prod_nom">Nombre</label>
                        <input type="text" class="form-control" id="prod_nom" name="prod_nom" placeholder="Ingrese Nombre" required>
                    </div>
                     <div class="form-group">
                        <label class="form-label" for="prod_nom">Apellido</label>
                        <input type="text" class="form-control" id="prod_nom" name="prod_nom" placeholder="Ingrese Apellido" required>
                    </div>
                     <div class="form-group">
                        <label class="form-label" for="prod_nom">Usuario</label>
                        <input type="text" class="form-control" id="prod_nom" name="prod_nom" placeholder="Ingrese Usuario" required>
                    </div>
                     <div class="form-group">
                        <label class="form-label" for="prod_nom">Contraseña</label>
                        <input type="text" class="form-control" id="prod_nom" name="prod_nom" placeholder="Ingrese Contraseña" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-rounded btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="submit" name="action" id="#" value="add" class="btn btn-rounded btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>