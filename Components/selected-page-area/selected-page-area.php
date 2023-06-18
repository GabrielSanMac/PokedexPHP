<div class="containerPageArea">
    <div class="selectPageArea">
        <?php
            if($_GET['page_num'] == 0){
                echo "<a class='thisPage' href=?page=home&&page_num=0><<</a>";
            } else {
                echo "<a href=?page=home&&page_num=0><<</a>";
            }
            $counterPages = -2;
            for($i = 0; $i < 5;$i++){
                $page_number = $counterPages + $_GET['page_num'];
                if($page_number > 0 && $page_number < 41){
                    if($page_number == $_GET['page_num']){
                        echo "<a class='thisPage' href=?page=home&&page_num=".($page_number).">".$page_number."</a>";
                    } else {
                        echo "<a href=?page=home&&page_num=".($page_number).">".$page_number."</a>";
                    }
                }
                $counterPages++;
            }
            if($_GET['page_num'] >= 41){
                echo "<a class='thisPage' href=?page=home&&page_num=41>>></a>";
            } else {
                echo "<a href=?page=home&&page_num=41>>></a>";
            }
        ?>
    </div>
</div>