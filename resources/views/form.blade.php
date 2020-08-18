@extends('page.home')
 @section('book')Гостевая книга@endsection
@section('content')
<div class="Forms">
    <div class="form">
    
        <form action="" method="post">
            <div class="form-group">
                <label for="name">Введите имя</label>
                <input type="name" placeholder="Введите имя" id="name" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Введите email</label>
                <input type="email" placeholder="Введите email" id="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="message">Введите сообщение</label>
                <textarea name="message" id="message" cols="10" rows="5" class="form-control" placeholder="Введите сообщение"></textarea> 
            </div>
            <div class="form-group">
                <input  class="btn btn-primary" type="submit" value="Добавить"> 
            </div>
        </form>
    </div>
    
    <div class="text-right"><b>Всего сообщений:</b> <i class="badge">0</i></div>
    <br/>

    <div class="messages">
        <div class="panel panel-default">

            <div class="panel-heading">
                <h3 class="panel-title">
                    <span>Кирилл</span>
                    <span class="pull-right label label-info">15:26:00 / 17.08.2020</span>
                </h3>
            </div>
            <div class="panel-body">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                <hr/>
                <div class="pull-right">
                    <a href="/edit-form" class="btn btn-info">
                        <i class="glyphicon glyphicon-pencil"></i>
                    </a>

                    
                    <button class="btn btn-danger" type="submit">
                        <i class="glyphicon glyphicon-trash"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection