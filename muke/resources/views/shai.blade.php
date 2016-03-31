<ul>



                                                        <?php foreach ($list as $k => $v): ?>


                                                        <li class="course-one">
                            <a href="aaa?k_id=<?php echo $v['c_id']?>" target="_self">
                        <div class="course-list-img">
                <img width="240" height="135" alt="HTML+CSS基础课程" src="./img/<?php echo $v['c_img']?>">
                        </div>
            <h5>
                <span><?php echo $v['c_name']?></span>
            </h5>
            <div class="tips">
                <p class="text-ellipsis"><?php echo $v['c_desc']?></p>
                                    <span class="l ">更新完毕</span>

                <span class="l ml20">
                                <?php echo $v['c_ren']?>人学习</span>
            </div>
            <span class="time-label">
                                    <?php echo $v['c_addtime']?> | <?php echo $v['d_name']?>
                            </span>
            <b class="follow-label">跟我学</b>
            </a>
        </li>
    <?php endforeach ?>

                                            </ul>