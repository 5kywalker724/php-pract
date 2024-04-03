<?php

namespace Controller;

use Model\Post;
use Model\User;
use Src\Request;
use Src\View;

class Api
{
    public function index(): void
    {
        $posts = Post::all()->toArray();

        (new View())->toJSON($posts);
    }

    public function echo(Request $request): void
    {
        (new View())->toJSON($request->all());
    }

    public function authorize(Request $request): void
    {
        $current_user = $request->all();

        $user = User::where(['login' => $current_user['login'],
            'password' => $current_user['password']])->first();

        if(!empty($user)){
            $characters = '1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $token = '';
            for($i = 0; $i < $charactersLength; $i++){
                $token .= $characters[rand(0, $charactersLength - 1)];
            }
            (new View())->toJSON(['token' => $token]);
        }
        else {
            (new View())->toJSON(['error' => 'Invalid username or password']);
        }
    }
}
