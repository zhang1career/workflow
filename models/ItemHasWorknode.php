<?php namespace Zhang1career\Workflow\Models;

use Model;

/**
 * item_has_worknode Model
 */
class ItemHasWorknode extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'zhang1career_workflow_item_has_worknodes';

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
