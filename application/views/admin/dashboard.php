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
        <div class="col-md-6 col-lg-4">
            <div class="widget-small primary coloured-icon">
                <i class="icon fa fa-users fa-3x"></i>
                <a href="#">
                    <div class="info">
                        <h4>Total Token</h4>
                        <p><b>5000000 GROL</b></p>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="widget-small primary coloured-icon">
                <i class="icon fa fa-users fa-3x"></i>
                <a href="#">
                    <div class="info">
                        <h4>Total Remaining Token</h4>
                        <p><b class="total_remaining_token"></b></p>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="widget-small primary coloured-icon">
                <i class="icon fa fa-users fa-3x"></i>
                <a href="<?php echo site_url('admin/user_token_list');?>">
                    <div class="info">
                        <h4>Total Token Supply</h4>
                        <p><b class="total_token_supply"></b></p>
                    </div>
                </a>
                <input type="hidden" name="total_grol_token" value="<?= $grol_token->total?>" class="total_grol_token">
            </div>
        </div>
        

        <div class="col-md-6 col-lg-4">
            <div class="widget-small primary coloured-icon">
                <i class="icon fa fa-users fa-3x"></i>
                <a href="<?php echo site_url('admin/user_list');?>">
                    <div class="info">
                        <h4>Users</h4>
                        <p><b><?= $users->total?></b></p>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="widget-small primary coloured-icon">
                <i class="icon fa fa-users fa-3x"></i>
                <a href="<?php echo site_url('admin/transaction_list');?>">
                    <div class="info">
                        <h4>Transaction</h4>
                        <p><b><?= $transaction->total?></b></p>
                    </div>
                </a>
            </div>
        </div>

    </div>

</main>

  <script src="https://cdn.jsdelivr.net/gh/ethereum/web3.js@1.0.0-beta.34/dist/web3.min.js"></script>
<script type="text/javascript">

    $(document).ready(function() { 
        if (window.ethereum) {
            window.web3 = new Web3(window.ethereum);
            window.ethereum.enable();
        }else {
            $("#checkMetamask").modal('show');
        }

        var total_grol_token = $('.total_grol_token').val();
        console.log(total_grol_token);

        var grol_token = total_grol_token/100000;
        var grolToken = grol_token.toFixed(5);

        console.log('tokens',grol_token);
        console.log('weiValue',grolToken);


        $('.total_token_supply').text(grolToken);

        var remaining_token = 5000000 - grolToken;
        $('.total_remaining_token').text(remaining_token);

    });
</script>