<!--  -->
<section>
    <style>
    .dangky {
        max-width: 600px;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        background-color: aliceblue;
        margin-left: 270px;
    }

    legend {
        font-size: 24px;
        margin-bottom: 20px;
    }

    label {
        font-weight: bold;
        margin-bottom: 5px;
        color: black;
    }

    .form-control {
        margin-bottom: 10px;
    }
    </style>
    <div class="dangky mb-4 mt-4 mx-auto">
        <div class="container mb-4 mt-4">
            <div class="row">
                <div class="">
                    <legend><a><i class="glyphicon glyphicon-globe"></i></a> Đăng ký thành viên!
                    </legend>
                    <form action="index.php?action=dangky&act=dangky_action" method="post" class="form" role="form">
                        <div class="row">
                            <div class="col-xs-4 col-md-4"> <label for="email">Tên Khách Hàng:</label>
                            </div>
                            <div class="col-xs-8 col-md-8"><input class="form-control" name="txttenkh"
                                    placeholder="Tên khách hàng" required="" autofocus="" type="text"> </div>
                            <div class="col-xs-4 col-md-4"> <label for="email">Địa chỉ:</label>
                            </div>
                            <div class="col-xs-8 col-md-8"><input class="form-control" name="txtdiachi"
                                    placeholder="Địa chỉ khách hàng" required="" autofocus="" type="text"> </div>
                            <div class="col-xs-4 col-md-4"> <label for="email">Số Điện Thoại:</label>
                            </div>
                            <div class="col-xs-8 col-md-8"><input class="form-control" name="txtsodt"
                                    placeholder="Số điện thoại khách hàng" required="" autofocus="" type="text"> </div>
                            <div class="col-xs-4 col-md-4"><label for="email">Tên Đăng Nhập:</label>
                            </div>
                            <div class="col-xs-8 col-md-8"><input class="form-control" name="txtusername"
                                    placeholder="Tên đăng nhập" required="" type="text">
                            </div>
                        </div><label for="email">Email:</label> <input class="form-control" name="txtemail"
                            placeholder="Email" type="email">
                        <input class="form-control" name="txtpass" placeholder="Mật khẩu" type="password">
                        <input class="form-control" name="retypepassword" placeholder="Nhập lại mật khẩu"
                            type="password">


                        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit"> Đăng ký</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>