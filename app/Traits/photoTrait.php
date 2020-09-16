<?php
namespace App\Traits;

Trait photoTrait
{

    
     /* function saveIamage($photo,$folder){
        //save photo in folder

        $file_extesion = $photo->getClientOriginalExtension();
        $file_name=time().'.'.$file_extesion;
        $path = $folder;
        $photo->move($path,$file_name);
        return $file_name;
    }
*/

    
    function saveIamage($photo,$folder){
        $file_extesion = $photo->getClientOriginalExtension();
        $file_name = rand(1111,999999999) . '.' .$file_extesion;
        $path = $folder;
        $photo->move($path,$file_name);
        return $file_name;
    }

}