<?php

namespace App\Hooks;

use Themosis\Hook\Hookable;
use App\Models\Post;

class CreateRandomPostHook extends Hookable
{
    public $hook = 'init'; // https://adambrown.info/p/wp_hooks/hook
    public $priority = 20;
    /**
     * Extend WordPress.
     */
    public function register()
    {
        Post::create([
            "post_author" => 1,
            "post_date" =>  "2019-10-01 22:24:01",
            "post_date_gmt" =>  "2019-10-01 22:24:01",
            "post_content" =>  "<!-- wp:paragraph -->\n<p>Welcome to WordPress. This is your first post. Edit or delete it, then start writing!</p>\n<!-- /wp:paragraph -->",
            "post_title" =>  "Hello world! asdasd",
            "post_excerpt" =>  "",
            "post_status" =>  "publish",
            "comment_status" =>  "open",
            "ping_status" =>  "open",
            "post_password" =>  "",
            "post_name" =>  "hello-world-dsd",
            "to_ping" =>  "",
            "pinged" =>  "",
            "post_modified" =>  "2019-10-01 22:24:01",
            "post_modified_gmt" =>  "2019-10-01 22:24:01",
            "post_content_filtered" =>  "",
            "post_parent" =>  0,
            "guid" =>  "http => //localhost:8000/?p=231",
            "menu_order" =>  0,
            "post_type" =>  "post",
            "post_mime_type" =>  "",
            "comment_count" =>  1
        ]);
    }
}
