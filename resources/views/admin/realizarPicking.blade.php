@extends('app')
@section('content')
<style>
.row{
		margin-top: 15px;
	}
	.row1{
		margin-top: 30px;
	}
	.datosInternos{
		margin-right: 15px;
	}
	.row2{
		margin:15px
		

		
	}
	.btn1{
		margin-top: 23px;
	}
</style>
<div class="container">
	<div class="panel panel-default">
		<div class="row row1">
			<div class="col-md-8">
				<div class="col-md-3">
					<label for="" class="cotrol-label">Centro de costos</label>
					<select name="centroCosto" id="" class="form-control">
						<option value="">Bodega Central</option>
						<option value="">Bodega Viña del Mar</option>
						<option value="">Bodega Rancagua</option>
					
					</select>
				</div>
				<div class="col-md-3">
					<label for="" class="comtrol-label">Destino</label>
					<select name="destino" id="" class="form-control">
						<option value="">Cliente</option>
						<option value="">Bodega Central</option>
						<option value="">Bodega Viña del Mar</option>
						<option value="">Bodega Rancagua</option>
					</select>
				</div>
				<div class="col-md-3">
					<label for="" class="cotrol-label">Seleccione Cliente</label>
					<select name="cliente" id="" class="form-control">
						<option value="">Madrigal</option>
						<option value="">Cooler Max</option>
						<option value="">The Brothers Chicken</option>
						<option value="">Inventur Labs</option>
					</select>
				</div>
				<div class="col-md-3">
					<label for="" class="cotrol-label">Fecha Despacho</label>
					<input type="date" class="form-control">
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-default datosInternos">
				<div class="col md 12">
					
					<div class="col-md-6">
						<h4>N° Orden Interna <span>0001</span></h4>
					</div>
					<div class="col-md-6">
						<h5>N° Orden Cliente <span>0001</span></h5>
					</div>
				</div>
				
				
				<h5>Realizado por <span>Carlos Arturo</span></h5>
				</div>
			</div>
		</div><!--[Fin Row1]-->
		<div class="panel panel-default row2">
			<div class="row row2">
					<div class="col-md-3">
						<label for="" class="control-label">Codigo Producto</label>
						<input type="text" class="form-control">
					</div>
					<div class="col-md-3">
						<label for="" class="control-label">Cantidad</label>
						<input type="text" class="form-control">
					</div>
					<div class="col-md-3">
						<input type="buttom" class="btn btn1 btn-success" value="Agregar Producto">
					</div>
					<div class="col-md-3">
						<input type="buttom" class="btn btn1 btn-danger" value="Quitar Producto Producto">
					</div>
			</div>
			<div class="row row2">		
				<div class="col-md-12">
					<table class="table table-striped table-hover">
						<thead>
							<th>ID</th>
							<th>Codigo Producto</th>
							<th>Nombre</th>
							<th>Cantidad</th>
							<th>Precio Unitario</th>
							<th>Monto Total</th>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>10001550</td>
								<td>Papas Fritas Marco Polo</td>
								<td>12</td>
								<td>290</td>
								<td>3.480</td>
							</tr>
							<tr>
								<td>2</td>
								<td>10001630</td>
								<td>Leche Nido Etapas</td>
								<td>9</td>
								<td>2.350</td>
								<td>21.250</td>
							</tr>
							<tr>
								<td>3</td>
								<td>10001550</td>
								<td>Papas Fritas Marco Polo</td>
								<td>12</td>
								<td>290</td>
								<td>3.480</td>
							</tr>
							<tr>
								<td>4</td>
								<td>10001630</td>
								<td>Leche Nido Etapas</td>
								<td>9</td>
								<td>2.350</td>
								<td>21.250</td>
							</tr>
							<tr>
								<td>5</td>
								<td>10001550</td>
								<td>Papas Fritas Marco Polo</td>
								<td>12</td>
								<td>290</td>
								<td>3.480</td>
							</tr>
							<tr>
								<td>6</td>
								<td>10001630</td>
								<td>Leche Nido Etapas</td>
								<td>9</td>
								<td>2.350</td>
								<td>21.250</td>
							</tr>
							<tr>
								<td>7</td>
								<td>10001550</td>
								<td>Papas Fritas Marco Polo</td>
								<td>12</td>
								<td>290</td>
								<td>3.480</td>
							</tr>
							<tr>
								<td>8</td>
								<td>10001630</td>
								<td>Leche Nido Etapas</td>
								<td>9</td>
								<td>2.350</td>
								<td>21.250</td>
							</tr>
							<tr>
								<td>9</td>
								<td>10001550</td>
								<td>Papas Fritas Marco Polo</td>
								<td>12</td>
								<td>290</td>
								<td>3.480</td>
							</tr>
							<tr>
								<td>10</td>
								<td>10001630</td>
								<td>Leche Nido Etapas</td>
								<td>9</td>
								<td>2.350</td>
								<td>21.250</td>
							</tr>
							<tr>
								<td>11</td>
								<td>10001550</td>
								<td>Papas Fritas Marco Polo</td>
								<td>12</td>
								<td>290</td>
								<td>3.480</td>
							</tr>
							<tr>
								<td>12</td>
								<td>10001630</td>
								<td>Leche Nido Etapas</td>
								<td>9</td>
								<td>2.350</td>
								<td>21.250</td>
							</tr>
							<tr>
								<td>13</td>
								<td>10001550</td>
								<td>Papas Fritas Marco Polo</td>
								<td>12</td>
								<td>290</td>
								<td>3.480</td>
							</tr>
							<tr>
								<td>14</td>
								<td>10001630</td>
								<td>Leche Nido Etapas</td>
								<td>9</td>
								<td>2.350</td>
								<td>21.250</td>
							</tr>
							<tr>
								<td>15</td>
								<td>10001550</td>
								<td>Papas Fritas Marco Polo</td>
								<td>12</td>
								<td>290</td>
								<td>3.480</td>
							</tr>
							<tr>
								<td>16</td>
								<td>10001630</td>
								<td>Leche Nido Etapas</td>
								<td>9</td>
								<td>2.350</td>
								<td>21.250</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div><!--[Fin Panel Default]-->
</div><!--[Fin Contaimer]->

@endsection