<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Service\MainService;

class MainController extends Controller
{
    // user item controller
    public function getAllItem(){
        return MainService::getAllUserItem();
    }
    public function addItem(Request $request){
        return MainService::addUserItem($request);
    }
    public function updateItem(Request $request){
        return MainService::updateUserItem($request);
    }
    public function deleteItem(Request $request){
        return MainService::deleteUserItem($request);
    }
    // user post controller
    public function getAllData(){
        return MainService::getAllPost();
    }
    public function addPostData(Request $request){
        return MainService::addPost($request);
    }
    public function updatePostData(Request $request){
        return MainService::updatePost($request);
    }
    public function deletePostData(Request $request){
        return MainService::deletePost($request);
    }
}
