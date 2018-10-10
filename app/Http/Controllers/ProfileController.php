<?php
/**
 * Created by PhpStorm.
 * User: Vu Duc Manh
 * Date: 10/10/2018
 * Time: 4:30 AM
 */
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
class ProfileController extends BaseController
{
    public function showProfile($name) {
        return view('profile')->with('name', $name);
    }
}