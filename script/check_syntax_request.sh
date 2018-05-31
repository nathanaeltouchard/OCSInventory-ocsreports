#!/bin/bash

bash script/mysql_database_test.sh #script which drop if exists in database the test database ocs, and re-create this one with ocs base (more details in script/mysql_database_test.sh)


#This function will check the SQL syntax of the last update files
check_syntax_sql (){

	#Write the GUI_VERSION into a text file
	gui_version=`mysql -u root -proot -D ocs_test_jenkins -e "select TVALUE from config where NAME='GUI_VERSION'"|grep -e "[0-9]"` # version of update
        last_update=`find files/update/ -type f -printf "%f\n" -name "*.sql"|sort|sed '$!d'|sed 's/\.sql//'` # number of the last update commit
	if [ -z $gui_version ]
	then
		echo "ERROR GUI_VERSION NOT ACCESSIBLE IN \`config\` table"
		exit 1
	else
		for file in  `find files/update/ -name "*.sql"|sort|seq -f "files/update/%g.sql" $(($gui_version+1)) $last_update` 
      		do
        	       	echo "$file errors : "
        	       	mysql -u root -proot -D ocs_test_jenkins --force < $file
       		done
	fi
}

check_syntax_sql
