$(document).ready(function() {  

  let URLDEFINE = "http://localhost/WEB/aenima/";

  complete(0,5);

  //Pagination
  $(document).on('click', '.task-pagination', function() {
    let element = $(this)[0].parentElement;
    let gos = $(element).attr('go');
    let ends = $(element).attr('en');  
    complete(gos,ends);
  });

  //Complete
  function complete($go,$end){
    $.ajax({
       data:{
          go:$go,
          end:$end,
        },
        url: URLDEFINE + 'products/all?go='+{$go}+'&end='+{$end},
        type: 'GET',
        success: function (response) {
        if(!response.error) {
            let tasks = JSON.parse(response);
            let template = '';
            tasks.forEach(task => {
            template += `
            
            <tr taskId=${task.id} end=${$end} go=${$go} >
            <td>${task.id}</td>
            <td>${task.name}</td>
            <td>${task.units}</td>
            <td>${task.price}</td>
            <td><img width="80" height="80" src="${URLDEFINE}${task.photo}?>"></td>
            <td>${task.category}</td>
            <td>${task.description}</td>
            <td>${task.origin}</td>
            <td>${task.provider}</td>
            <td>
                <button class="task-edit btn btn-success" data-toggle="modal" data-target="#edit">+</button>
                <button class="task-delete btn btn-danger">-</button>
            </td>
        </tr>

                    ` 
            });
            $('#tasks').html(template);
            $('.pagination').html(` 
                <nav aria-label="...">
                  <ul class="pagination pagination-lg">
                        <li go="${Number($go)-5}" en="${$end}" class="page-item"><a class="btn btn-primary task-pagination page-link" href="#">Anterior</a></li>
                        <li go="${Number($go)+5}" en="${$end}" class="page-item"><a class="btn btn-primary task-pagination page-link" href="#">Siguiente</a></li>
                  </ul>
              </nav>
            `  );
        }
        } 
    })
  }
  


//Add
$('#frmSubirImagen').submit(function () {
      var tip = $('#tip').val();

      if(tip=="add"){
        url=URLDEFINE+'products/add/';
      }
      if(tip=="edit"){
        url=URLDEFINE+'products/edit/';
      }

      var frmData = new FormData();
      frmData.append("imagen",$("input[name=imagen]")[0].files[0]);
      frmData.append("name", $('#name').val());
      frmData.append("units", $('#units').val());
      frmData.append("price", $('#price').val());
      frmData.append("category", $('#category').val());
      frmData.append("description", $('#description').val());
      frmData.append("origin", $('#origin').val());
      frmData.append("provider", $('#provider').val());
      frmData.append("entry", $('#entry').val());
      
      $.ajax({
          url: url,
          type: 'POST',
          data: frmData,
          processData: false,
          contentType: false,
          cache: false,
          success: function (data) {
            $('#frmSubirImagen').trigger('reset');
            complete(0,5);
          }
      });
      return false;
});

  //Delete
    $(document).on('click', '.task-delete', function() {
      if(confirm('Elimiaras el articulo')) {
        let element = $(this)[0].parentElement.parentElement;
        let id = $(element).attr('taskId');
        let go = $(element).attr('go');
        let end = $(element).attr('end');
        $.post(URLDEFINE+'products/delete/000', {id}, function(response) {
         complete(go,end);
        })
      }
    });



     //SearchOne
     $(document).on('click', '.task-edit', function() {
        let element = $(this)[0].parentElement.parentElement;
        let id = $(element).attr('taskId');
          $.ajax({
              url: URLDEFINE+'products/searchone/'+id,
              //data: {date},
              type: 'POST',
              success: function (response) {
              if(!response.error) {
                  let tasks = JSON.parse(response);
                  tasks.forEach(task => {
                    $('#namecab').html("Editar Producto");
                    document.getElementById("id").value = task.id;
                    document.getElementById("a").value = task.name;
                    document.getElementById("pr").value = task.price;
                    document.getElementById("d").value = task.description;
                    document.getElementById("u").value = task.units;
                    document.getElementById("p").value = task.provider;
                    document.getElementById("o").value = task.origin;
                    document.getElementById("c").value = task.category;
                    document.getElementById("m").value = task.photo;
              });
            }
              } 
        })
      });
    
        
  
  //Search
          $('#search').keyup(function() {
              if($('#search').val()) {
              let search = $('#search').val();
              $.ajax({
                  url: URLDEFINE+'products/search/'+search,
                  data: {search},
                  type: 'POST',
                  success: function (response) {
                  if(!response.error) {
                      let tasks = JSON.parse(response);
                      let template = '';
                      //alert(response);
                      tasks.forEach(task => {
                      template += `
                      
                      <tr taskId=${task.id}>
                      <td>${task.id}</td>
                      <td>${task.name}</td>
                      <td>${task.units}</td>
                      <td>${task.price}</td>
                      <td><img width="80" height="80" src="${URLDEFINE}${task.photo}?>"></td>
                      <td>${task.category}</td>
                      <td>${task.description}</td>
                      <td>${task.origin}</td>
                      <td>${task.provider}</td>
                      <td>
                      <button class="task-edit btn btn-success" data-toggle="modal" data-target="#edit">+</button>
                      <button class="task-delete btn btn-danger">-</button>
                  </td>
                  </tr>
  
                              ` 
                      });
                      $('#tasks').html(template);
                  }
                  } 
              })
              }
          });


//Edit
      $('#EditarDatos').submit(function () {

        var tip = $('#tip').val();
        url=URLDEFINE+'products/edit/';
        
        var frmData = new FormData();
          if($("input[name=imagens]")[0].files[0]===null){
            frmData.append("imagen", $('#imagens').val());
        }else{
            frmData.append("imagen",$("input[name=imagens]")[0].files[0]);
        }
        frmData.append("id", $('#id').val());
        frmData.append("name", $('#a').val());
        frmData.append("units", $('#u').val());
        frmData.append("price", $('#pr').val());
        frmData.append("category", $('#c').val());
        frmData.append("description", $('#d').val());
        frmData.append("origin", $('#o').val());
        frmData.append("provider", $('#p').val());
        frmData.append("entry", $('#e').val());
        
        $.ajax({
            url: url,
            type: 'POST',
            data: frmData,
            processData: false,
            contentType: false,
            cache: false,
            success: function (data) {
              //$('#EditarDatos').trigger('reset');
              complete(0,5);
              alert("Listo");
            }
        });
        return false;
      });



  
  });