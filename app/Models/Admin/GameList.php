<?php

namespace App\Models\Admin;

use App\Models\Admin\GameType;
use App\Models\Admin\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameList extends Model
{
    use HasFactory;

    protected $fillable = ['code', 'name',  'game_type_id', 'product_id', 'image_url', 'click_count', 'status'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function gameType()
    {
        return $this->belongsTo(GameType::class);
    }

    public function getImgUrlAttribute()
    {
        return asset('/game_logo/'.$this->image);
    }
}
