#!/bin/bash

find -name '*.php' -exec /opt/php-5.4.24/sapi/cli/php -l {} \; |grep -v "No syntax errors detected in"
