 <li class="course-nav-item on cc">
                                <a href="javascript:void(0)" onclick="fen()" id="quan1">全部</a>
                            </li>
                        
                                        <?php foreach($class as $k=>$v){?>
                                                                                <li class="course-nav-item ">
                                            <a href="javascript:void(0)" data-id="44" data-ct="fe" class="ccc" id="c" c_id="<?php echo $v['c_id']?>"><?php echo $v['c_name']?></a>
                                        </li>
                                        <?php }?>