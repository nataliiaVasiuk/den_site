<?php
/**
 * Created by PhpStorm.
 * User: natalia
 * Date: 20.09.19
 * Time: 16:42
 */
namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';

    public function projectTag()
    {
        return $this->belongsTo(ProjectTag::class);
    }
}