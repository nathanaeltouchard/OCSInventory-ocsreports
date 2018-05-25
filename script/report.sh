#!/bin/sh

#Remove file if exist
file="report.html"

if [ -f $file ] ; then
	rm $file
fi

touch $file

#Create file
echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" >
    <head>
      <meta content="text/html; charset=utf-8" />
      <link href="style_report.css" rel="stylesheet" type"text/css">
    </head>
    <body>
       <h1>Résultats d<span>&#39;</span>analyse PHP Lint</h1>
        <h2>lint 5.4 :</h2>
         <p>' >> $file

bash script/lint-5.4.sh >> $file

echo '   </p>
        <h2>lint 5.6 :</h2>
	 <p>' >> $file

bash script/lint-5.6.sh >> $file

echo '   </p>
        <h2>lint 7.0 :</h2>
         <p>' >> $file

bash script/lint-7.0.sh >> $file

echo '   </p>
      <h1>Résultats d<span>&#39;</span>analyse MySQL</h1>
       <h2>Requetes SQL</h2>
	<p>' >> $file

bash script/check_request.sh >> $file

echo '  </p>

    </body>
</html>' >> $file

