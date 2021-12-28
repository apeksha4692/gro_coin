<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper farm-pg-ctnt mt-5">
    <!-- Main content -->
    <div class="container">
        <div class="row hm-main-cnt">
            <div class="col-sm-5">
                <div class="home-box" data-aos="zoom-in">
                    <div class="card-body">
                        <h2 class="card-title text-center"> Buy</h2>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="title">
                                    <b>Note : 1 GROL = 0.00003 BNB</b>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="stake_timestamp" class="stake_timestamp" value="1640001035">
                        <div class="stack-box">
                            <div class="row">
                                <div class="col-5  col-md-12">
                                    <label>GROL Token:</label>
                                </div>
                        <!--         <div class="col-7  col-md-7">
                                    <label>BNB:</label>
                                </div> -->
                                <div class="col-5  col-md-12">
                                    <input class="form-control" id="inp_amount" type="number" name="grol_token" autocomplete="off" onblur="getBNBAmt(this.value)" placeholder="GROL Token">
                                </div>


                                   <div class="col-5  col-md-12">
                                    <label>BNB:</label>
                                </div>
                                    <div class="col-5  col-md-12">
                                    <input class="form-control" type="text" readonly="" id="bnb_amount" placeholder="BNB Amount">
                                </div>

                                <input type="hidden" name="received_res" value="" id="received_res">
                                <input type="hidden" name="transaction_id" value="" id="transaction_id">

                                <div class="col-12 col-md-12 mt-2">
                                    <button type="submit" class="btn connect btn-block" onclick="changetransferToken();">Buy</button>
                                </div>
                            </div>
                        </div>
                        <!-- <p class="card-text">CAKE to Harvest</p>
                            <div>Locked</div>
                            
                            <p class="card-text">CAKE in Wallet:</p>
                            
                            <div>Locked</div>
                            
                            <a href="javascript:;" class="btn btn-primary btn-block">Unlock Wallet</a> -->
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!-- /.container-fluid -->
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script src="https://cdn.jsdelivr.net/gh/ethereum/web3.js@1.0.0-beta.34/dist/web3.min.js"></script>


