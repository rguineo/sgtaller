<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo $_SESSION["avatar"]; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION["nombre"];?></p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Buscar...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
<ul class="sidebar-menu" data-widget="tree">
  <li class="header">Menú</li>
    <!-- Optionally, you can add icons to the links -->
  <li class="active"><a href="home"><i class="fa fa-home"></i><span>Inicio</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a></li>
  <li class="active"><a href="cliente"><i class="fa fa-suitcase"></i><span>Cliente</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a></li>
  <li class="active"><a href="centros"><i class="fa fa-building"></i><span>Centros</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a></li>
  <li class="active"><a href="equipos"><i class="fa fa-television"></i><span>Equipos</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a></li>
  <li class="active"><a href="usuarios"><i class="fa fa-users"></i><span>Usuarios</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a></li>
  <li class="active"><a href="taller"><i class="fa fa-wrench"></i><span>Taller</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a></li>
  <li class="active"><a href="bodega"><i class="fa fa-building"></i><span>Bodega</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a></li>
  <li class="active"><a href="#"><i class="fa fa-user-secret"></i><span>Administrativo</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a></li>
  <li class="active"><a href="#"><i class="fa fa-file-word-o"></i><span>Informes</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a></li>
  <li class="active"><a href="#"><i class="fa fa-gear"></i><span>Configuración</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a></li>
</ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>