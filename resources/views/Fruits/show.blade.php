<?php
/**
 * Created by PhpStorm.
 * User: vinny
 * Date: 3/21/18
 * Time: 9:54 AM
 */
?>
<!Doctype html>
<html lang="en">
<head>
    <title> Show </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>
<body>
<div class="container">
<centre>
<h2> {{$fruit['fruit_name']}} Details </h2>
            <p> Fruit Name: {{$fruit['fruit_name']}} </p>
            <p> Quantity:  {{$fruit['quantity']}} </p>
            <p> Price:  {{$fruit['price']}} </p>
            <p> Discount:  {{$fruit['discount']}} </p>
</centre>
</div>
</body>
</html>