<script type="text/javascript">
    function getBNBAmt(amt)
    {
      
        var grol_token = amt;
        console.log(grol_token);

        if (grol_token < 0 || grol_token == '') {
            alert('Please Enter Valid Amount');
            return;
        }

        bnb_amount = 0.00003 * grol_token;
        // $('#csm_amount').val('120');
        // $('#csm_amount').val(bnb_amount);
         
        console.log(bnb_amount);
      // var tokens = web3.utils.toWei(bnb_amount.toString(), 'ether')
      // var weiValue = web3.utils.toBN(tokens)

      $('#bnb_amount').val(bnb_amount);
    }

    async function loadWeb3() {
        if (window.ethereum) {
            window.web3 = new Web3(window.ethereum);
            window.ethereum.enable();
        }else {
            $("#checkMetamask").modal('show');
        }
    }

    async function loadContract() 
    {
        return await new window.web3.eth.Contract([{"inputs":[{"internalType":"contract GROToken","name":"_address","type":"address"}],"stateMutability":"payable","type":"constructor"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"tokenOwner","type":"address"},{"indexed":true,"internalType":"address","name":"spender","type":"address"},{"indexed":false,"internalType":"uint256","name":"tokens","type":"uint256"}],"name":"Approval","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"internalType":"uint256","name":"amount","type":"uint256"}],"name":"Bought","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"previousOwner","type":"address"},{"indexed":true,"internalType":"address","name":"newOwner","type":"address"}],"name":"OwnershipTransferred","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"internalType":"uint256","name":"amount","type":"uint256"}],"name":"Sold","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"from","type":"address"},{"indexed":true,"internalType":"address","name":"to","type":"address"},{"indexed":false,"internalType":"uint256","name":"tokens","type":"uint256"}],"name":"Transfer","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"internalType":"address","name":"_from","type":"address"},{"indexed":false,"internalType":"address","name":"_destAddr","type":"address"},{"indexed":false,"internalType":"uint256","name":"_amount","type":"uint256"}],"name":"TransferSent","type":"event"},{"inputs":[],"name":"APY","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"GRO","outputs":[{"internalType":"contract GROToken","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"PresellLaunch","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"PresellPercent","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"ReinvestmentFund","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"_decimalFactor","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"owner","type":"address"},{"internalType":"address","name":"delegate","type":"address"}],"name":"allowance","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"delegate","type":"address"},{"internalType":"uint256","name":"numTokens","type":"uint256"}],"name":"approve","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"availableTokensICO","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"tokenOwner","type":"address"}],"name":"balanceOf","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"_stakeholder","type":"address"}],"name":"calculateReward","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"charity","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"_numberOfTokens","type":"uint256"}],"name":"createStake","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"payable","type":"function"},{"inputs":[],"name":"creativeFund","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"decimalFactor","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"decimals","outputs":[{"internalType":"uint8","name":"","type":"uint8"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"distributeRewards","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"endICO","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"hardCap","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"_address","type":"address"}],"name":"isStakeholder","outputs":[{"internalType":"bool","name":"","type":"bool"},{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"managementSupport","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"marketing","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"maxPurchase","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"minPurchase","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"name","outputs":[{"internalType":"string","name":"","type":"string"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"numbersofslot","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"owner","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"poolPercent","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"_numberOfTokens","type":"uint256"}],"name":"removeStake","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"payable","type":"function"},{"inputs":[{"internalType":"address","name":"_stakeholder","type":"address"}],"name":"rewardOf","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"softCap","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"_stakeholder","type":"address"}],"name":"stakeOf","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"stakes","outputs":[{"internalType":"uint256","name":"amount","type":"uint256"},{"internalType":"uint256","name":"stakeTime","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"endDate","type":"uint256"},{"internalType":"uint256","name":"_minPurchase","type":"uint256"},{"internalType":"uint256","name":"_maxPurchase","type":"uint256"},{"internalType":"uint256","name":"_availableTokens","type":"uint256"},{"internalType":"uint256","name":"_softCap","type":"uint256"},{"internalType":"uint256","name":"_hardCap","type":"uint256"},{"internalType":"uint256","name":"_poolPercent","type":"uint256"}],"name":"startICO","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"symbol","outputs":[{"internalType":"string","name":"","type":"string"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"token","outputs":[{"internalType":"contract BEP20","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"tokenPrice","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"totalSupply","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"totalTokenStaked","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"receiver","type":"address"},{"internalType":"uint256","name":"numTokens","type":"uint256"}],"name":"transfer","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"owner","type":"address"},{"internalType":"address","name":"buyer","type":"address"},{"internalType":"uint256","name":"numTokens","type":"uint256"}],"name":"transferFrom","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"newOwner","type":"address"}],"name":"transferOwnership","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"owner","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"},{"internalType":"uint256","name":"numTokens","type":"uint256"}],"name":"transferToken","outputs":[{"internalType":"string","name":"","type":"string"},{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"payable","type":"function"},{"inputs":[{"internalType":"address","name":"_stakeholder","type":"address"}],"name":"viewReward","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"withdrawReward","outputs":[],"stateMutability":"nonpayable","type":"function"}],'0xF884ef0b1cF9f4Ff7a03c1d3Cc77b3f05E65aEc8');
    }

    async function getCurrentAccount() {
        const accounts = await window.web3.eth.getAccounts();
        return accounts[0];r
    }

    async function changetransferToken() 
    {
        console.log('transferToken');

        window.web3 = new Web3(window.ethereum);
        window.ethereum.enable();   

        const accounts = await window.web3.eth.getAccounts();
        console.log('accounts',accounts[0]);
        $('.loginAddress').val(accounts[0]);

        await loadWeb3();
        window.contract = await loadContract();

    
        var grol_token = $('#inp_amount').val();
        console.log('grol_token',grol_token);


        if (grol_token < 0 || grol_token == '') {
            toastr.error('Please Enter Valid Amount'); 
            return;
        }

        if (ethereum && ethereum.isMetaMask) {
          console.log('Ethereum successfully detected!');
        } else {
          $("#checkMetamask").modal('show');
        }

        bnb_amount = 0.00003 * grol_token;
         
        console.log(bnb_amount);
        console.log(bnb_amount.toString());


        var amount = bnb_amount.toFixed(5);
        var tokens = web3.utils.toWei(amount.toString(), 'ether')
        var bntokens = web3.utils.toBN(tokens)


        console.log('tokens',tokens);
        console.log('weiValue',bntokens);

        const receiverAddress = accounts[0];
        console.log(receiverAddress);

        await window.contract.methods
            .transferToken("0x79319a973be6c6f0cbad2206ea4f6573a9ecf223", bntokens,grol_token)
            .send({ from: receiverAddress, value: bntokens,gas: 4000000 }, function (err, res) {
              if (err) {
                console.log("An error occured", err)
                return
            }
            console.log('done');
            console.log("Hash of the transaction: " + res)

            $('#transaction_id').val(res);
       });

        await window.contract.methods.balanceOf(receiverAddress).call(function (err, received_res) {
            if (err) {
              console.log("An error occured", err)
              return
            }
            console.log("The balanceOf is: ", received_res)

            $('#received_res').val(received_res);
        });


        var get_total_grol  = $('#received_res').val();
        var get_transaction_id = $('#transaction_id').val();
        var grol_token = $('#inp_amount').val();

        $.ajax({
            url: "<?php echo site_url("buy_token"); ?>",
            type: "post",
            dataType: "json",
            data: { 
              get_total_grol: get_total_grol,
              transaction_id: get_transaction_id,
              bnb_amount: amount,
              grol_token: grol_token,
              loginAddress: receiverAddress,

            },
            success: function(response) 
            {
                console.log('done');
                console.log(response);

                if(response == 1){
                  toastr.success('You get GROL token successfully');
                }else{
                  toastr.error('Something went wrong'); 
                }
                 location.reload()
            }
        });
    }

    
    function updateStatus(status) {
        const statusEl = document.getElementById('status');
        statusEl.innerHTML = status;
        console.log(status);
    }

    load();
</script>