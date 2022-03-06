<?php 

// Pengulangan : for, while, do.. while, foreach (pengulangan khusus array)
// inisialisasi (menentukan variabel awal utk pengulanganny)
// terminasi (memberhentikan pengulangan)
// increment atau decrement (pengulangan dpt maju atau mundur)

for( $i = 0; $i < 5; $i++ ) { 
    echo "Hello World! <br>";
}

echo "<hr>";

$i = 0;   // Increment
while( $i <5) {
    echo "Hello World! <br>";
$i++;  // Decrement
}

echo "<hr>";

$i=0;
do {
        echo "Hello World! <br>";
$i++ ; 
} while ( $i < 5 ) ;
?>