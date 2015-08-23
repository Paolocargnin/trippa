<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meta extends Model
{
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'meta';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['text','event_id', 'text', 'url'];
  // TODO -> GESTIRE I "PLACE"



  /**
   * Get the post that owns the comment.
   */
  public function event()
  {
      return $this->belongsTo('App\Event');
  }

  /**
   * Get the post that owns the comment.
   */
  public function attachments()
  {
      return $this->hasMany('App\Attachment');
  }


}
