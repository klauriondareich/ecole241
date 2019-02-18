//programme qui demande l’âge de l’utilisateur et affiche en console *Vous êtes majeur* ou *Vous êtes mineur*

let age = Number(prompt("entrer votre nom"));
if (age <18) {
	console.log("mineur");
}
else {
	console.log("majeur");
}