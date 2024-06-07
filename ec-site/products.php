<?php
//$productA =[
//    "name" => "アボカド",
//    "price" => "230",
//    "image"=> "./images/image_1.jpg"
//];
//
//$productB =[
//    "name" => "オレンジ",
//    "price" => "200",
//    "image"=> "./images/image_2.jpg"
//];
//
//$productC =[
//    "name" => "レモン",
//    "price" => "180",
//    "image"=> "./images/image_3.jpg"
//];
//
//$productD =[
//    "name" => "パイナップル",
//    "price" => "160",
//    "image"=> "./images/image_4.jpg"
//];

require_once 'classes/product.php';
$products =[
    new Product("avocado", "アボカド", 230, "./images/image_1.jpg"),
    new Product("orange", "オレンジ", 200, "./images/image_2.jpg"),
    new Product("lemon", "レモン", 180, "./images/image_3.jpg"),
    new Product("pineapple", "パイナップル", 160, "./images/image_4.jpg")
    //↓連想配列
    //[
    //    "id" => "avocado",
    //    "name" => "アボカド",
    //    "price" => "230",
    //    "image"=> "./images/image_1.jpg"],
    //[
    //    "id" => "orange",
    //    "name" => "オレンジ",
    //    "price" => "200",
    //    "image"=> "./images/image_2.jpg"],
    //[
    //    "id" => "lemon",
    //    "name" => "レモン",
    //    "price" => "180",
    //    "image"=> "./images/image_3.jpg"],
    //[
    //    "id" => "pineapple",
    //    "name" => "パイナップル",
    //    "price" => "160",
    //    "image"=> "./images/image_4.jpg"]
];?>