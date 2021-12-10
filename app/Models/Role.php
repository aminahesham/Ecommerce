<?php

namespace App\Models;

use Laratrust\Models\LaratrustRole;

class Role extends LaratrustRole
{
 public $guarded = [];

 protected $table='roles';

public $timestamps = false;

/**
 * The users that belong to the role.
 */
public function users()
{
    return $this->belongsToMany(User::class, 'role_user' );
}
}