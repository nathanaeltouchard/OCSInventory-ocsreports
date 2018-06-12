echo "<h2>Existing tests on updates files</h2>"

bash script/mysql_database_test.sh

update_files=`find files/update/ -name "*.sql"|sort`

for file in $update_files
do
	echo "<b>$file : </b>"
	mysql --login-path=jenkins -D ocs_check_SQL_jenkins --verbose < $file
done
