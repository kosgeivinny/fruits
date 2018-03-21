<?php
/**
 * Created by PhpStorm.
 * User: vinny
 * Date: 3/15/18
 * Time: 12:27 PM
 */
?>
<!Doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title> Fruits </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container">
    <form method="post" action="{{url('/Fruits/create')}}">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <br>
        <h2> Add Fruits here!!</h2>
        <br>
        <div class="row">
            <div class="col-sm-1">
                <label> Fruit Name: </label>
            </div>
            <div class="col-sm-1">
                <input type="text" name="fruit_name">
            </div>
        </div>
        <br />
        <div class="row">
            <div class="col-sm-1">
                <label> Quantity </label>
            </div>
            <div class="col-sm-1">
                <input type="text" name="quantity">
            </div>
        </div>
        <br />
        <div class="row">
            <div class="col-sm-1">
                <label> Price </label>
            </div>
            <div class="col-sm-1">
                <input type="int" name="price">
            </div>
        </div>
        <br />
        <div class="row">
            <div class="col-sm-1">
                <label> Discount </label>
            </div>
            <div class="col-sm-1">
                <input type="int" name="discount">
            </div>
        </div>
        <br />
        <div class="row">
            <div class="col-sm-2">
                <button type="submit" class="btn btn-primary"> Submit </button>
            </div>
        </div>
    </form>
</div>
</body>
</html>
