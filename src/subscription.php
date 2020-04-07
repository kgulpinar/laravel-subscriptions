<?php

namespace Encore\Subscriptions;

use Encore\Admin\Extension;

class Subscriptions extends Extension
{
    public $name = 'Subscription';

    public $views = __DIR__.'/../resources/views';

    public $assets = __DIR__.'/../resources/assets';

    public $menu = [
        'title' => 'Subscription',
        'path'  => 'subscription',
        'icon'  => 'fa-gears',
    ];
}