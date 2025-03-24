#!/bin/bash

sed -i "s/flag{test_flag}/$FLAG/" /flag

ollama serve&

export FLAG=not_flag
FLAG=not_flag

rm -f /flag.sh
