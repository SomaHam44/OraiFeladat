<?php

namespace Petrik14S\SoltiSoma\Halloween\Models;
require '../vendor/autoload.php';

$lako = new Lako("Polgármester");
$lako2 = new Lako("Sally");
$lako3 = new Lako("Holly");
$lako4 = new Lako("Postás");

$esemeny = new Esemeny("Halloweeni túra", new Lako('Rosszcsont Jack'), [$lako, $lako2] , "2020-10-30");
$esemeny2 = new Esemeny("Halloweeni vacsora", new Lako('Rosszcsont Jack'), [$lako4, $lako3] , "2020-10-31");

echo "<p>Lakó : " . $lako->getNev() . "</p>";
echo "<p>Lakó : " . $lako2->getNev() . "</p>";
echo "<p>Lakó : " . $lako3->getNev() . "</p>";
echo "<p>Lakó : " . $lako4->getNev() . "</p>";


echo "<p>Esemény szervezője : " . $esemeny->getSzervezo() . "</p>";




