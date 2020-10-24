<?php
// The following lines of code were taken from the stackflow.
$searchErr = "";
$search = @$_POST["fcountry"];
$location = array ("Italy"=>"Rome, Varenna, Milan", "Belgium"=> "Brussels, Brugges, Ghet", 
        "France" => "Paris, Versailles, Toulosse", "Ireland"=>"Dublin, Cork, Galway","Spain"=>"Mallorca, Minorca, Canarias", 
        "Sweden"=>"Stockholm, Vaxjö, Malmö", "Englad"=>"London, Liverpool, Salisbury", 
      "Hungary"=>"Budapest", "Austria" => "Vienna and Hallstatt", "Poland"=>"Krakov and Zakopone");
