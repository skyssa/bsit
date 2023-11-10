<?php
namespace App\Http\Controllers\Service;

use App\Models\userpost;
use Illuminate\Http\Request;

class UserPostService
{
    public static function getAll(){
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


?>
