<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
	use Authenticatable;

  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'users';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['name','founder_id', 'title', 'cover'];

  public function __construct(array $attributes = array()) {
	  $this->hasAttachedFile('avatar', [
	      'styles' => [
	        'large' => 'x1080',
	        'medium' => '300x300',
	        'thumb' => '100x100',
        'auto_orient' => true
	      ]
	  ]);

	  parent::__construct($attributes);
	}

}