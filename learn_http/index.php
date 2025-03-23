
<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo "请使用POST哦";
    exit;
}

if (!isset($_SERVER['X-Query'])) {
    echo "请设置HTTP Header X-Query";
    exit;
}

$xQueryValue = $_SERVER['X-Query'];
if ($xQueryValue !== "flag") {
    echo "你想要的不是flag吗？";
    exit;
}

header('X-Res: flag{test_flag}');

echo "flag在哪里呢？";
