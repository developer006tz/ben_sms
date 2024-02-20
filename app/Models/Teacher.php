<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Teacher extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['name', 'password', 'subjectname', 'schoolowner_id'];

    protected $searchableFields = ['*'];

    protected $hidden = ['password'];

    public function schoolowner()
    {
        return $this->belongsTo(Schoolowner::class);
    }
}
