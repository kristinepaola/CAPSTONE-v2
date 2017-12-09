<!DOCTYPE html>

<html>
	<h1>
		<title> Welcome To 2nd Page</title>
	</h1>
<body>
<center>
	<h1>

		<?php 

			$x = $_POST['num1'];
			$y = $_POST['num2'];

			if($x > $y){
				$z = $x;
				$x = $y;
				$y = $z;
			}

			while ($x < $y) {
				
				$flag = 0;

				for($temp=2; $temp<=$x/2; ++$temp){
					
					if ($x%$temp==0) {
							$flag = 1;
					}
				}

				if ($flag==0) {
						echo "$x"."<br>";
				} 

				++$x;
			}


		?>
	</h1>


</center>
</body>
</html>
