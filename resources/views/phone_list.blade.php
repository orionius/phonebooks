
@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-2"></div>    
    <div class="col-8">

        
  {{--      <li class="list-group-item">{{$d->discs->name}} - {{$d->discs->price}} rub</li>
--}}

@foreach ($notes as $note)
    <div class="body">{{ $note->namefirst }}</div>
@endforeach



        <table width="100%" border="1" cellpadding="4" cellspacing="0">
            <caption>Список телефонов</caption>
            <tr>
             <th>Имя</th><th>Фамилия</th><th>Отчество</th><th>Телефон</th>
            </tr>
  {{--     @foreach($notes ?? '' as $d)--}}

            <tr>

              
             
{{--  

          <td>{{$d->notes->firstname}}</td>
          <td>{{$d->notes->email}}</td>
          <td>{{$d->notes->phone}}</td>

--}}



            </tr>

  {{--   @endforeach  --}}

           </table>


  


    </div>
    <div class="col-2"></div>
  </div>



@endsection