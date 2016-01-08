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
echo "$tr_open log  $tr_middle  $tr_middle to see the history of commits  $tr_close";
echo "$tr_open log  -p $tr_middle log -p -[any number]  $tr_middle to see the history of commits and what was commited [optional how many] $tr_close";
echo "$tr_open log  --stat $tr_middle log [options] $tr_middle to see the history of commits and which files where commited $tr_close";
echo "$tr_open log -Sfunction_name $tr_middle  $tr_middle to see the history of commits and which files where commited that contains function_name $tr_close";
echo "$tr_open commit --amend $tr_middle commit - m [msg] ; add [fileName]; git commit --amend   $tr_middle will add the fileName to the last commit , but before push  $tr_close";
echo "$tr_open reset HEAD CONTRIBUTING.md $tr_middle reset HEAD [fileName]$tr_middle to unstage a file $tr_close";
echo "$tr_open checkout -- CONTRIBUTING.md $tr_middle checkout -- [fileName]$tr_middle undo changes [dont use it ]$tr_close";
echo "$tr_open remote $tr_middle remote -v$tr_middle $tr_close";
echo "$tr_open remote add newRe https://github.com/vahe1507/newtut.git $tr_middle remote add [shortName] [url] $tr_middle now you can use shortName instead of url $tr_close";
echo "$tr_open remote rename newRe anotherName $tr_middle remote rename [oldtName] [newName] $tr_middle rename  shortName  $tr_close";
echo "$tr_open remote rm anotherName $tr_middle remote rm [remotetName]  $tr_middle remove    $tr_close";
echo "$tr_open fetch [url] $tr_middle fetch [shortName] [url] $tr_middle you can use shortName instead of url $tr_close";
echo "$tr_open pull $tr_middle  $tr_middle fetch and merge $tr_close";
echo "$tr_open push origin master $tr_middle push [remote-name] [branchName] $tr_middle you have to pull before you push $tr_close";
echo "$tr_open branch testing $tr_middle branch [branchName] $tr_middle create a new branch $tr_close";
echo "$tr_open checkout testing $tr_middle checkout [branchName] $tr_middle switch to another branch, moves the HEAD to [banchName] $tr_close";
echo "$tr_open git push --set-upstream origin secondBranch $tr_middle $tr_middle  $tr_close";
echo "$tr_open checkout -b iss53 $tr_middle checkout -b [branchName]$tr_middle creates a branch and checkout to it  $tr_close";
echo "$tr_open merge master $tr_middle $tr_middle to update your branch from master $tr_close";
echo "$tr_open merge testing $tr_middle merge [branchName] $tr_middle to add your branch to master $tr_close";
echo "$tr_open branch -d testing $tr_middle branch -d [branchName] $tr_middle to delete your branch $tr_close";
echo "$tr_open branch -D testing $tr_middle branch -D [branchName] $tr_middle Forcing to delete your branch $tr_close";
echo "$tr_open branch $tr_middle branch -v $tr_middle list all branches $tr_close";
echo "$tr_open branch --merged $tr_middle branch --no-merged $tr_middle  $tr_close";
echo "$tr_open fetch origin $tr_middle $tr_middle to update your local from remote  $tr_close";






?>
</table>
</body>
</html>