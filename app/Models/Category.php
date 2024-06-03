<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table='category';
    
    // Mô hình quan hệ, một danh mục có thể có nhiều danh mục con
    public function subCategories()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    // Phương thức kiểm tra xem danh mục có danh mục con hay không
    public function hasSubMenu()
    {
        return $this->subCategories()->exists();
    }
}
