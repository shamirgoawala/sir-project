<html>

<head><title>Out Product Listing Project edited1</title></head>

<body>

<h3>Some Extraordinary Products Listing:</h3>
<ol>
<?php
	$json = file_get_contents("http://product-service");
	$obj = json_decode($json);

	$products = $obj->products;

	foreach ($products as $product){
		echo "<li>$product</li>";
	}
?>
</ol>
</body>
</html>
