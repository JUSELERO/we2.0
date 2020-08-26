<?php
$permitidos=array("application/pdf","application/msword","application/octet-stream","application/x-zip","application/vnd.opexmlformats-officedocument.wordprocessingml.document"."image/jpeg");
print_r($_FILES)
foreach($_FILES as $adjunto =>$metadata){
    if($metadata['name']!=""){
        $conteo=0;
        foreach($permitidos as $indice=>$valor){
            if ($metadata['type']==$valor){
                $conteo++;
            }
        }
    if($conteo==0){
        echo $error ="Error:no se permiten archivos de tipo[".$metadata['type']."]<br><br>;
        no fue transferido</h3><br><br>";

    }

    }
}
?>