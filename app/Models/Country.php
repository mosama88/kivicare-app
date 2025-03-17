<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Country extends Model
{
use HasFactory;


  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table = 'countries';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */


  protected $fillable = ['name'];


  ##--------------------------------- RELATIONSHIPS
  // public function name(){
  //  return $this->belongsTo();
  //}

  ##--------------------------------- ATTRIBUTES


  ##--------------------------------- CUSTOM FUNCTIONS
}