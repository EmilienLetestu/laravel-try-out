<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'name', 'dead_line', 'done', 'done'
    ];

    /**
     * @var array
     */
    protected $casts = [
        'done' => 'boolean'
    ];

    /**
     * @param $value
     */
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
    }

    /**
     * @param $value
     */
    public function setDeadLineAttribute($value)
    {
        $this->attributes['dead_line'] = $value;
    }

    /**
     * @param $value
     */
    public function setDescriptionAttrribute($value)
    {
        $this->attributes['description'] =  $value;
    }

    /**
     * @param $value
     */
    public function setDoneAttribute($value)
    {
        $this->attributes['done'] = $value;
    }

    /**
     * @param $value
     * @return mixed
     */
    public function getNameAttribute($value)
    {
        return $value;
    }

    /**
     * @param $value
     * @return mixed
     */
    public function getDeadLineAttribute($value)
    {
        return $value;
    }

    /**
     * @param $value
     * @return mixed
     */
    public function getDescriptionAttribute($value)
    {
        return $value;
    }

    /**
     * @param $value
     * @return mixed
     */
    public function getDoneAttribute($value)
    {
        return $value;
    }
}
