<!-- Page Area Start Here -->
        <div class="dashboard-page-one">
<!-- Sidebar Area Start Here -->
            <div class="sidebar-main sidebar-menu-one sidebar-expand-md sidebar-color">
               <div class="mobile-sidebar-header d-md-none">
                    <div class="header-logo">
                        <a href="index.html"><img src="img/legal1.png" alt="logo"></a>
                    </div>
               </div>
                <div class="sidebar-menu-content">
                    <ul class="nav nav-sidebar-menu sidebar-toggle-view">
                        
                        <?php
                        //echo '<pre>';
                        //print_r($_SESSION);exit;
                         if(isset($_SESSION['user_type'])){
                            if($_SESSION['user_type'] == 'admin'){
                                include 'admin-sidebar-part.php';                 
                            }
                            if($_SESSION['user_type'] == 'user'){
                                include 'user-sidebar.php';                          
                            }
                            if($_SESSION['user_type'] == 'lawyer'){
                                include 'lawyer-sidebar.php';                          
                            }
                            }else {
                                include 'visitor-sidebar.php';  
                         }    
                        ?>
                </ul>        
                </div>
            </div>
            <!-- Sidebar Area End Here -->