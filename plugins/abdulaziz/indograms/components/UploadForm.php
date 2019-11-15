<?php

namespace AbdulAziz\Indograms\Components;

use Cms\Classes\ComponentBase;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use AbdulAziz\Indograms\Models\Post;
use October\Rain\Support\Facades\Flash;
use RainLab\User\Facades\Auth;

class UploadForm extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Upload Form',
            'Description' => 'Form for upload photo'
        ];
    }

    public function onSave()
    {
        $validator = Validator::make(
            [
                'photo' => Input::file('photo'),
                'caption' => Input::get('caption')
            ],
            [
                'photo' => 'required|image'
            ]
        );

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        } else {

            $username = Auth::getUser()->username;
            $slug = $username . '-' . date("Ymdhis");

            $post = new Post();

            $post->photo = Input::file('photo');
            $post->caption = Input::get('caption');
            $post->slug = $slug;

            $post->save();

            $user = Auth::getUser()->id;
            $post->users()->attach($user);

            Flash::success('Photo uploaded successfully!');

            return Redirect::to('/');
        }
    }
}
