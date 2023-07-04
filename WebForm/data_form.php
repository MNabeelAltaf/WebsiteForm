<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</head>

<body>

    <?php
    session_start();
    ?>

    <div class="mx-3">
        <div class="row my-2">



            <?php

            if (isset($_SESSION['messageStatus'])) {
            ?>


                <style>
                    .messageBox {
                        display: flex;
                        justify-content: space-between;
                    }
                </style>



                <div class="alert alert-success alert-dismissible fade show messageBox" role="alert">
                    <div>
                        <?php
                        echo $_SESSION['messageStatus'];
                        unset($_SESSION['messageStatus']);
                        ?>
                    </div>



                    <button type="button" class="btn-close btn-danger" data-bs-dismiss="alert" aria-label="Close">x</button>

                </div>

            <?php
            }
            ?>



            <div class="col-sm-6">
                <form id="form1" method="POST" action="./api_request_data.php">
                    <div class="mb-3">
                        <input type="number" name="campaign_id" class="form-control px-1 py-3" style="display:none;" id="" placeholder="lp campaign id" value="16510" required>
                    </div>
                    <div class="mb-3">
                        <input type="number" name="supplier_id" class="form-control px-1 py-3" style="display:none;" id="" placeholder="lp supplier id" value="34763" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="ip_key" value="1ez2ag1wls5m1r" class="form-control px-1 py-3" id="" style="display:none;" placeholder="lp key" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="ip_action" class="form-control px-1 py-3" id="" placeholder="lp action" style="display:none;" value="">
                    </div>
                    <div class="mb-3">
                        <input type="text" name="sub_id_1" class="form-control px-1 py-3" id="sub_id1" placeholder="lp sub id 1" style="display:none;" maxlength="75" value="">
                    </div>
                    <div class="mb-3">
                        <input type="text" name="sub_id_2" class="form-control px-1 py-3" id="sub_id2" placeholder="lp sub id 2" style="display:none;" maxlength="75" value="">
                    </div>

                    <div class="mb-3">
                        <input type="text" name="fname" class="form-control px-1 py-3" id="" placeholder="First Name"  required>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="lname" class="form-control px-1 py-3" id="" placeholder="Last Name"  required>
                    </div>
                    <div class="mb-3">
                        <input type="email" name="email" class="form-control px-1 py-3" id="" placeholder="Email" required>
                    </div>
                    <div class="mb-3">
                        <input type="number" name="phone" maxlength="10" class="form-control px-1 py-3" id="phone_no"  placeholder="Phone" required>
                    </div>
                    <div class="mb-3">
                        <input type="number" name="zip_code" maxlength="5" class="form-control px-1 py-3" id="zipcode" placeholder="Zip code"  required>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="ip_address" class="form-control px-1 py-3" id="" placeholder="IP address" style="display:none;" required disabled>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="comment" class="form-control px-1 py-3" id="" placeholder="Comment" >
                    </div>




            </div>

            <div class="col-sm-6">

                <div class="mb-3">
                    <input type="text" name="user_agent" class="form-control px-1 py-3" id="" style="display:none;" placeholder="User Agent" required readonly>
                </div>
                <div class="mb-3">
                    <input type="text" name="landing_page_url" class="form-control px-1 py-3" id="" style="display:none;" placeholder="Landing Page URL " required disabled>
                </div>
                <div class="mb-3">
                    <input type="text" name="lead_id_token" class="form-control px-1 py-3" id="leadid_token" style="display:none;" placeholder="Jornaya lead id" required readonly>
                </div>


                <div class="mb-4  ">
                    <!-- <input list="list1" name="list_1" id="list_1" class="form-control px-1 py-3" placeholder="Type of Legal Problem" required> -->
                    <!-- <datalist id="list1">
                        <option value="Auto Accident Injury">
                        <option value="Personal Injury">
                    </datalist> -->

                    <!-- php -->
                    <?php
                    if (isset($_GET['error_message'])) {
                        $message1 = $_GET['error_message'];
                        echo $message1;
                    }
                    ?>

                    <?php if (isset($error_message) && $error_message == $_list1_error) : ?>
                        <?php echo $error_message; ?>
                    <?php endif; ?>

                    <!-- Html -->
                    <select class="form-select mb-2" aria-label=".form-select-sm example" name="dropdown1" id="dropdown1">
                        <option selected>Type of Legal Problem</option>
                        <option value="Auto Accident Injury">Auto Accident Injury</option>
                        <option value="Personal Injury">Personal Injury</option>
                    </select>
                    <input type="text" name="list_1" id="list_1" class="form-control px-1 py-3" style="display:none;" placeholder="Type of Legal Problem">

                    <!-- js -->
                    <script>
                        let dropdown1 = document.getElementById("dropdown1");
                        let list_1 = document.getElementById("list_1");

                        dropdown1.addEventListener("change", function() {
                            list_1.value = dropdown1.value;
                        });
                    </script>



                </div>

                <div class="mb-4">
                    <!-- <input list="list2" name="list_2" id="list_2" class="form-control px-1 py-3" placeholder="Incident Date" value="Less than 1 Year" required>
                    <datalist id="list2">
                        <option value="Less than 1 Year">
                        <option value="Less than 2 Years">
                        <option value="Less than 3 Years">
                        <option value="Less than 4 Years">
                        <option value="Less than 5 Years">
                        <option value="5 or more Years">
                    </datalist> -->

                    <?php
                    if (isset($_GET['error_message'])) {
                        $message2 = $_GET['error_message'];
                        echo $message2;
                    }
                    ?>

                    <br>
                    <select class="form-select mb-3" aria-label=".form-select-sm example" name="dropdown2" id="dropdown2">
                        <option selected>Incident Date</option>
                        <option value="Less than 1 Year">Less than 1 Year</option>
                        <option value="Less than 2 Years">Less than 2 Years</option>
                        <option value="Less than 3 Years">Less than 3 Years</option>
                        <option value="Less than 4 Years">Less than 4 Years</option>
                        <option value="Less than 5 Years">Less than 5 Years</option>
                        <option value="5 or more Years">5 or more Years</option>
                    </select>
                    <input type="text" name="list_2" id="list_2" class="form-control px-1 py-3" style="display:none;" placeholder="Incident Date">


                    <script>
                        let dropdown2 = document.getElementById("dropdown2");
                        let list_2 = document.getElementById("list_2");

                        dropdown2.addEventListener("change", function() {
                            list_2.value = dropdown2.value;
                        });
                    </script>


                </div>


                <div class="mb-3 ">
                    <!-- <input list="list3" name="list_3" id="list_3" class="form-control px-1 py-3" placeholder="Doctor Treatment"  required>
                    <datalist id="list3">
                        <option value="Yes">
                        <option value="No">
                    </datalist> -->

                    <?php
                    if (isset($_GET['error_message'])) {
                        $message3 = $_GET['error_message'];
                        echo $message3;
                    }
                    ?>

                    <br>
                    <select class="form-select mb-3" aria-label=".form-select-sm example" name="dropdown3" id="dropdown3">
                        <option selected>Doctor Treatment</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                    <input type="text" name="list_3" id="list_3" class="form-control px-1 py-2" style="display:none;" placeholder="Doctor Treatment">


                    <script>
                        let dropdown3 = document.getElementById("dropdown3");
                        let list_3 = document.getElementById("list_3");

                        dropdown3.addEventListener("change", function() {
                            list_3.value = dropdown3.value;
                        });
                    </script>

                </div>

                <div class="mb-3 ">
                    <!-- <input list="list4" name="list_4" id="list_4" class="form-control px-1 py-3 " placeholder="Were You At Fault" required>
                    <datalist id="list4">
                        <option value="No">
                        <option value="Yes, I was cited or caused the accident">
                        <option value="Yes, but it was the result of a tree, animal, or other act of nature">
                        <option value="Yes">
                    </datalist> -->

                    <?php
                    if (isset($_GET['error_message'])) {
                        $message4 = $_GET['error_message'];
                        echo $message4;
                    }
                    ?>

                    <br>
                    <select class="form-select mb-3" aria-label=".form-select-sm example" name="dropdown4" id="dropdown4">
                        <option selected>Were You At Fault</option>
                        <option value="No">No</option>
                        <option value="Yes, I was cited or caused the accident">Yes, I was cited or caused the accident</option>
                        <option value="Yes, but it was the result of a tree, animal, or other act of nature">Yes, but it was the result of a tree, animal, or other act of nature</option>
                        <option value="Yes">Yes</option>
                    </select>
                    <input type="text" name="list_4" id="list_4" class="form-control px-1 py-3" style="display:none" placeholder="Were You At Fault">


                    <script>
                        let dropdown4 = document.getElementById("dropdown4");
                        let list_4 = document.getElementById("list_4");

                        dropdown4.addEventListener("change", function() {
                            list_4.value = dropdown4.value;
                        });
                    </script>
                </div>



                <div class="mb-4 ">
                    <!-- <input list="list5" name="list_5" id="list_5" class="form-control px-1 py-3 " placeholder="Have Insurance">
                    <datalist id="list5">
                        <option value="Yes">
                        <option value="No">
                        <option value="I don't know">
                    </datalist> -->


                    <!-- php -->
                    <?php
                    if (isset($_GET['error_message'])) {
                        $message5 = $_GET['error_message'];
                        echo $message5;
                    }
                    ?>


                    <!-- HTML -->
                    <br>
                    <select class="form-select mb-3" aria-label=".form-select-sm example" name="dropdown5" id="dropdown5">
                        <option selected>Have Insurance</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                        <option value="I don't know">I don't know</option>
                    </select>
                    <input type="text" name="list_5" id="list_5" class="form-control px-1 py-3" style="display:none" placeholder="Have Insurance">



                    <!-- js -->
                    <script>
                        let dropdown5 = document.getElementById("dropdown5");
                        let list_5 = document.getElementById("list_5");

                        dropdown5.addEventListener("change", function() {
                            list_5.value = dropdown5.value;
                        });
                    </script>

                </div>


                <div class="mb-3">
                    <input type="text" name="xxTrustedFormCertUrl" class="form-control px-1 py-3" id="xxTrustedFormCertUrl" placeholder="Trusted form url" data-tf-field="xxTrustedFormCertUrl" required>
                </div>

                <div class="mb-3  ">
                    <input type="text" name="tcpa_text" class="form-control px-1 py-3" id="tcpa_text_id" style="display:none;" placeholder="tcpa text" readonly required>
                </div>
                <div class="mb-3 ">
                    <!-- <input list="list6" name="list_6" id="list_6" class="form-control px-1 py-3 " placeholder="Have Attorney"  required>
                    <datalist id="list6">
                        <option value="Yes">
                        <option value="No">
                    </datalist> -->

                    <!-- php -->
                    <?php
                    if (isset($_GET['error_message'])) {
                        $message6 = $_GET['error_message'];
                        echo $message6;
                    }
                    ?>



                    <!-- HTML -->
                    <!-- <br> -->
                    <select class="form-select mb-3" aria-label=".form-select-sm example" name="dropdown6" id="dropdown6">
                        <option selected>Have Attorney</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                    <input type="text" name="list_6" id="list_6" class="form-control px-1 py-3" style="display:none" placeholder="Have Attorney">


                    <!-- js -->
                    <script>
                        let dropdown6 = document.getElementById("dropdown6");
                        let list_6 = document.getElementById("list_6");

                        dropdown6.addEventListener("change", function() {
                            list_6.value = dropdown6.value;
                        });
                    </script>


                </div>


            </div>

            <div class="">
                <p>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" name="checkbox_name" id="flexCheckIndeterminate" required>
                    <label for="checkbox_name" class="form-check-label" for="flexCheckIndeterminate">
                        By submitting this form, you agree to the Terms and Conditions and
                        Privacy Policy that usclaimjustice and/or our partners, including law firms, and attorneys,
                        may contact you regarding your legal problem. You may provide your express written consent
                        to receive phone calls (including autodialed and /or pre-recorded/artificial voice calls)
                        and email using automated technology at the phone number and email address you provided,
                        even if it is a wireless number, regardless of whether you are on any Federal or state
                        DNC ("Do Not Call") and /or DNE ("Do Not Email") list or registry. In addition,
                        you understand and acknowledge that you are over 18 years of age and your consent
                        is not required as a condition of purchase.
                    </label>
                </div>

                </p>

            </div>
            <div class="container">
                <button type="submit" id="submitBtn" class="btn btn-success ">Submit</button>
            </div>

            </form>

        </div>
    </div>

    <script src="./jsFile.js"></script>


    <!-- TrustedForm -->
    <script type="text/javascript">
        (function() {
            var tf = document.createElement('script');
            tf.type = 'text/javascript';
            tf.async = true;
            tf.src = ("https:" == document.location.protocol ? 'https' : 'http') +
                "://api.trustedform.com/trustedform.js?field=xxTrustedFormCertUrl&ping_field=xxTrustedFormPingUrl&l=" +
                new Date().getTime() + Math.random();
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(tf, s);
        })();
    </script>
    <noscript>
        <img src="https://api.trustedform.com/ns.gif" />
    </noscript>
    <!-- End TrustedForm -->


    <!-- journaya script -->
    <script id="LeadiDscript" type="text/javascript">
        (function() {
            var s = document.createElement('script');
            s.id = 'LeadiDscript_campaign';
            s.type = 'text/javascript';
            s.async = true;
            s.src = '//create.lidstatic.com/campaign/d24bfeea-52d8-77ed-3ffb-dec16e0999a5.js?snippet_version=2&f=reset';
            var LeadiDscript = document.getElementById('LeadiDscript');
            LeadiDscript.parentNode.insertBefore(s, LeadiDscript);
        })();
    </script>
    <noscript>
        <img src='//create.leadid.com/noscript.gif?lac=55675ce8-bcef-cf9a-7e75-94126a1ea2ae&lck=d24bfeea-52d8-77ed-3ffb-dec16e0999a5&snippet_version=2' />
    </noscript>
    <!-- end journaya script -->


</body>

</html>