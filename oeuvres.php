<?php

//Initialisation du tableau
$oeuvres = [];

for ($id = 0; $id <= 14; $id++) {
    $oeuvres[] = [
        'id'          => $id,
        'oeuvre'      => '', 
        'titre'       => '',
        'artiste'     => '',
        'description' => ''
    ];
}

//Remplissage du tableau

//Oeuvre 1
$oeuvres[0]['oeuvre']      = 'img/clark-van-der-beken.png';
$oeuvres[0]['titre']       = 'DODOMU';
$oeuvres[0]['artiste']     = 'Mia Tozerski';
$oeuvres[0]['description'] = 'Mia Tozerski est une artiste peintre ukrainienne réfugiée de la guerre. Sur cette œuvre, Dodomu ("domicile" en ukrainien), elle nous montre la tristesse du peuple ukrainien qu\'elle partage, ayant elle-même dû quitter son foyer. L\'œuvre évoque le drapeau liquéfié d\'une Ukraine en souffrance, pleurant la mort de ses compatriotes. Ce travail chargé d\'émotion est le symbole d\'un événement qui marquera l\'Histoire. Cette peinture à l\'acrylique rayonne grâce à son fond lisse et ses mélanges de couleurs éclatantes.';

//Oeuvre 2
$oeuvres[1]['oeuvre']      = 'img/pawel-czerwinski-3.png';
$oeuvres[1]['titre']       = 'AASHAAHEEN BAADAL';
$oeuvres[1]['artiste']     = 'Anaisha Devi';
$oeuvres[1]['description'] = 'Sur cette oeuvre conceptuelle à la fois organique, minérale et liquide, Anaisha Devi nous transporte dans un nuage noir envoûtant. Un sombre tableau qui, par son verni éclatant, rayonne tel un marbre poli. Une oeuvre à la cohérence transcendantale, exécutée à la perfection.';

//Oeuvre 3
$oeuvres[2]['oeuvre']      = 'img/dan-cristian-padure.png';
$oeuvres[2]['titre']       = 'NIGHTLIFE TRAFFIC';
$oeuvres[2]['artiste']     = 'Andrew Forsythe';
$oeuvres[2]['description'] = 'Quisque accumsan ultrices ligula vestibulum posuere. Aliquam feugiat ligula eget massa blandit condimentum. Morbi volutpat erat luctus suscipit pellentesque. Quisque cursus tempor nibh at sollicitudin. Sed blandit libero velit. Etiam tincidunt facilisis mollis. Ut mollis nunc sit amet lacinia luctus. Suspendisse volutpat enim semper arcu rutrum, et iaculis risus interdum. Duis at libero.';

//Oeuvre 4
$oeuvres[3]['oeuvre']      = 'img/steve-johnson-5.png';
$oeuvres[3]['titre']       = 'LE REFUGE DE L\'HAVRE';
$oeuvres[3]['artiste']     = 'Simon Pelletier';
$oeuvres[3]['description'] = 'Nam tempus neque nec felis venenatis auctor. Nam velit risus, lobortis eu quam non, interdum efficitur nibh. Phasellus a augue ac orci lacinia mattis et vel lectus. Sed nec tellus urna. Donec at turpis turpis. Cras quam tellus, imperdiet vitae finibus id, varius quis felis. Maecenas blandit eleifend risus, vel hendrerit erat dignissim id. Nullam at laoreet nibh. Nulla gravida varius sollicitudin. Etiam non aliquam diam, tempor varius sapien. Aenean et velit eu nisi lobortis massa nunc.';

//Oeuvre 5
$oeuvres[4]['oeuvre']      = 'img/steve-johnson.png';
$oeuvres[4]['titre']       = 'RED WASHOVER';
$oeuvres[4]['artiste']     = 'Kit Van Der Borght';
$oeuvres[4]['description'] = 'Nunc euismod ullamcorper tortor, id efficitur ante interdum in. Integer eu condimentum nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras viverra suscipit feugiat. Mauris vehicula luctus tellus, eu hendrerit libero laoreet ut. In tristique vehicula nisl in tempus. Morbi tempus aliquet gravida. In eget est congue, rhoncus sapien at, cursus metus.';

//Oeuvre 6
$oeuvres[5]['oeuvre']      = 'img/pawel-czerwinski.png';
$oeuvres[5]['titre']       = 'CHROMATICS';
$oeuvres[5]['artiste']     = 'Jean-Michel Delatronchette';
$oeuvres[5]['description'] = 'Vivamus commodo non libero at hendrerit. In lacinia dui sit amet pellentesque iaculis. Donec at ultricies sem porttitor.';

//Oeuvre 7
$oeuvres[6]['oeuvre']      = 'img/jazmin-quaynor.png';
$oeuvres[6]['titre']       = 'DIGITAL NEGATIVE';
$oeuvres[6]['artiste']     = 'Hamish McKee';
$oeuvres[6]['description'] = 'Integer in nisl posuere, pulvinar ex ac, tincidunt risus. Nullam vel lorem et leo dignissim accumsan. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tempor, magna non consectetur dapibus, est libero iaculis lacus, eget semper turpis orci vitae felis. Fusce eget molestie.';

