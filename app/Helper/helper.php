<?php


function bn_date($str){
    $en = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 0);
    $bn = array('১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯', '০');
    $str = str_replace($en, $bn, $str);
    $en = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
    $en_short = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
    $bn = array('জানুয়ারী', 'ফেব্রুয়ারী', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'আগস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর');
    $str = str_replace($en, $bn, $str);
    $str = str_replace($en_short, $bn, $str);
    $en = array('Saturday', 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday');
    $en_short = array('Sat', 'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri');
    $bn_short = array('শনি', 'রবি', 'সোম', 'মঙ্গল', 'বুধ', 'বৃহঃ', 'শুক্র');
    $bn = array('শনিবার', 'রবিবার', 'সোমবার', 'মঙ্গলবার', 'বুধবার', 'বৃহস্পতিবার', 'শুক্রবার');
    $str = str_replace($en, $bn, $str);
    $str = str_replace($en_short, $bn_short, $str);
    $en = array('AM', 'PM');
    $bn = array('পূর্বাহ্ন', 'অপরাহ্ন');
    $str = str_replace($en, $bn, $str);
    return $str;
}




function bn_date1($str){
    $en = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 0);
    $bn = array('১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯', '০');
    $str = str_replace($en, $bn, $str);
    $en = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
    $en_short = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
    $bn = array('জানুয়ারী', 'ফেব্রুয়ারী', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'আগস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর');
    $str = str_replace($en, $bn, $str);
    $str = str_replace($en_short, $bn, $str);
    $en = array('Saturday', 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday');
    $en_short = array('Sat', 'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri');
    $bn_short = array('শনি', 'রবি', 'সোম', 'মঙ্গল', 'বুধ', 'বৃহঃ', 'শুক্র');
    $bn = array('শনিবার', 'রবিবার', 'সোমবার', 'মঙ্গলবার', 'বুধবার', 'বৃহস্পতিবার', 'শুক্রবার');
    $str = str_replace($en, $bn, $str);
    $str = str_replace($en_short, $bn_short, $str);
    $en = array('AM', 'PM');
    $bn = array('পূর্বাহ্ন', 'অপরাহ্ন');
    $str = str_replace($en, $bn, $str);
    return $str;
}

function en_date($str){
    $en = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 0);
    $bn = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 0);
    $str = str_replace($en, $bn, $str);
    $en = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
    $en_short = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
    $bn = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
    $str = str_replace($en, $bn, $str);
    $str = str_replace($en_short, $bn, $str);
    $en = array('Saturday', 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday');
    $en_short = array('Sat', 'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri');
    $bn_short = array('Sat', 'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri');
    $bn = array('Saturday', 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday');
    $str = str_replace($en, $bn, $str);
    $str = str_replace($en_short, $bn_short, $str);
    $en = array('AM', 'PM');
    $bn = array('AM', 'PM');
    $str = str_replace($en, $bn, $str);
    return $str;
}
