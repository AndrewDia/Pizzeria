<?php

namespace App\Http\Controllers;

use App\Models\Pizza;

class PagesController extends Controller
{
    public function index() {
        return view('index');
    }

    public function menu() {
        return view('menu');
    }

    public function promotions() {
        return view('promotions');
    }

    public function create() {
        return view('create');
    }

    public function basket() {
        return view('basket');
    }

    public function add($amount) {
        $id = request()->post('add');
        $amount += session()->get('cart.'.$id);
        session()->put('cart.'.$id, $amount);
        if (session('cart.'.$id) < 1) {
            session()->forget('cart.'.$id);
        }
        session()->flash('added', 1);
        return redirect()->back();
    }

    public function order() {
        session()->forget('cart');
        session()->put('tel', request()->post('tel'));
        session()->put('address', request()->post('address') ?? session('address'));
        return view('default_basket')
            ->with('txt', 'Дякуємо за Ваше замовлення!');
    }
}
