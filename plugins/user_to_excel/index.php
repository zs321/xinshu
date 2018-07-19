<?php
/**
 * ECSHOP 导出订单插件
 * ============================================================================
 *
*/
define('IN_ECS', true);
require(dirname(__FILE__) . '/../../includes/init.php');
include_once(ROOT_PATH . 'includes/lib_base.php');



$user_rank = empty($_GET['user_rank']) ? 0 : intval($_GET['user_rank']);
$pay_points_gt = empty($_GET['pay_points_gt']) ? 0 : intval($_GET['pay_points_gt']);
$pay_points_lt = empty($_GET['pay_points_lt']) ? 0 : intval($_GET['pay_points_lt']);
$keyword = empty($_GET['keyword']) ? '' : trim($_GET['keyword']);

$where = ' WHERE 1 ';

if ($user_rank)
{
    $sql = "SELECT min_points, max_points, special_rank FROM ".$GLOBALS['ecs']->table('user_rank')." WHERE rank_id = '$user_rank'";
    $row = $GLOBALS['db']->getRow($sql);
    if ($row['special_rank'] > 0)
    {
        /* 特殊等级 */
        $where .= " AND user_rank = '$filter[rank]' ";
    }
    else
    {
        $where .= " AND rank_points >= " . intval($row['min_points']) . " AND rank_points < " . intval($row['max_points']);
    }
}
if ($pay_points_gt)
{
    $where .=" AND pay_points >= '$pay_points_gt' ";
}
if ($pay_points_lt)
{
    $where .=" AND pay_points < '$pay_points_lt' ";
}
if ($keyword)
{
	$where .= " AND user_name like '%" . mysql_like_quote($keyword) ."%'";
}

		
$sql = "SELECT * FROM " . $GLOBALS['ecs']->table('users') . $where;		

		
header("Content-type:application/vnd.ms-excel");
header("Accept-Ranges:bytes");
header("Content-Disposition:filename=users.xls");
header("Pragma: no-cache");

echo '
	<html xmlns:o="urn:schemas-microsoft-com:office:office"
	xmlns:x="urn:schemas-microsoft-com:office:excel"
	xmlns="http://www.w3.org/TR/REC-html40">
	<head>
	<meta http-equiv="expires" content="Mon, 06 Jan 1999 00:00:01 GMT">
	<meta http-equiv=Content-Type content="text/html; charset=utf-8">
	<!--[if gte mso 9]><xml>
	<x:ExcelWorkbook>
	<x:ExcelWorksheets>
	<x:ExcelWorksheet>
	<x:Name></x:Name>
	<x:WorksheetOptions>
	<x:DisplayGridlines/>
	</x:WorksheetOptions>
	</x:ExcelWorksheet>
	</x:ExcelWorksheets>
	</x:ExcelWorkbook>
	</xml><![endif]-->
	</head>
';

echo '<table>';
echo '<tr>';
echo '<td>会员名</td>';
echo '<td>手机号</td>';
echo '<td>邮箱</td>';
echo '<td>可用资金</td>';
echo '<td>冻结资金</td>';
echo '<td>等级积分</td>';
echo '<td>消费积分</td>';
echo '<td>注册时间</td>';
echo '</tr>';
		
$res = $GLOBALS['db']->query($sql);
while ($row = $GLOBALS['db']->fetchRow($res))
{
	echo '<tr>';
	echo "<td style='vnd.ms-excel.numberformat:@'>$row[user_name]</td>";
	echo "<td style='vnd.ms-excel.numberformat:@'>$row[mobile_phone]</td>";
	echo "<td style='vnd.ms-excel.numberformat:@'>$row[email]</td>";
	echo "<td style='vnd.ms-excel.numberformat:@'>$row[user_money]</td>";
	echo "<td style='vnd.ms-excel.numberformat:@'>$row[frozen_money]</td>";
	echo "<td style='vnd.ms-excel.numberformat:@'>$row[rank_points]</td>";
	echo "<td style='vnd.ms-excel.numberformat:@'>$row[pay_points]</td>";
	echo "<td style='vnd.ms-excel.numberformat:@'>".date("Y-m-d H:i:s",$row['reg_time'])."</td>";
	echo '</tr>';
}

echo '</table>';
?>