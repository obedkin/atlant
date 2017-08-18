<?php

return [


    // Application -------------------------------------------------------------
    'app' => [
        'title' => 'Атлант',
        'description' => 'Корпоративная система управления предприятием',
        'version' => '1.0',
        'email' => 'email@atlant.com',
        'icon' => '<span class="fa fa-dashboard"></span>',
        'image' => 'img/atlant/atlant.png'
    ],


    'adminEmail' => 'atlant@gmail.com',
    'supportEmail' => 'atlant@gmail.com',
    'user.passwordResetTokenExpire' => 3600,

    'general' => [
        'login_icon' => '<span class="fa fa-sign-in"></span>',
        'logout_icon' => '<span class="fa fa-sign-out"></span>',
        'signup_icon' => '<span class="fa fa-user"></span>',
        'block_icon' => '<span class="fa fa-lock"></span>',
        'power_icon' => '<span class="fa fa-power-off">',
        'error_icon' => '<span class="fa fa-exclamation"></span>',
        'email_icon' => '<span class="fa fa-envelope"></span>'
    ],


    // User --------------------------------------------------------------------
    'user' => array(
        'passwordResetTokenExpire' => 3600,//Время жизни токена при смене пароля
        'icon' => '<span class="fa fa-user"></span>',
        'image' => array(
            'path' => '/uploads/user/',
            'width' => 200,
            'height' => 200
        ),
        'tabs' => [
            'work' => '<span class="fa fa-briefcase"></span>',
            'private' => '<span class="fa fa-home"></span>',
            'news' => '<span class="fa fa-bullhorn"></span>',
            'article' => '<span class="fa fa-file-text-o"></span>',
            'message' => '<span class="fa fa-comments"></span>',
            'equipment' => '<span class="fa fa-laptop"></span>',
            'social' => '<span class="fa fa-vk"></span>',
            'medical' => '<span class="fa fa-stethoscope"></span>',
            'task' => '<span class="fa fa-tasks"></span>',
            'log' => '<span class="fa fa-cog"></span>',
            'gallery' => '<span class="fa fa-picture-o"></span>',
        ]
    ),
];