//Oeuvre 8
$oeuvres[7]['oeuvre']      = 'img/steve-johnson-6.png';
$oeuvres[7]['titre']       = 'BLAST FROM THE PAST';
$oeuvres[7]['artiste']     = 'Juliette Baskerville';
$oeuvres[7]['description'] = 'Nunc fermentum purus dapibus justo fermentum auctor. Maecenas non tincidunt leo. Morbi vitae iaculis sem. Donec quis scelerisque massa. Fusce quis accumsan diam, et interdum lectus. Suspendisse mattis pulvinar vehicula. Duis nisi.';

//Oeuvre 9
$oeuvres[8]['oeuvre']      = 'img/victor-grabarczyk.png';
$oeuvres[8]['titre']       = 'HURRICANE';
$oeuvres[8]['artiste']     = 'Natalie Wellington';
$oeuvres[8]['description'] = 'Aliquam tristique tempus molestie. Nulla nisl eros, dapibus eu lectus in, cursus accumsan arcu. Suspendisse bibendum diam dignissim porta maximus. Praesent sollicitudin consectetur faucibus. Cras pulvinar massa a orci rutrum, id blandit enim viverra. Praesent sed congue augue. Suspendisse efficitur, nisl quis finibus faucibus, lacus felis bibendum leo, eu euismod lacus mauris in felis. Quisque dignissim et dui et aliquet. Donec ut lobortis eros, vitae tincidunt augue metus.';

//Oeuvre 10
$oeuvres[9]['oeuvre']      = 'img/pawel-czerwinski-2.png';
$oeuvres[9]['titre']       = 'LA MARéE ROUGE';
$oeuvres[9]['artiste']     = 'Martin Rodriguez';
$oeuvres[9]['description'] = 'Vivamus quis odio vel ligula feugiat facilisis. Donec eleifend pellentesque massa, ut malesuada est bibendum sit amet. Morbi tincidunt nec tellus vel ornare. Mauris dolor tellus, gravida eget euismod eu, viverra eget urna. Phasellus feugiat ipsum nec lorem accumsan, sed porta quam dictum massa nunc.';

//Oeuvre 11
$oeuvres[10]['oeuvre']      = 'img/steve-johnson-2.png';
$oeuvres[10]['titre']       = 'ASIMILACION';
$oeuvres[10]['artiste']     = 'Angel Sanchez-Fernandez';
$oeuvres[10]['description'] = 'Mauris ut justo ac mi pretium eleifend. Curabitur sed magna ut elit facilisis pharetra. Maecenas tincidunt fermentum ipsum ut sollicitudin. Nullam feugiat, neque vel egestas sollicitudin, quam leo mattis mauris, in lacinia sem mi id risus. Nullam ultrices quam eu leo auctor tempus. Fusce vestibulum mi ex, vel ultricies purus mollis sollicitudin. Aenean ac vehicula ipsum. Nam turpis ante, ultrices eget odio sed, luctus bibendum mauris sodales sed.';

//Oeuvre 12
$oeuvres[11]['oeuvre']      = 'img/fly-d.png';
$oeuvres[11]['titre']       = 'LA GALAXIA GIALLA';
$oeuvres[11]['artiste']     = 'Eduardo Tancredi';
$oeuvres[11]['description'] = 'Mauris maximus, orci sollicitudin ultrices elementum, tellus neque feugiat leo, quis lobortis purus neque vel lectus. Ut sagittis eros id lectus porttitor tincidunt. Donec scelerisque diam nec felis egestas, eget finibus ante porttitor. Sed malesuada sapien ut semper accumsan. Duis tristique dui vel egestas porttitor. Nunc tristique dapibus orci a amet.';

//Oeuvre 13
$oeuvres[12]['oeuvre']      = 'img/orfeas-green.png';
$oeuvres[12]['titre']       = 'PUFFY AMALGAMATE';
$oeuvres[12]['artiste']     = 'Sandro De Blasi';
$oeuvres[12]['description'] = 'Donec semper a massa quis congue. In malesuada lorem ligula, ut posuere magna pulvinar in. Proin vitae enim gravida, commodo odio.';

//Oeuvre 14
$oeuvres[13]['oeuvre']      = 'img/steve-johnson-4.png';
$oeuvres[13]['titre']       = 'MIRAGE';
$oeuvres[13]['artiste']     = 'Stéphanie Kaiser';
$oeuvres[13]['description'] = 'Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam iaculis lorem ac ex tristique egestas et nec sapien. Donec tincidunt id erat sit amet tempus. Nullam vel molestie dui. Duis a neque massa. Vivamus quis ornare lacus. Nullam eleifend condimentum egestas. Vivamus magna purus, fermentum mollis mauris sed, consectetur interdum libero. Duis interdum tortor tellus, eget sollicitudin quis.';

//Oeuvre 15
$oeuvres[14]['oeuvre']      = 'img/steve-johnson-3.png';
$oeuvres[14]['titre']       = 'BLAUE GELBE MUSTER';
$oeuvres[14]['artiste']     = 'Adelheid Von Schreiber';
$oeuvres[14]['description'] = 'Curabitur dui odio, porta vel tempor sed, consectetur vitae mi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Orci varius natoque penatibus nec.';

?>