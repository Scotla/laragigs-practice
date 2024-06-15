<?php 
use Illuminate\Support\Facades\Route;
use App\Models\Lister;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/test/{id}', function($id){
    return response('Posts '.$id);
})->where('id','[0-9]');




//practice
Route::get('/listing/{id}', function($id){
    $index = $id-1;
    return view('listing',[
        'list'=>Lister::find($index)
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

?>