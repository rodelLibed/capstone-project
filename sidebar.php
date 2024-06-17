<div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                    class="fas fa-user me-2"></i>Plant Monitor</div>
            <div class="list-group list-group-flush my-3">
                <a href="user_dash.php" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="sidebar1" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-sun me-2"></i>Temperature</a>
                <a href="sidebar2" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-cloud me-2"></i>Humidity</a>
                <a href="sidebar3" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-map me-2"></i>Heat Index</a>
                <a href="sidebar4" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-signal me-2"></i>Soil Moisture Logs</a>
               

                        <form action="logout" method="POST">
                                        <button type="submit" name="logout_btn" class="list-group-item 
                                        list-group-item-action bg-transparent text-danger fw-bold">
                                        <i class="fas fa-power-off me-2"></i>Logout</button>
                                    </form>
                        
               
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">ISABELA STATE UNIVERSITY ANGADANAN CAMPUS</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i><?php echo $_SESSION['auth_user']['user_name']; ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                
                                <li>
                                    <form action="logout" method="POST">
                                        <button type="submit" name="logout_btn" class="dropdown-item">Logout</button>
                                    </form>
                                </li>
                                
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                
                                <p class="fs-5">Temperature</p>
                                <?php
                                   $dash_query = "SELECT * FROM t_sensors";
                                   $dash_query_run = mysqli_query($conn, $dash_query);

                                   if($total = mysqli_num_rows($dash_query_run)){
                                        echo ' <h1 class="mb-0">'.$total.'</h1>';
                                   }else{
                                    echo ' <h1 class="mb-0">0</h1>';
                                   }

                                ?>
                               
                            </div>
                            <i class="fas fa-sun fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                
                                <p class="fs-5">Humidity</p>
                                <?php
                                   $dash_query = "SELECT * FROM t_sensors";
                                   $dash_query_run = mysqli_query($conn, $dash_query);

                                   if($total = mysqli_num_rows($dash_query_run)){
                                        echo ' <h1 class="mb-0">'.$total.'</h1>';
                                   }else{
                                    echo ' <h1 class="mb-0">0</h1>';
                                   }

                                ?>
                            </div>
                            <i
                                class="fas fa-cloud fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                 
                                <p class="fs-5">Soil Moisture</p>
                                <?php
                                   $dash_query = "SELECT * FROM t_sensors";
                                   $dash_query_run = mysqli_query($conn, $dash_query);

                                   if($total = mysqli_num_rows($dash_query_run)){
                                        echo ' <h1 class="mb-0">'.$total.'</h1>';
                                   }else{
                                    echo ' <h1 class="mb-0">0</h1>';
                                   }

                                ?>
                            </div>
                            <i class="fas fa-map fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                               
                                <p class="fs-5">Watering Logs</p>
                                <?php
                                   $dash_query = "SELECT * FROM t_sensors";
                                   $dash_query_run = mysqli_query($conn, $dash_query);

                                   if($total = mysqli_num_rows($dash_query_run)){
                                        echo ' <h1 class="mb-0">'.$total.'</h1>';
                                   }else{
                                    echo ' <h1 class="mb-0">0</h1>';
                                   }

                                ?>
                            </div>
                            <i class="fas fa-water fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>
                </div>
             

            </div>
                  <!--Graph-->
                   <div class="container">
                      <div class="row justify-content-center">
                          
                          <div class="col1 col-lg-5"><canvas id="myChart" ></canvas></div>
                          <div class="col2 col-lg-5"><canvas id="Chart" ></canvas></div>
                          <div class="col2 col-lg-5"><canvas id="Chart3" ></canvas></div>
                          <div class="col2 col-lg-5"><canvas id="Chart4" ></canvas></div>
                      </div>
                   </div>
                    
                        
                        
              
                
        </div>
    </div>