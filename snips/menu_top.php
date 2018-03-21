<style type="text/css">
  .navbar {
 background: #f5f7fa;
     -moz-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.4);
    -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.4);
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.4); 
  width: 100%; /* hacemos que la cabecera ocupe el ancho completo de la página */
  left: 0; /* Posicionamos la cabecera al lado izquierdo */
  top: 0; /* Posicionamos la cabecera pegada arriba */
  position: fixed; /* Hacemos que la cabecera tenga una posición fija */
}

</style>

<nav class="navbar navbar-expand-lg navbar-light bg-faded">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" data-toggle="collapse" class="navbar-toggle d-lg-none float-left"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      <form role="search" class="navbar-form navbar-right mt-1">
        <div class="position-relative has-icon-right">
          <input type="text" placeholder="Search" class="form-control round"/>
          <div class="form-control-position"><i class="ft-search"></i></div>
        </div>
      </form>
    </div>
    <div class="navbar-container">
      <div id="navbarSupportedContent" class="collapse navbar-collapse">
        <ul class="navbar-nav">
          <li class="nav-item mr-2"><a id="navbar-fullscreen" href="javascript:;" class="nav-link apptogglefullscreen"><i class="ft-maximize font-medium-3 blue-grey darken-4"></i>
            <p class="d-none">fullscreen</p></a></li>
            <li class="dropdown nav-item"><a id="dropdownBasic3" href="#" data-toggle="dropdown" class="nav-link position-relative dropdown-toggle"><i class="ft-flag font-medium-3 blue-grey darken-4"></i><span class="selected-language d-none"></span></a>
              <?php include_once "snips/idioma.php" ?>
            </li>
            <li class="dropdown nav-item"><a id="dropdownBasic2" href="#" data-toggle="dropdown" class="nav-link position-relative dropdown-toggle"><i class="ft-bell font-medium-3 blue-grey darken-4"></i><span class="notification badge badge-pill badge-danger">4</span>
              <p class="d-none">Notifications</p></a>
              <?php include_once "snips/notificaciones.php" ?>
            </li>
            <li class="dropdown nav-item"><a id="dropdownBasic3" href="#" data-toggle="dropdown" class="nav-link position-relative dropdown-toggle"><i class="ft-user font-medium-3 blue-grey darken-4"></i>
              <p class="d-none">User Settings</p></a>
              <?php include_once "snips/profile.php" ?>
            </li>
            <li class="nav-item"><a href="javascript:;" class="nav-link position-relative notification-sidebar-toggle"><i class="ft-align-left font-medium-3 blue-grey darken-4"></i>
              <p class="d-none">Notifications Sidebar</p></a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>