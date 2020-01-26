<?php
$status_message=array();
$status_color='alert-danger'; // alert-danger  alert-success
$status_green='alert-success';
$status_red='alert-danger';


if ($_POST["user-registration-form"]) {
    // validate username
    $username = $_POST["username"];
    $useremail = $_POST["useremail"];
    $userpass = $_POST["userpass"];
    $userconfirmpass = $_POST["userconfirmpass"];
    $userphone = $_POST["userphone"];
    $referred_by = $_POST["referred_by"];
    $activation_code = $_POST["activation_code"];

    // username contain
    if(preg_match('/\s/', $username)) {
        $status_message[] = 'username cannot contain space';
    }

    // username already exits
    if($userExists = SQL_Select("User", "UserName = '$username'", "", true)) {
        $status_message[] = "<strong>{$userExists['UserName']}</strong> already Exits Please choose another username";
    }

    // check for email already exits
    if($emailExists = SQL_Select("User", "UserEmail = '$useremail'", "", true)) {
        $status_message[] = "<strong>{$emailExists['UserEmail']}</strong> already Exits Please choose another Email";
    }

    // check for password length
    if(strlen($userpass) < 5) {
        $status_message[] = "Please use minimum 5 character for password";
    }

    // check for password match
    if($userpass !== $userconfirmpass) {
        $status_message[] = "Password doesn't match";
    }


    // validate phone
    if(!is_numeric($userphone)) {
        $status_message[] = "Please Enter a valid phone number";
    } else {
        if(strlen($userphone) < 11) {
            $status_message[] = "Phone number must be 11 character long";
        }
    }

    // check for valid referred_by
    if($username == $referred_by) {
        $status_message[] = "Username and Referred by cannot be same";
    } else {
        if($userReferredExists = SQL_Select("User", "UserName = '$referred_by'", "", true)) {
            // check for hand free
            if($userReferredExists['UserLeftHand'] == 1 && $userReferredExists['UserRightHand'] == 1) {
                $status_message[] = "<strong>{$userReferredExists['UserName']}</strong> already referred 2 person";
            }
        } else {
            $status_message[] = "invalid referred by";
        }
    }

    // check for valid activation code
    if($activationCodeExists = SQL_Select("Activationcode", "ActivationcodeNumber = '$activation_code'", "", true)) {
        if($activationCodeExists["ActivationcodeInUse"] == 1) {
            $status_message[] = "activation code already used";
        }
    } else {
        $status_message[] = "Invalid activation code";
    }


    // validate username
/*    $username = $_POST["username"];
    $useremail = $_POST["useremail"];
    $userpass = $_POST["userpass"];
    $userconfirmpass = $_POST["userconfirmpass"];
    $userphone = $_POST["userphone"];
    $referred_by = $_POST["referred_by"];
    $activation_code = $_POST["activation_code"];*/

    if(count($status_message) === 0) {
        // insert the registared user
        $insertUser = SQL_InsertUpdate(
            "User",
            array(
                "UserName" => $username,
                "ActivationcodeNumber" => $activation_code,
                "UserEmail" => $useremail,
                "UserPassword" => md5($userpass),
                "UserPhone" => $userphone,
                "Usertype" => "Basic",
                "UserIsActive" => 1,
                "UserIsRegistered" => 1,
                "UserIsApproved" => 1,
            )
        );

        // insert into the tree

        $insertUsertree = SQL_InsertUpdate(
            "Usertree",
            array(
                "DirectReferralName" => $referred_by,
                "ChildName" => $username,
            )
        );


        // update activation code
        $activationI = SQL_InsertUpdate(
            "Activationcode",
            array(
                "ActivationcodeInUse" => 1,
            ),
            "ActivationcodeNumber = '{$activation_code}'"
        );

        // update the referred by hand
        updateHand($referred_by);

        $status_message[] = "Registration Successful";
        $status_color = 'alert-success';
    }

}





if(count($status_message)){
    $status_message_output = '<ul class="list-group">';
    foreach ($status_message as $message) {
        $status_message_output .= '<li class="list-group-item">' . $message . "</li>";
    }
    $status_message_output .= '</ul>';
    $NoneReplaceMainContent.='<div class="alert '.$status_color.' alert-dismissible " role="alert">
     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
     </button>'.$status_message_output.'</div>';
}


$NoneReplaceMainContent.='
<div style="min-height:400px;margin-top: 50px;margin-bottom: 100px;">
        <form action="" method="post">
            <div class="container">
            <div class="row">
                <div>
                    <div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3 col-sm-offset-0 col-xs-offset-0">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="">User Name</label>
                                        <input type="text" placeholder="User Name" class="form-control" name="username"  value="'. Form::old('username') .'">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="">User Email</label>
                                        <input type="text" placeholder="User Email" class="form-control" name="useremail" value="'. Form::old('useremail') .'">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="">User Password</label>
                                        <input type="text" placeholder="User Password" class="form-control" name="userpass" value="'. Form::old('userpass') .'">
                                    </div>
                                </div>
                                
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="">User Confirm Password</label>
                                        <input type="text" placeholder="User Confirm Password" class="form-control" name="userconfirmpass" value="'. Form::old('userconfirmpass') .'">
                                    </div>
                                </div>
                            </div>

                            
                  
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="">User Phone</label>
                                        <input type="text" placeholder="User Phone" class="form-control" name="userphone" value="'. Form::old('userphone') .'">
                                    </div>
                                </div>
                            </div>
                            
                             <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="">Referred By</label>
                                        <input type="text" placeholder="User Referred By" class="form-control" name="referred_by" value="'. Form::old('referred_by') .'">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <label class="">Activation Code</label>
                                        <input type="text" placeholder="Activation Code" class="form-control" name="activation_code" value="'. Form::old('activation_code') .'">
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success" value="Submitted" name="user-registration-form">Submit</button>  
                                    </div>
                                </div>
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
';

?>