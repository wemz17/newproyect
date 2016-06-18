<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Practica</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
		
		 <nav>
		    <div class="nav-wrapper indigo darken-3">
		      <a href="#!" class="brand-logo">Logo</a>
		      <ul class="right hide-on-med-and-down">
		        <li><a href="sass.html"><i class="material-icons left">search</i>Bucar</a></li>
		        <li><a href="badges.html"><i class="material-icons right">view_module</i>Mostrar</a></li>
		      </ul>
		    </div>
		  </nav>

		
		<div class="container">
		
		<div class="row">
			
			<div class="col s4"><img src="image/1.jpg" class="responsive-img z-depth-3"></div>
			<div class="col s4"><img src="image/2.jpg" class="responsive-img z-depth-3"></div>
			<div class="col s4"><img src="image/3.jpg" class="responsive-img z-depth-3"></div>
			

		</div>

		<div class="row">
	   <table>
        <thead>
          <tr>

              <th data-field="nombre_m">Nombre</th><i class="material-icons">add</i>
              <th data-field="edad">Edad</th><i class="material-icons">language</i>
              <th data-field="sexo">Sexo</th><i class="material-icons">print</i>
 			  <th data-field="color">Color</th><i class="material-icons">add</i>
              <th data-field="peso_m">Peso</th><i class="material-icons">language</i>
              

          </tr>
        </thead>

        <tbody>
          <tr>
            <td id="nombre">empty</td>
            <td id="age">empty</td>
            <td id="sexo">empty</td>
            <td id="color">empty</td>
            <td id="peso">empty</td>
          </tr>
          <tr>
            <td id="nombre1">empty</td>
            <td id="age1">empty</td>
            <td id="sexo1">empty</td>
            <td id="color1">empty</td>
            <td id="peso1">empty</td>
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

		<div class="col s12">

			<input type="date" class="datepicker">

		</div>



	</div>
	


<script src="js/archivos.js"></script>
<script src="js/jquery-3.0.0.min.js"></script>
<script src="js/materialize.min.js"></script>
<script>
	$(document).ready(function(){
		$('.dropdown-button').dropdown();
		$(".button-collapse").sideNav();
		$('.datepicker').pickadate();
	});

	/*function mostrar(pos){

		document.write(pos.coords.latitude + "," + pos.coords.longitude);

	}
	navigator.geolocation.getCurrentPosition(mostrar);
*/

</script>


</body>	

<footer></footer>
</html>
	
