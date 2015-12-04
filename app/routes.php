<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
/*Route::get('/', 'PagesController@home');
Route::get('/about','PagesController@about');
*/
Route::get('users',function(){
	$users =User::all(); //select * from users table in db
	return View::make('users/index', ['users'=>$users]);
});
Route::get('users/{username}',function($username){
	$user=User::whereUsername($username)->first();  // Select * from users where username=USERNAME LIMIT 1
	return View::make('users.show', ['user'=> $user]);
});

// Route::get('/',function(){
// //	$users=DB::table('users')->where('password','=','1234a')->get();
// //	$users=User::where('username','!=','abir')->get();
// //	$users=User::find(1);						// find user with id 1

// 	// $user = new User;						//create new user
// 	// $user->username = 'NewUser';
// 	// $user->password = Hash::make('password');
// 	// $user->save();
// // User::create([								//create user another way, mass insertion
// // 		'username'=> 'AnotherUser',
// // 		'password'=> Hash::make('1234')
// // 	]);

// 	// $user=User::find(2);						//update the user table
// 	// $user->username='UpdatedName';
// 	// $user->save();

// 	// $user=User::find(4);						//delete a row in the table
// 	// $user->delete();

// 	return User::orderBy('username','asc')->take(2)->get();		
// 	// dd($user);//die(var_dump($user));
// });
