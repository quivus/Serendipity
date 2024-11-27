<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PWDRegistration extends Model
{
    //
    protected $table = 'pwd_registrations';
    protected $fillable = ['pwd_id', 'disability_type', 'pwd_id_photo', 'user_id', 'status', 'discount_rate'];

    public function serendipityUser()
    {
        return $this->belongsTo(SerendipityUser::class);
    }

    // Calculate discount amount
    public function calculateDiscount($originalPrice)
    {
        return ($originalPrice * $this->discount_rate) / 100;
    }

    // Calculate final price after discount
    public function calculateFinalPrice($originalPrice)
    {
        return $originalPrice - $this->calculateDiscount($originalPrice);
    }
}
