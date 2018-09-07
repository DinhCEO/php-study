<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    /**
     * @var string
     */
    protected $table = 'roles';

    /**
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
