<?php
$list = json_decode($data["list"]);
//print_r($list);
?>

<main>
    <div class="container pt-5">
        <h2>Tin tức</h2>
        <hr>

        <div class="row">
            <?php
            foreach ($list as $item) {
                echo '<div class=" col-12 mb-3 ">
                        <div class="row">
                            <div class="col-sm-4 col-12">
                                <a href="./post/detail/' . $item->id . '" class="text-dark">
                                    <img src= "./public/upload/' . $item->thumbnail . '"class=" img-fluid" alt="...">
                                </a>
                             </div>

                            <div class="col-sm-8 col-12">
                                <h4 class="title mt-3"><a href="./Post/detail/' . $item->id . '" class="text-dark">'
                                 . $item->title .
                                '</a></h4>
                            <p class="text">'
                                 . $item->text_top . $item->text_bottom .
                            '</p>
                        </div>
                    </div>
                </div>';
            }
            /*   */
            ?>

            <!-- <div class=" col-12 ">
                    <div class="row">
                        <div class="col-4">
                            <img src="https://baohiemxahoi.gov.vn:4545/pic/04-ASXH/covid91_20200408092754AM.jpg" class=" img-fluid" alt="...">
                        </div>

                        <div class="col-8">
                            <h3 class="card-title m-2"><a href="/post.html" class="text-dark">Thông báo hình thức thi học kỳ 2</a></h3>
                            <p class="card-title">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore, molestias? Modi quia dolores excepturi dignissimos corporis, est nemo similique doloremque consequatur animi repellendus optio, blanditiis a inventore ipsum.
                                Nihil, et.
                            </p>
                        </div>
                    </div>
                </div>  -->
        </div>

    </div>
</main>