<?php

	require 'vendor/autoload.php';

	use Guzzle\Http\Client;
	use Guzzle\Http\Message\Request;

	require 'func.php';

/*----------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 * Licensed under the MIT License. See LICENSE in the project root for license information.
 *---------------------------------------------------------------------------------------*/

function sayHello($name)
{
	echo "Hello $name!";
}

?>

<html>

<head>
	<title>هنا البحرين:: المطراش</title>
</head>

<body>
	<?php


	echo call_rss_list();

	?>
</body>

</html>