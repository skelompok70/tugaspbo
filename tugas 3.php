<?php
interface lampu sen{
  public function sen_kanan();
  public function sen–kiri();
  }
  
  class mobil implements lampu sen{
    public function klik_kanan(){
      return"klik kanan...";
        }
     public function klik_kiri(){
       return"klik kiri...";
       }
     }
     $mobil_baru=new mobil();
     echo $mobil_baru ->klik_kanan();
     //klik kanan...
     ?>
  