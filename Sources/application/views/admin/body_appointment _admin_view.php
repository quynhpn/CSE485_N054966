 <div class="col-md-6 col-lg-10">
    <div class="container-fluid">
        <div class="row mt-3">
            <h3 class="col-md-12 text-center">QUẢN LÝ LỊCH HẸN</h3>
        </div>
         <form action="<?php echo base_url();?>index.php/appointment/getListAppointmentS" method="post">
            <div class="row mt-3">
                <div class="col-md-4 offset-md-4 text-center">
                    <input class="form-control" type="text" placeholder="Nhập nội dung tìm kiếm" name="search" />
                </div>
            </div>
            <div class="row mt-3">
                <button class="btn btn-success col-md-2 offset-md-5" type="submit">
                    <i class="fa fa-search"></i>
                    Tìm kiếm
                </button>
            </div>
        </form>
        <div class="row">
            <a class="btn btn-info col-md-2 offset-md-9" href="<?php echo base_url() . "index.php/appointment/add_appointment"; ?>">
                <i class="fa fa-user-plus"></i>
                Thêm mới
            </a>
        </div>
        <table class="table table-bordered table-hover mt-3">
            <thead>
                <tr class="table-active">
                    <th>
                        STT
                    </th>
                    <th>
                        Tên khách hàng
                    </th>
                    <th>
                        SĐT Khách hàng
                    </th>
                    <th>
                        Giờ hẹn
                    </th>
                    <th>
                        Ngày hẹn
                    </th>
                    <th>
                        Nhân viên
                    </th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>      
                <?php 
                $stt=0;
                foreach($listAppointment as $row)
                {
                    $stt ++;
               ?> 
                <tr class="table-warning">
                    <td><?php echo $stt ?></td>
                    <td><?php echo $row['TenKH']?></td>
                    <td><?php echo $row['SDTKH']?></td>
                    <td><?php echo $row['GioHen']?></td>
                    <td><?php echo $row['NgayHen']?></td>
                    <td><?php echo $row['MaNV']?></td>
                    <td>
                        <a class="btn btn-warning" href="<?php echo base_url() . "index.php/appointment/edit_appointment/". $row['SDTKH']; ?>">
                            <i class="fa fa-edit">
                                Sửa
                            </i>
                        </a>
                    </td>
                    <td>
                        <a class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa không');" href="<?php echo base_url() . "index.php/appointment/delete/" . $row['SDTKH'];?>">
                           <i class="fa fa-trash">
                                Xóa
                            </i>
                        </a>
                    </td>
                </tr>  
                <?php 
                }?>         
            </tbody>
        </table> 
     </div>
     <div class="text-center">
        <?php
            echo  $this->pagination->create_links();
        ?>
    </div>
    </div>
    </div>
    </div>
    </div>
    
</div>


                
                