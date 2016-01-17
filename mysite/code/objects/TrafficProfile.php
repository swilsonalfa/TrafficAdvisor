<?php
class TrafficProfile extends DataObject {
    private static $db = array(
        "FromAddress"       => "Varchar(250)",
        "ToAddress"         => "Varchar(250)",
        "Mode"              => "Enum(array('driving','walking','bicycling','transit'),'driving')"
    );

    private static $has_many = array(
        "History"           => "TrafficHistory",
        "Congestion"        => "TrafficCongestion"
    );
}