
@extends('app')
@section('content')
<style>
	.btn1{
		margin-top: 16px;
		float: right;
	}
</style>
<script>
	$(document).ready(function(){

		$(".dialogConfirm").hide();

		$("#confirm").click(function(){
			$(".dialogConfirm").dialog();

			$(".btn-success").click(function(){
				$(".dialogConfirm").dialog("close");
			});

		});
	});
</script>
<div class="container">
	
	<div class="dialogConfirm">
		<label for="" class="control-label">Fecha Entrega</label>
		<input type="text" class="form-control">
		<label for="" class="control-label">N° Guia Despacho</label>
		<input type="text" class="form-control">
		<div class="col-md-12">
		<input type="submit" value="confirmar Solicitud" class="btn btn1 btn-success">
		<a href="{{url('despachoSolicitud')}}" class="btn btn1 btn-primary">Realizar Pedido</a>
	</div>
	</div>

<div class="col-md-12">
			<h2>Madrigal</h2>
			<div class="col-md-6">
				<h3>Solicitud N° 1 Realizada por Beta 24-10-2017</h3>
				</div>
				<div class="col-md-6">
				<button class="btn btn-info btn1" id="confirm">Confirmar Solicitud</button>
				</div>
			<table class="table">
				<thead>
					<th>Id</th>
					<th>Producto</th>
					<th>Ubicacion</th>
					<th>Descripcion</th>
					<th>Cantidad</th>
					<th>Valor</th>
					<th>Stock</th>
					
				</thead>
				<tbody>
					<tr>

						<td>1</td>
						<td>H2O</td>
						<td>R-42</td>
						<td>Agua irradiada de potasio</td>
						<td>12</td>
						<td>990</td>
						<td>453</td>
						
					</tr>
					<tr>
						
						<td>1</td>
						<td>H2O</td>
						<td>R-42</td>
						<td>Agua irradiada de potasio</td>
						<td>12</td>
						<td>990</td>
						<td>453</td>
						
					</tr>
					<tr>
						
						<td>1</td>
						<td>H2O</td>
						<td>R-42</td>
						<td>Agua irradiada de potasio</td>
						<td>12</td>
						<td>990</td>
						<td>453</td>
						
					</tr>
					<tr>
						
						<td>1</td>
						<td>H2O</td>
						<td>R-42</td>
						<td>Agua irradiada de potasio</td>
						<td>12</td>
						<td>990</td>
						<td>453</td>
						
					</tr>
					<tr>
						
						<td>1</td>
						<td>H2O</td>
						<td>R-42</td>
						<td>Agua irradiada de potasio</td>
						<td>12</td>
						<td>990</td>
						<td>453</td>
					</tr>
					<tr>
						
						<td>1</td>
						<td>H2O</td>
						<td>R-42</td>
						<td>Agua irradiada de potasio</td>
						<td>12</td>
						<td>990</td>
						<td>453</td>
						
					</tr>
					<tr>
						
						<td>1</td>
						<td>H2O</td>
						<td>R-42</td>
						<td>Agua irradiada de potasio</td>
						<td>12</td>
						<td>990</td>
						<td>453</td>
						
					</tr>
					
				</tbody>
			</table>
		</div>
</div>
@endsection