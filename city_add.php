<?php
include("header.php");


?>


<!--**********************************
            Content body start
        ***********************************-->
        <!-- <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, welcome back!</h4>
                            <span class="ml-1">Element</span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Element</a></li>
                        </ol>
                    </div>
                </div> -->
                
                <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Add City</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form method="post">

                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>City Name</label>
                                                <input type="text" class="form-control" name="City_Name" placeholder="Enter Your City Name">
                                            </div>
                                            </div>
                                            
                                        
                                        
                                        <button type="submit" name="submit" class="btn btn-primary">Add</button>
                                    </form>
                                </div>
                            </div>
                        </div>


                        </div>
                        </div>
                        

                        <?php

                        if(isset($_POST['submit'])){

                            $City_Name = $_POST['City_Name'];

                            $sql = "insert into cities (City_Name) values
                            ('$City_Name')";
                            $result = mysqli_query($conn, $sql);

                            echo "<script>
                            
                            alert('Your City Has Been Added!')
                            window.location.href='city_show.php'
                            </script>";
                        }

            include("footer.php")

        ?>