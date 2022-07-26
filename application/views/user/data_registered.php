
<!-- Preloader -->
  <div class="preloader">
        <div class="loading">
            <img src="<?php echo base_url(); ?>assets/img/telkom.png" style="width:50px;">
            <p>Loading...</p>
        </div>
    </div>


<body class="bg-gradient-warning">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4"><b>Your Data Has Been Registered</b></h1>
                                    <h2 class="h6 text-gray-450 mb-4"><b>Please wait, you will be redirected...</b></h2>
                                    <?php
                                    header('Refresh: 3; URL=login');
                                    //other code
                                    ?>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    