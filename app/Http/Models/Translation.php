<?php
/**
 * Created by PhpStorm.
 * User: natalia
 * Date: 20.09.19
 * Time: 16:42
 */
namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Translation extends Model
{
    protected $table = 'translations';

    public function language()
    {
        $this->hasOne(Language::class,'id_language');
    }
}