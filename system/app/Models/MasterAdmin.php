<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Foundation\Auth\User as Authenticatable;

class MasterAdmin extends Authenticatable
{
    protected $table = "master-admins"; 
    protected $primaryKey = 'id';

    function handleUploadFoto()
    {
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = 'admin';
            $randomStr = Str::random(5);
            $filename = time() . "-" . $randomStr . "." . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;
        }
    }

}  
