<?php

function db(){
    return new mysqli('localhost','root','','project_php');
}
// table Post 
function selectAllpost(){
    return db()->query("SELECT *FROM post");
}
function selectOnepost($id){
    return db()->query("SELECT * FROM post WHERE post_Id=$id");
}
function deletePost($id){
    db()->query("DELETE FROM post WHERE post_Id= $id");
    header("Location:http://localhost/project_php/index.php?page=book");
}
function updatepost($value){
    $id=$value['postId'];
    $title=$value['title'];
    $image=$value['image'];
    $description=$value['description'];
    $price=$value['price'];
    $date=$value['date'];
    db()->query("UPDATE post SET Title='$title',Image='$image',Description='$description',Price='$price',Date='$date' WHERE post_Id=$id");
    header("Location: http://localhost/project_php/index.php?page=book");
}
function Createpost($value){
    $title=$value['title'];
    $image=$_FILES['image']['name'];
    $description=$value['description'];
    $price=$value['price'];
    $user=$value['user'];
    $category=$value['category'];
    db()->query("INSERT INTO post(Title,Description,Image,Price,User_Id,category_Id) VALUES('$title','$description','$image','$price','$user','$category')");
    header("Location: http://localhost/project_php/index.php?page=book");
}
function searchBypost($title){
    $name = $title['search'];
    return db()->query("SELECT *FROM post WHERE Title LIKE '%$name%'");
};
// End Post//

// table Programm
function selectAllPro(){
    return db()->query("SELECT *FROM programming");
}
function selectOnePro($id){
    return db()->query("SELECT * FROM programming WHERE pro_id = $id");
}
function deletePro($id){
    db()->query("DELETE FROM programming WHERE pro_id = $id");
    header("Location:index.php");
}
function updatePro($value){
    $id = $value['proID'];
    $name = $value['name'];
    $image=$value['image'];
    $description=$value['description'];
    $price=$value['price'];
    $date = $value['date'];
    db()->query("UPDATE programming SET name ='$name', Image='$image',Description='$description',Price='$price',date = '$date' WHERE pro_id = $id");
    header("Location: index.php");
}
function createProgram($value){
    $name = $value['name'];
    $image=$_FILES['image']['name'];
    $description=$value['description'];
    $price=$value['price'];
    db()->query("INSERT INTO programming(name,Image,Description,Price) VALUES('$name','$image','$description','$price')");
    header("Location: index.php");
}

function searchByPro($title){
    $name = $title['search'];
    return db()->query("SELECT *FROM programming WHERE name LIKE '%$name%'");
};
// End programm 

    