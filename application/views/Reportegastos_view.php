<title>Gastos</title>
<link rel="stylesheet" href="<?php echo base_url(); ?>css/ocultar_codigo.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>css/estilo_modal.css">
<div class="col-xs-12 col-sm-12 col-md-10" id="panelHome" name="cuerpo">
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">Gastos</h3>
    </div>
    <div style="clear: both"></div>
    <div id="estudiantes" class="tab-pane fade in active">
      <div class="panel-body" autoCal="true" formulacal="height-100">
        <!-- Inicio. Año - Periodo -->
        <form class="noprint" name="formBusqueda" id="formBusqueda">
          <div class="row">
            <div class="col-xs-6">
              <label style="font-size: 20px;">Traer los gastos entre dos fechas.</label>
            </div>
            <div class="col-xs-6">
              <label style="font-size: 20px;">Traer los gastos por su estado.</label>
            </div>
          </div><br>
          <div class="row">
            <div class="col-xs-3" id="fecha_entrada">
              <label for="desde">Desde :<span class="required"> *</span></label>
              <input type="text" name="fecha" id="desde" class="form-control" placeholder="Desde">
            </div>
            <div class="col-xs-3" id="fecha_salida">
              <label for="hasta">Hasta :<span class="required"> *</span></label>
              <input type="text" name="fecha" id="hasta" class="form-control" placeholder="Hasta">
              <input type="hidden" name="generar_excel" id="generar_excel" value="false">
            </div><br>
            <div class="col-xs-3">
              <select class="form-control" name="estado">
                <option value="">Seleccione</option>
                <option value="S">Activo</option>
                <option value="N">Inactivo</option>
              </select>
            </div>
          </div><br>
          <div class="row">
                <!-- <input type="hidden" name="controller" value="<?php echo $controller; ?>"> -->
                <div class="form-group col-xs-6 col-sm-4 col-md-2" name="registrar_ubicacion">
                  <button type="button" class="btn btn-default btn-sm btn-primary" id="buscar" name="buscar" title="Buscar">
                  <span class="glyphicon glyphicon-search"></span>&nbsp;&nbsp;Buscar
                  </button>
                </div>
                <div class="form-group col-xs-6 col-sm-4 col-md-2" name="registrar_ubicacion">
                  <button type="button" class="btn btn-default btn-sm btn-danger" id="limpiar" name="limpiar" title="Limpiar">
                  <span class="icon icon-bin"></span>&nbsp;&nbsp;Limpiar
                  </button>
                </div>
                <div class="form-group col-xs-6 col-sm-4 col-md-2">
                  <button type="button" class="btn btn-default btn-sm btn-success" id="excel" name="btnAgregarCliente" title="Generar reporte">
                  <span class="glyphicon glyphicon-save-file"></span>&nbsp;&nbsp;Excel
                </div>
          </div>
        </form>
        <!-- Fin. Año - Periodo -->
        <br/>
        <div class="content" autoCal="true" formulaCal="height-370" style="height: 500px; overflow: auto;">
          <table class="table table-hover"  id="datos">
            <thead>
              <tr class="info">
                <!-- <th style="width: 90px">Acciones</th> -->
                <th style="width: 700px;">Tipo de Gasto</th>
                <th style="width: 700px;">Fecha</th>
                <th style="width: 300px;">Valor</th>
                <th style="width: 300px;">Estado</th>
                <!--<th>Vendedor</th>-->
              </tr>
            </thead>
            <tbody name="listar_facturas">
              <!-- Contenido de la tabla es cargado por medio de jQuery -->
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <script type="text/javascript">
        $.getScript('<?php echo base_url(); ?>js/reporteGastos.js');
    </script>
