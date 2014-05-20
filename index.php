<html>
<head>
    <title>G0</title>
</head>
<body>
<pre>
<?php
/**
 * Created by PhpStorm.
 * User: mielke
 * Date: 20.05.14
 * Time: 14:57
 */
require_once 'db.php';

$db = new mysqli($DB_HOST,$DB_USER,$DB_PASS,$DB_NAME);

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$statement = $db->prepare("SELECT * FROM example_autoincrement");

$result = $statement->execute();
/* bind result variables */
$statement->bind_result($id, $data);

/* fetch values */
while ($statement->fetch()) {
    printf ("%s (%s)\n", $id, $data);
}
$statement->free_result();
/* close statement */
$statement->close();

?>
</pre>
</body>
</html>