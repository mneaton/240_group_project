<?php

namespace App;

class Tutorials extends \Illuminate\Database\Eloquent\Model
{
    protected $table = "tutorials";

    /**
     * Get the comments for the blog post.
     */
    public function sections()
    {
        return $this->hasMany('App\Sections', 'foreign_key', 'tutorial_id');
    }
}
