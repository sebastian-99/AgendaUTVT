<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- Bootstrap 4.0-->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
body {
    background-color: transparent;
    background-image: url("https://scontent.ftlc1-1.fna.fbcdn.net/v/t1.0-9/150385_169349179749640_8149363_n.jpg?_nc_cat=105&ccb=2&_nc_sid=cdbe9c&_nc_ohc=Yf3zJF0rk68AX8e91pz&_nc_ht=scontent.ftlc1-1.fna&oh=dff4bac5db1ceae47ba2a33f5e937b5d&oe=5FC8102A");
    background-repeat: no-repeat;
    background-position: center top;
    background-attachment: fixed;
    background-size:100% 100%;
}
.abs-center {
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
}
 
.form {
  width: 450px;
  background-color: white;
}
 </style>
</head>
<body>
<div class="container">
  <div class="abs-center">
    <form method="POST" action="{{route('loginAuth')}}" class="border border-success p-3 form" >
    @csrf
    <div class="box box-solid bg-black">
        <div class="box-header with-border bg-black text-center">
            <h5 class="box-title">Sistema Agenda Electrónica Rectoría<br>UTVT</h5>
        </div>
        <ul>
            INICIAR SESIÓN
        </ul>
        <br>
    </div>
      <div class="form-group">
        <label for="email">Correo</label>
        <input type="email" name="email" id="email" class="form-control">
      </>
      <div class="form-group">
        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password" class="form-control">
      </div>
      @foreach ($errors->all() as $error)
        <div class="alert alert-warning">
           <h7>{{ $error }}</h7>
        </div>
        @endforeach

      <center>
      <button type="submit" class="btn btn-primary">ENTRAR</button><br><br>
      <a href="{{route('register')}}">
          <button type="button" class="btn btn-danger">REGISTRA UN USUARIO TEMPORAL HAMSTER</button>
       </a>
      </center>

    </form>
  </div>
</div>
</body>
</html>