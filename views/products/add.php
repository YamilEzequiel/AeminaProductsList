
<!-- Modal -->
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registrar Producto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      

<!--Form Add Products ">-->
<form id="frmSubirImagen"  enctype="multipart/form-data" method="post"> 
    <br>
    <input type="file" id="imagen" name="imagen" required />
    <input type="hidden" id="tip" value="add"/>
    <div class="custom-file">
    </div><br><br>

    <div class="row">
        <div class="col">
           <input type="text" class="form-control" name="name" id="name" placeholder="Nombre de Producto" required><br>
        </div>
        <div class="col">
           <input type="text" class="form-control" id="description" placeholder="Descripcion" required><br>
        </div>
    </div>

    <div class="row">
        <div class="col">
           <input type="number" class="form-control" id="price" placeholder="Precio" required><br>
        </div>
        <div class="col">
           <input type="number" class="form-control" id="units" placeholder="Unidades" required><br>
        </div>
        <div class="col">
           <input type="text" class="form-control" id="provider" placeholder="Proovedor" required><br>
        </div>
    </div>


    <div class="row">
        <div class="col">
            <select class="form-control" id="origin" required>
            <option disabled="true" selected="true">Origen</option>
            <option>Argentina</option>
            <option>Bolivia</option>
            <option>Brasil</option>
            <option>Chile</option>
            <option>Colombia</option>
            <option>Costa Rica</option>
            <option>Cuba</option>
            <option>Ecuador</option>
            <option>Estados Unidos</option>
            <option>España</option>
            <option>Uruguay</option>
            <option>Venezuela</option>
            </select>
        </div>

        <div class="col">
            <select class="form-control" id="category" required>
            <option disabled="true" selected="true">Categoria</option>
            <option>Carnes</option>
            <option>Pescados</option>
            <option>Frutas</option>
            <option>Lacteos</option>
            <option>Cereales</option>
            <option>Bebidas</option>
            <option>Otros</option>
            </select>
        </div>
<br><br>
  </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
            <input type="submit" class="btn btn-success" value="Agregar"/>
        </div>
        </div>
    </div>
    </div>
</form>


