#/!bin/bash

mysql -u root -proot --force <<EOF 2>>script/mysql.err  # connect to mysql (EOF is used to enter multiple requests on mysql simultaneously on standard input, while EOF isn't read)
DROP DATABASE IF EXISTS ocs_test_jenkins; # drop the database test before creating it
CREATE DATABASE ocs_test_jenkins; # create empty database for test
USE ocs_test_jenkins; # switch on this database
source files/ocsbase.sql; # import of ocs base
EOF
