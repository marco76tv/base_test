<?php

$def = [
    'pub_theme' => 'one',
    'adm_theme' => 'sb-admin-2-bs4',
    'enable_ads' => '1',
    'model' => [
        'article' => 'Modules\Blog\Models\Article',
        'article_cat' => 'Modules\Blog\Models\ArticleCat',
        'photo' => 'Modules\Blog\Models\Photo',
        'home' => 'Modules\Blog\Models\Home',
        'page' => 'Modules\Blog\Models\Page',
        'feed' => 'Modules\Blog\Models\Feed',
        'sitemap' => 'Modules\Blog\Models\Sitemap',
        'place' => 'Modules\Blog\Models\Place',
        'event' => 'Modules\Blog\Models\Event',
        'rating' => 'Modules\Blog\Models\Rating',
        'my_rating' => 'Modules\Blog\Models\MyRating',
        //'profile' => 'Modules\Blog\Models\Profile',
        //------------- Extend --------------------------------------
        'translation' => 'Modules\Xot\Models\Translation',
        'image' => 'Modules\Xot\Models\Image',
        //-------------- LU -----------------------------------------
        'area' => 'Modules\LU\Models\Area',
        'area_admin_area' => 'Modules\LU\Models\AreaAdminArea',
        'group' => 'Modules\LU\Models\Group',
        'group_right' => 'Modules\LU\Models\GroupRight',
        'group_user' => 'Modules\LU\Models\GroupUser',
        'invitation' => 'Modules\LU\Models\invitation',
        'password_reset' => 'Modules\LU\Models\PasswordReset',
        'perm_user' => 'Modules\LU\Models\PermUser',
        'right' => 'Modules\LU\Models\Right',
        'right_implied' => 'Modules\LU\Models\RightImplied',
        'social_provider' => 'Modules\LU\Models\SocialProvider',
        'user' => 'Modules\LU\Models\User',
        'user_right' => 'Modules\LU\Models\UserRight',
        //------------ Forum ---------------------------------------
        'forum' => 'Modules\Forum\Models\Forum',
        'profile' => 'Modules\Forum\Models\Profile',
        //----------- Customer -------------------------------------
        'neighbor' => 'Modules\Customer\Model\Customer',
    ],
    'roots' => [
        'page',
        'article',
        //'cuisineCat',
    ],
    'migrate_packs' => [
        'xra',
        'blog',
        'lu',
        'import',
        'food',
        'seo',
        'backend',
    ],
    'primary_lang' => 'it',
    'related' => [
       'postCat' => [
           0 => 'post',
       ],
       'home' => [
       ],
   ],
];

return $def;
