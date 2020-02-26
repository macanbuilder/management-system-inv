<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

    <!-- Online Status -->
    <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('username'); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>


      <!-- <li>
          <a href="#"><span id="timestamp"></span></a>
      </li>
       -->
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        
        <li id="dashboardMainMenu">
          <a href="<?php echo base_url('dashboard') ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

        <?php if($user_permission): ?>
          <?php if(in_array('createUser', $user_permission) || in_array('updateUser', $user_permission) || in_array('viewUser', $user_permission) || in_array('deleteUser', $user_permission)): ?>
            <li class="treeview" id="userMainNav">
              <a href="#">
                <i class="fa fa-id-card"></i>
                <span>Data Pengguna</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <?php if(in_array('createUser', $user_permission)): ?>
                <li id="createUserSubNav"><a href="<?php echo base_url('users/create') ?>"><i class="fa fa-circle-o"></i> Add User</a></li>
                <?php endif; ?>

                <?php if(in_array('updateUser', $user_permission) || in_array('viewUser', $user_permission) || in_array('deleteUser', $user_permission)): ?>
                <li id="manageUserSubNav"><a href="<?php echo base_url('users') ?>"><i class="fa fa-circle-o"></i> Manage Users</a></li>
              <?php endif; ?>
              </ul>
            </li>
          <?php endif; ?>

          <?php if(in_array('createGroup', $user_permission) || in_array('updateGroup', $user_permission) || in_array('viewGroup', $user_permission) || in_array('deleteGroup', $user_permission)): ?>
            <li class="treeview" id="groupMainNav">
              <a href="#">
                <i class="fa fa-bars"></i>
                <span>Data Groups</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <?php if(in_array('createGroup', $user_permission)): ?>
                  <li id="createGroupSubMenu"><a href="<?php echo base_url('groups/create') ?>"><i class="fa fa-circle-o"></i> Add Group</a></li>
                <?php endif; ?>
                <?php if(in_array('updateGroup', $user_permission) || in_array('viewGroup', $user_permission) || in_array('deleteGroup', $user_permission)): ?>
                <li id="manageGroupSubMenu"><a href="<?php echo base_url('groups') ?>"><i class="fa fa-circle-o"></i> Manage Groups</a></li>
                <?php endif; ?>
              </ul>
            </li>
          <?php endif; ?>
        

        

        <!-- <li class="header">Settings</li> -->
        <?php if(in_array('createStore', $user_permission) || in_array('updateStore', $user_permission) || in_array('viewStore', $user_permission) || in_array('deleteStore', $user_permission)): ?>
          <li id="storesMainNav"><a href="<?php echo base_url('stores/') ?>"><i class="fa fa-briefcase"></i> <span>Data Stores</span></a></li>
        <?php endif; ?>

        <?php if(in_array('createTable', $user_permission) || in_array('updateTable', $user_permission) || in_array('viewTable', $user_permission) || in_array('deleteTable', $user_permission)): ?>
          <li id="tablesMainNav"><a href="<?php echo base_url('tables/') ?>"><i class="fa fa-table"></i> <span>Data Meja</span></a></li>
        <?php endif; ?>

        <?php if(in_array('createCategory', $user_permission) || in_array('updateCategory', $user_permission) || in_array('viewCategory', $user_permission) || in_array('deleteCategory', $user_permission)): ?>
          <li id="categoryMainNav"><a href="<?php echo base_url('category/') ?>"><i class="fa fa-industry"></i> <span>Data Sajian</span></a></li>
        <?php endif; ?>

        

        <?php if(in_array('createProduct', $user_permission) || in_array('updateProduct', $user_permission) || in_array('viewProduct', $user_permission) || in_array('deleteProduct', $user_permission)): ?>
            <li class="treeview" id="productMainNav">
              <a href="#">
                <i class="fa fa-qrcode"></i>
                <span>Data Produksi</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <?php if(in_array('createProduct', $user_permission)): ?>
                  <li id="createProductSubMenu"><a href="<?php echo base_url('products/create') ?>"><i class="fa fa-circle-o"></i> Add product</a></li>
                <?php endif; ?>
                <?php if(in_array('updateProduct', $user_permission) || in_array('viewProduct', $user_permission) || in_array('deleteProduct', $user_permission)): ?>
                <li id="manageProductSubMenu"><a href="<?php echo base_url('products') ?>"><i class="fa fa-circle-o"></i> Manage Products</a></li>
                <?php endif; ?>
              </ul>
            </li>
          <?php endif; ?>

          <?php if(in_array('createOrder', $user_permission) || in_array('updateOrder', $user_permission) || in_array('viewOrder', $user_permission) || in_array('deleteOrder', $user_permission)): ?>
            <li class="treeview" id="OrderMainNav">
              <a href="#">
                <i class="fa fa-money"></i>
                <span>Orders</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <?php if(in_array('createOrder', $user_permission)): ?>
                  <li id="createOrderSubMenu"><a href="<?php echo base_url('orders/create') ?>"><i class="fa fa-circle-o"></i> Add order</a></li>
                <?php endif; ?>
                <?php if(in_array('updateOrder', $user_permission) || in_array('viewOrder', $user_permission) || in_array('deleteOrder', $user_permission)): ?>
                <li id="manageOrderSubMenu"><a href="<?php echo base_url('orders') ?>"><i class="fa fa-circle-o"></i> Manage Orders</a></li>
                <?php endif; ?>
              </ul>
            </li>
          <?php endif; ?>

          <?php if(in_array('viewReport', $user_permission)): ?>
            <li class="treeview" id="ReportMainNav">
              <a href="#">
                <i class="fa fa-bar-chart"></i>
                <span>Reports</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <?php if(in_array('viewReport', $user_permission)): ?>
                  <li id="productReportSubMenu"><a href="<?php echo base_url('reports') ?>"><i class="fa fa-circle-o"></i> Product Wise</a></li>
                  <li id="storeReportSubMenu"><a href="<?php echo base_url('reports/storewise') ?>"><i class="fa fa-circle-o"></i> Total Store wise</a></li>
                <?php endif; ?>
              </ul>
            </li>
          <?php endif; ?>

          <?php if(in_array('updateCompany', $user_permission)): ?>
            <li id="companyMainNav"><a href="<?php echo base_url('company/') ?>"><i class="fa fa-building"></i> <span>Store Info</span></a></li>
          <?php endif; ?>

          <?php if(in_array('viewProfile', $user_permission)): ?>
            <li id="profileMainNav"><a href="<?php echo base_url('users/profile/') ?>"><i class="fa fa-user-secret"></i> <span>Profile</span></a></li>
          <?php endif; ?>
          <?php if(in_array('updateSetting', $user_permission)): ?>
            <li id="settingMainNav"><a href="<?php echo base_url('users/setting/') ?>"><i class="fa fa-wrench"></i> <span>Setting</span></a></li>
          <?php endif; ?>

        <?php endif; ?>
        

        <li><a href="<?php echo base_url('auth/logout') ?>"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <script type="text/javascript">
    $(function () {
        var serverTime = <?php if(!empty($timestamp)){ echo $timestamp; } ?>;
        var counterTime=0;
        var date;

        setInterval(function() {
          date = new Date();

          serverTime = serverTime+1;

          date.setTime(serverTime*1000);
          time = date.toLocaleTimeString();
          $("#timestamp").html(time);
        }, 1=3000);
    });
  </script>