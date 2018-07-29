<?php

function presentPrice($price)
{
    return 'RM'.number_format($price / 100, 2);
}

function setActiveCategory($category, $output = 'active')
{
    return request()->category == $category ? $output : '';
}

function setActiveBrand($brand, $output = 'active')
{
    return request()->brand == $brand ? $output : '';
}

function productImage($path)
{
    return $path && file_exists('storage/'.$path) ? asset('storage/'.$path) : asset('img/not-found.jpg');
}


function getStockLevel($quantity)
{
    if ($quantity > setting('site.stock_threshold')) {
        $stockLevel = '<div class="badge badge-success">In Stock</div>';
    } elseif ($quantity <= setting('site.stock_threshold') && $quantity > 0) {
        $stockLevel = '<div class="badge badge-warning">Low Stock</div>';
    } else {
        $stockLevel = '<div class="badge badge-danger">Not available</div>';
    }

    return $stockLevel;
}