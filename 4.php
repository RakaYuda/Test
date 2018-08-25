<?php
function fib1($jumlah)
{
  
  $angka_sebelumnya=0;
  $angka_sekarang=1;
  
  
  $hasil = "$angka_sebelumnya $angka_sekarang";
  for ($i=0; $i<$jumlah-2; $i++)
  {
    
    $output = $angka_sekarang + $angka_sebelumnya;
    
    $hasil = $hasil." $output";
    
    
    $angka_sebelumnya = $angka_sekarang;
    $angka_sekarang = $output;
  }
  return $hasil;
}

function fib2($jumlah)
{
  
  $angka_sebelumnya=3;
  $angka_sekarang=5;
  
  
  $hasil = "$angka_sebelumnya $angka_sekarang";
  for ($i=0; $i<$jumlah-2; $i++)
  {
    
    $output = $angka_sekarang + $angka_sebelumnya;
    
    $hasil = $hasil." $output";
    
    
    $angka_sebelumnya = $angka_sekarang;
    $angka_sekarang = $output;
  }
  return $hasil;
}

function fib3($jumlah)
{
  
  $angka_sebelumnya=21;
  $angka_sekarang=34;
  
  
  $hasil = "$angka_sebelumnya $angka_sekarang";
  for ($i=0; $i<$jumlah-2; $i++)
  {
    
    $output = $angka_sekarang + $angka_sebelumnya;
    
    $hasil = $hasil." $output";
    
    
    $angka_sebelumnya = $angka_sekarang;
    $angka_sekarang = $output;
  }
  return $hasil;
}

echo fib1(4);
echo "<br>";

echo fib2(4);
echo "<br>";

echo fib3(4);
echo "<br>";

?>

