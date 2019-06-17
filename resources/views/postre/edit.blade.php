@extends('layout')
@section('content')
<h1>Editaremos postre</h1>
<form>
  <input type="hidden" id="id_postre" value="{{$detalle->id_postre}}">
	<input type="text" id="descripcion" placeholder="descripcion" value="{{$detalle->descripcion}}">
	<input type="text" id="precio" placeholder="precio" value="{{$detalle->precio}}">
	<input type="button" id="buyButton" value="enviar">
</form>
<div id="ok"></div>
@endsection

@section('js')

<!-- <script>
  var id=$("#id_postre").val();
    $.ajax({
                
                url:   "/api/postres/"+id+"",
                type:  'get', 
                dataType: 'json',
                success:  function (response) {      
                $("#ok").html(response);
        }
        }); 


</script> -->

<script>
	 $("#buyButton").on('click', function(e) {
 		var descripcion=$("#descripcion").val();
 		var precio=$("#precio").val();
    var id=$("#id_postre").val();
 		
 		$.ajax({
              	data:{descripcion:descripcion,precio:precio},
                url:   "/api/postres/"+id+"",
                type:  'put', 
                dataType: 'json',
                
                success:  function (response) {      
                 window.location.replace("/postres");
                 

				}
        }); 

 });
</script>
@endsection