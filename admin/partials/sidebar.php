<!-- Page Area Start Here -->
        <div class="dashboard-page-one">
<!-- Sidebar Area Start Here -->
            <div class="sidebar-main sidebar-menu-one sidebar-expand-md sidebar-color">
               <div class="mobile-sidebar-header d-md-none">
                    <div class="header-logo">
                        <a href="index.html"><img src="img/logo1.png" alt="logo"></a>
                    </div>
               </div>
                <div class="sidebar-menu-content">
                    <ul class="nav nav-sidebar-menu sidebar-toggle-view">
                        
                        <?php if(isset($_SESSION['user_type'])){ ?>
                            <?php if($_SESSION['user_type'] == 'admin'){ ?>
                                    include                    
                            <?php } ?>
                            <?php if($_SESSION['user_type'] == 'user'){ ?>
                                                        
                            <?php } ?>
                            <?php if($_SESSION['user_type'] == 'lawyer'){ ?>
                                                        
                            <?php } ?>
                        <?php } else {?>

                        <?php } ?>    

                        
                </div>
            </div>
            <!-- Sidebar Area End Here -->