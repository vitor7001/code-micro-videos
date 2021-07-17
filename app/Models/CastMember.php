<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Ramsey\Uuid\Uuid;

class CastMember extends Model
{
    use \App\Models\Traits\Uuid, SoftDeletes;
    public const TYPE_DIRECTOR = 1;
    public const TYPE_ACTOR = 2;
    protected $fillable = ['name', 'type'];
    protected $dates = ['deleted_at'];
    protected $casts = ['id' => 'string', 'type' => 'smallInteger'];
    public $incrementing = false;

    public static function types()
    {
        return [
            self::TYPE_DIRECTOR,
            self::TYPE_ACTOR,
        ];
    }
}