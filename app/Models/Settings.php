<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Settings extends Model
{
  use HasFactory;


  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table = 'settings';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */

  protected $fillable = [
    'id',
    'name',
    'mobile',
    'address',
    'email',
    'Working_hours_from',
    'Working_hours_to',
    'facebook',
    'linkedin'
  ];



  ##--------------------------------- RELATIONSHIPS
  // public function name(){
  //  return $this->belongsTo();
  //}

  ##--------------------------------- ATTRIBUTES


  ##--------------------------------- CUSTOM FUNCTIONS
}
