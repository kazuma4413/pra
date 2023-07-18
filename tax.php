<?php
$input_number=$argv[1];
class tax{
    public $motone=100;
     function taxon(){
         $zeikomi=$motone*1.08;
         echo "税込み$zeikomi円" .PHP_EOL;
     }
    function taxoff(){
        $zeinuki=$motone/1.08;
        echo "税抜き$zeinuki円".PHP_EOL;
    }
  
}
$nedan_zeikomi= New tax();
$nedan_zeinuki= New tax();
$nedan_zeikomi->taxon();
$nedan_zeinuki->taxoff();
?>