                <?php
                    $categoryData=Db::table('category')->where('pid',0)->get();
                    foreach ($categoryData as $k1 => $v1) {
                        $categoryData[$k1]['child1']=Db::table('category')->where('pid',$v1['cid'])->get();
                    }
                    foreach ($categoryData as $kk => $vv) {
                        foreach ($vv['child1'] as $kkk => $vvv) {
                            $categoryData[$kk]['child1'][$kkk]['child2']=Db::table('category')->where('pid',$vvv['cid'])->get();
                        }
                    }
                    foreach ($categoryData as $k=>$v){
                ?>
                
	<div class='sort'>
		<div class='sort-menu'>
			<em class='sort-icon'></em>
			<i class='<?php echo $v['className']?>'></i>
			<a href="<?php echo U('Home/Cate/cate',array('cid'=>$v['cid'],'tid'=>$v['tid'],'pid'=>$v['pid']))?>" class='title'><?php echo $v['cname']?></a>
			<p>
				        <?php
        if (empty($v['child1'])) 
        {
            echo '';
        } 
        else 
        {
            //初始化
            $first=$last=$total=$index=$id=0;
            $hd['list']['n']['first']=&$first;
            $hd['list']['n']['last']=&$last;
            $hd['list']['n']['total']=&$total;
            $hd['list']['n']['index']=&$index;
            foreach ($v['child1'] as $n) 
            {
                //开始值
                if ($id<0)
                {
                    $id++;
                    continue;
                }
                //步长
                if($id%1!=0)
                {   
                    $id++;
                    continue;
                }
                //显示条数
                if($index>=3)
                {
                    break;
                }
                //第几个值
                $index+=1;
                //第1个值
                $first=($id == 0);
                //最后一个值
                $last=($index == 3);
                //增加数
                $id+=1;
            ?>
				<a href="<?php echo U('Home/Cate/cate',array('cid'=>$n['cid'],'tid'=>$n['tid'],'pid'=>$n['pid']))?>"><?php echo $n['cname']?></a>
				<?php }
            //总数
            $total=$index;
        }?>
			</p>
		</div>
		
		<?php if(empty($v['child1'][0]['child2'])){?>
                
		<div class='sort-con'>
			<div class='sort-con-left'>
				<div class='menu-cover'></div>
				<h4>
					<a href="<?php echo U('Home/Cate/cate',array('cid'=>$v['cid'],'tid'=>$v['tid'],'pid'=>$v['pid']))?>"><?php echo $v['cname']?></a>
				</h4>
				<ul class='sort-link02'>
					<?php foreach ($v['child1'] as $kk=>$vv){?>
					<li>
						<a href="<?php echo U('Home/Cate/cate',array('cid'=>$vv['cid'],'tid'=>$vv['tid'],'pid'=>$vv['pid']))?>"><?php echo $vv['cname']?></a>
					</li>
					<?php }?>
				</ul>
			</div>
		</div>
		<?php }else if(count($v['child1'])<=4){?>
		<div class='sort-con'>
			<div class='sort-con-left'>
				<div class='menu-cover'></div>
				<?php foreach ($v['child1'] as $k3=>$v3){?>
				<h4>
					<a href="<?php echo U('Home/Cate/cate',array('cid'=>$v3['cid'],'tid'=>$v3['tid'],'pid'=>$v3['pid']))?>"><?php echo $v3['cname']?></a>
				</h4>
				<ul class='sort-link02'>
					<?php foreach ($v3['child2'] as $k4=>$v4){?>
					<li>
						<a href="<?php echo U('Home/Cate/cate',array('cid'=>$v4['cid'],'tid'=>$v4['tid'],'pid'=>$v4['pid']))?>"><?php echo $v4['cname']?></a>
					</li>
					<?php }?>
				</ul>
				<?php }?>
			</div>
		</div>
		<?php }else{?>
		<div class='sort-con gouwu-top'>
			<div class='sort-con-piece'>
				<div class='fl'>
					<div class='menu-cover'></div>
					        <?php
        if (empty($v['child1'])) 
        {
            echo '';
        } 
        else 
        {
            //初始化
            $first=$last=$total=$index=$id=0;
            $hd['list']['m']['first']=&$first;
            $hd['list']['m']['last']=&$last;
            $hd['list']['m']['total']=&$total;
            $hd['list']['m']['index']=&$index;
            foreach ($v['child1'] as $m) 
            {
                //开始值
                if ($id<0)
                {
                    $id++;
                    continue;
                }
                //步长
                if($id%1!=0)
                {   
                    $id++;
                    continue;
                }
                //显示条数
                if($index>=4)
                {
                    break;
                }
                //第几个值
                $index+=1;
                //第1个值
                $first=($id == 0);
                //最后一个值
                $last=($index == 4);
                //增加数
                $id+=1;
            ?>
					<h4>
						<a href="<?php echo U('Home/Cate/cate',array('cid'=>$m['cid'],'tid'=>$m['tid'],'pid'=>$m['pid']))?>"><?php echo $m['cname']?></a>
					</h4>
					<ul class='sort-link02'>
						<?php foreach ($m['child2'] as $mk=>$mv){?>
						<li>
							<a href="<?php echo U('Home/Cate/cate',array('cid'=>$mv['cid'],'tid'=>$mv['tid'],'pid'=>$mv['pid']))?>"><?php echo $mv['cname']?></a>
						</li>
						<?php }?>
					</ul>
					<?php }
            //总数
            $total=$index;
        }?>
				</div>
				<div class='fr'>
					        <?php
        if (empty($v['child1'])) 
        {
            echo '';
        } 
        else 
        {
            //初始化
            $first=$last=$total=$index=$id=0;
            $hd['list']['mn']['first']=&$first;
            $hd['list']['mn']['last']=&$last;
            $hd['list']['mn']['total']=&$total;
            $hd['list']['mn']['index']=&$index;
            foreach ($v['child1'] as $mn) 
            {
                //开始值
                if ($id<5)
                {
                    $id++;
                    continue;
                }
                //步长
                if($id%1!=0)
                {   
                    $id++;
                    continue;
                }
                //显示条数
                if($index>=100)
                {
                    break;
                }
                //第几个值
                $index+=1;
                //第1个值
                $first=($id == 5);
                //最后一个值
                $last=($index == 100);
                //增加数
                $id+=1;
            ?>
					<h4>
						<a href="<?php echo U('Home/Cate/cate',array('cid'=>$mn['cid'],'tid'=>$mn['tid'],'pid'=>$mn['pid']))?>"><?php echo $mn['cname']?></a>
					</h4>
					<ul class='sort-link02'>
						<?php foreach ($mn['child2'] as $mnk=>$mnv){?>
						<li>
							<a href="<?php echo U('Home/Cate/cate',array('cid'=>$mnv['cid'],'tid'=>$mnv['tid'],'pid'=>$mnv['pid']))?>"><?php echo $mnv['cname']?></a>
						</li>
						<?php }?>
					</ul>
					<?php }
            //总数
            $total=$index;
        }?>
				</div>
			</div>
		</div>
		
               <?php }?>
	</div>

                <?php }?>
	<div class='sort-lottery'>
		<div class='sort-menu'>
			<i class='choujiang'></i>
			<a href="" class='title'>0元抽奖</a>
		</div>
	</div>
