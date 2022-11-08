<html>
    <head>
        <meta charset="utf-8"/>
        <title>Form örnenği</title>
    </head>
    <body>
            <?php
            if (isset($_GET['sayi1'])) {
                $sayi1 = $_GET['sayi1'];
                $sayi2 = $_GET['sayi2'];
            } else {
                $sayi1 = 0;
                $sayi2 = 0;
            }
        ?>
        <form>
            sayı 1:
            <input type="text" name="sayi1" value= "<?php echo $sayi1; ?>" /> <br/>
            sayı 2:
            <input type="text" name="sayi2" value= "<?php echo $sayi2; ?>" /> <br/>
            <input type="submit" value="Topla"/>
        </form>
        <?php
            echo $sayi1 + $sayi2;
        ?>
            <br/>
    </body>
</html>