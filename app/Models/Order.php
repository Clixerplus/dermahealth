<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Order extends Model
{
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
	  protected $primaryKey = 'ref';

	  /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    protected $fillable =[
		  'name', 'lastname', 'ref', 'address', 'phone', 'email',
		  'state', 'city' ,'method_payment'
	  ];
    
    public function products()
    {
        return $this->belongsToMany('App\Models\Product');
    }

    public function generateOrder()
    {
      $this->ref = Str::uuid();
    }
}
