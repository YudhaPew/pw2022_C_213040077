<!-- Function pada PHP -->
<!-- Function adalah potongan program atau baris code untuk mempermudah saat coding -->
<!-- Built-in function -->
<!-- Fungsi yg sering digunakan : Date/Time : time(), date(), mktime (), strtorime() -->
<!-- l=hari, d=tanggal, M=bulan, m=bulan(angka), y=tahun  -->
<?php
        echo date("l, d-M-Y");
        echo "<br>";

        // Time
        // UNIX timestamp / EPOCH time
        // detik yg sudah berlalu sejak 1 januari 1970 
        echo date ("d M Y", time ()-60*60*24*100);
        echo "<br>";

        // mktime
        // membuat detik sendiri
        // mktime(0,0,0,0,0,0)
        // jam, menit, detik, tanggal, bulan, tahun
        echo date("l", mktime(0,0,0,5,26,2003));
        echo "<br>";

        // strtotime
        // input tanggal output detik
        echo date("l", strtotime("26 mei 2003"));

        // String : strlen(), strcmp(), explode(), htmlspecialchars()
        // menghitung panjang string, membandingkan 2 buah string, memecah 2 buah string menjadi array, menjaga web dari hacker

        // Utility
        // var_dump(): mencetak isi dari sebuah variabel, array, object
        // isset(): cek sebuah variabel sudah pernah di buat atau blm, menghasilkan output boolean (true or false)
        // empty(): apakah variabel yg ada, memiliki isi?
        // die(): memberhentikan program
        // sleep(): memberhentikan program sementara

?>