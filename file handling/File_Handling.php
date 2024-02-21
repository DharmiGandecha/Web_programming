<?php

//Opening a file
$myfile=fopen("File.txt");

//Read from a file
$myfile=fopen("File.txt","r");
echo fgets($myfile);

//Writing to a file
$myfile=fopen("File.txt","w");
$contant="hello world";
fwrite($myfile,$contant);

//Closing a file
fclose($myfile);

//Append in file
$myfile=fopen("File.txt","a");
$contant="php Scripting language";
fwrite($myfile,$contant);

//Checking file Existence
if(file_exists("File.txt"))
{
	echo "the file exits.";
}
else
{
	echo "the file does not exits.";
}

//Reading entire file content
$content=file_get_contents("File.txt");
echo $content;

//Writing entire file content
$content="New content to write.";
file_put_contents("File.txt",$content);

//Appending to a file
$new_content="Appended content.";
file_put_contents("File.txt",$new_content,FILE_APPEND);

//Deleting a file
if(unlink("File.php"))
{
	echo "File deleted.";
}
else
{
	echo "Unable to delete the file.";
}
	
?>