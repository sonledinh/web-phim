<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Phim</title>
   <!--link css-->
   <link rel="stylesheet" type="text/css" title="" href="css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" title="" href="css/font-awesome.css">
   <link rel="stylesheet" type="text/css" title="" href="css/style.css">
   <link rel="stylesheet" type="text/css" title="" href="css/responsive.css">
</head>
<body> 
   <header>
      <div class="header-user text-center">
         <div class="container">
            <ul>
               <li><a href="" class="head-register">Đăng ký</a></li>
               <li><a href="javascript:void(0)" data-toggle="modal" data-target="#model-user" class="head-login">Đăng nhập</a></li>
            </ul>
         </div>
      </div>

      <div class="modal fade" id="model-user">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-body">
                  <div class="content-popup">
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                     <div class="box-user">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="avr-popup"><img src="images/popup.png" class="img-fluid w-100" alt=""></div>
                           </div>
                           <div class="col-md-6">
                              <div class="txt-user">
                                 <h3>Xin chào bạn!</h3>
                                 <div class="form-user">
                                    <div class="item"><input type="text" class="inp_field" placeholder="Số điện thoại"></div>
                                    <div class="item"><input type="text" class="inp_field" placeholder="Mật khẩu"></div>
                                    <div class="item">
                                       <ul class="d-flex justify-content-between list-unstyled align-items-center">
                                          <li><a href="">Quên mất khẩu?</a></li>
                                          <li><input type="checkbox" class="reb-user" id="1001"><label for="1001">Lưu mật khẩu</label></li>
                                       </ul>
                                    </div>
                                    <div class="item"><input type="submit" value="Đăng nhập" class="btn-user"></div>
                                    <div class="item">
                                       <ul class="social text-center list-inline">
                                          <li class="list-inline-item mr-0"><a href=""><img src="images/s-1.png" class="img-fluid" alt=""></a></li>
                                          <li class="list-inline-item mr-0"><a href=""><img src="images/s-2.png" class="img-fluid" alt=""></a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>