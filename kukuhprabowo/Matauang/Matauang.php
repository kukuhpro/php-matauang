<?php namespace Matauang;

class Matauang {

  public static function convert($value = '', $symbol = 'Rp.', $delimiter = '.', $endpoint = ',-')
  {
    $len = strlen($value);
    if ($len >= 3) {
      $flag = $len;
      $cetak = '';
      $len = $len % 3;
      switch ($len) {
        case 0:
         while ($flag >= 3) {
            $flag = $flag - 3;
            if ($cetak == '') {
              $cetak = substr($value, $flag, 3);
            } else {
              $cetak = substr($value, $flag, 3) . '.' . $cetak;
            }
          }
          break;
        case 1:
         while ($flag >= 3) {
            $flag = $flag - 3;
            if ($cetak == '') {
              $cetak = substr($value, $flag, 3);
            } else {
              $cetak = substr($value, $flag, 3) . '.' . $cetak;
            }
          }
          $cetak = substr($value, 0, 1) . '.' .$cetak;
          break;
        case 2:
          while ($flag >= 3) {
            $flag = $flag - 3;
            if ($cetak == '') {
              $cetak = substr($value, $flag, 3);
            } else {
              $cetak = substr($value, $flag, 3) . '.' . $cetak;
            }
          }
          $cetak = substr($value, 0, 2) . '.' .$cetak;
          break;
        default:
          break;
      }
      return $symbol.' '.$cetak.$endpoint;
    } else {
      return $symbol.' '.$value.$endpoint;
    }
  }

}