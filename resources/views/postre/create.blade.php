@extends('layout')
@section('content')
<h1>crearemos postre</h1>
<form>
	<input type="text" id="descripcion" placeholder="descripcion">
	<input type="text" id="precio" placeholder="precio">
	<input type="button" id="buyButton" value="enviar">
</form>
@endsection

@section('js')
<script>
	 $("#buyButton").on('click', function(e) {
 		var descripcion=$("#descripcion").val();
 		var precio=$("#precio").val();
 		
 		$.ajax({
              	data:{descripcion:descripcion,precio:precio},
                url:   '/api/postres',
                type:  'post', 
                dataType: 'json',
                
                success:  function (response) {      
                 window.location.replace("/postres");

				}
        }); 

 });
</script>
@endsection