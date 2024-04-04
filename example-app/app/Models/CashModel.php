<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CashModel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'nhacungcap';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'MaNCC';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'MaNCC', 'TenNCC',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
