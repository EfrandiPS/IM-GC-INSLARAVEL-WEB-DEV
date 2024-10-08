lalu salin kode di bawah ini: <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Array</title>
</head>
<body>
<h1>Berlatih Array</h1>
<?php
echo "<h3> Soal 1 </h3>";
/* SOAL NO 1
Kelompokkan nama-nama di bawah ini ke dalam Array. Kids : "Mike", "Dustin", "Will", "Lucas", "Max", "Eleven" Adults: "Hopper", "Nancy", "Joyce", "Jonathan", "Murray" */
$kids = ["Mike", "Dustin", "Will", "Lucas", "Max", "Eleven"]; // Lengkapi di sini
$adults = ["Hopper", "Nancy", "Joyce", "Jonathan", "Murray"];
echo "anak Kecil = ". implode(",",$kids)."<br>";
echo "Orang Dewasa = ". implode(",",$adults);
echo "<h3> Soal 2</h3>";
/* SOAL NO 2
Tunjukkan panjang Array di Soal No 1 dan tampilkan isi dari masing-masing Array. */
echo "Cast Stranger Things: ";
echo "<br>";

echo "Total Kids: ".count($kids)."<br>"; 
echo "<ol>";
for ($i = 0; $i < count($kids); $i++) {
    echo "<li> $kids[$i] </li>"; 
}
echo "</ol>";
echo "Total Adults: " . count($adults) . "<br>"; 
echo "<ol>";
for ($i = 0; $i < count($adults); $i++) {
    echo "<li> $adults[$i] </li>"; 
}
echo "</ol>";
echo  "<h3>SOAL No 3</h3>";

$orang = [
    [
        "Name" => "Will Byers",
        "Age" => 12,
        "Aliases" => "Will the Wise",
        "Status" => "Alive"
    ],
    [
        "Name" => "Mike Wheeler",
        "Age" => 12,
        "Aliases" => "Dungeon Master",
        "Status" => "Alive"
    ],
    [
        "Name" => "Jim Hopper",
        "Age" => 43,
        "Aliases" => "Chief Hopper",
        "Status" => "Deceased"
    ],
    [
        "Name" => "Eleven",
        "Age" => 12,
        "Aliases" => "El",
        "Status" => "Alive"
    ]
];


echo "<pre>";
print_r($orang);
echo "</pre>";
?>

?>
</body>
</html>