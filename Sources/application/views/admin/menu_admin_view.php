    <div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-lg-2">
                  <div id="wrapper">
                    <div id="sidebar-wrapper">
                            <ul class="sidebar-nav">
                                <li class="sidebar-brand"><a href="<?php echo base_url();?>/index.php/admin/index" style="color:#fff">Home</a></li>
                                <?php if($this->session->userdata('ChucVu') == 'Quản trị'){?>                                    
                                    <li><a href="<?php echo base_url();?>/index.php/employee/index">Nhân viên</a></li>
                                <?php } ?>                                
                                <li><a href="<?php echo base_url();?>/index.php/customer/index">Khách hàng</a></li>
                                <li><a href="<?php echo base_url();?>/index.php/service/index">Dịch vụ</a></li>
                                <li><a href="<?php echo base_url();?>/index.php/appointment/index">Lịch hẹn</a></li>
                                <li><a href="<?php echo base_url();?>/index.php/invoice/index">Đơn hàng</a></li>
                                <li><a href="<?php echo base_url();?>/index.php/thewords/index">Bài viết</a></li>
                            </ul>
                    </div>
                </div>
                </div>