<?php

namespace common\components;


use yii\base\Component;

class DataHelper extends Component
{

    const HOUR_FORMAT = 'H';
    const MINUTE_FORMAT = 'i';
    const SECOND_FORMAT = 's';
    const DATE_FORMAT  = 'Y-m-d H:i:s';

    /**
     * @return int
     */
    public static function currentTimestamp()
    {
        /** @var  $date */
        $date = new \DateTime();
        return $date->getTimestamp();
    }

    /**
     * @param $date
     * @return int
     */
    public static function getTimestamp($date)
    {
        $date = new \DateTime($date);
        return $date->getTimestamp();
    }

    /**
     * @param $startTime
     * @param $presetTime
     * @return bool
     */
    public static function checkTime($startTime, $presetTime)
    {
        if ((self::currentTimestamp() - $startTime) >= $presetTime) {
            return false;
        }
        return true;
    }


    public static function getDateFormat($timestamp, $format = null)
    {
        if(!$format){
            $format = self::DATE_FORMAT;
        }

        $date = new \DateTime();
        $date->setTimestamp($timestamp);
        return $date->format($format);
    }
}