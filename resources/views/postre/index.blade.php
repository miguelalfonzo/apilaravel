@extends('layout')
@section('content')
<h1>postres</h1>
@section('content')

<a href="postres/create">nuevo postre</a>
<table border="1">
	<tr>
		<th>id</th>
		<th>descripcion</th>
		<th>precio</th>
		<th>editar</th>
		<th>eliminar</th>
	</tr>
 <tbody id="tbody">
 </tbody>

</table>

@endsection

@section('js')
<script>

      $.ajax({
              
                url:   '/api/postres',
                type:  'get', 
                dataType: 'json',
                
                success:  function (response) {      
                 var json = response;
  				 var tr;

  				for (var i = 0; i < json.length; i++) {
    			tr = $('<tr/>');
    			tr.append("<td>" + json[i].id_postre + "</td>");
    			tr.append("<td>" + json[i].descripcion + "</td>");
    			tr.append("<td>" + json[i].precio + "</td>");
    			tr.append("<td><a href='/postres/"+json[i].id_postre+"/edit'>editar</a></td>");
    			tr.append("<td><a href='javascript:deleter("+json[i].id_postre+")'>eliminar</a></td>");
    			$('tbody').first().append(tr);
  				}  

				}
        }); 
  
</script>
<script>
	function deleter(id_postre){
		
		$.ajax({
              	
                url:   "/api/postres/"+id_postre+"",
                type:  'delete', 
                dataType: 'json',
                
                success:  function (response) {      
                 window.location.replace("/postres");

				}
        });

	}
</script>
@endsection
