<?php include 'include/header.php'?>
<!--include find my city in the code  -->
<?php include('variable.php'); ?>
<body>
<!-- The following lines of code were taken from the web development book. -->    
<form action="" method="post" novalidate>       
Choose the country and see which cities were visited: <input type="text" name="fcountry" class="form-control">
 <input type="submit">
</form>
<!-- The following lines of code were taken from the stackflow. -->   
<?php
if (array_key_exists($search, $location)) {
    echo $location[$search];
} else {
    if($search != '')
    {
    echo '<script>alert("Country not found!")</script>'; 
    }
}
?>
</body>
<?php require 'include/footer.php'?>