<?php
header('Content-Disposition: attachment; filename="flag.tar.gz"');
readfile('/var/www/html/flag.tar.gz');
exit;
