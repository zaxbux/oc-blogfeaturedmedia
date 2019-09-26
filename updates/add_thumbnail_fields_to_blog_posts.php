<?php namespace Zaxbux\BlogThumbManager\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class AddThumbnailFieldsToBlogPosts extends Migration {
    public function up() {
        Schema::table('rainlab_blog_posts', function($table) {
            $table->string('thumbnail')->nullable();
        });
    }
    
    public function down() {
        if (Schema::hasColumn('rainlab_blog_posts', 'thumbnail')) {
            Schema::table('rainlab_blog_posts', function ($table) {
                $table->dropColumn('thumbnail');
            });
        }
    }
}
