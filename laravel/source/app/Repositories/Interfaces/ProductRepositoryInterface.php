<?php

namespace App\Repositories\Interfaces;

use App\Models\Product;


interface ProductRepositoryInterface
{
   public function all();

   public function getProductByCategoryId($cateId);   
   public function product_filter($cateId, $start, $colors = array(), $sizes = array(), $sort, $price = array(), $limit);

   public function get_weekly_best_product($limit, $cateId);

   public function get_new_product($limit, $cateId);

   public function search_products($searchStr, $limit);
   
}