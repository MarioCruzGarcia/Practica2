<!DOCTYPE html>
<html>
<head>
  <title>Página web</title>
  <link rel="stylesheet" type="text/css" href="../asset/css/style.css">
  <link rel="stylesheet" type="text/css" href="../asset/css/private.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
  <header>
    <nav class="navbar">
      <div class="navbar-brand">
        <a href="#">Logo</a>
      </div>
      <p>Vista de Admin</p>
      <div class="user-profile">
        <img src="../asset/img/profile-pic.jpg" alt="Foto de perfil" class="profile-pic" id="dropdownMenuLink">
        <a href="#" class="username" id="dropdownMenuLink"><?php echo $_SESSION['user']['email']?> <i class="fas fa-caret-down"></i></a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="edit-perfil"><i class="fas fa-user"></i> Ver perfil</a>
          <?php if($_SESSION['user']['rol_id'] == 2){
            echo '<a class="dropdown-item" href="destroy-perfil"><i class="fas fa-user-slash"></i> Eliminar cuenta</a>';
          }
          ?>
          <a class="dropdown-item" href="index-user"><i class="fas fa-users"></i> Ver usuarios</a>
          <a class="dropdown-item" href="logout"><i class="fas fa-sign-out-alt"></i> Cerrar sesión</a>
        </div>
      </div>
    </nav>
  </header>
  
  <main>
  <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Rol</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $juegos = new Juegos();
            $juego = $juegos -> findAll()->fetchAll();
                # Cargamos las filas con los datos a la tabla
                foreach ($juego as $key => $value) {
                    echo "<tr>";
                    echo    "<td>".$value['id']."</td>";
                    echo    "<td>" . $value['nombre'] ."</td>";
                    echo    "<td>" . $value['categoria'] ."</td>";
                    echo    "<td>" . $value['precio'] . "</td>";
                    echo '<td>
                    <a href="'.'">Editar</a> <a href="'.'">Eliminar</a>
                          </td>';
                         
                  
                }
            ?>
            
        </tbody>
    </table>
  </main>
</body>
</html>
