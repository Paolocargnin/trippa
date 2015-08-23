<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{

	use EloquentTrait;

  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'attachments';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['text','meta_id', 'title', 'attachment'];

  public function __construct(array $attributes = array()) {
	  $this->hasAttachedFile('attachment', [
	      'styles' => [
	        'large' => 'x1080',
	        'medium' => '300x300',
	        'thumb' => '100x100',
        'auto_orient' => true
	      ]
	  ]);

	  parent::__construct($attributes);
	}


  public function meta()
  {
      return $this->belongsTo('App\Meta');
  }
}
