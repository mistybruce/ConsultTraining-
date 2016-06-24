<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\Task;
use Illuminate\Http\Request;

Route::get('/', function () {
	$tasks = Job::orderBy('create_at','asc')->get();

    return view('tasks'[ ;
  });   	
});
Route::get('/', function () {


Route::post('/task', function (Request $request) {
  $validator = Validator::make($request->all(), [
  	'Name'=>'required|max:255',
  	]);
      if ($validator->fails()) {
      	return redirect('/')
      	->withInput()
      	->withErrors($validator);
      }

      $task = new Job;
      $task->Name = $request->Name;
      $task->save();

      return redirect('/');
  ]);
      Route::get('/', function () {
	$tasks = Job::orderBy('create_at','asc')->get();

    return view('tasks'[ ;
  });  


Route::delete('/task/{ID}', function ($ID){
	Task::findorfail($ID)->delete();

	return redirect('/');
}






