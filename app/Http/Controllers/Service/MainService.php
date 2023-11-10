<?php
namespace App\Http\Controllers\Service;

use App\Models\useritem;
use App\Models\userlogin;
use App\Models\userpost;
use Illuminate\Http\Request;

class MainService
{
    // user item services
    public static function getAllUserItem()
    {
        return useritem::all();
    }
    public static function addUserItem(Request $request)
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
    public static function updateUserItem(Request $request)
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
    public static function deleteUserItem(Request $request)
    {
        $tmp = useritem::find($request->id);
        $tmp->delete();
        return useritem::all();
    }

    // user post services
    public static function getAllPost(){
        return userpost::all();
    }
    public static function addPost(Request $request){
        $tmp = new userpost();
        $tmp->user_id = $request->input('user_id');
        $tmp->cell_name = $request->input('cell_name');
        $tmp->case_name = $request->input('case_name');
        $tmp->case_description = $request->input('case_descriptions');
        $tmp->save();
        return userpost::all();
    }
    public static function updatePost(Request $request){
        $tmp = userpost::find($request->id);
        $tmp->user_id = $request->input('user_id');
        $tmp->cell_name = $request->input('cell_name');
        $tmp->case_name = $request->input('case_name');
        $tmp->case_description = $request->input('case_descriptions');
        $tmp->save();
        return userpost::all();
    }
    public static function deletePost(Request $request){
        $tmp = userpost::find($request->id);
        $tmp->delete();
        return userpost::all();
    }

}
