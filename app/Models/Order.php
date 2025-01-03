<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'orders';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'fullname',
        'email',
        'phone_number',
        'note',
        'order_date',
        'status',
        'down_payment',
        'total_money',
    ];

    /**
     * Relationships
     */

    // Liên kết tới người dùng (User)
    

    // Liên kết tới bảng payments
    
    public function orderDetail()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
