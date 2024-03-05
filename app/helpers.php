<?php

namespace App;

// app/helpers.php

function rupiah($value)
{
  if (is_numeric($value)) {
    return 'Rp ' . number_format($value, 0, ',', '.');
  }
  return $value;
}
