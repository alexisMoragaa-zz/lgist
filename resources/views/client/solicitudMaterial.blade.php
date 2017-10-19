@extends('app')
@section('content')
    <style>
        h3{
            text-align: center;

        }
        span{
            color: green;
        }
        .marginright{
           border-right: gray 1px solid;
        }
        .margin_left{
            
        }
       
    </style>
    <script>
        $(document).ready(function(){
            $(".dialog").hide();
            $(".dialogProduct").hide();
            $(".solicitar").click(function(e){
                e.preventDefault();
                $( ".dialog" ).dialog({
                    buttons: [{
                       text: "Cancelar","class":'btn btn-danger space',"id":'space',click: function () {
                            $(this).dialog("close");
                        }},{
                        text:"Aceptar","class":'btn btn-success',"id":'space2',click : function(){
                              $(this).dialog("close");
                        }
                    }]
                });
            });
           
           $("#solicitarProductos").click(function(){
            $( ".dialogProduct" ).dialog({
                    buttons: [{
                       text: "Cancelar","class":'btn btn-danger space',"id":'space',click: function () {
                            $(this).dialog("close");
                        }},{
                        text:"Aceptar","class":'btn btn-success',"id":'space2',click : function(){
                              $(this).dialog("close");
                        }
                    }]
                });
           });
        });
    </script>

<div class="container">
    <div class="dialog">
        
            <label for="" class="control-label">Cantidad</label>
            <select name="" id="" class="form-control">
                <option value="">1</option>
                <option value="">2</option>
                <option value="">3</option>
                <option value="">4</option>
                <option value="">5</option>
                <option value="">6</option>
                <option value="">7</option>
                <option value="">8</option>
                <option value="">9</option>
                <option value="">10</option>
            </select>
    </div>
        <div class="row">
        <div class="col-md-6 marginright">
            <h3>Stock Bodega</h3>
            <div class="">
            <table class="table table-hover" id="t">
                <thead>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Stock</th>
                    <th>Valor</th>
                    <th>Accion</th>

                </thead>
                <tbody>
                <tr>
                    <td>cmd654</td>
                    <td>Mayonesa</td>
                    <td>65</td>
                    <td>890</td>
                    <td class="click"><a class="solicitar">Solicitar</a></td>

                </tr>
                <tr>
                    <td>cmd214</td>
                    <td>Arroz</td>
                    <td>85</td>
                    <td>450</td>
                      <td class="click"><a class="solicitar">Solicitar</a></td>

                </tr>
                <tr>
                    <td>cmd985</td>
                    <td>Atun</td>
                    <td>90</td>
                    <td>650</td>
                    <td class="click"><a class="solicitar">Solicitar</a></td>

                </tr>
                <tr>
                    <td>cmd258</td>
                    <td>Salsa Tomate Mayoa</td>
                    <td>123</td>
                    <td>300</td>
                    <td class="click"><a class="solicitar">Solicitar</a></td>

                </tr>
                <tr>
                    <td>cmd346</td>
                    <td>Jugo Limon</td>
                    <td>36</td>
                    <td>990</td>
                    <td class="click"><a class="solicitar">Solicitar</a></td>

                </tr>
                </tbody>
            </table>
            </div>
        </div>
        <div class="col-md-6">
            <h3>Solicitud Producto</h3>
            <div class="margin_left">
               <table class="table table-hover">
                <thead>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Valor</th>
                    <th>Cantidad</th>

                </thead>
                <tbody>
                <tr>
                    <td>cmd654</td>
                    <td>Mayonesa</td>
                    <td>890</td>
                    <td>5</td>
                 

                </tr>
                <tr>
                    <td>cmd214</td>
                    <td>Arroz</td>
                    <td>450</td>
                    <td>9</td>
                 

                </tr>
                <tr>
                    <td>cmd985</td>
                    <td>Atun</td>
                    <td>650</td>
                    <td>2</td>
                

                </tr>
                <tr>
                    <td>cmd258</td>
                    <td>Salsa Tomate Mayoa</td>
                    <td>300</td>
                    <td>14</td>
                 

                </tr>
                <tr>
                    <td>cmd346</td>
                    <td>Jugo Limon</td>
                    <td>990</td>
                    <td>7</td>
                  

                </tr>
                </tbody>
            </table>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="dialogProduct">
            <label for="date" class="control-label">Seleccionar fecha</label>
            <input type="date" class="form-control" name="date">

            <label for="time" class="control-label">Seleccionar Horario</label>
            <select name="time" id="" class="form-control">
                <option value="">--Seleccione--</option>
                <option value="">AM</option>
                <option value="">PM</option>
            </select>

            <label for="sucursal" class="control-label">Seleccione Sucursar de destino</label>
            <select name="sucursal" id="" class="form-control">
                <option value="">--Seleccione--</option>
                <option value="">Santiago Centro</option>
                <option value="">Costanera</option>
                <option value="">Alto Las Condes</option>
                <option value="">Viña Del Mar</option>
            </select> 

        </div>
        <input type="button" class="btn btn-success" value="Solicitar Productos" id="solicitarProductos">
    </div>
</div>
@endsection