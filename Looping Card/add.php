<?php 
	require_once('db_connection.php');

	if(isset($_POST['submit'])){
		$Name = $_POST['name']; 
		$Quantity = $_POST['quantity'];
		$Price = $_POST['price'];
		$Description = $_POST['description'];
		
		$Sql = "INSERT INTO produk(Name,Quantity,Price,Description) VALUES('$Name','$Quantity','$Price','$Description')"; // memasukkan
		
		if($stmt = mysqli_query($link, $Sql)){ //Kalau $sql jadi query, atau ada yg salah di / mengecek fungsi sql udah berjalan atau ngak sesuai tipe datanya dibelkanga
			/* mysqli_stmt_bind_param($stmt, "siis", $param_Name, $param_Quantity, $param_Price, $param_Description);
            $param_Name = $Name;
            $param_Quantity = $Quantity;
			$param_Price = $Price;
            $param_Description = $Description;
            if(mysqli_stmt_execute($stmt)){
				echo "Berhasil";
            } */
			echo "Berhasil";
		}
        else{
            echo "GAGAL";
        }
	}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Full</title>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        
        <script src="http://kit.fontawesome.com/a076d05399.js"></script>
        <style>
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
			body{
                height: 50%;
                display: flex;
                align-items: center;
                font-family: sans-serif;
                justify-content: center;
                background: #34ad44 repeat;
                color: gray;
				
            }
			.container{
                display: grid;
                position: relative;
                height: auto;
                width: 400px;
                background: white;
                padding: 15px 30px 35px 30px;
                box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
                margin: 6rem auto 8.1rem auto;
            }
			h2{
                padding: auto;
                text-align:center;
                margin-bottom: 35px;
                margin-top: 5px;
                font-family: cursive;
            }
			label{
                color: limegreen;
                text-shadow: 0 1px 0 #fff;
                font-size: 14px;
                /* font-weight: bold; */
            }
			input[type=submit]{
				margin-top:-10px;
                font-size: 16px;
                color: #4E4D4B;
                font-weight: bold;
                cursor: pointer;
                width: 100%;
                padding: 5px 0;
                outline:none;
                box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.45);
            }
			input[type=text]{
                width: 100%;
                padding: 5px;
                /* margin-bottom: 25px; */
                margin-top: 5px;
                border: 2px solid #ccc;
                color: black;
                font-size: 12px;
            }
			textarea:focus{
                background: #9b59b6; 
                color: black; 
                font-weight: bold;
				border: 1px solid limegreen;
            }
			textarea{
                border:1px solid #ccc;
                /* margin-bottom: 30px; */
                margin-top: 5px;
                color: black;
                font-size: 4px;
                font-family: black:
            }
			.input-field label textarea{     /*Membuat user sama passnya berada didalam field*/
                pointer-events: none;
                top: 50%;
                transform: translateY(-10%);
            }
			.input-field input{
                border: 1px solid silver;
                outline: none;
                transition: .8s;                
                background: rgba(235, 233, 233, 0.87);
            }
			input:focus{
                border: 1px solid limegreen;
            }
			input:focus~label, input:valid~label{
                transform: translateY(-50px);
                background: white;
                color:lawngreen;
            }
			.input-field .form-control{
                background: rgba(235, 233, 233, 0.87);
                border: 1px solid silver;
                outline: none;
                transition: .8s;
            }
        </style>
    </head>
    <body>
		<form action="add.php" method="post" class="main">
			<div class="container">
				<div class="input-field">
				<h2 class=".text-black-100 text-success"><b>Store</b></h2>
					<label for="name">Name</label><br>
					<input type="text" id="name" name="name" value=" "><br><br>
				</div>
			
				<div class="input-field">
					<label for="quantity">Quantity</label><br>
					<input type="text" id="quantity" name="quantity" value=" "><br><br>
				</div>
				
				<div class="input-field">
					<label for="price">Price</label><br>
					<input type="text" id="price" name="price" value=" "><br><br>
				</div>
				
				<div class="input-field">
					<label for="exampleFormControlTextarea1">Description</label><br>
					<textarea class="form-control" id="exampleFormControlTextarea1" rows="2" colom="1" type="text" id="description" name="description" value=" "></textarea><br><br>
					<!-- <input type="text" id="description" name="description" value="123"><br><br><br> -->
				</div>

				<div class="input-field">
					<input class="bg-success text-white" type="submit" value="Submit" name="submit">
				</div>
			</div>
		</form>
	</body>
</html>