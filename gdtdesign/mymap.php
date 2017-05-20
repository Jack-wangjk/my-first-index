<?php 
$beginx = floatval($_POST['beginx']);
$beginy = floatval($_POST['beginy']);

$stopx = floatval($_POST['stopx']);
$stopy = floatval($_POST['stopy']);
//获取前台传递过来的数据
if ($beginx>$stopx) {
    $maxx = $beginx;
    $minx = $stopx;
}
else{
    $maxx = $stopx;
    $minx = $beginx;
};//获取框选区域的经度区间，minx->manx

if ($beginy>$stopy) 
{
    $maxy = $beginy;
    $miny = $stopy;
}
else
{
    $maxy = $stopy;
    $miny = $beginy;
};//获取框选区域的纬度区间，miny->maxy

$data = array(
    0=>array(
        'url'=>'北京',
        'src'=>'data/北京.png',
        'style'=>'width:256px;height:384px;',
        'position'=>array(
            0=> 116.3246154785,
            1=> 39.9634381223,
            2=> 116.4743041992,
            3=> 39.8454492313,
            ),
        'area'=>'xxx平方米'
        ),
    
    1=>array(
        'url'=>'乌鲁木齐',
        'src'=>'data/乌鲁木齐.png',
        'style'=>'width:640px;height:512px;',
        'position'=>array(
            0=> 87.55663125,
            1=> 39.8454492313925329177,
            2=> 87.66011575,
            3=> 43.78817645308483,    
            ),
        'area'=>'xxx平方米'
        ),

    2=>array(
        'url'=>'海口',
        'src'=>'data/海口.png',
        'style'=>'width:384px;height:256px;',
        'position'=>array(
                0=>110.212901,
                1=>20.05985935951796,
                2=>110.39342575,
                3=>19.93159105407942,
            ),
        'area'=>'xxx平方米'
        ),
    
    3=>array(
        'url'=>'郑州',
        'src'=>'data/郑州.png',
        'style'=>'width:512px;height:256px;',
        'position'=>array(
            0=>    113.6342243203,
            1=>    34.7844834155,
            2=>    113.6810302734,
            3=>    34.7054934102,
            ),
        'area'=>'xxx平方米',
        ),
    
    4=>array(
        'url'=>'平顶山',
        'src'=>'data/平顶山.png',
        'style'=>'width:512px;height:256px;',
        'position'=>array(
            0=>    113.162793,
            1=>    33.7979864171489,
            2=>    113.278351,
            3=>    33.7264353630548,
            ),
        'area'=>'xxx平方米',
        ),
    
    5=>array(
        'url'=>'丹江口',
        'src'=>'data/丹江口.png',
        'style'=>'width:384px;height:256px;',
        'position'=>array(
            0=>    111.65478925,
            1=>    32.7412637705412,
            2=>    111.854285,
            3=>    32.64305556252034,
            ),
        'area'=>'xxx平方米',
        ),
   

    6=>array(
        'url'=>'西安',
        'src'=>'data/西安.png',
        'style'=>'width:384px;height:256px;',
        'position'=>array(
            0=>    108.852651,
            1=>    34.37298434537185,
            2=>    109.02627675,
            3=>    34.21933764366705,
            ),
        'area'=>'xxx平方米',
        )
    
    );//定义数据存储数组

//定义输出数组
    $result = array();//定义$result数组的
/*判断数组内是否具有符合需求的数据*/
//$result[0]=$data[6];
//$result[1]= $data[1];
for ($i=0; $i < count($data); $i++) 
{   
    $x1 = $data[$i]['position'][0];
    $y1 = $data[$i]['position'][1];
    $x2 = $data[$i]['position'][2];
    $y2 = $data[$i]['position'][3];
   if ($minx<=$x1&&$maxy>=$y1&&$maxx>=$x2&&$miny<=$y2)//坐标对比判断是否符合条件
    {
        array_push($result, $data[$i]);
    };//*进行数据拼接实现符合需求的数据输出
};
    /*array_push($result, $data[5]);*/
    $list = json_encode($result);
    echo $list;

?>