<link <link rel="stylesheet" type="text/css" href="css/style_login.css">
<div class="login-box">
  <h2>Login</h2>
  <form action="crear_usuario.php" method="POST"> 
        <div class="user-box">
      <input type="text" name="email" id="email" required="">
      <label>Correo</label>
    </div>
    <div class="user-box">
      <input type="text" name="nombre" id="nombre" required="">
      <label>Usuario</label>
    </div>
    <div class="user-box">
      <input type="password" name="contrasena" id="contrasena" required="">
      <label>Contraseña</label>
    </div>

<button type="submit" formaction="crear_usuario.php">Registrar Usuario</button>
<button type="submit" formaction="inicio.php">Iniciar Sesion</button >
     <img src="img/">
  </form>
</div>