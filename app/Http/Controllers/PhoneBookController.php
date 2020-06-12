<?php

namespace Phonebook\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PhoneBookController extends Controller
{

    public function insertt(request $req)
    {

$firstname=     $req->input('firstname');
$surname=       $req->input('surname');
$patronymic=    $req->input('patronymic');
$phone=         $req->input('phone');



$data =array(
    'firstname'=>   $firstname,
    'surname'=>     $surname,
    'patronymic'=>  $patronymic,
    'phone'=>       $phone
            );



DB::table('notes')->insert($data);


$notes = DB::table('notes')->get();
return view('phone_list', compact('notes'));


    }

    public function submit (request $req)
    {
        $id=             $req->input('id');        
        $edit=           $req->input('edit');
        $del=            $req->input('del');
     

        if (isset($edit))
        {
     


    return view('edit_contact', [
        'firstname' =>  $req->input('firstname'), 
        'surname' =>    $req->input('surname'),
        'patronymic' => $req->input('patronymic'),
        'phone' =>      $req->input('phone')
              
        ]);

        }
        if (isset($del))
        {
        DB::delete('delete from notes where id = ?',[$id]);
        $notes =         DB::table('notes')->get();   
        return view('phone_list', compact('notes')); 
        }


    }


    public function phone_lst ()
    {
     $notes = DB::table('notes')->get();
    return view('phone_list', compact('notes'));
    }

    public function destroy($id) {
     DB::delete('delete from notes where id = ?',[$id]);
     $notes = DB::table('notes')->get();
    return view('phone_list', compact('notes'));
     }


    public function edit($req) {
        $id=            $req->input('id');
        $firstname=     $req->input('firstname');
        $surname=       $req->input('surname');
        $patronymic=    $req->input('patronymic');
        $phone=         $req->input('phone');
        DB::update('update notes set firstname = ? , surname = ?,patronymic = ?,phone = ? where user_id = ?', [$firstname , $surname , $patronymic,$phone]);
     $notes = DB::table('notes')->get();
    return view('phone_list', compact('notes'));
     }




}
