<!DOCTYPE html>
<html>
<head>
    <title><?php echo "Kalkulator "; ?></title>
	<link rel="stylesheet" type="text/css" href="tampilan.css">
</head>
<body>
    <?php 
        $hasil = "";
        function hitung($bil1, $bil2, $operator)
        {
            switch($operator)
            {
                case '+':
                    return $bil1 + $bil2;
                    break;

                case '-':
                    return $bil1 - $bil2;
                    break;

                case '*':
                    return $bil1 * $bil2;
                    break;

                case '/':
                    return $bil1 / $bil2;
                    break;
            }   
        }

        if(isset($_POST['submit']))
        {   
            $hasil = hitung($_POST['bil1'], $_POST['bil2'], $_POST['op']);
        }
    ?>
	<div class="kal">
		<h2 class="judul">KALKULATOR</h2>
		<form method="post" >			
			<input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Pertama">
			<input type="text" name="bil2" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Kedua">
			<select class="op" name="op">
				<option value="+">+</option>
				<option value="-">-</option>
				<option value="*">x</option>
				<option value="/">/</option>
			</select>
			<input type="submit" name="submit" value="Hitung" class="tombol">											
		</form>
		<?php if(isset($_POST['submit'])){ ?>
			<input type="text" value="<?php echo $_POST['bil1'].$_POST['op'].$_POST['bil2']; ?> = <?php echo $hasil; ?>" class="bil">
        <?php 
        }
        else{ ?>
			<input type="text" value="<?php echo $hasil; ?>" class="bil">
		<?php } ?>			
	</div>
</body>
</html>