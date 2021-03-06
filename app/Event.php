<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Codesleeve\Stapler\ORM\StaplerableInterface;
use Codesleeve\Stapler\ORM\EloquentTrait;

class Event extends Model implements StaplerableInterface
{
	// use Authenticatable;
	use EloquentTrait;

  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'events';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['name','founder_id', 'title', 'cover'];

  public function __construct(array $attributes = array()) {
	  $this->hasAttachedFile('cover', [
	      'styles' => [
	        'large' => 'x1080',
	        'medium' => '300x300',
	        'thumb' => '100x100',
        'auto_orient' => true
	      ]
	  ]);

	  parent::__construct($attributes);
	}

  /**
   * Get the post that owns the comment.
   */
  public function founder()
  {
      return $this->belongsTo('App\User','founder_id');
  }

  public function meta()
  {
      return $this->hasMany('App\Meta');
  }

}