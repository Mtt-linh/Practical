<?php
function hello(){
    return "Hello world";
}
if (!function_exists("is_admin")){
    function is_admin(){
        if (Auth::check()){
            if (Auth::user()->__get("role")== \App\User::ADMIN_ROLE){
                return true;
            }
        }
        return false;
    }
}
if (!function_exists("format_money")){
    function format_money($money){
        return"$".number_format($money,2);
    }
}
if (!function_exists("notify")){
    function notify($channel,$event,$data){
        $options = array(
            'cluster' => 'ap1',
            'useTLS' => true
        );
        $pusher = new Pusher\Pusher(
            '9c782fbb3667c79fe1a9',
            '0ab9b2f932ef3493129a',
            '1024768',
            $options
        );
        $pusher->trigger($channel, $event, $data);
    }
}

