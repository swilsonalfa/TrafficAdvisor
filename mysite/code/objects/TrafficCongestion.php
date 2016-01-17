<?php
class TrafficCongestion extends DataObject {
    private static $db = array(
        "Title"             => "Varchar(250)",
        "SecondsFrom"       => "Int",
        "SecondsTo"         => "Int"
    );

    private static $summary_fields = array(
        "Title"
    );

    private static $has_one = array(
        "TrafficProfile"    => "TrafficProfile"
    );
}