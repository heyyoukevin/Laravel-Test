<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::post('/login',[UserController::class,'login']);
Route::post('/register',[UserController::class,'register']);
Route::get('/logout',[UserController::class,'logout']);
Route::post('/adcategory',[UserController::class,'adcategory']);
Route::get('/addtask/{catid}',[UserController::class , 'addtask' ] );
Route::post('/adtask',[UserController::class,'adtask']);
Route::get('/viewtask/{catid}',[UserController::class , 'viewtask' ] );
Route::get('/viewtaskdetail/{catid}/{taskid}',[UserController::class , 'viewtaskdetail' ] );
Route::get('/edittask/{catid}/{taskid}',[UserController::class,'edittask']);
Route::post('edittask/updatetask',[UserController::class,'updatetask']);
Route::post('/deletetask/{catid}/{taskid}',[UserController::class,'deletetask']);

Route::group(['middleware'=>['AuthCheck']],function()
{
Route::get('/',[UserController::class,'registerpage']);
Route::get('/loginpage',[UserController::class,'loginpage']);

Route::get('/userhome',[UserController::class,'userhome']);
Route::get('/viewcategory',[UserController::class,'viewcategory']);
Route::get('/addcategory',[UserController::class,'addcategory']);
});