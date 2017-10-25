@extends('app')
@section('content')

<style>
	#t{
		margin-top: 64px;
	
</style>
<div class="container">	
	<div class="row">
		<div class="col-md-12">
			<table class="table" id="t">
				<thead>
					<th>Empresa</th>
					<th>Bodega</th>
					<th>Articulos</th>
					<th>Fecha Entrega</th>
					<th>Detalle</th>
				</thead>
				<tbody>
					<tr>
						<td>Madrigal</td>
						<td> Quimicos</td>
						<td>35</td>
						<td>15-12-2017</td>
						<td><a href="{{url('detalleSolicitud')}}">Ver Mas</a></td>
					</tr>
					<tr>
						<td>Cooler Max</td>
						<td>Fia</td>
						<td>35</td>
						<td>15-12-2017</td>
						<td><a href="{{url('detalleSolicitud')}}">Ver Mas</a></td>
					</tr>
					<tr>
						<td>The Broders Chicken</td>
						<td> Comida</td>
						<td>450</td>
						<td>15-11-2017</td>
						<td><a href="{{url('detalleSolicitud')}}">Ver Mas</a></td>
					</tr>
					<tr>
						<td>Inverntur Labs</td>
						<td> Tecnologia</td>
						<td>12</td>
						<td>21-12-2017</td>
						<td><a href="{{url('detalleSolicitud')}}">Ver Mas</a></td>
					</tr>
					
					
				</tbody>
			</table>
		</div>
		
	</div>
</div>


@endsection