<?php
class Utils {
    public static function highlight($x, $color = 'yellow') {
        return "<span style='color: black; background-color: $color'>$x</span>";
    }
}