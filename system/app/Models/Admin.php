<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $table = "admins";
    protected $primaryKey = "id";

    function handleUploadPoto()
    {
        if (request()->hasFile('foto_profil')) {
            $foto_profil = request()->file('foto_profil');
            $destination = "admin";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $foto_profil->extension();
            $url = $foto_profil->storeAs($destination, $filename,);
            $this->foto_profil = "app/" . $url;
        }
    }
}
