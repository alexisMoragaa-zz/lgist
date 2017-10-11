@extends('app')
@section('content')
<style type="text/css">
	#margen {
		margin-top: 55px;
	}
	#centro{
	
	}
	.btn{
		margin-top: 23px;
	}
	#border{
		border-right:1px solid gray;
	}

</style>
<script>
$(document).ready(function(){
	$("#submit").click(function(){
		if($("#createUser").prop('checked')){
			$("#cr").attr("href","admin/create");
		}

	});
});

</script>

<div class="container">
	<div class=" row col-md-12" id="margen"></div>

	<div class="col-md-6" id="border">
		<table class="table">
			<thead>
				<th>ID Bodega</th>
				<th>Nombre</th>
				<th>Zona</th>
				<th>Tipo Bodega</th>
				<th>Usuario</th>
			</thead>
			<tbody>
				<tr>
					<td>src12</td>
					<td>The Broders Chicken</td>
					<td>F1</td>
					<td>Comida</td>
					<td>Alpha</td>
				</tr>
				<tr>
					<td>trx43</td>
					<td>Madrigal</td>
					<td>Q2</td>
					<td>Residuos Quimicos</td>
					<td>Beta</td>
				</tr>
				<tr>
					<td>xtx65</td>
					<td>Cooler Max</td>
					<td>C3</td>
					<td>Bodega Fria</td>
					<td>Gamma</td>
				</tr>
				<tr>
					<td>tec01</td>
					<td>Inventur Labs</td>
					<td>T4</td>
					<td>Tecnologia</td>
					<td>Delta</td>
				</tr>

			</tbody>
		</table>
	</div>

	<div class="col-md-6" id="centro">
		<div class="col-md-4">
			<label for="name" class="control-label">Nombre Bodega</label>
			<input type="text" class="form-control" name="nombre">
		</div>
		<div class="col-md-4">
			<label for="zona" class="control-label">Zona</label>
			<input type="text" class="form-control" name="zona">
		</div>
		<div class="col-md-4">
			<label for="typeStorage" class="control-label">Tipo de Bodega</label>
			<select name="typeStorage" id="" class="form-control">
				<option value="">-- Seleccione --</option>
				<option value="">Bodega Alimentos</option>
				<option value="">Bodega Insumos</option>
				<option value="">Bodega Sensible</option>
				<option value="">Bodega Quimicos</option>
			</select>
		</div>
		<div class="col-md-4">
			<label for="User" class="control-label">Usuario</label>
			<select name="User" id="" class="form-control">
				<option value="">-- Seleccione --</option>
				<option value="">Alpha</option>
				<option value="">Beta</option>
				<option value="">Gamma</option>
				<option value="">Delta</option>
			</select>
		</div>
		<div class="ckeckbox col-md-4 btn">

			<input type="checkbox"  name="createser" id="createUser">
			<label for="crateUser">Crear Usuario</label>
		</div>
		<div class="col-md-3">
			<a id="cr" href=""><input type="button" class="btn btn-success" value="Agregar" id="submit" ></a>
		</div>
	</div>

</div>

@endsection