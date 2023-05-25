<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Task
 *
 * @property $id
 * @property $Name
 * @property $Description
 * @property $Due_Date
 * @property $user_id
 * @property $category_id
 * @property $Completed
 * @property $created_at
 * @property $updated_at
 *
 * @property Category $category
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Task extends Model
{
    
    static $rules = [
		'Name' => 'required',
		'Description' => 'required',
		'Due_Date' => 'required',
        'user_id' => 'required|exists:users,id',
		'category_id' => 'required',
		'Completed' => 'nullable|boolean',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Name','Description','Due_Date','user_id','category_id','Completed'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category()
    {
        return $this->hasOne('App\Models\Category', 'id', 'category_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        //return $this->hasOne('App\Models\User', 'id', 'user_id');
        return $this->belongsTo(User::class, 'user_id');
    }
    

}
