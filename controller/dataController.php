<?php

require('../model/db.php');

if(isset($_POST["action"]))
{
	if($_POST["action"] == 'fetch1')
	{
		$query1 = "
            SELECT day(NGAY_LAP) as ngaylap, SUM(DON_GIA) AS Total
            FROM hoa_don
            WHERE month(NGAY_LAP) = month(CURDATE())
            GROUP BY NGAY_LAP;
		";

		$result1 = $connect->query($query1);
        
		$data1 = array();

		foreach($result1 as $row)
		{
			$data1[] = array(
				'language'		=>	$row["ngaylap"],
				'total'			=>	$row["Total"],
				'color'			=>	'#' . rand(100000, 999999) . ''
			);
		}

		echo json_encode($data1);

	}

    if($_POST["action"] == 'fetch2')
	{
        $query2 = "
            SELECT month(NGAY_LAP) as month, SUM(DON_GIA) AS Total
            FROM hoa_don
            WHERE year(NGAY_LAP) = year(CURDATE())
            GROUP BY month(NGAY_LAP);
		";

        $result2 = $connect->query($query2);
        $data2 = array();

		foreach($result2 as $row)
		{
			$data2[] = array(
				'language'		=>	$row["month"],
				'total'			=>	$row["Total"],
				'color'			=>	'#' . rand(100000, 999999) . ''
			);
		}

		echo json_encode($data2);
    }

    if($_POST["action"] == 'fetch3')
	{
        $query3 = "
            SELECT year(NGAY_LAP) as year, SUM(DON_GIA) AS Total
            FROM hoa_don
            GROUP BY year(NGAY_LAP);
		";

        $result3 = $connect->query($query3);
        $data3 = array();

		foreach($result3 as $row)
		{
			$data3[] = array(
				'language'		=>	$row["year"],
				'total'			=>	$row["Total"],
				'color'			=>	'#' . rand(100000, 999999) . ''
			);
		}
		echo json_encode($data3);
    }

	if($_POST["action"] == 'fetch4')
	{
        $query4 = "
            SELECT ma.TEN_MON as tenmon, SUM(SO_LUONG) AS Total
            FROM dat_mon dm, mon_an ma, hoa_don ha 
			WHERE dm.MA_MON = ma.MA_MON
				AND ha.MA_HOA_DON = dm.MA_HOA_DON
				AND month(NGAY_LAP) = month(CURDATE())
			GROUP By dm.MA_MON 
			ORDER BY Total DESC
			Limit 6;

		";
        $result4 = $connect->query($query4);
        $data4 = array();

		foreach($result4 as $row)
		{
			$data4[] = array(
				'language'		=>	$row["tenmon"],
				'total'			=>	$row["Total"],
				'color'			=>	'#' . rand(100000, 999999) . ''
			);
		}
		echo json_encode($data4);
    }

	if($_POST["action"] == 'fetch5')
	{
        $query5 = "
            SELECT ma.TEN_MON as tenmon, SUM(SO_LUONG) AS Total
            FROM dat_mon dm, mon_an ma, hoa_don ha
			WHERE dm.MA_MON = ma.MA_MON
				AND ha.MA_HOA_DON = dm.MA_HOA_DON
				AND year(NGAY_LAP) = year(CURDATE())
			GROUP By dm.MA_MON
			ORDER BY Total DESC
			Limit 6;
		";
        $result5 = $connect->query($query5);
        $data5 = array();

		foreach($result5 as $row)
		{
			$data5[] = array(
				'language'		=>	$row["tenmon"],
				'total'			=>	$row["Total"],
				'color'			=>	'#' . rand(100000, 999999) . ''
			);
		}
		echo json_encode($data5);
    }

	if($_POST["action"] == 'fetch6')
	{
        $query6 = "
            SELECT ma.TEN_MON as tenmon, SUM(SO_LUONG) AS Total
            FROM dat_mon dm, mon_an ma, hoa_don ha
			WHERE dm.MA_MON = ma.MA_MON
				AND ha.MA_HOA_DON = dm.MA_HOA_DON
			GROUP By dm.MA_MON 
			ORDER BY Total DESC
			Limit 6;      
		";
        $result6 = $connect->query($query6);
        $data6 = array();

		foreach($result6 as $row)
		{
			$data6[] = array(
				'language'		=>	$row["tenmon"],
				'total'			=>	$row["Total"],
				'color'			=>	'#' . rand(100000, 999999) . ''
			);
		}
		echo json_encode($data6);
    }

	if($_POST["action"] == 'fetch7')
	{
        $query7 = "
            SELECT ma.TEN_MON as tenmon, SUM(SO_LUONG)*ma.GIA AS Total
            FROM dat_mon dm, mon_an ma, hoa_don ha
			WHERE dm.MA_MON = ma.MA_MON
				AND ha.MA_HOA_DON = dm.MA_HOA_DON
				AND month(NGAY_LAP) = month(CURDATE())
			GROUP By dm.MA_MON 
			ORDER BY Total DESC
			Limit 6;        
		";
        $result7 = $connect->query($query7);
        $data7 = array();

		foreach($result7 as $row)
		{
			$data7[] = array(
				'language'		=>	$row["tenmon"],
				'total'			=>	$row["Total"],
				'color'			=>	'#' . rand(100000, 999999) . ''
			);
		}
		echo json_encode($data7);
    }

	if($_POST["action"] == 'fetch8')
	{
        $query8 = "
            SELECT ma.TEN_MON as tenmon, SUM(SO_LUONG)*ma.GIA AS Total
            FROM dat_mon dm, mon_an ma, hoa_don ha
			WHERE dm.MA_MON = ma.MA_MON
				AND ha.MA_HOA_DON = dm.MA_HOA_DON
				AND year(NGAY_LAP) = year(CURDATE())
			GROUP By dm.MA_MON 
			ORDER BY Total DESC
			Limit 6;   
		";
        $result8 = $connect->query($query8);
        $data8 = array();

		foreach($result8 as $row)
		{
			$data8[] = array(
				'language'		=>	$row["tenmon"],
				'total'			=>	$row["Total"],
				'color'			=>	'#' . rand(100000, 999999) . ''
			);
		}
		echo json_encode($data8);
    }

	if($_POST["action"] == 'fetch9')
	{
        $query9 = "
            SELECT ma.TEN_MON as tenmon, SUM(SO_LUONG)*ma.GIA AS Total
            FROM dat_mon dm, mon_an ma, hoa_don ha
			WHERE dm.MA_MON = ma.MA_MON
				AND ha.MA_HOA_DON = dm.MA_HOA_DON
			GROUP By dm.MA_MON 
			ORDER BY Total DESC
			Limit 6; 
		";
        $result9 = $connect->query($query9);
        $data8 = array();

		foreach($result9 as $row)
		{
			$data9[] = array(
				'language'		=>	$row["tenmon"],
				'total'			=>	$row["Total"],
				'color'			=>	'#' . rand(100000, 999999) . ''
			);
		}
		echo json_encode($data9);
    }

}
?>