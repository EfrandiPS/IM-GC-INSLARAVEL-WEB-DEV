<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
echo "<h3>Soal No 1  </h3>";
function greetings($name) {
    echo "Halo $name, Selamat Datang di Garuda Cyber Institute!<br>";
}
greetings("Bagas");
greetings("Wahyu");
greetings("Nama Peserta");
echo "<br>";

echo "<h3>Soal No 2 Reserve String </h3>";
function reverseString($str) {
    $reversed = ""; 
    $panjang = strlen($str); 

   
    for ($i = $panjang - 1; $i >= 0; $i--) {
        $reversed .= $str[$i]; 
    }

    echo $reversed . "<br>"; 
    return $reversed;
}

reverseString("nama peserta");
reverseString("Garuda Cyber Institute");
reverseString("We Are GC-Ins Developer");
reverseString("Ayam Goyeng");


echo "<h3>Soal No 3 Palindrome </h3>";
function palindrome($str) {
    $reversedString = reverseString($str);


    if ($str === $reversedString) {
        return "true"; 
    } else {
        return "false"; 
    }
}


echo  palindrome("katak");
echo "<br>"."<br>";
echo palindrome("jambu");
echo "<br>"."<br>";
echo palindrome("civic");
echo "<br>"."<br>";
echo palindrome("KASUR");
echo "<br>"."<br>";
echo palindrome("nababan") ; 
echo "<br>"."<br>";
echo palindrome("jambaban");
echo "<br>"."<br>"; 
echo palindrome("racecar"); 

echo "<h3>Soal No 4 Tentukan Nilai </h3>";

function tentukan_nilai($nilai) {
    if ($nilai >= 85 && $nilai <= 100) {
        return "Sangat Baik"; 
    } elseif ($nilai >= 70 && $nilai < 85) {
        return "Baik"; 
    } elseif ($nilai >= 60 && $nilai < 70) {
        return "Cukup"; 
    } else {
        return "Kurang"; 
    }
}

echo tentukan_nilai(98); 
echo "<br>"; 
echo tentukan_nilai(76);
echo "<br>";
echo tentukan_nilai(67);
echo "<br>";
echo tentukan_nilai(43);
?>

</body>
</html>