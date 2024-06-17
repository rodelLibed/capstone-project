
     <?php 
     include_once('admin/config/conn.php');
       if(isset($_GET['page_no']) && $_GET['page_no'] !=="" ){
        $page_no = $_GET['page_no'];
       }else{
        $page_no = 1;
       }

       $total_records_per_page = 10;
       $offset = ($page_no -1) * $total_records_per_page;

       $previous = $page_no - 1;
       $next = $page_no + 1;
       $result_count = mysqli_query($conn, "SELECT COUNT(*) as total_records from t_sensors")
       or die(mysqli_error($conn));

       $records = mysqli_fetch_array($result_count);
       $total_records = $records['total_records'];
       $total_no_pages = ceil($total_records / $total_records_per_page);

       $sql = "SELECT * FROM t_sensors LIMIT $offset, $total_records_per_page";
       $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

       

     

     
     ?>
  
                         <div class="chartCard" style="width: 100%;
                                    padding: 20px;
                                    border-radius: 20px;
                                    
                                    background: white;"> 
                                        <!--  <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">	-->
                                     <form action="" method="POST">					
                                            <button type="submit"name="dataExport"class="btn btn-success " 
                                            style="border-radius: 20px; float: right; margin-top:0;">
                                            Export
                                            </button>
                                    </form>
                                   

                                    From: <input id="start" type="date"  value="2022-11-02"> To: 
                                   <input id="end" type="date"  value="2022-11-05"> <button onclick="filterDate()">
                                    Filter Date</button><button onclick="resetDate()" style="margin-left: 5px;">Reset</button>  
                                    
                             <canvas id="myChart" ></canvas>                           
                             <div class="row mt-5">

                                <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Soil Moisture</h4>
                                    </div>
                                        <div class="card-body">
                                        <table id="" class="table table-bordered">
                                            <tr>
                                                <th>id</th>
                                                <th>Temperature</th>
                                                <th>date</th>
                                            
                                            </tr>
                                        <tbody>
                                            <?php while($row = mysqli_fetch_array($result)) { ?>
                                            <tr>
                                            <td><?=$row ['id']; ?></td>
                                            <td><?= $row ['soil_moisture']; ?></td>
                                            <td><?=  $row ['date']; ?></td>  
                                                  
                                            </tr>
                                            <?php } mysqli_close($conn) ?>
                                        </tbody>
                                     </table>		

                                         <nav aria-label="Page">
                                            <ul class="pagination">

                                                <li class="page-item"><a class="page-link" <?=
                                                ($page_no <=1)? 'disabled' : '';?> <?=
                                                ($page_no > 1)? 'href=?page_no='. $previous: '';?> >
                                                    Previous
                                                </a></li>

                                                <li class="page-item"><a class="page-link" href="">
                                                    1
                                                </a></li>
                                                <li class="page-item"><a class="page-link" href="">
                                                    2
                                                </a></li>
                                                <li class="page-item"><a class="page-link" href="">
                                                    3
                                                </a></li>

                                                <li class="page-item"><a class="page-link" <?=
                                                ($page_no >= $total_no_pages)? 'disabled' : '';?>
                                                <?=
                                                ($page_no < $next)? 'href=?page_no='. $next: '';?>>
                                                    Next
                                                </a></li>
                                            </ul>
                                         </nav>
                                         <div class="p-10">
                                            <strong>Page <?= $page_no; ?>of <?= $total_records_per_page?></strong>
                                         </div>
                                        </div>
                                </div>
                                </div>
                              </div>
                         </div>
                      
                    
                        
                        
              
                
        </div>