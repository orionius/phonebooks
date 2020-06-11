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
    'phone'=>       $phone);



DB::table('notes')->insert($data);


return view('phone_list', $data);




    }


    public function phone_lst ()
    {
    
    /*
    $data = [];
    $data ['firstname'] = 'Douglas';
    $data ['phone'] = '88995522';
    return view('phone_list', $data);
    
    */
    
    /*
    return view('home', [
        'events' => Event::get(['id', 'name', 'phone']);
    
    
    */
    
    $notes = notes::query()->all();

    /*$notes = notes::all();*/
    return view('phone_list', compact('notes'));
    
  
    
    
    }








}
