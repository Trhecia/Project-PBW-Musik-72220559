<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class musik extends Model
{
    protected $table ='musik_559';

    protected $fillable = ['title',
                            'artist',
                            'genre',
                            'album',
                            'duration',
                            'year',
                            'listener', 
                            'poster'
                        ];
}
