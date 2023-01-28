<style>
    .registration .form-control {
        border: 1px solid #dee2e6;
        border-radius: 5px !important;
    }
    .registration label {
        font-weight: 500;
        font-size: 16px;
        margin-bottom: 5px;
    }
    .form-box {
        border: 1px solid #16AFE1;
        padding: 30px;
        margin-bottom: 30px;
        border-radius: 5px;
        background-color: #efefef;
    }
    .signature_area>div {
        border: 1px dashed #FF0000;
        margin-bottom: 5px;
        background-color: #FFF;
    }
</style>

<div class="registration my-5">   
    <h1 class="text-center title">Confirmation of Instructions</h1>
    <section class="registration-one">
        <div class="container-fluid padding">
            <div class="row gx-5">
                <div class="col-lg-8 offset-lg-2">                
                    <form name="registration" class="form-horizontal" id="registration_form" method="post" enctype="multipart/form-data">
                        <div class="form-box">
                            <h3>Contact Information</h3>
                            <div class="row">
                                <div class="col-lg-12 mb-3">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" required="required" name="registration[name]" id="name">
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <div class="form-group">
                                        <label for="gender">Gender</label><br>
                                        <?php echo htmlRadio('registration[gender]','Male',[
                                            'Male'      => 'Male',
                                            'Female'    => 'Female',
                                        ]);?>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <div class="form-group">
                                        <label for="date_of_birth">Date of Birth</label>
                                        <input type="text" class="form-control js_datepicker" name="registration[date_of_birth]" id="date_of_birth">
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input type="text" class="form-control" name="registration[address]" id="address">
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <div class="form-group">
                                        <label for="post_code">Post Code</label>
                                        <input type="text" class="form-control" name="registration[post_code]" id="post_code">
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <div class="form-group">
                                        <label for="phone_number">Phone Number</label>
                                        <input type="text" class="form-control" name="registration[phone_number]" id="phone_number">
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <div class="form-group">
                                        <label for="mobile_number">Mobile Number</label>
                                        <input type="text" class="form-control" name="registration[mobile_number]" id="mobile_number">
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" name="registration[email]" id="email">
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <div class="form-group">
                                        <label for="time_of_contact">Time of Contact</label>
                                        <input type="text" class="form-control js_timepicker" name="registration[time_of_contact]" id="time_of_contact">
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <div class="form-group">
                                        <label for="method_of_contact">Method of Contact</label><br>
                                        <?php echo htmlRadio('registration[method_of_contact]','SMS',[
                                            'SMS'      => 'SMS',
                                            'EMAIL'    => 'EMAIL',
                                            'PHONE'    => 'PHONE',
                                        ]);?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-box">
                            <h3>Case Information</h3>
                            <p>(Please provide as much detail as possible)</p>
                            <div class="row">
                                <div class="col-lg-12 mb-3">
                                    <div class="form-group">
                                        <label for="target_name">Target Name</label>
                                        <input type="text" class="form-control" name="registration[target_name]" id="target_name">
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <div class="form-group">
                                        <h4 class="mb-3">Target Apperance</h4>
                                        <div class="row">
                                            <div class="col mb-3">
                                                <div class="form-group">
                                                    <label for="target_apperance">Height</label>
                                                    <input type="text" class="form-control" name="registration[target_apperance][height]" id="target_name">
                                                </div>
                                            </div>
                                            <div class="col mb-3">
                                                <div class="form-group">
                                                    <label for="weight">Weight</label>
                                                    <input type="text" class="form-control" name="registration[target_apperance][weight]" id="weight">
                                                </div>
                                            </div>
                                            <div class="col mb-3">
                                                <div class="form-group">
                                                    <label for="build">Build</label>
                                                    <input type="text" class="form-control" name="registration[target_apperance][build]" id="build">
                                                </div>
                                            </div>
                                            <div class="col mb-3">
                                                <div class="form-group">
                                                    <label for="hair_colour">Hair Colour</label>
                                                    <input type="text" class="form-control" name="registration[target_apperance][hair_colour]" id="hair_colour">
                                                </div>
                                            </div>
                                            <div class="col mb-3">
                                                <div class="form-group">
                                                    <label for="ethnic_group">Ethnic Group</label>
                                                    <input type="text" class="form-control" name="registration[target_apperance][ethnic_group]" id="ethnic_group">
                                                </div>
                                            </div>
                                        </div>                                    
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <div class="form-group">
                                        <label for="target_address">Address</label>
                                        <input type="text" class="form-control" name="registration[target_address]" id="target_address">
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <div class="form-group">
                                        <label for="target_date_of_birth">Date of Birth</label>
                                        <input type="text" class="form-control js_datepicker" name="registration[target_date_of_birth]" id="target_date_of_birth">
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <div class="form-group">
                                        <label for="target_ni_no">NI NO</label>
                                        <input type="text" class="form-control" name="registration[target_ni_no]" id="target_ni_no">
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <div class="form-group">
                                        <label for="target_passport_no">Passport No</label>
                                        <input type="text" class="form-control" name="registration[target_passport_no]" id="target_passport_no">
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <div class="form-group">
                                        <label for="target_phone_number">Phone Number</label>
                                        <input type="text" class="form-control" name="registration[target_phone_number]" id="target_phone_number">
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <div class="form-group">
                                        <label for="target_mobile_number">Mobile Number</label>
                                        <input type="text" class="form-control" name="registration[target_mobile_number]" id="target_mobile_number">
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <div class="form-group">
                                        <label for="target_email">Email</label>
                                        <input type="text" class="form-control" name="registration[target_email]" id="target_email">
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <div class="form-group">
                                        <label for="target_occuption">Occuption</label>
                                        <input type="text" class="form-control" name="registration[target_occuption]" id="target_occuption">
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <div class="form-group">
                                        <label for="target_employer_name">Employer Name</label>
                                        <input type="text" class="form-control" name="registration[target_employer_name]" id="target_employer_name">
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <div class="form-group">
                                        <label for="target_work_address">Work Address</label>
                                        <input type="text" class="form-control" name="registration[target_work_address]" id="target_work_address">
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <div class="form-group">
                                        <label for="target_work_phone_number">Work Phone Number</label>
                                        <input type="text" class="form-control" name="registration[target_work_phone_number]" id="target_work_phone_number">
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <div class="form-group">
                                        <label for="target_work_email">Work Email</label>
                                        <input type="text" class="form-control" name="registration[target_work_email]" id="target_work_email">
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <div class="form-group">
                                        <label for="target_picture">Target Picture</label>
                                        <input type="file" multiple class="form-control" name="target_picture[]" id="target_picture">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-box">
                            <h3>Vehicle Information</h3>
                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <div class="form-group">
                                        <label for="vechile_type">Vechile Type</label>
                                        <input type="text" class="form-control" name="registration[vechile_type]" id="vechile_type">
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <div class="form-group">
                                        <label for="vechile_make">Vechile Make</label>
                                        <input type="text" class="form-control" name="registration[vechile_make]" id="vechile_make">
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <div class="form-group">
                                        <label for="vechile_model">Vechile Model</label>
                                        <input type="text" class="form-control" name="registration[vechile_model]" id="vechile_model">
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <div class="form-group">
                                        <label for="vechile_reg_no">Vechile Reg No</label>
                                        <input type="text" class="form-control" name="registration[vechile_reg_no]" id="vechile_reg_no">
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <div id="signature_section">
                                        <div class="form-group">
                                            <label for="vechile_reg_no">Signature of Investigator</label>
                                            <p>Please Sign Below</p>
                                            <div class="signature_area">
                                                <input type="hidden" id="signatured" name="signatured" value="false"/>
                                                <div id="signature" style="position: relative;margin-top: 15px;"></div>
                                                <button type="button" class="btn btn-xs btn-warning float-end" id="clear_sign">
                                                    <i class="fa fa-refresh"></i>
                                                    Clear Sign
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <p class="fw-bold mb-0 mt-4">Please note that the investigation will begin once you have read our Terms and Conditions on our website http://www.ukssi.com.</p>
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <input id="data_protection_accept" type="checkbox" name="registration[data_protection_accept]">
                                    <label for="data_protection_accept" class="d-inline">I understand and agree that the investigation will be performed to the best of UK SSI Ltd ability from the information supplied by myself. I understand and agree that from the information supplied by myself and due to the Data Protection Act, UK SSI Ltd cannot guarantee any results from the investigation and you are paying for UK SSI Ltd time, not the end result. All devices purchased are non-refundable. Any attempted fraudulent claw backs made through your bank will result in additional charges and legal action being taken. Should the chosen service not be possible than an alternative service will be offered, no refund will be possible as you are paying for UK SSI Ltd time in investigating not the end result. Due to the nature of this investigation no guarantees can be made.</label>
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <input id="terms_accept" type="checkbox" name="registration[terms_accept]">
                                    <label for="terms_accept" class="d-inline">I confirm that I have read and agree to your Terms and Conditions and to my above instructions.</label>
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <div class="form-group">
                                        <button type="button" onclick="importImg($('#signature'))" class="btn btn-primary">
                                            <i class="fa fa-envelope-o"></i>
                                            Register Now
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

