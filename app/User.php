<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'group_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Check current user has a role
    public function hasRole($role)
    {
        $groupRole = false;
        $user = User::find($this->id);
        if ($user) {
            $userRole = UserRole::where('code', $role)->first();
            if ($userRole) {
                $groupRole = GroupRole::where('group_id', $user->group_id)->where('role_id', $userRole->id)->first();
            }
        }

        return $groupRole;
    }
}
