<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function showUser()
    {
        // $users = [
        //     [
        //         'id' => '1',
        //         'name' => 'khanh'
        //     ],
        //     [
        //         'id' => '2',
        //         'name' => 'hai'
        //     ]
        //     ];
        // return view('list-user')->with(
        //     ['abc' => $users]
        // );
        // 1. Lấy danh sách toàn bộ user
        // $users = DB::table('users')->get();

        // 2. Lấy thông tin user có id = 4 
        // $users = DB::table('users')->where('id', '=', '4')->first();

        // 3. Lấy thuộc tính 'name' của user có id = 16
        // $users = DB::table('users')->select('name')->where('id', 16)->first();

        //  4. Lấy danh sách idUser của phòng ban 'Ban giám hiệu'
        // $id_PhongBan = DB::table('phongban')
        // ->where('ten_donvi', 'like', '%Ban giám hiệu%')
        // ->value('id');
        // $users = DB::table('users')->where('phongban_id', $id_PhongBan)->pluck('id');

        // 5. Tìm user có độ tuổi lớn nhất trong công ty 
        // $users = DB::table('users')->where('tuoi', DB::table('users')->max('tuoi'))->get();

        // 6. Tìm user có độ tuổi nhỏ nhất trong công ty
        // $users = DB::table('users')->where('tuoi', DB::table('users')->min('tuoi'))->get();

        // 7. Đếm xem phòng ban 'Ban giám hiệu' có bao nhiêu user 
        // $id_PhongBan = DB::table('phongban')
        // ->where('ten_donvi', 'like', '%Ban giám hiệu%')
        // ->value('id');
        // $users = DB::table('users')->where('phongban_id', $id_PhongBan)->count('id');

        // 8. Lấy danh sách tuổi các user 
        // $users = DB::table('users')->distinct()->pluck('tuoi');

        // 9. Tìm danh sách user có tên 'Khải' hoặc có tên 'Thanh'
        // $users = DB::table('users')->where('name', 'like','%Khải')->orWhere('name', 'like','%Thanh')->get();

        // 10. Lấy danh sách user ở phòng ban 'Ban đào tạo'
        // $id_PhongBan = DB::table('phongban')
        // ->where('ten_donvi', 'like', '%Ban đào tạo%')
        // ->value('id');
        // $users = DB::table('users')->where('phongban_id', $id_PhongBan)->get();

        // 11. Lấy danh sách user có tuổi lớn hơn hoặc bằng 30, danh sách sắp xếp tăng dần
        // $users = DB::table('users')->where('tuoi', '>=', '30')->orderBy('id', 'asc')->get();

        // 12. Lấy danh sách 10 user sắp xếp giảm dần độ tuổi, bỏ qua 5 user đầu tiên
        // $users = DB::table('users')->orderBy('tuoi', 'desc')->offset(5)->limit(10)->get();

        // 13. Thêm một user mới vào công ty
        // $users = DB::table('users')->insert([
        //     'name' => 'Phạm Quốc Khanh',
        //     'email' =>  'meliodas2sk@gmail.com',
        //     'phongban_id' => '1',
        //     'songaynghi'  => '0',
        //     'tuoi' => '20',
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now()
        // ]);

        // 14. Thêm chữ 'PĐT' sau tên tất cả user ở phòng ban 'Ban đào tạo'
        // $idPhongBan =  DB::table('phongban')
        // ->where('ten_donvi', 'like', '%Ban Đào Tạo')
        // ->value('id');
        // $result =DB::table('users')
        // ->where('phongban_id',$idPhongBan)
        // ->select('id','name','email')
        // ->get();
        // foreach($result as $value){
        //     DB::table('users')->where('id', $value->id)->update([
        //         'name' => $value->name .'PDT'
        //     ]);
        // }
        // 15. Xóa user nghỉ quá 15 ngày
        // DB::table('users')
        // ->where('songaynghi', '>' ,'12')->delete();
        // dd($users);
        // return view('list-user', compact('users'));
    }

    // function getUser($id, $name = ""){
    //     echo $id, $name;
    // }

    // function editUser(Request $request){
    //     echo $request->id;
    //     echo $request->name;
    // }

    public function listUsers()
    {
        $title = 'Danh sách Users';
        $listUsers = DB::table('users')
            ->join('phongban', 'users.phongban_id', '=', 'phongban.id')
            ->select('users.id', 'users.name', 'users.email', 'users.songaynghi', 'users.tuoi', 'phongban.ten_donvi')
            ->get();
        return view('users.list-user', compact('title', 'listUsers'));
    }

    public function addUsers()
    {
        $title = 'Thêm mới Users';
        $phongban = DB::table('phongban')->get();
        return view('users.add', compact('title', 'phongban'));
    }

    public function addPostUsers(Request $request){
       $data = [
        'name' => $request->name,
        'email' => $request->email,
        'phongban_id' => $request->phongban_id,
        'songaynghi' => $request->songaynghi,
        'tuoi' => $request->tuoi,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
       ];
       DB::table('users')->insert($data);
       return redirect()->route('users.list-users');
    }

     public function delUsers($id){
        DB::table('users')->where('id', $id)->delete();
       return redirect()->route('users.list-users');
    }

    public function detailUsers($id)
    {
        $title = 'Update Users';
        $phongban = DB::table('phongban')->get();
        $users = DB::table('users')->where('id', $id)->first();
        return view('users.update', compact('title', 'phongban', 'users'));
    }

    public function updatePostUsers(Request $request, $id){
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phongban_id' => $request->phongban_id,
            'songaynghi' => $request->songaynghi,
            'tuoi' => $request->tuoi,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
        DB::table("users")->where('id', $id)->update($data);
        return redirect()->route('users.list-users');
    }
}
