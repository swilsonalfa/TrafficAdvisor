<?php
class TrafficHistory extends DataObject {
    private static $db = array(
        "TrafficInSeconds"      => "Int"
    );

    private static $has_one = array(
        "TrafficProfile"        => "TrafficProfile"
    );
}