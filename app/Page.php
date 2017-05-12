<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table = 'pages';

     protected $fillable = 
     	[
	     'title',
	     'rout',
	     'anchor_text',
	     'body',
	     'description',
	     'meta',
	     'is_published'
		];


}
