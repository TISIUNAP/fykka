

    </div>
    </div>

    <div class="modal fade out" id="modalLoad" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="false" style="padding-top:10%;display:none;">
            <div class="modal-dialog modal-sm  text-center" id="textoEspera">
                        <i class="fa fa-spinner fa-inverse fa-2x fa-spin"></i><br>
              <h4 style="color: white;">Cargando...</h4>
                </div>
    </div>
  

  <script src="<?php echo site_url('bootstrap/js/jquery.js');?>"></script>  
	<script type="text/javascript" src="<?php echo site_url("js/general.js"); ?>"></script>
    <script type="text/javascript">
      
		$(document).ready(function(){
			$(".opcion").click(function(e){
				e.preventDefault();
                //loading("open");
                var texto="<div class='col-sm-12 text-center'><i class='fa fa-spinner fa-2x fa-spin'></i><br><h4>Cargando...</h4></div> ";
                $("#content-wrapper").html(texto);

        				url=$(this).attr("href");
        				$.post(url,function(data){
                             $("#content-wrapper").html(data);
                           //loading("close");  
                        });
            });     
		});			
	</script>
    <script src="<?php echo site_url('bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
    <script src="<?php echo site_url('bootstrap/js/sb-admin.min.js');?>"></script>
    <script src="<?php echo site_url('bootstrap/vendor/bootstrap/js/bootstrap.js');?>"></script>

  
</body>

</html>
