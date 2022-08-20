

<div class="col-9">
<?php 

    if(isset($data["list2"])) $list = json_decode($data["list2"]);
    else {
        echo '<h3 class="m-5" >Chưa có đăng ký nào</h3>';
        die();
    } 
    
?>
            <div class="mt-5 ml-5">
                <h3>Danh sách mũi tiêm 2: <?php if(is_array($list)) echo count($list)." tài khoản" ?></h3>
                <table class="table table-bordered table-hover">
                    <thead class="table-primary">
                        <tr>
                            <th scope="col" class="text-center">STT</th>
                            <th scope="col">Họ tên</th>
                            <th scope="col">Mã sinh viên</th>
                            <th scope="col">Căn cước</th>
                            <th scope="col">Ngày đăng ký</th>
                            <th scope="col" class="text-center">Trạng thái</th>
                            <th scope="col" class="text-center">Tên vaccine</th>
                            <th scope="col" class="text-center">Ngày tiêm</th>
                            <th scope="col " class="text-center"  >Tuỳ chọn</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php 
                        $i=1;
                            foreach ($list as $item) {
                                if($item->status == 0 ) 
                                {$status = "Chưa tiêm";$vaccine_name ="........"; $injection_date ="...........";} 
                                else {$status = "Đã tiêm";$vaccine_name=$item->vaccine_name; $injection_date =$item->injection_date;}
                                echo ' <tr class="bg-light">
                                            <th scope="row" class="text-center">'.$i++.'</th>
                                            <td>'.$item->full_name.'</td>
                                            <td>'.$item->user_code.'</td>
                                            <td>'.$item->indentity_card.'</td>
                                            <td>'.$item->register_date.'</td>
                                            <td class="table-warning text-center">'.$status.'</td>
                                            <td class="table-warning text-center">'.$vaccine_name.'</td>
                                            <td class="table-warning text-center">'.$injection_date.'</td>
                                            <td class="text-center" ><a class="px-3" href="./admin/UpdateM2/'.$item->injection_id.'">Chỉnh sửa</a><a class="px-3" href="./admin/DeleteM2/'.$item->injection_id.'">Xóa</a></td>
                                        </tr>'
                                ;
                                }
                                
                        ?>
                    </tbody>
                </table>

                
            </div>
        </div>
    </div>

</body>

</html>