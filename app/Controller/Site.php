<?php
namespace Controller;

use Src\Request;
use Model\Post;
use Model\User;
use Src\View;
use Src\Auth\Auth;
use Src\Validator\Validator;

class Site
{
    public function index(Request $request): string
    {
        $posts = Post::where('id', $request->id)->get();
        return (new View())->render('site.post', ['posts' => $posts]);
    }

    public function hello(): string
    {
        return new View('site.hello');
    }

    public function signup(Request $request): string
    {
        if ($request->method === 'POST') {

            $validator = new Validator($request->all(), [
                'login' => ['required', 'unique:users,login'],
                'password' => ['required']
            ], [
                'required' => 'Поле :field пусто',
                'unique' => 'Поле :field должно быть уникально'
            ]);

            if($validator->fails()){
                return new View('site.signup',
                    ['message' => json_encode($validator->errors(), JSON_UNESCAPED_UNICODE)]);
            }

            if (User::create($request->all())) {
                app()->route->redirect('/signup');
            }
        }
        return new View('site.signup');
    }

    public function login(Request $request): string
    {
        //Если просто обращение к странице, то отобразить форму
        if ($request->method === 'GET') {
            return new View('site.login');
        }
        //Если удалось аутентифицировать пользователя, то редирект
        if (Auth::attempt($request->all())) {
            app()->route->redirect('/main');
        }
        //Если аутентификация не удалась, то сообщение об ошибке
        return new View('site.login', ['message' => 'Неправильные логин или пароль']);
    }

    public function logout(): void
    {
        Auth::logout();
        app()->route->redirect('/login');
    }

    public function addBuilding(): string
    {
        return new View('site.add_building');
    }

    public function addRoom(): string
    {
        return new View('site.add_room');
    }

    public function getName(): string
    {
        return new View('site.get_name_build');
    }

    public function getNumber(): string
    {
        return new View('site.get_number_build');
    }

    public function getSquare(): string
    {
        return new View('site.get_square_build');
    }

    public function getSeats(): string
    {
        return new View('site.get_seats_build');
    }

    public function getAllSeats(): string
    {
        return new View('site.get_all_seats');
    }

    public function errorRole(): string
    {
        return new View('site.error_role');
    }

}
