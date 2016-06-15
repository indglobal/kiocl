<!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo base_url(); ?>assets/admin.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p> <?php echo $this->session->userdata['is_logged_in']['email_address']; ?></p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
              <a href="<?php echo base_url(); ?>admin/home">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> 
              </a>
             
            </li>
            <?php if($this->session->userdata['is_logged_in']['email_address'] == "admin@gmail.com") { ?>
            <li class="treeview">
              <a href="<?php echo base_url(); ?>admin/unit">
                <i class="fa fa-files-o"></i>
                <span>Units</span>
               
              </a>
             
            </li>
            <li>
              <a href="<?php echo base_url(); ?>admin/departments">
                <i class="fa fa-th"></i> <span>Department</span> 
              </a>
            </li>
            
             <li>
              <a href="<?php echo base_url(); ?>admin/User">
                <i class="fa fa-th"></i> <span>User</span> 
              </a>
            </li>
            
            <li>
              <a href="<?php echo base_url(); ?>admin/categories">
                <i class="fa fa-th"></i> <span>Menu</span> 
              </a>
            </li>

             <li>
              <a href="<?php echo base_url(); ?>admin/subcategories">
                <i class="fa fa-th"></i> <span>Submenu</span> 
              </a>
            </li>


            <li>
              <a href="<?php echo base_url(); ?>admin/content_types">
                <i class="fa fa-th"></i> <span>Content Types</span> 
              </a>
            </li>


            <li>
              <a href="<?php echo base_url(); ?>cms/list_of_subcategories">
                <i class="fa fa-th"></i> <span>CMS</span> 
              </a>
            </li>
            
            <li>
              <a href="<?php echo base_url(); ?>cms/whatsnew">
                <i class="fa fa-th"></i> <span>Whats New</span> 
              </a>
            </li>

             <li>
              <a href="<?php echo base_url(); ?>images_examples/example4">
                <i class="fa fa-th"></i> <span>Gallery</span> 
              </a>
            </li>

            <li>
              <a href="<?php echo base_url(); ?>admin/manage">
                <i class="fa fa-th"></i> <span>Manage</span> 
              </a>
            </li>

<?php } else {  ?>

            <li>
              <a href="<?php echo base_url(); ?>admin/manage">
                <i class="fa fa-th"></i> <span>Manage</span> 
              </a>
            </li>
            <?php } ?>



            
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>