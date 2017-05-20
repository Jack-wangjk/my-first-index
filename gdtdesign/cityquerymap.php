<?php

$pindex = $_GET['pindex'];
$nindex = $_GET['nindex'];
$flag = $_GET['flag'];


/*模拟数据库存储数据*/
$datacity =  array(
        'city' =>array(
            0=>'点击选择地区',
            1=>'平顶山',
            2=>'鹤壁'
            )
    ); 
$datacounty = array(
        '平顶山'=>array(
            0=>'点击选择县',
            1=>  '郏县',
            2=>  '鲁山',
            3=>  '叶县'
        ),
        '鹤壁'=>array(
            0=>'点击选择县',
            1=>'淇河',
            2=>'武钢'
        )
    ); 
$datatime=array(
        '郏县'=>array(
            0=>"无数据"
            ),
        '鲁山'=>array(
            0=>"无数据"
            ),
        '叶县'=>array(
            0=>"无数据"
        ),
        '淇河'=>array(
            0=>'点击选择时间',
            1=>20150505,
            2=>20160419
            /*3=>'全部'*/
        ),
        '武钢'=>array(
            0=>'点击选择时间',
            1=>20150505,
            2=>20160419
        )
    );
$datastyle = array(
        '淇河'=>array(
            '20150505'=>array(
                0=>array(
                    0=>'data/viewdata/淇河/淇河20150505现状图.jpg',
                    1=>'width:834px;height:708px;',
                    2=>'淇河20150505现状图'
                    ),
                1=>array(
                    0=>'data/viewdata/淇河/淇河20150505提取结果图.jpg',
                    1=>'width:834px;height:708px;',
                    2=>'淇河20150505提取结果图'
                    ),
                2=>array(
                    0=>'data/viewdata/淇河/淇河20150505.jpg',
                    1=>'width:834px;height:626px;',
                    2=>'淇河20150505提取结果统计图'
                    )
                ),
            '20160419'=>array(
                0=>array(
                    0=>'data/viewdata/淇河/淇河20160419现状图.jpg',
                    1=>'width:834px;height:708px;',
                    2=>'淇河20160419现状图'
                    ),
                1=>array(
                    0=>'data/viewdata/淇河/淇河20160419提取结果图.jpg',
                    1=>'width:834px;height:708px;',
                    2=>'淇河20160419提取结果图'
                    ),
                2=>array(
                    0=>'data/viewdata/淇河/淇河20160419.jpg',
                    1=>'width:834px;height:626px;',
                    2=>'淇河20160419提取结果统计图'
                    )
                )
            ),
        '鲁山'=>array(),
        '叶县'=>array(),
        '郏县'=>array()
        );


if ($flag==0) 
{
    $list = $datacity['city'];
}
elseif ($flag==1) 
{
    $list = $datacounty[$pindex];
}
else if ($flag==2) 
{
    $list = $datatime[$pindex];
}
else if ($flag==3)
{
   /* if ($nindex == '全部') 
    {
        $list = $datastyle[$pindex];
    }
    else 
    {*/
        $list = $datastyle[$pindex][$nindex];
    //}
    
};

echo json_encode($list);
?>

