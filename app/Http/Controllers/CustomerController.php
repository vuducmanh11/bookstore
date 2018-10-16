<?php
/**
 * Created by PhpStorm.
 * User: Vu Duc Manh
 * Date: 10/10/2018
 * Time: 4:30 AM
 */
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
class CustomerController extends BaseController
{
    public function showProfile() {
        return view('admin');
    }

    public function editProfile() {
        $id = \Auth::user()->id;
        $user = \DB::table("users")
            ->where('id', '=', $id)->get();
        return view('editprofile')->with('user', $user);
    }

    public function updateProfile() {
//        $mytime = Carbon\Carbon::now()->toDateTimeString();
        $id = \Auth::user()->id;
        $data = \DB::table('users')->where('id', '=', $id)->get();
        if (isset($_POST['update-profile'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
        }
        if ($data->count() == 0) {
            \DB::table('users')->insert(['id' => $id, 'name' => $name, 'email' => $email, ]);
        }
        else {
            \DB::table('users')->where('id', '=', $id)->update(['name' => $name, 'email' => $email]);
        }
        echo '<script type="text/javascript">alert("Update data successfull" );</script>';
        echo '<script type="text/javascript">  window.location = "../profile";</script>';
//        return view('admin');
    }
}