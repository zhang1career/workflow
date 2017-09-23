<?php namespace Zhang1career\Workflow\Models;

use Model;

/**
 * workflow Model
 */
class Workflow extends Model
{
    /** @var string The database table used by the model. */
    public $table = 'zhang1career_workflow_workflows';

    /** @var array Relations */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

    /** @var array Guarded fields */
    protected $guarded = ['*'];

    /** @var array Fillable fields */
    protected $fillable = [];

    /** @var array Rule fields */
    protected $rules = [
        'name' => 'required|min:3',
    ];
}
