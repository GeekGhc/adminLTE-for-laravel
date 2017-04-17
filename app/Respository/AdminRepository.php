<?php

namespace App\Repository;

class AdminRepository
{
    public function dashboard_init_data()
    {
        return $collects = collect(
            [
                [
                    'count' => 108,
                    'title' => '用户',
                    'sup' => '人',
                    'icon' => 'ion-person-add',
                    'bck' => 'bg-aqua',
                    'url' => '/admin/users'
                ],
                [
                    'count' => 66,
                    'title' => '文章',
                    'sup' => '篇',
                    'icon' => 'ion-document',
                    'bck' => 'bg-green',
                    'url' => '/admin/article/index'
                ],
                [
                    'count' => 44,
                    'title' => '消息',
                    'sup' => '条',
                    'icon' => 'ion-film-marker',
                    'bck' => 'bg-yellow',
                    'url' => 'admin/message/index'
                ],
                [
                    'count' => 245,
                    'title' => '评论',
                    'sup' => '条',
                    'icon' => 'ion-android-chat',
                    'bck' => 'bg-red',
                    'url' => 'admin/comment/index'
                ],
                [
                    'count' => 44,
                    'title' => '邮件',
                    'sup' => '封',
                    'icon' => 'ion-ios-email-outline',
                    'bck' => 'bg-orange',
                    'url' => 'admin/mail/index'
                ],
                [
                    'count' => 16,
                    'title' => '标签',
                    'sup' => '条',
                    'icon' => 'ion-pricetags',
                    'bck' => 'bg-olive',
                    'url' => 'admin/tags/index'
                ],
                [
                    'count' => 86,
                    'title' => '视频',
                    'sup' => '个',
                    'icon' => 'ion-videocamera',
                    'bck' => 'bg-purple',
                    'url' => 'admin/video/index'
                ],
                [
                    'count' => 67,
                    'title' => '音乐',
                    'sup' => '首',
                    'icon' => 'ion-music-note',
                    'bck' => 'bg-maroon',
                    'url' => 'admin/music/index'
                ]
            ]
        );
    }
}