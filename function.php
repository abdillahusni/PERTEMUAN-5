<?php
function FormatRupiah($angka)
{
    $rupiah = "Rp. " . number_format($angka, "2", ",", ".");
    return $rupiah;
}
