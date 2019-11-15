<?php

namespace AbdulAziz\Indograms\Models;

use Model;

/**
 * Model
 */
class Post extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'abdulaziz_indograms_';

    /**
     * @var array Validation rules
     */
    public $rules = [];

    /* Relation */
    public $attachOne = [
        'photo' => 'System\Models\File'
    ];

    public $belongsToMany = [
        'users' => [
            'RainLab\User\Models\User',
            'table' => 'abdulaziz_indograms_users',
            'key'      => 'post_id',
            'otherKey' => 'user_id'
        ]
    ];

    // public $belongsTo = [
    //     'user' => [
    //         'RainLab\User\Models\User',
    //         'table' => 'users',
    //         'order' => 'name'
    //     ]
    // ];
}
