<?php

function detectFolderByModel($model)
{
    switch (get_class($model)) {
        case \App\Models\Tour::class:
            return '/images/tour/';
            break;
        case \App\Models\User::class;
            return '/images/user/';
        case \App\Models\Category::class:
            return '/images/category/';
            break;
        default:
            return '';
    }
}