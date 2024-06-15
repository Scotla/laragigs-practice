<?php
namespace App\Models;

class Listy{

    // use hasFactory;
 
    public static function all(){
        return  [
                'listings'=>[
                //     [
                //     'id'=>1,
                //     'title'=>'listing 1',
                //     'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Est nam exercitationem corrupti quam assumenda suscipit tempore rerum! Quasi sit hic vero eos suscipit, impedit ullam, quis mollitia animi sint consequatur.'
                // ],
                // [
                //     'id'=>2,
                //     'title'=>'listing 2',
                //     'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Est nam exercitationem corrupti quam assumenda suscipit tempore rerum! Quasi sit hic vero eos suscipit, impedit ullam, quis mollitia animi sint consequatur.'
                // ]
                ]
                ];
    
}
public static function find($id){
    $listing = self::all()['listings'][$id];
   
    return $listing;
}
}
?>

 