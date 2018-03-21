<?php

namespace App\Http\Controllers;

use App\Fruit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FruitController extends Controller
{

   public function create()
   {
       return view('Fruits.create');
   }

   public function store(Request $request){

       $validator = Validator::make($request->all(), [
           'fruit_name' => 'required',
           'quantity' => 'required',
           'price' => 'required',
           'discount' => 'required',
       ]);
       if ($validator->fails()){
           return redirect('Fruits/create')
               ->withErrors($validator)
               ->withInput();
       }

       $fruit = new Fruit();
       $fruit->fruit_name = $request->get('fruit_name');
       $fruit->quantity = $request->get('quantity');
       $fruit->price = $request->get('price');
       $fruit->discount = $request->get('discount');

       $fruit->save();
       //Fruit::create($fruit);
       return redirect('Fruits')->with('Success', 'fruit has been added!!');

   }

   public function edit($id)
   {
       $fruit = Fruit::find($id);
       return view('Fruits.edit', compact('fruit','id'));
   }

   public function update(Request $request, $id)
   {
       $fruit=Fruit::find($id);
   $validator = Validator::make($request->all(), [
       'fruit_name' => 'required',
       'quantity' => 'required',
       'price' => 'required',
       'discount' => 'required',
   ]);
   if ($validator->fails()){
       return redirect('Fruits/edit')
           ->withErrors($validator)
           ->withInput();
   }
   $fruit->fruit_name = $request->get('fruit_name');
   $fruit->quantity = $request->get('quantity');
   $fruit->price = $request->get('price');
   $fruit->discount = $request->get('discount');

   $fruit->save();

   return redirect('Fruits')->with('success', 'Fruit details updated!!');
   }

   public function index()
   {
       $fruits = Fruit::all()->toArray();
       return view('Fruits.index', compact('fruits'));
   }

    public function destroy($id)
    {
        $fruit = Fruit::find($id);

        $fruit->delete();

        return redirect('Fruits')->with('success', 'Fruit deleted!!');
    }
    public function show($id){
$fruit = Fruit::find($id);
return view('Fruits.show', compact('fruit' ));
    }
}
