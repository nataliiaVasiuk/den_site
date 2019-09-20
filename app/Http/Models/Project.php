<?php
/**
 * Created by PhpStorm.
 * User: natalia
 * Date: 20.09.19
 * Time: 16:42
 */
namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';

    public function projectTag()
    {
        return $this->belongsTo(ProjectTag::class);
    }

    public function projectMediaFile()
    {
        return $this->belongsTo(ProjectTag::class);
    }
}