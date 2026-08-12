cat > Response.php <<'PHP'
<?php
// simple logger: append POST data to response.txt
$file = __DIR__ . '/response.txt';
$time = date('Y-m-d H:i:s');
$data = [$time, $_SERVER['REMOTE_ADDR'], $_SERVER['HTTP_USER_AGENT'], $_POST];
file_put_contents($file, print_r($data, true) . "\n---\n", FILE_APPEND | LOCK_EX);
echo "Logged\n";
?>
PHP
chmod 664 haggai.txt || touch response.txt && chmod 664 Haggai.txt
