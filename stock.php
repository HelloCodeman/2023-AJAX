<?php
$json=file_get_contents('FMSRFK_ALL.json');
$stocks=json_decode($json);
/* echo "<pre>";
print_r($stocks);
echo "</pre>"; */
echo json_encode($stocks);

// commit
// 使用axios來實現ajax的功能