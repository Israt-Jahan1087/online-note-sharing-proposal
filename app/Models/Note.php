<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
 
protected $fillable = [
'title',
'description',
'file',
'user_id'
];
public function category()
{
return $this->belongsTo(Category::class);
}
public function notes()
{
return $this->hasMany(Note::class);
}
public function user()
{
return $this->belongsTo(User::class);
}
}
