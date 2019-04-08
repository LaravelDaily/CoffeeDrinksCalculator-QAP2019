<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Drink extends Model
{
    use SoftDeletes;

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
        'completed_at',
    ];

    protected $fillable = [
        'price',
        'barista_id',
        'created_at',
        'updated_at',
        'deleted_at',
        'completed_at',
        'drink_type_id',
    ];

    public function barista()
    {
        return $this->belongsTo(User::class, 'barista_id');
    }

    public function drink_type()
    {
        return $this->belongsTo(DrinksType::class, 'drink_type_id');
    }

    public function getCompletedAtAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

    public function setCompletedAtAttribute($value)
    {
        $this->attributes['completed_at'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }
}
