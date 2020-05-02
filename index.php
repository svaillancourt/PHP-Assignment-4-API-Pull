<?php
// Submit a request to the API endpoint.
$randomUserJSONString = file_get_contents('http://makeup-api.herokuapp.com/api/v1/products.json');
// Convert the response to a PHP object.
$randomUserObject = json_decode($randomUserJSONString);
// Collect the first user in the results array.
$randomUser = $randomUserObject->results[0];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make Up Listing API PHP Test</title>
</head>

<body>
    <h1>Make Up Listing API PHP Test</h1>
    <pre>
  <h2>Information</h2>
  <dl>
    <dt></dt>
    <dd><img src="<?php echo $randomUser->image_link; ?>"></dd>
    <dt>Brand: </dt>
    <dd><?php echo $randomUser->brand; ?></dd>
    <dt>Product Name: </dt>
    <dd><?php echo $randomUser->name; ?></dd>
    <dt>Cost: </dt>
    <dd><?php echo $randomUser->price; ?></dd>
    <dt>Currency: </dt>
    <dd><?php echo $randomUser->currency; ?></dd>
    <dt>Link: </dt>
    <dd><?php echo $randomUser->product_link; ?></dd>
  </dl>
  </pre>
</body>

</html>