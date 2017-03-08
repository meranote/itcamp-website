<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public $timestamps = false;
    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'question', 'description', 'field_type', 'field_setting'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    public function section() {
        return $this->belongsTo('App\Section');
    }

    public function parent() {
        return $this->belongsTo('App\Question');
    }

    public static function getCampQuestion($camp)
    {
        $campSectionID = Camp::where('name', $camp)->first()->section->id;

        return Question::whereIn('section_id', array(2, 3, $campSectionID))->orderBy('priority', 'desc')->get();
    }

}
