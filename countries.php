<?php include 'include/header.php'?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- The following lines of style code were taken from the w3school. -->
    <style>
        table, th, td {
            border: 1px solid black;
            padding: 8px;
        }
        table {
            table-layout: auto;
            border-collapse: collapse;
            width: 100%;
        }
        table tr:nth-child(even){
            background-color: #fff;
        }
        table tr:nth-child(odd){
            background-color: #eee;
        }
        table, th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: center;
            color: black;
        }
    </style>
</head>
<body>

    <!-- The following lines of code were taken from the web development book. -->
    <table>
        <tr><th><h4>Country</h4></th><th><h4>Cities</h4></th></tr>
        <form action=""></form>
<?php
        $location = array ("Italy"=>"Rome, Varenna, Milan", "Belgium"=> "Brussels, Brugges, Ghet", 
        "France" => "Paris, Versailles, Toulosse", "Ireland"=>"Dublin, Cork, Galway","Spain"=>"Mallorca, Minorca, Canarias", 
        "Sweden"=>"Stockholm, Vaxjö, Malmö", "Englad"=>"London, Liverpool, Salisbury", 
      "Hungary"=>"Budapest", "Austria" => "Vienna and Hallstatt", "Poland"=>"Krakov and Zakopone");
      
        foreach ($location as $key => $item) {
            echo "<tr><td>" . $key . "</td><td>" . $item . "</tr></tr>";
        }    
?>
        </table>
</body>

</html>
<?php require 'include/footer.php'?>