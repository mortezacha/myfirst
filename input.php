<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <script>

        function func(id) {
            var percent = parseInt(document.getElementById(id).value);
            var ini = parseInt(document.getElementById('val' + id).value);
            // var  z = ini + (ini*(percent/100));
            var z = (ini * (100 + percent)) / 100;
            if (isNaN(z)) {
                return 0;
            }
            document.getElementById('out' + id).value = z;
        }
        function totalfunc(id) {
            // str = 'total';
            // if (id.normalize() === str.normalize()){
            //     alert(id);
            // }else {
            //
            //     alert("not equal");
            // }
            var totalpercent = parseInt(document.getElementById(id).value);
            for (let i = 0; i <=3; i++) {
                var ini = parseInt(document.getElementById('val' + i).value);
                var z = (ini[i] * (100 + totalpercent)) / 100;
                document.getElementById('out' + i).value = z;
            }


        }
    </script>
</head>
<body>
<div class="body ">
    <div class="container">
        <form action="post">
            <table>
                <tr>
                    <th>نام</th>
                    <th>مقدار</th>
                    <th>درصد</th>
                    <th>خروجی</th>
                </tr>

                <?php
                for ($i=1;$i<=3;$i++) {
                    ?>

                    <tr>
                        <td><input class="inp" id="name<?php echo $i;?>" type="text"></td>
                        <td><input class="inp" id="val<?php echo $i;?>" type="text"></td>
                        <td><input class="inp" id="<?php echo $i;?>" type="text" onkeyup="func(this.id);"></td>
                        <td><input class="inp" id="out<?php echo $i;?>" type="text" readonly></td>
                    </tr>
                    <?php
                }
                ?>
            </table>
            <input class="btn" id="btn1" type="button" value="sendToDB">
            <input class="inp" id="total" type="text" onkeyup="totalfunc(this.id);">
        </form>
    </div>
</div>

</body>

</html>

<?php
