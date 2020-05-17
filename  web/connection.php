<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
# parameters for connecting to the "default_schema"
$username = "user";
$password = "user";

$hostspec = "localhost";
$database = "default_schema";

$dbtype = 'mysqli';

# DSN constructed from parameters

$dsn = "$dbtype://$username:$password@$hostspec/$database";

# Establish the connection

$db = DB::connect($dsn);

if (DB::isError($db)) {

    die($db->getMessage());
}
?>
</body>
</html>