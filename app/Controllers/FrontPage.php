<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
      /**
     * Return images from Advanced Custom Fields
     *
     * @return array
     */
    public function images()
    {
        return [
            'image' => get_field('bg_image'),
            'title' => get_field('main_title'),
            'subTitle' => get_field('sub_title'),
        ];
    }
}
