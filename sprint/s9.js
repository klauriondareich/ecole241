let nb,max;
max = Number(prompt("saisir le nombre numero 1" ));
for (i = 2;i<=5;i++) {
	nb = Number(prompt("Saisir le nombre" + i));
	if (nb > max) {
		max = nb;
	} 
};
console.log(`le plus grand est ${max}`)	;