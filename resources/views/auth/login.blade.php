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
    <div class="row">
      <div class="col">
        <center>
         <img src="https://drive.google.com/uc?export=view&id=1bXHMhWEjacmf5XNKi_O-_3uexu7Ggvxf" style="width: 200px">
         </center>
      </div>
  </div>
    <div class="box box-solid bg-black">
        <div class="box-header with-border bg-black text-center">
            <h5 class="box-title">Sistema Agenda Electrónica Rectoría<br>UTVT</h5>
        </div>
    </div>

    <b>INICIAR SESIÓN</b><br><br>
    <div class="form-group has-feedback">
        <input  class="form-control" placeholder="Email" name="email" id="email"  value="{{ old('email') }}" required>
        <span class="ion ion-email form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Contraseña" name="password" required>
        <span class="ion ion-locked form-control-feedback"></span>
      </div>
      @foreach ($errors->all() as $error)
        <div class="alert alert-warning">
           {{ $error }}
        </div>
      @endforeach

      <center>
      <button type="submit" class="btn btn-info btn-block margin-top-10">ENTRAR</button>


      <div class="row mx-auto my-3">
          <div class="col-12 text-center">
              <a data-toggle="modal" href="#modalLoad" disabled="true">¿Olvidaste tu contraseña?</a>
          </div>
      </div>     
      <div style="background-color: #EAE7E7; border-radius:10px; height: 110px;display: flex;justify-content: center;align-content: center;flex-direction: column;">
        UNIVERSIDAD TECNOLÓGICA DEL VALLE DE TOLUCA.<br>
        ¡Siempre Cuervos!
      </div>
     <!--  <a href="{{route('register')}}">
          <button type="button" class="btn btn-danger">REGISTRA UN USUARIO TEMPORAL HAMSTER</button>
       </a> -->
      </center>
    </form>
  </div>
</div>


<!-- Modal: modalCart -->
<div class="modal fade" id="modalLoad" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true" disabled="true">
  <div class="modal-dialog" role="document">
   
    <div class="modal-content">
      <div class="modal-body tex-justify">
    <center>
    <div class="login-logo">
    <img src="https://drive.google.com/uc?export=view&id=1bXHMhWEjacmf5XNKi_O-_3uexu7Ggvxf" style="width: 250px">
    </div>
    </center>
<p><b>Ingresa por favor tu Email</b></p>
<br>
<p>Te enviaremos tu contraseña temporal con la que puedes acceder a tu cuenta.</p>
<br>
<p>Te recomendamos cambiar tu contraseña una vez que accedas a la plataforma</p>
<div class="form-element">
<div class="form-group has-feedback">

   <form action="#" method = "POST">
      {{csrf_field()}}   
        <div class="form-group has-feedback">
        <input  class="form-control" placeholder="Email o matricula" name="email">
        <span class="ion ion-email form-control-feedback"></span>
      </div>
      </div>
      </div>
      <!--Footer-->
      
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancelar</button>
        <button class="btn btn-outline-primary">Recuperar</button>
      </div>
    
    </form>
    </div>
  </div>

<!-- Modal: modalCart -->
</body>
</html>