<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Practica</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/materialize.min.css">
</head>

	<div class="card-panel blue darken-4">Titulo de la Pagina </div>
	
	<div class="container">
		<div class="row">
		
			<div class="col s4"><img src="image/1.jpg" class="responsive-img z-depth-3"></div>
			<div class="col s4"><img src="image/2.jpg" class="responsive-img z-depth-3"></div>
			<div class="col s4"><img src="image/3.jpg" class="responsive-img z-depth-3"></div>
			

		</div>

		<div class="row">
			<   <table>
        <thead>
          <tr>
              <th data-field="id">Nombre</th>
              <th data-field="name">Edad</th>
              <th data-field="price">Peso</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Bombom</td>
            <td>16</td>
            <td>12</td>
          </tr>
          <tr>
            <td>Bellota</td>
            <td>6</td>
            <td>16</td>
          </tr>
          <tr>
            <td>Kitty</td>
            <td>5</td>
            <td>16</td>
          </tr>
        </tbody>
      </table>

		</div>

		<div class="row">
			<div class="col s4"> </div>
			<div class="col s4"> </div>
			<div class="col s4"> </div>
			<div class="col s4"><a href="" class="btn">Cancelar</a><a href="" class="btn">Guardar</a></div>


		</div>

	</div>
	<script>
	var min,max;
	function random(min,max){

		var aleatorio=Math.random();
		alert (aleatorio);
		
		var numero = Math.floor(aleatorio*(max-min)+min);

	return numero;
	}

	alert(random (20,50));

	</script>



<script src="js/jquery-3.0.0.min.js"></script>
<script src="js/materialize.min.js"></script>
</body>	

<footer></footer>
</html>
	
