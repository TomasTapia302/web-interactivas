<nav style="display: flex; justify-content: space-between; align-items: center;">
    <!-- Sección Izquierda -->
    <ul style="list-style: none; display: flex; gap: 20px;">
      <li><a href="/home">Inicio</a></li>
      <li><a href="/hombres">Hombres</a></li>
      <li><a href="/mujeres">Mujeres</a></li>
      <li><a href="/ninos">Niños</a></li>
      <li><a href="/accesorios">Accesorios</a></li>
    </ul>
  
    <!-- Sección Derecha -->
    <div style="display: flex; align-items: center; gap: 20px;">
      <a href="/cart">Carrito</a>
      <a href="/orders">Órdenes</a>
      
      <!-- Menú Desplegable de Usuario -->
      <div class="dropdown">
        <button class="dropbtn">Usuario</button>
        <div class="dropdown-content" style="display: none; position: absolute;">
          <a href="/profile">Mi Perfil</a>
          <a href="/mis-articulos">Mis Artículos</a>
          <a href="/ganancias">Ganancias</a>
          <a href="/logout">Cerrar Sesión</a>
        </div>
      </div>
    </div>
  </nav>
  
  <script>
    // Script para mostrar el menú desplegable
    document.querySelector('.dropbtn').addEventListener('click', function() {
      var dropdownContent = document.querySelector('.dropdown-content');
      dropdownContent.style.display = dropdownContent.style.display === 'block' ? 'none' : 'block';
    });
  
    // Cerrar el menú si se hace clic fuera de él
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        for (var i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.style.display === 'block') {
            openDropdown.style.display = 'none';
          }
        }
      }
    }
  </script>
  