<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dokumen extends Model
{
  protected $fillable=[
  'name','location','fileToUpload','end','remark','department','category','start','reference'];

  public function scopeSearch($query, $search){

  	return $query->where('id', 'LIKE', "%$search%")
				->orwhere('name', 'LIKE', "%$search%");

  }
}
