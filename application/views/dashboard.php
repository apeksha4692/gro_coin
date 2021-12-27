<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper farm-pg-ctnt mt-5">
    <!-- Main content -->
    <div class="container">
        <div class="row hm-main-cnt">
            <div class="col-sm-5">
                <div class="home-box" data-aos="zoom-in">
                    <div class="card-body">
                        <h2 class="card-title text-center"> Staking</h2>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="title">
                                    <b>GROL</b>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="stake_timestamp" class="stake_timestamp" value="1640001035">
                        <div class="stack-box">
                            <div class="row">
                                <div class="col-5  col-md-5">
                                    <label>APY</label>
                                </div>
                                <div class="col-7  col-md-7">
                                    <span class="fr apy">~0.00%</span>
                                </div>
                                <div class="col-5  col-md-5">
                                    <label>Start</label>
                                </div>
                                <div class="col-7  col-md-7">
                                    <span class="start_time fr">1 Jun, 2021 1:30 AM</span>
                                    <input type="hidden" name="start_time" value="" class="startTime">
                                </div>
                                <div class="col-5  col-md-5">
                                    <label>Finish</label>
                                </div>
                                <div class="col-7  col-md-7">
                                    <span class="finish_time fr">11 Jul, 2021 1:30 AM</span>
                                    <input type="hidden" name="finish_time" value="" class="finishTime">
                                </div>
                                <div class="col-5  col-md-5">
                                    <label>Your Stake</label>
                                </div>
                                <div class="col-7  col-md-7">
                                    <span class="your_stake fr">0 GROL</span>
                                    <input type="hidden" name="stakeAmount" value="" class="stakeAmount">
                                </div>
                                <div class="col-5  col-md-5">
                                    <label>Your Reward</label>
                                </div>
                                <div class="col-7  col-md-7">
                                    <span class="your_reward fr">0 BNB</span>
                                    <input type="hidden" name="stakeReward" value="" class="stakeReward">
                                </div>
                                <div class="col-12 col-md-12 mt-2">
                                    <input id="numberOfstakeTokens" class="form-control input-lg" type="number" name="number" value="1" min="1" pattern="[0-9]">
                                    <input type="hidden" name="staketransaction_id" value="1555" id="staketransaction_id">
                                    <input type="hidden" name="stake_amount" value="1555" class="stake_amount">

                                </div>
                                <div class="col-12 col-md-12 mt-2">
                                    <button type="submit" class="btn connect btn-block" onclick="startStaking();">Stake</button>
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
            <div class="col-sm-5">
                <div class="home-box" data-aos="zoom-in">
                    <div class="card-body">
                        <h2 class="card-title text-center"> Withdraw Staking</h2>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="title">
                                    <b>GROL</b>
                                </div>
                            </div>
                        </div>
                        <div class="stack-box">
                            <div class="row">
                                <div class="col-5  col-md-5">
                                    <label>APY</label>
                                </div>
                                <div class="col-7  col-md-7">
                                    <span class="fr apy">~0.00%</span>
                                </div>
                                <div class="col-5  col-md-5">
                                    <label>Start</label>
                                </div>
                                <div class="col-7  col-md-7">
                                    <span class="start_time fr">1 Jun, 2021 1:30 AM</span>
                                    <input type="hidden" name="start_time" value="" class="startTime">
                                </div>
                                <div class="col-5  col-md-5">
                                    <label>Finish</label>
                                </div>
                                <div class="col-7  col-md-7">
                                    <span class="finish_time fr">11 Jul, 2021 1:30 AM</span>
                                    <input type="hidden" name="finish_time" value="" class="finishTime">
                                </div>
                                <div class="col-5  col-md-5">
                                    <label>Your Stake</label>
                                </div>
                                <div class="col-7  col-md-7">
                                    <span class="your_stake fr">0 GROL</span>
                                    <input type="hidden" name="stakeAmount" value="" class="stakeAmount">
                                </div>

                                <div class="col-5  col-md-5">
                                    <label>Your Reward</label>
                                </div>
                                <div class="col-7  col-md-7">
                                    <span class="your_reward fr">0 BNB</span>
                                    <input type="hidden" name="stakeReward" value="" class="stakeReward">
                                </div>
                                <div class="col-12 col-md-12 mt-2">
                                    <input id="numberOfunstakeTokens" class="form-control input-lg" type="number" name="number" value="1" min="1" pattern="[0-9]">
                                    <input type="hidden" name="unstaketransaction_id" value="ddertrgfd43" id="unstaketransaction_id">

                                </div>
                                <div class="col-12 col-md-12 mt-2">
                                    <button type="submit" class="btn connect btn-block" onclick="startUnStaking()">Unstake</button>
                                </div>
                            </div>
                        </div>
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

    async function loadWeb3() {
      // console.log('gfdg',window.ethereum);
        if (window.ethereum) {
            window.web3 = new Web3(window.ethereum);
            window.ethereum.enable();   

            const accounts = await window.web3.eth.getAccounts();
            $('.loginAddress').val(accounts[0]);             
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

    async function startStaking() {
        console.log('createStake');

        window.web3 = new Web3(window.ethereum);
        window.ethereum.enable();   

        const accounts = await window.web3.eth.getAccounts();
        console.log('accounts',accounts[0]);
        $('.loginAddress').val(accounts[0]);

        await loadWeb3();
        window.contract = await loadContract();
        console.log('fdsfsd');


        // const account = await getCurrentAccount();
        const loginAddress = accounts[0];
        // console.log(loginAddress);

        var numberOfTokens = $('#numberOfstakeTokens').val();

        await window.contract.methods
           .createStake(numberOfTokens)
           .send({ from: loginAddress,value: Number(numberOfTokens * 100000000000000000),gas: 4000000 }, function (err, res) {
             if (err) {
               console.log("An error occured", err)
               return
             }
             console.log('done');
             console.log("Hash of the transaction: " + res)

             $('#staketransaction_id').val(res);
        });

        var staketransaction_id = $('#staketransaction_id').val();

        await window.contract.methods.stakes(loginAddress).call(function (err, stakes) {
           if (err) {
             console.log("An error occured", err)
             return
           }
            console.log("stakes", stakes)
           var stake_timestamp = stakes.stakeTime;
           var stake_amount = stakes.amount;

           $('.stake_timestamp').val(stake_timestamp);
           $('.stake_amount').val(stake_amount);
        });
        var stake_amount = $('.stake_amount').val();

        var user_stake = stake_amount/100000000000000000;
        var userStake = user_stake + ' GROL';

        $('.your_stake').html(userStake);
        $('.stakeAmount').val(user_stake);

        await window.contract.methods.viewReward(loginAddress).call(function (err, reward) {
            if (err) {
               console.log("An error occured", err)
               return
           }
           console.log("reward is: ", reward)
            if (reward == 0) {
                rew = 0
            }
            else {
                var rew = web3.utils.fromWei(reward.toString(), 'ether');
            }
            console.log("reward", rew)
            $('.your_reward').html(rew + ' ETH');
            $('.stakeReward').val(rew);
        });


        var stakeReward = $('.stakeReward').val();
        var stakeAmount = $('.stakeAmount').val();

        var startDateTime = $('.startTime').val();
        var finishDateTime =  $('.finishTime').val();

        // location.reload();

        $.ajax({
            url: "<?php echo site_url("staking"); ?>",
            type: "POST",
           data :{
               numberOfTokens       : numberOfTokens,
               stakeAmount          : stakeAmount,
               startDateTime        : startDateTime,
               finishDateTime       : finishDateTime,
               staketransaction_id  : staketransaction_id,
               stakeReward          : stakeReward,
               loginAddress         : loginAddress,
           },
            success: function (response) 
            {
                console.log(response);
                 
                if(response == '1'){
                    toastr.success('You stake token successfully');
                }else{
                    toastr.error('Something went wrong'); 
                }
                
                location.reload();
            }
        });


    }

    async function startUnStaking() 
    {
        console.log('removeStake');

        var numberOfunstake = $('#numberOfunstakeTokens').val();
        var user_stake = $('.stakeAmount').val();

        console.log('user_stake',user_stake)

        if(user_stake != numberOfunstake){
            toastr.error('You have to unstake all your tokens'); 
            return;
        }

        const account = await getCurrentAccount();
        const loginAddress = account;

        // await window.contract.methods.removeStake(loginAddress).call(function (err, stake) {
        //   if (err) {
        //     console.log("An error occured", err)
        //     return
        //   }
        //   console.log("balance is: ", stake)
        // });

        await window.contract.methods
          .removeStake(numberOfunstake)
          .send({ from: loginAddress,gas: 4000000 }, function (err, res) {
            if (err) {
              console.log("An error occured", err)
              return
            }else{

              console.log('done');
              console.log("Hash of the transaction: " + res)
            }

            $('#unstaketransaction_id').val(res);
        });

        

        var unstaketransaction_id = $('#unstaketransaction_id').val();

        //  var tokens =  numberOfunstake + ' Bharat';

        // $('.your_stake').html(tokens);
        // $('.stakeAmount').val(numberOfunstake);

        await window.contract.methods.stakes(loginAddress).call(function (err, stakes) {
           if (err) {
             console.log("An error occured", err)
             return
           }
            console.log("stakes", stakes)
           var stake_timestamp = stakes.stakeTime;
           var stake_amount = stakes.amount;

           $('.stake_timestamp').val(stake_timestamp);
           $('.stake_amount').val(stake_amount);
        });
        var stake_amount = $('.stake_amount').val();

        var user_stake = stake_amount/100000000000000000;
        var userStake = user_stake + ' GROL';

        $('.your_stake').html(userStake);
        $('.stakeAmount').val(user_stake);

        await window.contract.methods.viewReward(loginAddress).call(function (err, reward) {
            if (err) {
               console.log("An error occured", err)
               return
           }
           console.log("reward is: ", reward)

               // var reward = 20000000000000000;
              if (reward == 0) {
                rew = 0
              }
              else {
                var rew = web3.utils.fromWei(reward.toString(), 'ether');
              }
              console.log("reward", rew)
              $('.your_reward').html(rew + ' GROL');
              $('.stakeReward').val(rew);
         });

        var stakeReward = $('.stakeReward').val();
        var stakeAmount = $('.stakeAmount').val();

        var startDateTime = $('.startTime').val();
        var finishDateTime =  $('.finishTime').val();

        $.ajax({
            url: "<?php echo site_url("unstaking"); ?>",
            type: "POST",
           data :{
               numberOfunstake : numberOfunstake,
               stakeAmount : stakeAmount,
               startDateTime : startDateTime,
               finishDateTime : finishDateTime,
               unstaketransaction_id : unstaketransaction_id,
               stakeReward : stakeReward,
               loginAddress : loginAddress,

           },
            success: function (response) 
            {
                console.log(response);
                 
                if(response == '1'){
                    toastr.success('You stake token successfully');

                }else{
                  toastr.error('Something went wrong'); 
                }
                
                location.reload();
            }
        });
    }


    async function load() 
    {

        window.web3 = new Web3(window.ethereum);
        window.ethereum.enable();   

        const accounts = await window.web3.eth.getAccounts();
        console.log('accounts',accounts[0]);
        $('.loginAddress').val(accounts[0]);

        
        await loadWeb3();
        window.contract = await loadContract();
        // updateStatus('Ready!');
        console.log('Ready!');


        const account = await getCurrentAccount();
        const loginAddress = account;

        console.log(loginAddress);

        var apy_function = 2000/ 10 ** 2;
        var appFuntion = apy_function + ' %';

        $('.apy').html(appFuntion);

        await window.contract.methods.stakes(loginAddress).call(function (err, stakes) {
           if (err) {
             console.log("An error occured", err)
             return
           }
            console.log("stakes", stakes)
           var stake_timestamp = stakes.stakeTime;
           var stake_amount = stakes.amount;

           $('.stake_timestamp').val(stake_timestamp);
           $('.stake_amount').val(stake_amount);
        });
        var stake_amount = $('.stake_amount').val();

        var user_stake = stake_amount/100000000000000000;
        var userStake = user_stake + ' GROL';

        $('.your_stake').html(userStake);
        $('.stakeAmount').val(user_stake);


        var startTime = $('.stake_timestamp').val();
        

        if (startTime == 0) {
            $('.start_time').html(startTime);
            $('.startTime').val(startTime);
            $('.finish_time').html(startTime);
            $('.finishTime').val(startTime);
        }else{
            console.log('stake time',startTime);
            // Months array
            var months_arr = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
            ///=============Start Date/time========================================
            var s_date = new Date(startTime * 1000);
            // Year
            var s_year = s_date.getFullYear();

            // Month
            var s_month = months_arr[s_date.getMonth()];
            // Day
            var s_day = s_date.getDate();
            // Hours
            var s_hours = ((s_date.getHours() % 12 || 12) < 10 ? '0' : '') + (s_date.getHours() % 12 || 12);
            // Minutes
            var s_minutes = (s_date.getMinutes() < 10 ? '0' : '') + s_date.getMinutes();
            var s_meridiem = (s_date.getHours() >= 12) ? 'PM' : 'AM';
            var startDateTime = s_day + ' ' + s_month + ',' + s_year + ' ' + s_hours + ':' + s_minutes + ' ' + s_meridiem;

            $('.start_time').html(startDateTime);
            $('.startTime').val(startDateTime);

            ///=============Finish Date/time========================================
            var f_timeStamp = new Date(startTime * 1000);
            f_timeStamp.setDate(f_timeStamp.getDate() + 7);
            // Year
            var f_year = f_timeStamp.getFullYear();

            // Month
            var f_month = months_arr[f_timeStamp.getMonth()];
            // Day
            var f_day = f_timeStamp.getDate();
            // Hours
            var f_hours = ((f_timeStamp.getHours() % 12 || 12) < 10 ? '0' : '') + (f_timeStamp.getHours() % 12 || 12);
            // Minutes
            var f_minutes = (f_timeStamp.getMinutes() < 10 ? '0' : '') + f_timeStamp.getMinutes();
            var f_meridiem = (f_timeStamp.getHours() >= 12) ? 'PM' : 'AM';
            var finishDateTime = f_day + ' ' + f_month + ',' + f_year + ' ' + f_hours + ':' + f_minutes + ' ' + f_meridiem;

            $('.finish_time').html(finishDateTime);
            $('.finishTime').val(finishDateTime);


            await window.contract.methods.viewReward(loginAddress).call(function (err, reward) {
              if (err) {
                 console.log("An error occured", err)
                 return
             }
                console.log("reward is: ", reward)
                if (reward == 0) {
                  rew = 0
                }
                else {
                  var rew = web3.utils.fromWei(reward.toString(), 'ether');
                }
                console.log("reward", rew)
                $('.your_reward').html(rew + ' ETH');
                $('.stakeReward').val(rew);
           });

            

        }
    }

    function updateStatus(status) {
        const statusEl = document.getElementById('status');
        statusEl.innerHTML = status;
        console.log(status);
    }

    load();

</script>