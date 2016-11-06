<?php namespace Common\Tag;

use Hdphp\View\TagBase;

class Common extends TagBase
{
    /**
     * 标签声明
     * @var array
     */
    public $tags = array(
        'test' => array('block' => 1, 'level' => 4),
        'category'=>array('block'=>1,'level'=>4)
    );

    /**
     * 测试标签
     * @param $attr 属性
     * @param $content 内容
     * @param $hd HdView模型引擎对象
     */
    public function _test($attr, $content, &$hd)
    {
        return 'houdunwang.com';
    }
    //商品分类
     public function _category($attr,$content,&$hd){
        $php=<<<str
                <?php
                    \$categoryData=Db::table('category')->where('pid',0)->get();
                    foreach (\$categoryData as \$k1 => \$v1) {
                        \$categoryData[\$k1]['child1']=Db::table('category')->where('pid',\$v1['cid'])->get();
                    }
                    foreach (\$categoryData as \$kk => \$vv) {
                        foreach (\$vv['child1'] as \$kkk => \$vvv) {
                            \$categoryData[\$kk]['child1'][\$kkk]['child2']=Db::table('category')->where('pid',\$vvv['cid'])->get();
                        }
                    }
                    foreach (\$categoryData as \$k=>\$v){
                ?>
                {$content}
                <?php }?>
str;
        return $php;
    }
    //头部
    public function _header($attr,$content,&$hd){
        $php=<<<str
                <?php
                ?>
                {$content}
                <?php }?>
str;
        return $php;
    }
}