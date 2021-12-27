<main class="app-content">
    <div class="app-title">
        <div>
          <h1><?php echo $title;?></h1>
          <!-- <p>A free and open source Bootstrap 4 admin template</p> -->
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <!-- <li class="breadcrumb-item"><a href="#">Dashboard</a></li> -->
        </ul>
    </div>
    <div class="row">
        <div class="col-md-6 col-lg-3">
            <div class="widget-small primary coloured-icon">
                <i class="icon fa fa-users fa-3x"></i>
                <a href="<?php echo site_url('admin/user_transaction_list');?>">
                    <div class="info">
                        <h4>Transaction</h4>
                        <p><b><?= $transaction->total?></b></p>
                    </div>
                </a>
            </div>
        </div>
        
    </div>

</main>
    