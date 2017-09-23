<?php namespace Zhang1career\Workflow\Models;

use Model;

/**
 * worknode Model
 */
class Worknode extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'zhang1career_workflow_worknodes';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
