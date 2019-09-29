<?php namespace Zaxbux\BlogFeaturedMedia;

use System\Classes\PluginBase;

class Plugin extends PluginBase {
    public function boot() {
        \RainLab\Blog\Controllers\Posts::extendFormFields(function($form, $model, $context) {
            if (!$model instanceof \RainLab\Blog\Models\Post) {
				return;
			}

            $form->removeField('featured_images');

            $form->addSecondaryTabFields([
                'metadata[featured_image][url]' => [
                    'label'       => 'Thumbnail',
                    'tab'         => 'rainlab.blog::lang.post.tab_manage',
                    'span'        => 'left',
                    'type'        => 'mediafinder',
                    'mode'        => 'image',
                    'imageWidth'  => 200,
                    'imageHeight' => 200,
                ],
                'metadata[featured_image][alt]' => [
                    'label'   => 'Thumbnail Alt Text',
                    'comment' => 'Describe the contents of the image.',
                    'tab'     => 'rainlab.blog::lang.post.tab_manage',
                    'span'    => 'right',
                    'type'    => 'text',
                ],
                'metadata[featured_image][credit]' => [
                    'label'   => 'Thumbnail Credit',
                    'comment' => 'An optional image credit description',
                    'tab'     => 'rainlab.blog::lang.post.tab_manage',
                    'span'    => 'right',
                    'type'    => 'text',
                ],
			]);
		});
    }
}
