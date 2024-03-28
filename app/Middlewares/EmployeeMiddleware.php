<?php
namespace Middlewares;

use Src\Auth\Auth;
use Src\Request;

class EmployeeMiddleware
{
    public function handle(Request $request){
        if(!Auth::checkEmployee()){
            app()->route->redirect('/error');
        }
    }
}
