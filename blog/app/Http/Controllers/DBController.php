<?php
/**
 * Created by PhpStorm.
 * User: wLink
 * Date: 5/11/2018
 * Time: 9:15 AM
 */

namespace App\Http\Controllers;
use App\Product;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Rules\In;
use Symfony\Component\CssSelector\Tests\Node\SelectorNodeTest;

class DBController extends Controller
{
    public function select()
    {
        $product = Product::all();

        return view('select', ['list_product' => $product]);
    }

    public function update()
    {
        return "In processing";
    }

    public function delete()
    {
        return "In processing";
    }

    public function insert()
    {
        $product = new Product;

        $product->name = Input::get('inputName');
        $product->email = Input::get('inputEmail');
        $product->rollNumber = Input::get('inputRollNumber');
        $product->address = Input::get('inputAddress');
        $product->birthday = Input::get('inputBirthday');
        $product->phone = Input::get('inputPhone');
        $product->avatar = Input::get('inputAvatar');
        $product->gender = Input::get('inputGender');
        $product->status = Input::get('inputStatus');
        $product->save();

        $roll = DB::select('select * from products where rollNumber = ?', [Input::get('inputRollNumber')]);
        if (count($roll) != 0){
            return "Success";
        }
    }
}