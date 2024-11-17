<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $table = 'settings';

    public static function update_record($post) {
        $update = Setting::find(1);
        if ($post->hasFile('app_logo')) {
            $path = $post->file('app_logo')->store('images', 'public');
        }       
        $update->app_name         = $post->app_name;
        $update->app_logo         = $post->app_logo ? '/storage/' .$path : $post->_app_logo;
        $update->timezone         = $post->timezone;
        $update->author_name      = $post->author_name;
        $update->author_link      = $post->author_link;
        $update->ui_mode          = $post->ui_mode ? $post->ui_mode : 'light';
        $update->sidebar_collapse = $post->sidebar_collapse ? $post->sidebar_collapse : 'off';
        $update->phone            = $post->phone;
        $update->whatsapp_phone   = $post->whatsapp_phone;
        $update->google_map       = $post->google_map;
        $update->email            = $post->email;
        $update->address          = $post->address;
        $update->about            = $post->about;
        $update->updated_at       = date('Y-m-d H:i:s');
        $res = $update->save();

        if($res) {
           $response = array(
             'status' => true,
             'notification' => 'Updated successfully.'
           );
        }else {
            $response = array(
                'status' => false,
                'notification' => 'update failed!'
            );
        }
        return $response;
    }
}