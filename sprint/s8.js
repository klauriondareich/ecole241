//Ce programme affiche la table de multiplication

let nombre = Number(prompt("Saisir le multiplicateur"));
for(i = 0; i < 11; i++){
	console.log(nombre + " * " + i + " = " + nombre*i);
}