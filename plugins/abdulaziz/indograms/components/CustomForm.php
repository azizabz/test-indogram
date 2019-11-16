<?php

namespace AbdulAziz\Indograms\Components;

use Cms\Classes\ComponentBase;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use AbdulAziz\Indograms\Models\Post;
use October\Rain\Support\Facades\Flash;
use RainLab\User\Facades\Auth;

class CustomForm extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Custom Form',
            'Description' => 'Custom form for post'
        ];
    }

    public function onSave()
    {
        $validator = Validator::make(
            [
                'photo' => Input::file('photo'),
            ],
            [
                'photo' => 'required|image'
            ]
        );

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        } else {
            $user = Auth::getUser()->id;
            $username = Auth::getUser()->username;
            $slug = $username . '-' . $user . date("Ymdhis");

            $post = new Post();

            $post->photo = Input::file('photo');
            $post->caption = Input::get('caption');
            $post->slug = $slug;

            $post->save();

            $post->users()->attach($user);

            Flash::success('Photo uploaded successfully!');

            return Redirect::to('/');
        }
    }

    public function onUpdate()
    {
        $slug = $this->param('slug');
        $post = Post::where('slug', $slug)->first();

        $post->caption = Input::get('caption');

        $post->save();

        Flash::success('Caption updated successfully!');

        return Redirect::to('/post/' . $slug);
    }

    public function onDelete()
    {
        $slug = $this->param('slug');
        Post::where('slug', $slug)->delete();

        Flash::success('Photo deleted successfully!');
        return Redirect::to('/');
    }
}
