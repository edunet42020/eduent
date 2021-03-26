<?php

require("C:/xampp/htdocs/edunet/admin/preview/demo1/connection.php");
define("ROOT_PATH", $_SERVER["DOCUMENT_ROOT"]);
define("rootpath","C:/xampp/htdocs/edunet/preview/demo1");
define("imageroot","http://localhost/edunet/admin/themes/metronic/theme/default/demo1/dist/assets/media/");

?>

<!DOCTYPE html>

<html lang="en">
<!-- begin::Head -->
<head>
    <link href="../../themes/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="../../themes/favicon.ico" sizes="128x128" rel="shortcut icon" />
    <!-- Hotjar Tracking Code for keenthemes.com -->
</head>
<!-- end::Head -->

<!-- begin::Body -->

<body>
      <form class="kt-form" id="kt_user_add_form" enctype="multipart/form-data" action="" method="post">
      <div class="form-group row">
                                                                            <label
                                                                                class="col-xl-3 col-lg-3 col-form-label">Course Picture</label>
                                                                                <div class="col-lg-9 col-xl-6">
                                                                                    <div class="kt-avatar kt-avatar--outline kt-avatar--circle- kt-avatar--changed" id="kt_user_edit_avatar">
                                                                                        <div class="kt-avatar__holder"  ><img  src="" height="120" width="120" id="image" /></div>
                                                                                        
                                                                                        <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Change avatar">
                                                                                            <i class="fa fa-pen"></i>
                                                                                            <input type='file' id="filename" name="photo" onchange="showImage.call(this)" />
                                                                                        </label>
                                                                                        <span id="photo_error"></span>
                                                                                        <script>
                                                                                            function showImage()
                                                                                            {
                                                                                                if(this.files && this.files[0])
                                                                                                {
                                                                                                    var obj = new FileReader();
                                                                                                    obj.onload=function(data){
                                                                                                    var image=document.getElementById("image");
                                                                                                    image.src=data.target.result;
                                                                                                    image.style.display="block";

                                                                                                    }
                                                                                                    obj.readAsDataURL(this.files[0]);
                                                                                                }
                                                                                            }
                                                                                            
                                                                                        </script>



                                                                                    </div>
                                                                                    <button class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" type="submit" id="btninsert" name="btninsert" >
                                                                                    Submit
                                                                                        </button>&nbsp;
                                                                                <button type="reset" class="btn btn-danger btn-wide" id="btnreset" name="btnreset" >Reset</button>
                                                                                </div>
                                                                        </div><!--end::Page Scripts -->
</body>
<!-- end::Body -->

<!-- Mirrored from keenthemes.com/metronic/preview/demo1/custom/apps/user/add-user.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Jan 2020 10:53:52 GMT -->

</html>

<?php
        if(isset($_POST['btninsert']))
        {
            $insert="";
        
        $photo    = $_FILES['photo'];
        $uniquesavename=time().uniqid(rand());
        $image_tmp_name=$_FILES['photo']['tmp_name'];
        //images/upload/user/".$_FILES['photo']['name']
        //C:/xampp/htdocs/edunet/themes/metronic/theme/default/demo1/dist/assets/media/category/
        //http://localhost/
        $upload_folder_name="../../themes/metronic/theme/default/demo1/dist/assets/media/category/".$uniquesavename.$_FILES['photo']['name'];
        $user_img_type=$_FILES['photo']['type'];
        $photo_size = $_FILES['photo']['size'];//30720byte = 30kb =0.0293mb = 0.00003gb //2097152
        $store=$upload_folder_name.$_FILES['photo']['name'];


                move_uploaded_file($image_tmp_name,$upload_folder_name);
               //move_uploaded_file($upload_folder_name."videoimage/",$image_tmp_name);
               //move_uploaded_file($_FILES['photo']['tmp_name'], rootpath."/videoimage/  ".$_FILES['photo']['name']); 
        }
    ?>  