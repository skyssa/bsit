<?php

namespace App\Http\Controllers\Service;

use App\Models\useritem;
use Illuminate\Http\Request;

class UserItemService
{
    public static function getAllItem()
    {
        return useritem::all();
    }
    public static function addItem(Request $request)
    {
        $tmp = new useritem();
        $tmp->product_name = $request->input('product_name');
        $tmp->product_description = $request->input('product_description');
        $tmp->product_price = $request->input('product_price');
        $tmp->product_quantity = $request->input('product_quantity');
        $tmp->product_status = $request->input('product_status');

        $tmp->save();

        return useritem::all();
        // $arr = [
        //     "status" => 201,
        //     "message" => "Successfully Added",
        //     "timestamp" => "01/01/1002 10:10:12",
        // ];
        // return new Response($arr);
    }
    public static function updateItem(Request $request)
    {
        $tmp = useritem::find($request->id);


        $tmp->product_name = $request->input('product_name');
        $tmp->product_description = $request->input('product_description');
        $tmp->product_price = $request->input('product_price');
        $tmp->product_quantity = $request->input('product_quantity');
        $tmp->product_status = $request->input('product_status');

        $tmp->save();

        return useritem::all();
    }
    public static function deleteItem(Request $request)
    {
        $tmp = useritem::find($request->id);
        $tmp->delete();
        return useritem::all();
    }
}
