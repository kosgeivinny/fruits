<?php
/**
 * Created by PhpStorm.
 * User: vinny
 * Date: 3/15/18
 * Time: 12:27 PM
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title> Home </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container">
    <table class="table table-striped">
        <thead>
        <tr>
            <th> Fruit Name </th>
            <th> Quantity </th>
            <th> Price </th>
            <th> Discount </th>
            <th colspan="2"> Action </th>
        </tr>
        </thead>
        <tbody>
        @foreach($fruits as $fruit)
            <tr>
            <td>{{ $fruit['fruit_name'] }}</td>
            <td>{{ $fruit['quantity'] }}</td>
            <td>{{ $fruit['price'] }}</td>
            <td>{{ $fruit['discount'] }}</td>

                <td><a href="{{action('FruitController@show', $fruit['id'])}}" class="btn btn-warning"> Show </a></td>

                <td><a href="{{action('FruitController@edit', $fruit['id'])}}" class="btn btn-warning"> Edit </a></td>
            <td>
                <form method="post" action="{{action('FruitController@destroy', $fruit['id'])}}">
                  {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-danger"> Delete </button>
                </form></td>

            </tr>
        @endforeach

        </tbody>
    </table>
</div>
</body>
</html>
