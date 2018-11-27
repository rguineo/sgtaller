<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
         <br><br>
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION["nombre"];?></p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
<ul class="sidebar-menu" data-widget="tree">
  <li class="header">Menú</li>
    <!-- Optionally, you can add icons to the links -->
  <li class=""><a href="home"><i class="fa fa-home"></i><span>Inicio</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a></li>
  <li class="treeview"><a href="#"><i class="fa fa-suitcase"></i><span>Empresas</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
 
  <ul class="treeview-menu">
      <li><a href="cliente"><i class="fa fa-user"></i> Empresas</a></li>

  </ul>
  </li>
 
  <li class=""><a href="centros"><i class="fa fa-building"></i><span>Centros</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a></li>
  <li class=""><a href="equipos"><i class="fa fa-television"></i><span>Equipos</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a></li>
  <li class="treeview"><a href="#"><i class="fa fa-cogs"></i> <span>Mantenedores</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
    <ul class="treeview-menu">
      <li><a href="pais"><i class="fa fa-circle-o"></i> País</a></li>
      <li><a href="region"><i class="fa fa-circle-o"></i> Región</a></li>
      <li><a href="ciudad"><i class="fa fa-circle-o"></i> Ciudad</a></li>
      <li><a href="#"><i class="fa fa-circle-o"></i> Comuna</a></li>
      <li><a href="marca"><i class="fa fa-circle-o"></i> Marca</a></li>
      <li><a href="#"><i class="fa fa-circle-o"></i> Modelo</a></li>

    </ul>
  </li>
  <li class=""><a href="productos"><i class="fa fa-beer"></i><span>Productos</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a></li>
  <li class=""><a href="stock"><i class="fa fa-cubes"></i><span>Stock</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a></li>

</ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>