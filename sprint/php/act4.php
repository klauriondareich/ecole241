<?php
// Les tableaux
$table = array(
'apprenant_1' => array('nom : ' => 'KOUHOUINIKINA','prenom : ' => 'Laurion','age : ' => '22 ans','profil' =>'https://klauriondareich.github.io/ecole241/profil/'),
'apprenant_2' => array('nom : ' => 'DIN','prenom : ' => 'Kelby','age : ' => '21 ans','profil'=>'https://dinkelby7.github.io/ecole241/profil/'),
'apprenant_3' => array('nom : ' => 'MANGUEDI ','prenom : ' => 'Falana','age : ' => '19 ans','profil'=>'https://falanafelicia.github.io/ecole241/profil/index.html#'),
'apprenant_4' => array('nom : ' => 'KAMGOUA ','prenom : ' => 'Grace','age : ' => '28 ans','profil'=>'https://lacastafiore.github.io/ecole241/profil/'),
'apprenant_3' => array('nom : ' => 'MOUWENDZI ','prenom : ' => 'Rick','age : ' => '28 ans','profil'=>'https://mlraleader.github.io/ecole241/profil/index.html'),
'apprenant_4' => array('nom : ' => 'MBELA ','prenom : ' => 'Kevinn','age' => '21 ans','profil'=>'https://mbela-kevinn98.github.io/ecole241/profil/'),
'apprenant_5' => array('nom : ' => 'TCHITOMBI ','prenom : ' => 'Franck','age : ' => '26 ans','profil'=>'https://iavich.github.io/ecole241/profil/'),
'apprenant_6' => array('nom : ' => 'NZE BITOME','prenom : ' => 'Léticia','age : ' => '24 ans','profil'=>'https://nzebitome.github.io/ecole241/profil/#'),
'apprenant_7' => array('nom : ' => 'MEBALE ','prenom : ' => 'Noel','age : ' => '28 ans','profil'=>'https://maestrodimateo.github.io/ecole241/profil/#sidebar'),
'apprenant_8' => array('nom : ' => 'SISSO ','prenom : ' => 'Albert','age : ' => '28 ans','profil'=>'https://albert241.github.io/ecole241/profil/'),
'apprenant_9' => array('nom : ' => 'MOUNDOUNGA ','prenom : ' => 'Maurio','age : ' => '24 ans','profil'=>'https://joemaurio.github.io/ecole241/profil/'),
'apprenant_10' => array('nom : ' => 'BOGNOU ','prenom : ' => 'Boris','age : ' => '39 ans','profil'=>'https://ribelson.github.io/ecole241/profil/#')
);
echo '<h1>Les développeurs Web</h1>'.'<br />';
foreach ($table as $key => $value) {
	echo '<br />'.$key  .'<br />'.'<br />';;
	foreach ($value as $key1 => $value1 ) {
 		echo $key1 . ' '.$value1 .'<br />';
	}	
}

?>