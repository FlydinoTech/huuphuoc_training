<?php

function detectFolderByModel($model)
{
    switch (get_class($model)) {
        case \App\Models\Tour::class:
            return '/images/tour/';
            break;
        case \App\Models\User::class;
            return '/images/user/';
            break;
        case \App\Models\Category::class:
            return '/images/category/';
            break;
        case \App\Models\CategoryProduct::class:
            return '/images/category_product/';
            break;
        default:
            return '';
    }
}