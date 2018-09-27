<?php
// 本周起始时间
$thisWeekBegin = date("Y-m-d H:i:s", mktime(0, 0, 0, date("m"), date("d") - date("w")  + 1 , date("Y")));
// 本周结束时间
$thisWeekEnd = date("Y-m-d H:i:s", mktime(23, 59, 59, date("m"), date("d") - date("w") + 7 , date("Y")));


// 上周起始时间
$lastWeekBegin = date("Y-m-d H:i:s", mktime(0, 0, 0, date("m"), date("d") - date("w")  + 1 - 7 , date("Y")));
// 上周结束时间
$lastWeekEnd = date("Y-m-d H:i:s", mktime(23, 59, 59, date("m"), date("d") - date("w") + 7 - 7 , date("Y")));

// 当前年的第几周
$timeYearFirstDay = strtotime(date('Y', $thisWeekEnd) . '-01-01');
$yearFirstWeekEnd = mktime(23, 59, 59, date('m', $timeYearFirstDay), date('d', $timeYearFirstDay) - date('w', $timeYearFirstDay) + 7, date('Y', $timeYearFirstDay));
$weekRank = ($thisWeekEnd - $yearFirstWeekEnd) / (7 * 24 * 3600) + 1;
