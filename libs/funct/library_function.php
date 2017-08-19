<?php include "config/koneksi.php";
//setting tanggal dan format waktu indonesia datetime
date_default_timezone_set('Asia/Jakarta');
//fungsi date tanggal sekarang
function datenow($tanggal_now){
   $tanggal_now   = date('Y-m-d');
   $konvert_date  = substr($tanggal_now, 8, 2);
   $konvert_month = getbulan(substr($tanggal_now, 5, 2));
   $konvert_year  = substr($tanggal_now, 0, 4);
   $fix_date = $konvert_date.' '.$konvert_month.' '.$konvert_year;
   return $fix_date;
}
//remove bad url to -
function urlCleaner($str){
    $cleanNow = preg_replace("/\W|_/","-",$str);
    return $cleanNow;

}
//remove all tags 
function removeStriptagS($data){
    $cleanTags = strip_tags(html_entity_decode($data,ENT_QUOTES,"ISO-8859-1"));
    return $cleanTags;
}
//function leght character
function lengthTrue($val){
    $karakter = strlen($val);
    return $karakter;
}
//cut characters
function potongKarakter($var){
    $cutcharacter = substr($var, 0,200);
    return $cutcharacter;
}
//fungsi get tanggal indo
function tgl_indo($tgl){
    $tanggal = substr($tgl,8,2);
    $bulan   = getBulan(substr($tgl,5,2));
    $tahun   = substr($tgl,0,4);
    return $tanggal.' '.$bulan.' '.$tahun;
}
function url_encode($string){
    return urlencode(utf8_encode($string));
}
function url_decode($string){
    return utf8_decode(urldecode($string));
}
//fungsi get bulan
function getBulan($bln){
    switch ($bln){
        case 1:
            return "Jan";
        break;
        case 2:
            return "Feb";
        break;
        case 3:
            return "Mar";
        break;
        case 4:
            return "April";
        break;
        case 5:
            return "Mei";
        break;
        case 6:
            return "Juni";
        break;
        case 7:
            return "Juli";
        break;
        case 8:
            return "August";
        break;
        case 9:
            return "Sept";
        break;
        case 10:
            return "Okto";
        break;
        case 11:
            return "Nov";
        break;
        case 12:
            return "Des";
    break;
    }
}

function cleanSanitazeXss($string) {
   $string = str_replace(' ', ' ', $string); // Replaces all spaces with hyphens.
   return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
}

function cleanUrlXssAttack($data){
    $data = rawurldecode($data);
    return filter_var($data, FILTER_SANITIZE_SPECIAL_CHARS);
}

?>
<script type="text/javascript">
//these function is blocked a text just to allowed input number
function isNumberKeyTrue(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 65)
          return false;
        return true;
    }
</script>
