<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Service\UserPostService;

class UserpostController extends Controller
{
    public function getAllData(){
        return UserPostService::getAll();
    }
    public function addPostData(Request $request){
        return UserPostService::addPost($request);
    }
    public function updatePostData(Request $request){
        return UserPostService::updatePost($request);
    }
    public function deletePostData(Request $request){
        return UserPostService::deletePost($request);
    }
}