<script src="<?= CDN; ?>assets/lib/signature/jSignature.min.js"></script>
<script>
    $(".js_datepicker").flatpickr({
        maxDate: "today",
    });
    $(".js_timepicker").flatpickr({
        enableTime: true,
        noCalendar: true,
        dateFormat: "H:i",
        defaultDate: "10:00"
    });

    $('#clear_sign').click(function () {
        $('#signatured').val('false');
        $('#signature').jSignature('clear');
    });

    $('#signature').on('click touchstart', function () {
        $('#signatured').val('true');
    });


    $(document).ready(function () {
        $("#signature").jSignature({
            height: 150,
            width: '100%',
            'background-color': 'transparent',
            'decor-color': 'transparent'
        });
    });

    function importImg(sig) {
        sig.children("img.imported").remove();
        var signature  = sig.jSignature('getData');

        var formData = new FormData(document.getElementById("registration_form"));
        formData.append( 'signature', signature );

        var name = jQuery('#name').val();
        var date_of_birth = jQuery('#date_of_birth').val();
        var address = jQuery('#address').val();
        var post_code = jQuery('#post_code').val();
        var phone_number = jQuery('#phone_number').val();
        var email = jQuery('#email').val();
        var time_of_contact = jQuery('#time_of_contact').val();
        var target_name = jQuery('#target_name').val();
        var target_address = jQuery('#target_address').val();
        var target_date_of_birth = jQuery('#target_date_of_birth').val();
        var target_ni_no = jQuery('#target_ni_no').val();
        var target_phone_number = jQuery('#target_phone_number').val();
        var target_email = jQuery('#target_email').val();
        var target_occuption = jQuery('#target_occuption').val();
        var target_picture = jQuery('#target_picture').val();
        var vechile_type = jQuery('#vechile_type').val();
        var vechile_make = jQuery('#vechile_make').val();
        var vechile_model = jQuery('#vechile_model').val();
        var vechile_reg_no = jQuery('#vechile_reg_no').val();

        if (!name) {$('#name').addClass('required');error = 1;} else {$('#name').removeClass('required').addClass('required_pass');}
        if (!date_of_birth) {$('#date_of_birth').addClass('required');error = 1;} else {$('#date_of_birth').removeClass('required').addClass('required_pass');}
        if (!address) {$('#address').addClass('required');error = 1;} else {$('#address').removeClass('required').addClass('required_pass');}
        if (!post_code) {$('#post_code').addClass('required');error = 1;} else {$('#post_code').removeClass('required').addClass('required_pass');}
        if (!phone_number) {$('#phone_number').addClass('required');error = 1;} else {$('#phone_number').removeClass('required').addClass('required_pass');}
        if (!email) {$('#email').addClass('required');error = 1;} else {$('#email').removeClass('required').addClass('required_pass');}
        if (!time_of_contact) {$('#time_of_contact').addClass('required');error = 1;} else {$('#time_of_contact').removeClass('required').addClass('required_pass');}
        if (!target_name) {$('#target_name').addClass('required');error = 1;} else {$('#target_name').removeClass('required').addClass('required_pass');}
        if (!target_address) {$('#target_address').addClass('required');error = 1;} else {$('#target_address').removeClass('required').addClass('required_pass');}
        if (!target_date_of_birth) {$('#target_date_of_birth').addClass('required');error = 1;} else {$('#target_date_of_birth').removeClass('required').addClass('required_pass');}
        if (!target_ni_no) {$('#target_ni_no').addClass('required');error = 1;} else {$('#target_ni_no').removeClass('required').addClass('required_pass');}
        if (!target_phone_number) {$('#target_phone_number').addClass('required');error = 1;} else {$('#target_phone_number').removeClass('required').addClass('required_pass');}
        if (!target_email) {$('#target_email').addClass('required');error = 1;} else {$('#target_email').removeClass('required').addClass('required_pass');}
        if (!target_occuption) {$('#target_occuption').addClass('required');error = 1;} else {$('#target_occuption').removeClass('required').addClass('required_pass');}
        if (!target_picture) {$('#target_picture').addClass('required');error = 1;} else {$('#target_picture').removeClass('required').addClass('required_pass');}
        if (!vechile_type) {$('#vechile_type').addClass('required');error = 1;} else {$('#vechile_type').removeClass('required').addClass('required_pass');}
        if (!vechile_make) {$('#vechile_make').addClass('required');error = 1;} else {$('#vechile_make').removeClass('required').addClass('required_pass');}
        if (!vechile_model) {$('#vechile_model').addClass('required');error = 1;} else {$('#vechile_model').removeClass('required').addClass('required_pass');}
        if (!vechile_reg_no) {$('#vechile_reg_no').addClass('required');error = 1;} else {$('#vechile_reg_no').removeClass('required').addClass('required_pass');}

        var terms_accept = $('input[id=terms_accept]:checked').val();
        if(!terms_accept){
            alert('You must agree to the terms and conditions');
            return false;
        }
        var data_protection_accept = $('input[id=data_protection_accept]:checked').val();
        if(!data_protection_accept){
            alert('You must agree to the Data Protection Act, UK SSI Ltd ');
            return false;
        }

        
        
        
        var signed = $('#signatured').val();
        if(signed !== 'true' ){
            alert('Please sign below.');
            return false;
        }

        $.ajax({
            type: "POST",
            url: "<?= site_url('registration_action'); ?>",
            dataType: "json",
            enctype: 'multipart/form-data',
            processData: false,
            contentType: false,
            data: formData,
            beforeSend () {
                    toastr.info('Please Wait. Processing...');
                },
                success (jsonRespond) {
                    toastr.clear();
                    if (jsonRespond.Status === 'OK') {
                        
                        toastr.success(jsonRespond.Msg);
                        setTimeout(function () {
                            jQuery('#ajaxRespond').slideUp();
                            jQuery('#registration_form')[0].reset();
                            jQuery('input, textarea').removeClass('required');
                            location.reload();
                        }, 2000);
                    } else {
                        toastr.error(jsonRespond.Msg);
                    }
                }
        });
    }
</script>


<?php if (getSettingItem('RecaptchaStatusV3') == 'Enable'): ?>
    <script src="https://www.google.com/recaptcha/api.js?render=<?php echo getSettingItem('RecaptchaSiteKeyV3') ?>"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            setInterval(function () {
                grecaptcha.ready(function () {
                    grecaptcha.execute('<?php echo getSettingItem('RecaptchaSiteKeyV3') ?>', {action: 'submit'}).then(function (token) {
                        $('#recaptcha').val(token);
                    });
                });
            }, 5000);
        });
    </script>
<?php endif; ?>
