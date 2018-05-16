#!/bin/bash

find -name '*.php' -exec /opt/php-7.0.30/sapi/cli/php -l {} \; |grep -v "No syntax errors detected in"

