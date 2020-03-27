<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;



class MenuController extends Controller
{
    public function menu()
    {

        $menus = Menu::all();


        return view('template.create.menu.menu', compact(['menus']));
    }

    public function create()
    {


        return view('template.create.menu.menu_create');
    }

    public function storeDevice(Request $request)
    {

        $menu = new Menu();


        $menu->link_title = request('link_title');
        $menu->link = request('link');
        $menu->is_visible = request('is_visible');
        $menu->position = request('position');

        $menu->save();

        return redirect()->route('menu');

    }

    public function updateMenu($id)
    {

        $menu = new Menu;


        return view('template.create.menu.menu_update');

    }

    public function showOneMenu($id)
    {
        $menu = new Menu();
        return view('template.create.menu.one_menu', ['data' => $menu->find($id)]);
    }

    public function postupdateMenu($id, Request $request)
    {

        $menu = Menu::find($id);

        $menu->link_title = request('link_title');
        $menu->link = request('link');
        $menu->is_visible = request('is_visible');
        $menu->position = request('position');


        $menu->save();
        return redirect()->route('menu');


    }

    public function deleteMenu($id)
    {

        Menu::find($id)->delete();

        return redirect()->route('menu');
    }

}
