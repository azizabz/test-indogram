<?php

namespace AbdulAziz\Indograms\Components;

use Cms\Classes\ComponentBase;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use AbdulAziz\Indograms\Models\Post;
use October\Rain\Support\Facades\Flash;

class UpdateForm extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Update Form',
            'Description' => 'Form for update photo caption'
        ];
    }

    public function onUpdate()
    {
        $slug = Input::get('slug');
        $post = Post::where('slug', $slug)->first();

        $post->caption = Input::get('caption');

        $post->save();

        Flash::success('Caption updated successfully!');

        return Redirect::to('/post/' . $slug);
    }
}
