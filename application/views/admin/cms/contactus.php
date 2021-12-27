
    <main class="app-content">
      <div class="app-title">
       
        <div class="editable" style="display: none;">
            <h1>Edit <?=$title;?></h1>
        </div>

        <div class="saveData">
            <h1>
                View <?=$title;?>
            </h1>
        </div>

        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard'); ?>"><i class="fa fa-home fa-lg"></i></a></li>
          <li class="breadcrumb-item"><?=$title;?></li>
          <!-- <li class="breadcrumb-item"><a href="#">Form Components</a></li> -->
        </ul>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="row">

              <?php if($this->session->flashdata('contact_success')){ ?>
                    <div class="alert alert-info alert-dismissible" id="hideDivId">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <strong>Success!</strong> <?php echo $this->session->flashdata('contact_success');?>
                    </div>
                <?php } if($this->session->flashdata('contact_error')){  ?>
                     <div class="alert alert-danger alert-dismissible" id="hideDivId">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <strong>Error!</strong> <?php echo $this->session->flashdata('contact_error');?>
                    </div>
                <?php } ?>

               <div class="col-lg-12 saveData">
                <div class="row">
                	<!-- <div class="form-group col-md-6">
                        <label for="email_id">Email Id</label>
                        <input class="form-control" id="emailId" type="text" placeholder="Email Id" name="email_id" value="<?php echo $contactData->email_id; ?>" readonly>
                    </div> -->
                    <!-- <div class="form-group col-md-6">
                        <label for="address">Address</label>
                        <input class="form-control" id="" type="text" placeholder="Address" name="address" value="<?php echo $contactData->address; ?>" readonly>
                    </div> -->


                    <!-- <div class="form-group col-md-6">
                        <label for="mbl_number">Mobile Number</label>
                        <input class="form-control phoneno" id="mblNumber" type="text" placeholder="Mobile Number" name="mbl_number" value="<?php echo $contactData->mobile_number; ?>" readonly>
                    </div> -->
                 
                    <!-- <div class="form-group col-md-6">
                        <label for="whatsapp_number">Whatsapp Number</label>
                        <input class="form-control phoneno" id="whatsappNumber" type="text" placeholder="Whatsapp Number" name="whatsapp_number" value="<?php echo $contactData->whatsapp_number; ?>" readonly>
                    </div> -->

                    <div class="form-group col-md-6">
                        <label for="facebook">Facebook</label>
                        <input class="form-control" id="fb" type="text" placeholder="Facebook" name="facebook" value="<?php echo $contactData->facebook; ?>" readonly>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="twitter">Twitter </label>
                        <input class="form-control" id="twitterLink" type="text" placeholder="Twitter" name="twitter" value="<?php echo $contactData->twitter; ?>" readonly>
                    </div>
                    
                    <div class="form-group col-md-6">
                        <label for="instagram">Instagram</label>
                        <input class="form-control" id="instagramLink" type="text" placeholder="Instagram" name="instagram" value="<?php echo $contactData->instagram; ?>" readonly>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="telegram">Telegram</label>
                        <input class="form-control" id="telegramLink" type="text" placeholder="Telegram" name="telegram" value="<?php echo $contactData->telegram; ?>" readonly>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="discord">Discord</label>
                        <input class="form-control" id="discordLink" type="text" placeholder="Discord" name="discord" value="<?php echo $contactData->discord; ?>" readonly>
                    </div>
                    <!-- <div class="form-group col-md-6">
                        <label for="linkedin">LindkedIn Link</label>
                        <input class="form-control" id="linkedinLink" type="text" placeholder="LindkedIn Link" name="linkedin" value="<?php echo $contactData->linkedin; ?>" readonly>
                    </div> -->
                    

                    <div class="col-sm-12">
                        <button class="btn btn-info btn-edit" id="edit">Edit</button>
                    </div>
                </div>
                 <!-- </form>  -->
              </div>

              <div class="col-lg-12 editable" style="display: none;">
                
                <form class="form-horizontal" action=" <?php echo site_url('admin/cms/update_contact');?>" data-parsley-validate="" method="post">
                 <div class="row">
                   <input type="hidden" name="id" value="<?php echo $contactData->id; ?>">
                  	<!-- <div class="form-group col-md-6">
                        <label for="email_id">Email Id</label>
                        <input class="form-control" id="emailId" type="text" placeholder="Email Id" name="email_id" value="<?php echo $contactData->email_id; ?>" readonly>
                    </div> -->
                    <!-- <div class="form-group col-md-6">
                        <label for="address">Address</label>
                        <input class="form-control" id="" type="text" placeholder="Address" name="address" value="<?php echo $contactData->address; ?>" readonly>
                    </div> -->


                    <!-- <div class="form-group col-md-6">
                        <label for="mbl_number">Mobile Number</label>
                        <input class="form-control phoneno" id="mblNumber" type="text" placeholder="Mobile Number" name="mbl_number" value="<?php echo $contactData->mobile_number; ?>" readonly>
                    </div> -->
                 
                    <!-- <div class="form-group col-md-6">
                        <label for="whatsapp_number">Whatsapp Number</label>
                        <input class="form-control phoneno" id="whatsappNumber" type="text" placeholder="Whatsapp Number" name="whatsapp_number" value="<?php echo $contactData->whatsapp_number; ?>" readonly>
                    </div> -->

                    <div class="form-group col-md-6">
                        <label for="facebook">Facebook</label>
                        <input class="form-control" id="fb" type="text" placeholder="Facebook" name="facebook" value="<?php echo $contactData->facebook; ?>" >
                    </div>
                    <div class="form-group col-md-6">
                        <label for="twitter">Twitter </label>
                        <input class="form-control" id="twitterLink" type="text" placeholder="Twitter" name="twitter" value="<?php echo $contactData->twitter; ?>" >
                    </div>
                    
                    <div class="form-group col-md-6">
                        <label for="instagram">Instagram</label>
                        <input class="form-control" id="instagramLink" type="text" placeholder="Instagram" name="instagram" value="<?php echo $contactData->instagram; ?>" >
                    </div>

                    <div class="form-group col-md-6">
                        <label for="telegram">Telegram</label>
                        <input class="form-control" id="telegramLink" type="text" placeholder="Telegram" name="telegram" value="<?php echo $contactData->telegram; ?>" >
                    </div>

                    <div class="form-group col-md-6">
                        <label for="discord">Discord</label>
                        <input class="form-control" id="discordLink" type="text" placeholder="Discord" name="discord" value="<?php echo $contactData->discord; ?>" >
                    </div>
                    <!-- <div class="form-group col-md-6">
                        <label for="linkedin">LindkedIn Link</label>
                        <input class="form-control" id="linkedinLink" type="text" placeholder="LindkedIn Link" name="linkedin" value="<?php echo $contactData->linkedin; ?>" readonly>
                    </div> -->
                    

                    <div class="col-sm-12">
                        <button class="btn btn-primary" type="submit">Update</button>
                    </div>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
<!-- /. PAGE WRAPPER  -->
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

<script type="text/javascript">
   

    $(document).on('click', '#edit', function()
    {
        $('.saveData').hide(); //save div hide
        $('.editable').show(); //edit div hide
    });

    $('.phoneno').each(function(){
        $(this).mask('9999999999');
    });

  // ------check mobile number validation----
    function mustBeValidMobile(el, msgEl) {
        if( el.value === '' || el.value === null || el.value === undefined ) {
            return;
        }

        if((el.value).length < 10) {
            $(`#${msgEl}`).text('Enter 10 number'); 
        } else {
            $(`#${msgEl}`).text(''); 
        }
    }

</script>