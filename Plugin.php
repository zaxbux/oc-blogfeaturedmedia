<?php namespace Zaxbux\BlogPostThumbnails;

use System\Classes\PluginBase;
use RainLab\Blog\Models\Post as BlogPost;
use RainLab\Blog\Controllers\Posts as BlogPostController;

class Plugin extends PluginBase {
    public $require = ['RainLab.Blog'];

    public function boot() {
        BlogPostController::extendFormFields(function($form, $model, $context) {
            if (!$model instanceof BlogPost) {
				return;
			}

            $form->addSecondaryTabFields([
                'thumbnail' => [
                    'label'       => 'Thumbnail',
                    'tab'         => 'rainlab.blog::lang.post.tab_manage',
                    'span'        => 'left',
                    'type'        => 'mediafinder',
                    'mode'        => 'image',
                    'imageWidth'  => 200,
                    'imageHeight' => 200
                ]
			]);
		});
    }
}
