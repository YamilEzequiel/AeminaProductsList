<!-- Modal -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="namecab">Title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      

<!--Form Add Products ">-->
<form id="EditarDatos"  enctype="multipart/form-data" method="post"> 

  <div class="row">
    <div class="col">
      <img width="150" height="150" class="center" id="m" src="<?php echo constant('URL'); ?>/public/images/products/noimg.png">
        <br>
        <input class="center" type="file" id="imagens" name="imagens" /><br>
        <input type="hidden" id="id" value="add"/>
        <br>
    </div>
  </div>    

    <div class="row">
        <div class="col">
             <input type="text"value="" class="form-control" value="" name="a" id="a" placeholder="Nombre de Producto" required><br>
         </div>
        <div class="col">
           <input type="text" class="form-control" id="d" placeholder="Descripcion" required><br>
        </div>
    </div>

    <div class="row">
        <div class="col">
           <input type="number" class="form-control" id="pr" placeholder="Precio" required><br>
        </div>
        <div class="col">
           <input type="number" class="form-control" id="u" placeholder="Unidades" required><br>
        </div>
        <div class="col">
           <input type="text" class="form-control" id="p" placeholder="Proovedor" required><br>
        </div>
    </div>


    <div class="row">
        <div class="col">
            <select class="form-control" id="o" required>
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
            <select class="form-control" id="c" required>
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
            <input type="submit" class="btn btn-success" id="boton" value="Editar"/>
        </div>
        </div>
    </div>
    </div>
</form>


