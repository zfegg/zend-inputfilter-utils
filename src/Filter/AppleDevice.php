<?php

namespace Zfegg\Utils\Filter;

use Laminas\Filter\AbstractFilter;

/**
 * 苹果设备型号过滤器
 *
 * @package Zfegg\Utils\Filter
 * @author  moln.xie@gmail.com
 */
class AppleDevice extends AbstractFilter
{

    /**
     * 苹果设备标识
     *
     * @see https://github.com/erichoracek/UIDevice-Hardware/blob/master/UIDevice-Hardware.m
     * @var array
     */
    protected static $machineIDs = [
        // iPhone http://theiphonewiki.com/wiki/IPhone
        'iPhone1,1'  => ['device' => 'iPhone 1G', 'net' => '',],
        'iPhone1,2'  => ['device' => 'iPhone 3G', 'net' => '',],
        'iPhone2,1'  => ['device' => 'iPhone 3GS', 'net' => '',],
        'iPhone3,1'  => ['device' => 'iPhone 4', 'net' => '',],
        'iPhone3,2'  => ['device' => 'iPhone 4', 'net' => 'GSM Rev A',],
        'iPhone3,3'  => ['device' => 'iPhone 4', 'net' => 'CDMA',],
        'iPhone4,1'  => ['device' => 'iPhone 4S', 'net' => '',],
        'iPhone5,1'  => ['device' => 'iPhone 5', 'net' => 'GSM',],
        'iPhone5,2'  => ['device' => 'iPhone 5', 'net' => 'Global',],
        'iPhone5,3'  => ['device' => 'iPhone 5c', 'net' => 'GSM',],
        'iPhone5,4'  => ['device' => 'iPhone 5c', 'net' => 'Global',],
        'iPhone6,1'  => ['device' => 'iPhone 5s', 'net' => 'GSM',],
        'iPhone6,2'  => ['device' => 'iPhone 5s', 'net' => 'Global',],
        'iPhone7,1'  => ['device' => 'iPhone 6 Plus', 'net' => '',],
        'iPhone7,2'  => ['device' => 'iPhone 6', 'net' => '',],
        'iPhone8,1'  => ['device' => 'iPhone 6s', 'net' => '',],
        'iPhone8,2'  => ['device' => 'iPhone 6s Plus', 'net' => '',],
        'iPhone8,4'  => ['device' => 'iPhone SE', 'net' => '',],
        'iPhone9,1'  => ['device' => 'iPhone 7', 'net' => '',],
        'iPhone9,2'  => ['device' => 'iPhone 7 Plus', 'net' => '',],
        'iPhone9,3'  => ['device' => 'iPhone 7', 'net' => '',],
        'iPhone9,4'  => ['device' => 'iPhone 7 Plus', 'net' => '',],
        'iPhone10,1' => ['device' => 'iPhone 8', 'net' => '',],
        // US (Verizon), China, Japan
        'iPhone10,2' => ['device' => 'iPhone 8 Plus', 'net' => '',],
        // US (Verizon), China, Japan
        'iPhone10,3' => ['device' => 'iPhone X', 'net' => '',],
        // US (Verizon), China, Japan
        'iPhone10,4' => ['device' => 'iPhone 8', 'net' => '',],// AT&T, Global
        'iPhone10,5' => ['device' => 'iPhone 8 Plus', 'net' => '',],
        // AT&T, Global
        'iPhone10,6' => ['device' => 'iPhone X', 'net' => '',],// AT&T, Global

        // iPad http://theiphonewiki.com/wiki/IPad
        'iPad1,1'    => ['device' => 'iPad 1G', 'net' => '',],
        'iPad2,1'    => ['device' => 'iPad 2', 'net' => 'Wi-Fi',],
        'iPad2,2'    => ['device' => 'iPad 2', 'net' => 'GSM',],
        'iPad2,3'    => ['device' => 'iPad 2', 'net' => 'CDMA',],
        'iPad2,4'    => ['device' => 'iPad 2', 'net' => 'Rev A',],
        //'iPad2,5' => ['device' => 'iPad Mini', 'net' => 'Wi-Fi',],
        //'iPad2,6' => ['device' => 'iPad Mini', 'net' => 'GSM',],
        //'iPad2,7' => ['device' => 'iPad Mini', 'net' => 'Global',],
        'iPad3,1'    => ['device' => 'iPad 3', 'net' => 'Wi-Fi',],
        'iPad3,2'    => ['device' => 'iPad 3', 'net' => 'GSM',],
        'iPad3,3'    => ['device' => 'iPad 3', 'net' => 'Global',],
        'iPad3,4'    => ['device' => 'iPad 4', 'net' => 'Wi-Fi',],
        'iPad3,5'    => ['device' => 'iPad 4', 'net' => 'GSM',],
        'iPad3,6'    => ['device' => 'iPad 4', 'net' => 'Global',],

        'iPad4,1' => ['device' => 'iPad Air', 'net' => 'Wi-Fi',],
        'iPad4,2' => ['device' => 'iPad Air', 'net' => 'Cellular',],
        'iPad4,3' => ['device' => 'iPad Air', 'net' => 'TD-LTE',],
        //'iPad4,4' => ['device' => 'iPad mini 2', 'net' => 'Wi-Fi',],
        //'iPad4,5' => ['device' => 'iPad mini 2', 'net' => 'Cellular',],
        //'iPad4,6' => ['device' => 'iPad mini 2', 'net' => 'TD-LTE',],
        //'iPad4,7' => ['device' => 'iPad mini 3', 'net' => 'Wi-Fi',],
        //'iPad4,8' => ['device' => 'iPad mini 3', 'net' => 'Cellular',],
        //'iPad4,9' => ['device' => 'iPad mini 3', 'net' => 'TD-LTE',],
        'iPad5,1' => ['device' => 'iPad mini 4', 'net' => 'Wi-Fmi',],
        'iPad5,2' => ['device' => 'iPad mini 4', 'net' => 'Cellular',],
        'iPad5,3' => ['device' => 'iPad Air 2', 'net' => 'Wi-Fi',],
        'iPad5,4' => ['device' => 'iPad Air 2', 'net' => 'Cellular',],

        // iPad Mini http://theiphonewiki.com/wiki/IPad_mini

        'iPad2,5'  => ['device' => 'iPad mini 1G', 'net' => 'Wi-Fi',],
        'iPad2,6'  => ['device' => 'iPad mini 1G', 'net' => 'GSM',],
        'iPad2,7'  => ['device' => 'iPad mini 1G', 'net' => 'Global',],
        'iPad4,4'  => ['device' => 'iPad mini 2G', 'net' => 'Wi-Fi',],
        'iPad4,5'  => ['device' => 'iPad mini 2G', 'net' => 'Cellular',],
        // TD-LTE model see https://support.apple.com/en-us/HT201471#iPad-mini2
        'iPad4,6'  => ['device' => 'iPad mini 2G', 'net' => 'TD-LTE',],
        'iPad4,7'  => ['device' => 'iPad mini 3G', 'net' => 'Wi-Fi',],
        'iPad4,8'  => ['device' => 'iPad mini 3G', 'net' => 'Cellular',],
        'iPad4,9'  => ['device' => 'iPad mini 3G', 'net' => 'TD-LTE',],

        // iPad Pro https://www.theiphonewiki.com/wiki/IPad_Pro
        'iPad6,3'  => ['device' => 'iPad Pro (9.7 inch)', 'net' => 'Wi-Fi',],
        'iPad6,4'  => ['device' => 'iPad Pro (9.7 inch)', 'net' => 'Cellular',],

        // http://pdadb.net/index.php?m=specs&id=8960&c=apple_ipad_pro_wifi_a1584_128gb
        'iPad6,7'  => ['device' => 'iPad Pro (12.9 inch)', 'net' => 'Wi-Fi',],

        // http://pdadb.net/index.php?m=specs&id=8965&c=apple_ipad_pro_td-lte_a1652_32gb_apple_ipad_6,8
        'iPad6,8'  => [
            'device' => 'iPad Pro (12.9 inch)', 'net' => 'Cellular',
        ],
        'iPad6,11' => ['device' => 'iPad (5th gen)', 'net' => 'Cellular',],
        'iPad6,12' => ['device' => 'iPad (5th gen)', 'net' => 'Cellular',],
        'iPad 7,1' => [
            'device' => 'iPad Pro (12.9 inch) 2G', 'net' => 'Wi-Fi',
        ],
        'iPad 7,2' => [
            'device' => 'iPad Pro (12.9 inch) 2G', 'net' => 'Cellular',
        ],
        'iPad 7,3' => [
            'device' => 'iPad Pro (10.5 inch) 1G', 'net' => 'Wi-Fi',
        ],
        'iPad 7,4' => [
            'device' => 'iPad Pro (10.5 inch) 1G', 'net' => 'Cellular',
        ],

        // iPod http://theiphonewiki.com/wiki/IPod
        'iPod1,1'  => ['device' => 'iPod touch 1G', 'net' => '',],
        'iPod2,1'  => ['device' => 'iPod touch 2G', 'net' => '',],
        'iPod3,1'  => ['device' => 'iPod touch 3G', 'net' => '',],
        'iPod4,1'  => ['device' => 'iPod touch 4G', 'net' => '',],
        'iPod5,1'  => ['device' => 'iPod touch 5G', 'net' => '',],

        // as 6,1 was never released 7,1 is actually 6th generation
        'iPod7,1'  => ['device' => 'iPod touch 6G', 'net' => '',],

        // Apple TV https://www.theiphonewiki.com/wiki/Apple_TV

        'AppleTV1,1' => ['device' => 'Apple TV 1G', 'net' => '',],
        'AppleTV2,1' => ['device' => 'Apple TV 2G', 'net' => '',],
        'AppleTV3,1' => ['device' => 'Apple TV 3G', 'net' => '',],
        // small, incremental update over 3,1
        'AppleTV3,2' => ['device' => 'Apple TV 3G', 'net' => '',],
        // as 4,1 was never released, 5,1 is actually 4th generation
        'AppleTV5,3' => ['device' => 'Apple TV 4G', 'net' => '',],

        'x86_64' => ['device' => 'Simulator', 'net' => '',],
        'i386'   => ['device' => 'Simulator', 'net' => '',],
    ];

    public function filter($value)
    {
        if (isset(self::$machineIDs[$value])) {
            $value = self::$machineIDs[$value]['device'];
        }

        return $value;
    }
}
