
  <div class="container-fluid">
  	<ol class="breadcrumb">
		<li class="breadcrumb-item">
		  <a href="#"></a>
		</li>
		<li class="breadcrumb-item active">Creando Nuevo Proyecto</li>
	</ol>
	<div class="row" id="form_1" >
		<div class="col-lg-12">
			<h1> Crea un Nuevo Proyecto</h1>
	<hr> 
	  <form method="post" role="form" action="<?php echo site_url('project/guardar_proyecto'); ?>" id="proyectoForm">
	    <div class="form-group form-row">
	      <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Nombre del Proyecto</label>
	      <div class="col-sm-10">
	        <input type=text name="name" class="form-control form-control-lg" id="colFormLabelLg" placeholder="100 caracteres como máximo ..." required="">
	      </div>
	    </div>
	    <div class="form-group row">
        <?php $hoy=getdate()["year"]."-".getdate()["mon"]."-".getdate()["mday"]; ?>
	      <label for="colFormLabelLg"  class="col-sm-2 col-form-label col-form-label-lg">Fecha De Inicio</label>
	      <div class="col-sm-4">
	        <input type="date" name="start" class="form-control form-control-lg" id="colFormLabelLg" placeholder="" required="" value="<?php echo $hoy; ?>">
	      </div>
	    </div>
	    <div class="form-group row">
	      <label for="descripcion" class="col-sm-2 col-form-label col-form-label-lg">Descripción</label>
	      <div class="col-sm-10">
	        	<textarea class="form-control form-control-lg" name="descripcion"  id="descripcion" placeholder="Añade una breve descripción del proyecto..." rows="4" required=""></textarea>
	      </div>
	    </div>
	    <div class="form-group">
	      <div class="col-sm-3 float-right">
	    	<button type="submit" class="btn btn-primary btn-block btn-lg">Continuar... <i class="fas fa-arrow-right fa-fw"></i></button>
	        	
	      </div>
	    </div>
	 
	  </form>
		</div>
	</div> 
	<div class="row" id="form_2" style="display:none;">
    <div class="col-sm-2"></div>
    <div class="col-lg-12"> 
      <h1>Elije al Equipo de Trabajo</h1>
      <hr>
      <div class="col-lg-6">equipo</div>
      <div class="col">equipo</div>
      <div class="col-lg-6">miembros
        <form>
           <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th>#</th>
          <th>Nombres</th>
          <th>Apellidos</th>
          <th>Nivel</th>
          <th>Marcar/Scrum Master</th>

        </tr>
      </thead>
      <tbody></tbody>
      </table>
        </form> 
      </div>
    </div>
		<div class="col-sm-12">
			<h2>Seleccionar Equipo, sadasdasdasdasdasdasdasdasdasMarcar Scrum Master</h2>
    <div class="table-responsive">
      <form>
        

      </form>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th>#</th>
          <th>Nombres</th>
          <th>Apellidos</th>
          <th>Nivel</th>
          <th>Marcar/Scrum Master</th>

        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Sesislio</td>
          <td>Mamani</td>
          <td>Senior</td>
          <td>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
            <label class="form-check-label" for="inlineCheckbox1"></label>
            
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
            <label class="form-check-label" for="inlineCheckbox1"></label>
            
          </div>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Alan</td>
          <td>Garcia</td>
          <td>Senior</td>
          <td>
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
            <label class="form-check-label" for="inlineCheckbox1"></label>
            </div>
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
            <label class="form-check-label" for="inlineCheckbox1"></label>
            
          </div>
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>Abimale</td>
          <td>Juzaman</td>
          <td>Senior</td>
          <td>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
            <label class="form-check-label" for="inlineCheckbox1"></label>
            </div>

          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>Walter</td>
          <td>Aduvir</td>
          <td>Senior</td>
          <td>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
            <label class="form-check-label" for="inlineCheckbox1"></label>
            </div>
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
            <label class="form-check-label" for="inlineCheckbox1"></label>
            
          </div>

          </td>
        </tr>
        <tr>
          <td>5</td>
          <td>Keiko</td>
          <td>Fujimori</td>
          <td>Junior</td>
          <td>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
            <label class="form-check-label" for="inlineCheckbox1"></label>
            </div>
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
            <label class="form-check-label" for="inlineCheckbox1"></label>
            
          </div>

          </td>
        </tr>
        <tr>
          <td>6</td>
          <td>Alejando</td>
          <td>Toledo</td>
          <td>Senior</td>
          <td>
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
            <label class="form-check-label" for="inlineCheckbox1"></label>
            </div>
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
            <label class="form-check-label" for="inlineCheckbox1"></label>
            
          </div>

          </td>
        </tr>
        <tr>
          <td>7</td>
          <td>Martin</td>
          <td>Vizcarra</td>
          <td>Junior</td>
          <td>
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
            <label class="form-check-label" for="inlineCheckbox1"></label>

            </div>
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
            <label class="form-check-label" for="inlineCheckbox1"></label>
            
          </div>

          </td>
        </tr>
       
      </tbody>
    </table>
     </div>
    
		</div>
	</div>

	<script type="text/javascript">
		$("#proyectoForm").submit(function(e) {
			e.preventDefault();
			url=$(this).attr("action");
			$("#form_1").css("display","none");
    		$.post(url,$(this).serialize(),function(data){
           if (data==1) {
            $("#form_2").css("display","block");
           }
           else {
            alert("Recargue la página e intente crearlo de nuevo!!")
           }
        });

		});
	</script>
	    
	 
</div>
	          