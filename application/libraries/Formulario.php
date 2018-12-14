<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Formulario{
	function __construct(){
        
    }
    public function crear($label,$type,$size,$name,$value=false){
    	for($i=0; $i <count($name) ; $i++){
    		if($type[$i]=="texto" or $type[$i]=="dni" or $type[$i]=="entero" or $type[$i]=="email" or $type[$i]=="celular" or $type[$i]=="user"){
	    		echo "
		        <div class='col-lg-".$size[$i]."'>
		        	<div class='form-group'>
		            	<label>".$label[$i]."</label>
		            		<input 
		                    	type='text' 
		                        class='input-sm form-control' 
		                        name='".$name[$i]."' value='".$value[$i]."'
		                        tipo='".$type[$i]."'
		                        required
							>
	                </div>
	            </div>";
	        }if($type[$i]=="numero"){
	    		echo "
		        <div class='col-lg-".$size[$i]."'>
		        	<div class='form-group'>
		            	<label>".$label[$i]."</label>
		            		<input 
		                    	type='number'
		                        class='input-sm form-control' 
		                        name='".$name[$i]."' value='".$value[$i]."'
		                        tipo='".$type[$i]."'
		                        required
							>
	                </div>
	            </div>";
	        }
	        if($type[$i]=="horometro"){
	    		echo "
		        <div class='col-lg-".$size[$i]."'>
		        	<div class='form-group'>
		            	<label>".$label[$i]."</label>
		            		<input 
		                    	type='number' step='any'
		                        class='input-sm form-control text-right' 
		                        name='".$name[$i]."' value='".$value[$i]."'
		                        tipo='".$type[$i]."'
		                        required
							>
	                </div>
	            </div>";
	        }
	        if($type[$i]=="real"){
	    		echo "
		        <div class='col-lg-".$size[$i]."'>
		        	<div class='form-group'>
		            	<label>".$label[$i]."</label>
		            		<input 
		                    	type='number' step='any' 
		                        class='input-sm form-control' 
		                        name='".$name[$i]."' value='".$value[$i]."'
		                        tipo='".$type[$i]."'
		                        required
							>
	                </div>
	            </div>";
	        }
	        if($type[$i]=="password"){
	    		echo "
		        <div class='col-lg-".$size[$i]."'>
		        	<div class='form-group'>
	                    <label >".$label[$i]."</label>
		            	
							<input 
		                    	type='password' 
		                        class='input-sm form-control' 
		                        name='".$name[$i]."' value='".$value[$i]."'
		                        tipo='".$type[$i]."'
		                        required
							>
	                </div>
	            </div>";
	        }
	        if($type[$i]=="codigo"){
	    		echo "
		        <div class='col-lg-".$size[$i]."'>
		        	<div class='form-group'>
	                    <label class='fg-label'>".$label[$i]."</label>
	                    <input
		                    	type='text'
		                        class='input-sm form-control'
		                        name='".$name[$i]."' value='".$value[$i]."'
		                        tipo='".$type[$i]."'
		                        style='font-size:35px;color:blue;height:50px;'
		                        readonly
		                        required
							>
	                </div>
	            </div>";
	        }
	        else if($type[$i]=="lista"){
	        	echo "
		        <div class='col-lg-".$size[$i]."'>
		        	<div class='form-group'>
		            	<label>".$label[$i]."</label>
	                            <select class='form-control input-sm' name='".$name[$i]."' tipo='".$type[$i]."' required>
	                            	<option value=''>Seleccione</option>";
	                                foreach ($value[$i] as $reg){
	                                	echo "
	                                		<option value='".$reg->ide."'>".$reg->nombre."</option>
	                                	";
	                                }
	            echo "
	                            </select>
						</div>
	            </div>";
	        }
	        else if($type[$i]=="fecha"){
	    		echo "
		        <div class='col-lg-".$size[$i]."'>
	                    <label >".$label[$i]."</label>

		        	<div class='form-group input-group datetimepicker2'>
							<span class='input-group-addon '><i class='fa fa-calendar'></i></span>
	                    	<input 
		                    	type='text' 
		                        class='input-sm form-control  text-center' 
		                        name='".$name[$i]."' value='".$value[$i]."'
		                        tipo='".$type[$i]."'
		                        required
							>
	                </div>
	            </div>";
	        }
	        else if($type[$i]=="hora"){
	    		echo "
		        <div class='col-lg-".$size[$i]."'>
                    <label class='fg-label'>".$label[$i]."</label>
		    			<div class='form-group datetimepicker input-group' >
							<span class='input-group-addon '><i class='fa fa-clock-o'></i></span>
							<input 
		                    	type='text' 
		                        class='input-sm form-control text-center' 
		                        name='".$name[$i]."' value='".$value[$i]."'
		                        tipo='".$type[$i]."'
		                        required
							>
	                </div>
	            </div>";
	        }
	        else if($type[$i]=="imagen"){
	    		echo "
		        	<div class='fileinput fileinput-new col-xs-".$size[$i]."' data-provides='fileinput'>
						<div class='fileinput-preview thumbnail' data-trigger='fileinput' style='line-height: 150px;'>
						</div>
						<div>
                        	<span class='btn btn-info btn-file waves-effect'>
							<span class='fileinput-new'>Seleccionar ".$label[$i]."</span>
                            <span class='fileinput-exists'>Cambiar ".$label[$i]."</span>
                            	<input type='hidden' value='' name=''>
                            	<input type='file' name='".$name[$i]."' tipo='".$type[$i]."' required>
							</span>
                            <a href='#'' class='btn btn-danger fileinput-exists waves-effect' data-dismiss='fileinput'>
                            	Borrar
                            </a>
						</div>
                    </div>
		        ";
	        }
        }
    }
}