
<input type="hidden" value="1" name="guardar">    
<div class="row"><!-- Formulario de la ruta Viaje -->
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header">
                <i class="fa fa-book"></i>
                <h3 class="box-title">Agregar Preguntas</h3>
            </div>
            <div class="box-body">                
                <div class="row" >   
                    <div class="col-md-10">                           

                        <form class="form-horizontal" role="form">
                          <div class="form-group">
                            <div class="col-lg-10">
                              <input type="text" class="form-control" id="inputPassword" placeholder="Descripcion">
                            </div>
                          </div>
                          <div id='alternativas'>
                          <div class="form-group">
                            <div class="col-lg-7">
                              <input type="text" class="form-control" id="inputPassword" placeholder="Alternativa">
                              
                            </div>
                            <div class="col-lg-2">
                                <div class="radio">
                                  <label>
                                    <input type="radio" name="opciones" id="opciones_1" value="opcion_1" checked>
                                    Correcto
                                  </label>
                                </div>
                            </div>
                            <div class="col-lg-3">
                              <button class="btn btn-info btn-flat"  type="button" id="mas">+</button>
                            </div>
                          </div>

                        

                      </div>
                          
                        </form>






                    </div>
                </div> 
            </div>
        </div>
    </div>
</div>
<button class="btn btn-info btn-flat" type="button" id="submit_form_servicio">Guardar</button>
<button class="btn btn-info btn-flat" onclick="prueba()" type="button">prueba</button>

<script type="text/javascript">
    function agregar(){
        $("#alternativas").append('<div class="form-group">'+
            '<div class="col-lg-7"><input type="text" class="form-control" id="inputPassword" placeholder="Alternativa">'+
            '</div><div class="col-lg-2"><div class="radio"><label>'+
            '<input type="radio" name="opciones" id="opciones_1" value="opcion_1" checked>'+
            'Correcto</label></div></div></div>');
    }
</script>
