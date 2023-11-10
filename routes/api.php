<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\useritem;
use App\Http\Controllers\UseritemController;
use App\Http\Controllers\UserpostController;
use App\Http\Controllers\Service\MainService;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get("/getallitem",[UseritemController::class,"getAllItem"]);
// Route::post("/additem",[UseritemController::class,"addItem"]);
// Route::post("/updateitem",[UseritemController::class,"updateItem"]);
// Route::post("/deleteitem",[UseritemController::class,"deleteItem"]);


// Route::get("/getallpost",[UserpostController::class,"getAllData"]);
// Route::post("/addpostdata",[UserpostController::class,"addPostData"]);
// Route::post("/updatepostdata",[UserpostController::class,"updatePostData"]);
// Route::post("/deletepostdata",[UserpostController::class,"deletePostData"]);

// User Item
Route::get("/getallitem",[MainService::class,"getAllUserItem"]);
Route::post("/additem",[MainService::class,"addUserItem"]);
Route::post("/updateitem/{id}",[MainService::class,"updateUserItem"]);
Route::post("/deleteitem/{id}",[MainService::class,"deleteUserItem"]);
// User Post
Route::get("/getallpost",[MainService::class,"getAllPost"]);
Route::post("/addpostdata",[MainService::class,"addPost"]);
Route::post("/updatepostdata/{id}",[MainService::class,"updatePost"]);
Route::post("/deletepostdata/{id}",[MainService::class,"deletePost"]);









