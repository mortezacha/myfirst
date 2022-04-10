<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script>
        function myFunc(id){
            // alert('m'+id);
            var a=document.getElementById(id).value;
            var b=document.getElementById('n'+id).value;
            var z = a*b;
            document.getElementById('out'+id).value = z;
        }
    </script>
</head>
<body>
<?php for ($i=0;$i<=5;$i++){
 ?>
    <input type="text" id="<?php echo $i + 1; ?>" class="MetroBtn" onkeyup="myFunc(this.id);">
    <input type="text" id="n<?php echo $i + 1; ?>" class="MetroBtn">
    <input id="out<?php echo $i + 1; ?>" type="text" readonly>
    <br>
   <?php
}
?>

<!--<input type="text" id="2" class="MetroBtn" onkeyup="myFunc(this.id);">-->
<!--<input type="text" id="3" class="MetroBtn" onkeyup="myFunc(this.id);">-->
<!--<input type="text" id="4" class="MetroBtn" onkeyup="myFunc(this.id);">-->

</body>
</html>


<?php
