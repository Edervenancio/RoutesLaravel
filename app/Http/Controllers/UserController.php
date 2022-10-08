<?php

namespace LaraDev\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class UserController extends Controller
{
    

    public function index()
    {
         return "<h1>Listagem do usuário com o codigo 1  </h1>";
    }


    public function getData()
    {
        return "<h1>Disparou ação de get</h1>";
    }

    public function postData()
    {
        return "<h1>Disparou ação de POST</h1>";
    }

    public function testPut(Request $request)
    {
        echo "<h1>Usuário da edição é o de código 1</h1>";
        
        return "<h1>Disparou ação de PUT</h1>";
    }

    public function testPatch(Request $request)
    {
        echo "<h1>Usuário da edição é o de código 1</h1>";
        
        return "<h1>Disparou ação de Patch</h1>";
    }

    public function testMatch(Request $request)
    {
        echo "<h1>Disparou ação de PUT/Patch</h1>";

        echo "<h1>Usuário da edição é o de código 2</h1>";
        
    }

    public function destroy()
    {
        return "<h1>Disparou ação de DELETE PARA O REGISTRO 1</h1>";
    }

    public function any()
    {
        return "<h1>Qualquer verbalização é aceita</h1>";
    }

    public function userC($id, $comment = null, Request $request)
    {
        echo "Controller::User Método: UserComments";
        echo '<pre>';
        var_dump($comment);
        echo '</pre>';
    }


    public function inspect()
    {
        $route = Route::current();
        $name = Route::currentRouteName();
        $action = Route::currentRouteAction();
        echo '<pre>';
        var_dump($route, $name, $action);
        echo '</pre>';
    }
}
