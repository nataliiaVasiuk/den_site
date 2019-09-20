<?php
/**
 * Created by PhpStorm.
 * User: natalia
 * Date: 20.09.19
 * Time: 16:42
 */
namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $table = 'languages';

    public function translation()
    {
        return $this->belongsTo(Translation::class);
    }
}