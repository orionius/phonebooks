@extends('layouts.app')
@section('content')

    <body>


    <div class="container">
        <div class="row">
            <div class="col"></div>

            <div class="col-6">
                <form id="logout-form" action="{{ route('phone-insert') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="surname">Фамилия</label>
                        <input name="surname" type="text" class="form-control" id="password"
                               placeholder="Введите фамилию">
                    </div>

                    <div class="form-group">
                        <label for="firstname">Имя</label>
                        <input name="firstname" type="text" class="form-control" id="firstname"
                               placeholder="Введите Имя">
                    </div>


                    <div class="form-group">
                        <label for="patronymic">Отчество</label>
                        <input name="patronymic" type="text" class="form-control" id="patronymic"
                               placeholder="Введите Отчество">
                    </div>

                    <div class="form-group">
                        <label for="phone">Номер телефона</label>
                        <input type="tel" id="phone" name="phone" class="form-control" placeholder="Введите телефон"
                               pattern="8-[0-9]{3}-[0-9]{3}-[0-9]{2}-[0-9]{2}" value="{{ old('phone') }}">
                        <small>формат: 8-911-000-00-00</small>
                    </div>


                    <button type="submit" class="btn btn-primary">Добавить</button>
                </form>
            </div>
            <div class="col-2"></div>


        </div>


    </div>


    </body>
@endsection
