<?php
/**
 * Created by PhpStorm.
 * User: vinny
 * Date: 3/18/18
 * Time: 5:17 PM
 */
?>
<!Doctype html>
<html lang="en">
<head>
    <title> Edit </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container">
    <form method="post" action="{{action('FruitController@update', $id)}}">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <br>
        <h2> Edit Fruit Data here! </h2>
        <br>
        <div class="row">
            <div class="col-sm-1">
                <label> Fruit Name: </label>
            </div>
            <div class="col-sm-1">
                <input type="text" name="fruit_name" value="{{$fruit->fruit_name}}">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-1">
                <label> Quantity: </label>
            </div>
            <div class="col-sm-1">
                <input type="text" name="quantity" value="{{$fruit->quantity}}">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-1">
                <label> Price: </label>
            </div>
            <div class="col-sm-1">
                <input type="int" name="price" value="{{$fruit->price}}">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-1">
                <label> Discount: </label>
            </div>
            <div class="col-sm-1">
                <input type="int" name="discount" value="{{$fruit->discount}}">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2">
                <button type="submit" class="btn btn-success"> Update </button>
            </div>
        </div>
    </form>
</div>
</body>
</html>
