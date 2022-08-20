

<div class="col-8">
            <h3 class=" m-5 ">Thêm bài đăng mới</h3>
            <div class="row m-5">
                <form action="./admin/crpost" method="POST" id="FcreatePost" enctype="multipart/form-data">
                    <div class="row">
                        <div class="form-group col-12" >
                            <label for="name"> Tiêu đề</label>
                            <input type="text" class="form-control"  id="name" name="title"  placeholder="">
                        </div>
                        <br>
                        <div class="form-group col-12">
                            <label for="txt_top">Phần mở đầu</label>
                            <textarea rows="10" cols="170" name="text_top" form="FcreatePost"> 
                            </textarea>
                        </div>
                        <div class="form-group col-12">
                            <label for="msv">Ảnh</label>
                            <input type="file" class="form-control"  name="thumbnail" placeholder="Mã sinh viên">
                        </div>
                        <div class="form-group col-6">
                            <label for="ngaysinh">Mô tả (ảnh)</label>
                            <input type="text" class="form-control"  name="sub_thumbnail" placeholder="Mô tả thông tin ảnh">
                        </div>
                        <div class="form-group col-12">
                            <label for="txt_bot">Phần kết</label>
                            <textarea rows="10" cols="170" name="text_bottom" form="FcreatePost"> 
                            </textarea>
                        </div>
                        


                    </div>
                    <button type="submit" name="btnsubmit" class="btn btn-outline-primary ml-auto ">Đăng bài</button>
                </form>
            </div>
        </div>
    </div>


</body>

</html>