<?php
/**
 * Created by PhpStorm.
 * User: hungnv
 * Date: 7/29/2017
 * Time: 11:45
 */
print_r($_FILES);
//print_r($_POST);
//print_r("fdsfds");

move_uploaded_file($_FILES['file']['tmp_name'],"hello.docx");

//file_put_contents("test.docx",base64_decode($_POST['file']));


