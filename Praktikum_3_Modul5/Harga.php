<!DOCTYPE html>
<html>
<head>

	<title> Perhitungan Harga </title>
</head>
<body>
	<form method="GET" action="">
		
        <label for="nama">Nama</label>
        <label for="Color">Warna</label>
        <input type="text" name="nama"><br>
        

        <select name="Color">

        <option value="black">Hitam</option>

         <option value="Green">Hijau</option>

        <option value="brown">Coklat</option>

       <option value="yellow">Kuning</option>

       <option value="red">Merah<option>

        

        
        
        </select>
        
        <br>
		<input type="submit" name="submit" value="submit">
	
	</form>

    <?php
        if (isset($_GET['submit']))
        {
            
        $a=$_GET['nama'];
        $panjang=strlen($a);
        $b=$_GET['Color'];
        
        function betting ($panjang){
            if($panjang>20){
                return ($panjang*700);
            }elseif($panjang>=11){
                return ($panjang*500);
            }else{
                return ($panjang*300);
            }
        }

 			echo "Nama :"
            echo "<font color='$b'> $a <br>";
            echo "<font color='$b'>Perhitungan Harga untuk nama $a adalah = ".betting($panjang);
        
        }
    ?>

</body>
</html>