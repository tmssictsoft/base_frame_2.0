<?php

namespace App\Models;

use App\Models\Scopes\ModelScopes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Validator;

class Module extends Model
{
    use HasFactory;

    use ModelScopes;

    use SoftDeletes;

    protected $table = 'modules';

    protected $hidden = ['created_at', 'updated_at'];

    protected $appends = ['checked'];

    protected $fillable = ['id', 'name', 'display_name', 'parent_id', 'link'];

    public function validate($input){

        $validate = Validator::make($input, [
            'name' => 'required',
            'display_name' => 'required',
            'link' => 'required',
            'permissions' => 'array',
        ]);

        return $validate;
    }

    public function permissions()
    {
        return $this->hasMany(Permission::class, 'module_id', 'id');
    }

    public function submenus()
    {
        return $this->hasMany(Module::class, 'parent_id', 'id');
    }

    public function role_modules()
    {
        return $this->hasMany(RoleModules::class, 'module_id','id')
            ->join('roles', 'roles_modules.role_id', '=', 'roles.id');
    }

    public function getCheckedAttribute()
    {
        return false;
    }
}
