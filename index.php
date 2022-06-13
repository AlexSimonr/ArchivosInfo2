<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>
		$(document).on("click","#btn-publicar",()=>{
			const user=$("#pub_usER").val();
			const desc=$("#pub_desc").val();
			const imgen=$("#pub_imagen").val();
			const estado=$("#pub_estado").val();
			$.ajax({
				url:'acciones_publicaciones.php',
				data:{user:user,desc:desc,imagen:imagen,estado:estado},
				type:'POST',
				dataType:'json',
				success:(data)=>{
					console.log(data);
					$("#estado").text(data[0].pub_estado);
					$("#publicaciones").text(data[0].pub_desc);
					if(data[0].pub_estado=='Alegre'){
						$(".cont_publicaciones").removeClass("bg-primary");
						$(".cont_publicaciones").removeClass("bg-warning");
						$(".cont_publicaciones").addClass("bg-success");
					}
					if(data[0].pub_estado=='Triste'){
						$(".cont_publicaciones").removeClass("bg-success");
						$(".cont_publicaciones").removeClass("bg-warning");
						$(".cont_publicaciones").addClass("bg-primary");
					}
					if(data[0].pub_estado=='Molesto'){
						$(".cont_publicaciones").removeClass("bg-success");
						$(".cont_publicaciones").addClass("bg-warning");
						$(".cont_publicaciones").removeClass("bg-primary");
					}
				},
				error:(desc,estado)=>{},
			})

		 });
	</script>
</head>
<body>
	<h1 class="title title-success"> VIDA NUEVA BOOK</h1>
	<div class="container">

	  <div class="row">
	  	<div class="col-md-6">
	  		<input type="text" placeholder="Usuario" class="form-control" id="pub_user">
			<textarea id="pub_descripcion" cols="30" rows="2" class="form-control"></textarea>
			<input type="file" id="pub_imagen" class="form-control">	
	  		<select id="pub_estado" class="form-control bg-dark">
			<option value="">Elija una opción</option>
			<option value="Alegre">Alegre</option>
			<option value="Triste">Triste</option>
			<option value="Molesto">Molesto</option>
		</select>
		<div class="d-grid gap-2">
				<button class="btn btn-danger" id="btn-publicar">Publicar</button>
			</div>
	  	</div>

	  	<div class="col-md-6">
	  		<img src="no_imagen.png" width="220px" alt="">
	  	</div>
	  </div>
	  
	  <div class="row">
	  	<div class="col-md-4">
	  		<div class="card cont_publicacion" style="width: 18rem;">
  				<img src="imagen.jpg" class="card-img-top" alt="...">
  			<div class="card-body">
  				<h3 id="estado">Estado</h3>
    		<p class="card-text" id="publicaciones">Descripcion</p>
 		 </div>
		</div>


	  	</div>
	  </div>	



	</div>

</body>
</html>