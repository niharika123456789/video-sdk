<?php

use WPKirk\WPBones\Routing\Pages\Support\Page;

class CustomPage extends Page
{
    public function title(): string
    {
        return __('Hello, Custom Page!', 'wp-kirk');
    }

    public function render()
    {
        return $this->plugin
            ->view('dashboard.custom_page')
            ->withAdminStyle('prism')
            ->withAdminScript('prism')
            ->withAdminStyle('wp-kirk-common');
    }
}
