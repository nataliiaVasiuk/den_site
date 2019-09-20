<?php
/**
 * Created by PhpStorm.
 * User: natalia
 * Date: 20.09.19
 * Time: 16:42
 */
namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectTag extends Model
{
    protected $table = 'project_tags';

    public function tag()
    {
        return $this->hasOne(Tag::class,'id_tag');
    }

    public function project()
    {
        return $this->hasOne(Project::class,'id_project');
    }
}