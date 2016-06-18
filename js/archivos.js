function Perro (nombre,edad,sexo,color,peso) {
	this.nombre = nombre;
	this.edad = edad;
	this.sexo = sexo;
	this.color = color;
	this.peso = peso;
}

var mascota1 = new Perro("bombom",14,"hembra","gris",15);

nombre.innerText = mascota1.nombre;
age.innerText = mascota1.edad;
sexo.innerText = mascota1.sexo;
color.innerText = mascota1.color;
peso.innerText = mascota1.peso;

var mascota2 = new Perro("bellota",4,"hembra","NegroMarron",18);

nombre1.innerText = mascota2.nombre;
age1.innerText = mascota2.edad;
sexo1.innerText = mascota2.sexo;
color1.innerText = mascota2.color;
peso1.innerText = mascota2.peso;
