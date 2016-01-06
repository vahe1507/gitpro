<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
  table{
      border-collapse: collapse;
  }
        td{
            padding: 4px 8px;
        }
    </style>
</head>
<body>
<table border="1">

<?php
$br = "<br>";
$tr_open = "<tr><td>git</td><td>";
$tr_middle = "</td><td>";
$tr_close = "</td></tr>";
echo "$tr_open  init  $tr_middle    $tr_close";
echo "$tr_open  status  $tr_middle    $tr_close";
echo "$tr_open  config --help  $tr_middle  [verb] --help $tr_close";

echo "$tr_open add index.php   $tr_middle add [fileName or dirName]  $tr_close";
echo "$tr_open add -A   $tr_middle add [all]  $tr_close";
echo "$tr_open commit -m 'my first commit'   $tr_middle commit -m [commit msg]  $tr_close";
echo "$tr_open commit --a -m 'my first commit'   $tr_middle commit -a -m [commit msg]  $tr_middle will commit all tracked file no need to git add -A $tr_close";
echo "$tr_open clone https://github.com/vahe1507/gitpro.git   $tr_middle clone https://github.com/[userName]/[repoName].git  $tr_close";
echo "$tr_open clone https://github.com/vahe1507/gitpro.git myFolder  $tr_middle clone https://github.com/[userName]/[repoName].git  [a folder name to clone the project in] $tr_close";
echo "$tr_open diff  $tr_middle only changes that are still unstaged $tr_close";
echo "$tr_open diff  --staged  $tr_middle diff --cached  $tr_middle identical  $tr_close";
echo "$tr_open rm about.php  $tr_middle rm [fileName or dirName]  $tr_middle will remove and delete the file after commiting and pushing  $tr_close";
echo "$tr_open rm about.php -f  $tr_middle rm [fileName or dirName] -f $tr_middle you force to remove  $tr_close";
echo "$tr_open rm --cached README  $tr_middle rm --cached [fileName or dirName] $tr_middle it will not delete the file from your working dir  $tr_close";
echo "$tr_open mv file_from file_to  $tr_middle mv [originalFileName] [newName] $tr_middle to rename a file  $tr_close";


?>
</table>
</body>
</html>