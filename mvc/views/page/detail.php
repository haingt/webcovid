<?php
     $i= json_decode($data["postItem"]);  
     
?>
    <main>
 
        <div class="container mt-3">
                <hr>
            <h4 class="title mt-3">
                <?php echo $i->title ?>
            </h4>
            <p class="text-top mt-3"><?php echo $i->text_top ?></p>
            <div >
            <!-- <img class=" img-fluid rounded mx-auto d-block my-3  "  src="../../../public/upload/TiemChung.jpg" alt="loi1111"></div> -->
          
            <img class=" img-fluid rounded mx-auto d-block my-3  "  src="./public/upload/<?php echo $i->thumbnail?>" alt="loi"></div>
                <p>
                <?php echo $i->text_bottom ?>
                </p>
            <hr>
        </div>

    </main>