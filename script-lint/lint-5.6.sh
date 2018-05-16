#!/bin/bash

find -name '*.php' -exec /opt/php-5.6.36/sapi/cli/php -l {} \; |grep -v "No syntax errors detected in"


