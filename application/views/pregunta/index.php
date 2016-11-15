
<form role="form" action="" method="post">
<input type="hidden" value="1" name="guardar">    
<div class="row"><!-- Formulario de la ruta Viaje -->
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header">
                <i class="fa fa-book"></i>
                <h3 class="box-title">Informacion General</h3>
            </div>
            <div class="box-body">                
                <div class="row" >   
                    <div class="col-md-8">                           
                        <div class="form-group" >
                                                           
                            <div class="col-md-9" style="padding-right: 0px;">
                                <input name="id_cliente" id="id_cliente" type="hidden">
                                <input name="dni_cliente" id="dni_cliente" type="hidden">
                                <input name="nombre_cliente" id="nombre_cliente" class="form-control" readonly="true" placeholder="Cliente">
                            </div>
                            <a class="btn btn-success k-button" id="cliente_buscar" data-toggle="modal" data-target="#modal_cliente_buscar">Buscar</a>
                            <a class="btn btn-primary k-button" id="cliente_agregar" data-toggle="modal" data-target="#modal_cliente_agregar">Agregar</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group" >
                            <label class="col-md-2 control-label" >Fecha:</label>
                            <div class="col-md-10" >
                                <input name="fecha" id="fecha" class="form-control" readonly="readonly" value="">
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</div>
<button class="btn btn-info btn-flat" type="button" id="submit_form_servicio">Guardar</button>
<button class="btn btn-info btn-flat" onclick="prueba()" type="button">prueba</button>
</form>