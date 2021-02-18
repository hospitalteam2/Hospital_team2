<?php
namespace App\Traits;

Trait SocialTrait
{
        function savephoto($photo, $dist)
           {
            //upload photo

                $ext = $photo->getClientOriginalExtension();
                $file_name = time() .' .'. $ext;
                $path =$dist;
                $photo->move($path, $file_name);
                return $file_name;
           }
}

