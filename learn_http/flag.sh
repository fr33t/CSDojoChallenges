#!/bin/bash

sed -i "s/flag{test_flag}/$FLAG/" /var/www/html/index.php

export FLAG=not_flag
FLAG=not_flag

rm -f /flag.sh
