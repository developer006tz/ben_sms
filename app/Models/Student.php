<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['name', 'gender', 'classlevel', 'schoolowner_id'];

    protected $searchableFields = ['*'];

    public function schoolowner()
    {
        return $this->belongsTo(Schoolowner::class);
    }
}
