<html>
<head>
<title>Order Results</title>
<link rel = "stylesheet" type = "text/css" href = "style1.css"/>
</head>
<body>
<?php
$firstName = ($_POST['first_name']);
$lastName = ($_POST['last_name']);
$banana = ($_POST['banana']);
$strawberry = ($_POST['strawberry']);
$kiwi = ($_POST['kiwi']);
$salesTax = .08;
$subTotal = 0.0;
$totalTax = 0.0;
$grandTotal = 0.0;
$bananaTotal = 0.0;
$strawberryTotal = 0.0;
$kiwiTotal = 0.0;
$bananaPrice = 0.39;
$strawberryPrice = 2.50;
$kiwiPrice = 2.65;

if (empty($_POST['first_name']) || empty($_POST['last_name']))
     {
 	echo " <h1> You must enter a valid first and last name. Please return to previous page
 	       and try again. </h1>";
 	  }
else
     {
		echo '<h1>Thank you '.$firstName.' '.$lastName.' for your order</h1>';

		//calculate total prices pre-tax
		$bananaTotal = $banana * $bananaPrice;

		$strawberryTotal = $strawberry * $strawberryPrice;

		$kiwiTotal = $kiwi * $kiwiPrice;

		$subTotal = $bananaTotal + $strawberryTotal + $kiwiTotal;

		$totalTax = $subTotal * $salesTax;

		$grandTotal = $subTotal + $totalTax;//calculate total price with tax


		echo '<table border="1" align="center" bgcolor="#FFFF00">';
		echo '<thead>';
		echo '<tr>';
		echo '<th width="200">Fruit</th><th>Amount</th><th width="100">Price</th>';
		echo '</tr>';
		echo '<tr>';
		echo '<td align="center">Banana</td>';
		echo '<td align="center">'.$banana.'</td>';
		printf ('<td align="right">$'."%.2f",$bananaTotal.'</td>');//format output to 2 decimal places
		echo '</tr>';
		echo '<tr>';
		echo '<td align="center">Strawberry</td>';
		echo '<td align="center">'.$strawberry.'</td>';
		printf ('<td align="right">$'."%.2f",$strawberryTotal.'</td>');
		echo '</tr>';
		echo '<tr>';
		echo '<td align="center">Kiwi</td>';
		echo '<td align="center">'.$kiwi.'</td>';
		printf ('<td align="right">$'."%.2f",$kiwiTotal.'</td>');
		echo '</tr>';
		echo '<tfoot>';
		echo '<tr>';
		echo '<th align="right" colspan="2">Subtotal</th>';
		printf ('<th align="right">$'."%.2f",$subTotal.'</th>');
		echo '</tr>';
		echo '<tr>';
		echo '<th align="right" colspan="2">Grandtotal</th>';
		printf ('<th align="right">$'."%.2f",$grandTotal.'</th>');
		echo '</tr>';
		echo '</tfoot>';
		echo '</table>';
	}
?>
</body>
</html>