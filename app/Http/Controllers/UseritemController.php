<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Service\UserItemService;

class UseritemController extends Controller
{
    public function getAllItem(){
        return UserItemService::getAllItem();
    }
    public function addItem(Request $request){
        return UserItemService::addItem($request);
    }
    public function updateItem(Request $request){
        return UserItemService::updateItem($request);
    }
    public function deleteItem(Request $request){
        return UserItemService::deleteItem($request);
    }
}
