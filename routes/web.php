<?php

use Illuminate\Support\Facades\Route;
use App\Models\Listy;
use App\Models\Lister;
use App\Models\Listing;
use App\Http\Controllers\ListingController;

Route::get('/', function () {
    return view('post
    ');
});

Route::get('/test/{id}', function($id){
    return response('Posts '.$id);
})->where('id','[0-9]');




//practice
Route::get('/listing/{id}', function($id){
    $index = $id-1;
    return view('listing',[
        'list'=>Lister::all()[$id]
    ]);
}); 

//API version
// Route::get('/listing/{id}', function($id){
//     $index = $id-1;
//     $list = Lister::find($index);
//     return response()->json([$list['listings'][$index]]);
// });


Route::get('/test/{id}', function($id){
    return response('Posts '.$id);
})->where('id','[0-9]');

Route::get('/try', function(){
   return response()->json([
        'name'=>'pierre'
    ]);
});
Route::get('/listings', function(){
    return view('listings',[
        'list'=>Lister::all()
    ]);
});
// Route::get('/listings', function(){
//     return response()->json(Lister::all());
// });
// Route::post('/listings/post',[ListingController::class, 'store']);
Route::post('/listings/post',[ListingController::class, 'store']);
?>




