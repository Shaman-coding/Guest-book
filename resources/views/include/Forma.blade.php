

@section('Forms')



<div class="Forms">
   <div class="form">
    <div class="mainText">
        <h2>Редактирование записей</h2>
    </div>
        <form action="main/forma" method="post">
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
                   <a href="../Page/edit.blade.php" class="btn btn-info">
                       <i class="glyphicon glyphicon-pencil"></i>
                   </a>

                   
                   <button class="btn btn-danger">
                       <i class="glyphicon glyphicon-trash"></i>
                   </button>
               </div>
           </div>
       </div>
    </div>


   
   
</div>

