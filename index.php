<?php
// Submit a request to the API endpoint.
$randomUserJSONString = file_get_contents('https://callook.info/W1AW/json');
// Convert the response to a PHP object.
$randomUserObject = json_decode($randomUserJSONString);
// Collect the first user in the results array.
$randomUser = $randomUserObject;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CallLook.info API PHP Test</title>
</head>

<body>
    <h1>Listing API PHP Test</h1>
    <h2>Information</h2>
    <dl>
        <dt>Status: </dt>
        <dd><?php echo $randomUser->status; ?></dd>
        <dt>Type: </dt>
        <dd><?php echo $randomUser->type; ?></dd>
        <dt>Current: </dt>
        <dd><?php echo $randomUser->name->callsign; ?></dd>
        <dt>Address: </dt>
        <dd><?php echo $randomUser->address->line1; ?></dd>
        <dd><?php echo $randomUser->address->line2; ?></dd>
        <dt>Trustee: </dt>
        <dd><?php echo $randomUser->trustee->callsign; ?></dd>
        <dd><?php echo $randomUser->trustee->name; ?></dd>


    </dl>
</body>

</html>