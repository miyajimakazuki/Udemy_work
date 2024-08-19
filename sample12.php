<?php
date_default_timezone_set('Asia/Tokyo');
$time = date('G');
?>
<?php if ($time < 11): ?>
    <p>※ 営業時間外です</p>
<?php else: ?>
    <p>ようこそ</p>
<?php endif; ?>
<?php
$s = '';
if ($s):
    echo '$sには文字が入っています';
endif;
?>
<?php
$x = 0;
if (!$x):
    echo '$xは0ではです';
endif;
?>


