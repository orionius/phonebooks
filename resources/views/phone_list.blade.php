
@extends('layouts.app')
@section('content')
<style>


</style>

<body>
        

<div class="row">
    <div class="col-2"></div>    
    <div class="col-8">

        <table width="100%" border="1" cellpadding="4" cellspacing="0">
            <caption>Список телефонов</caption>
    <tr>
             <th>Id</th><th>Имя</th><th>Фамилия</th><th>Отчество</th><th>Телефон</th><th>Действие</th>
    </tr>

        @foreach ($notes as $note)         

    
    <tr>
      
          <td><p>{{ $note->id }}</p></td>
          <td><p>{{ $note->firstname }}</p></td>
          <td><p>{{ $note->surname }}</p></td>
          <td><p>{{ $note->patronymic }}</p></td>          
          <td><p>{{ $note->phone }}</p></td>
<img src="src="{{ asset('img/wallpaper.jpg') }} alt="">
  
          
          <td>   
    <form id="logout-form" action="{{ route('phone-submit') }}" method="POST">
    @csrf   

  
            <input type="hidden" name="id"          value="{{ $note->id }}"> 
            <input type="hidden" name="firstname"   value="{{ $note->firstname }}"> 
            <input type="hidden" name="surname"     value="{{ $note->surname }}"> 
            <input type="hidden" name="patronymic"  value="{{ $note->patronymic }}"> 
            <input type="hidden" name="phone"       value="{{ $note->phone }}"> 

            <button name ='edit' type="submit" class="btn btn-info"  value='1'  >Редактировать</button>
            <button name = 'del' type="submit" class="btn btn-danger " value='2'>Удалить</button>
  </form>          
          </td>

    </tr>

        @endforeach 

        </table>





    </div>
    <div class="col-2"></div>
  </div>

</body>

@endsection