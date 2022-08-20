
<div class="col-9">
<?php 
    $list = json_decode($data["list"]);
    
?>
            <div class="mt-5 ml-5">
                <h3>Danh sách bài đăng: <?php echo count($list)." bài đăng" ?></h3>
                <table class="table table-bordered table-hover">
                    <thead class="table-primary">
                        <tr>
                            <th scope="col" class="text-center">STT</th>
                            <th scope="col">Tiêu đề</th>
                            
                            <th scope="col" class="w-25 text-center">Tuỳ chọn</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php 
                        $i=1;
                            foreach ($list as $item) {
                                echo ' <tr class="bg-light">
                                            <th scope="row"  class="text-center">'.$i++.'</th>
                                            <td>'.$item->title.'</td>
                                            
                                            <td class="text-center" ><a class="px-3" href="./Admin/EditPost/'.$item->id.'">Chỉnh sửa</a><a class="px-3" href="/webcovid/admin/DeletePost/'.$item->id.'">Xoá</a></td>
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