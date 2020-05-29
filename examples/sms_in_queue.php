<?php


// Get SMS in Queue
// ---------------------

// Example 01: for android

require_once('../autoload.php');

$apiClient = new SMSGatewayApi(AUTH_KEY, SERVER);

try {
    
    $sms_in_queue = $apiClient->getSmsInQueue(array('filterby_device' => '1', 'filterby_from' => '2019-11-29 12:00:00', 'filterby_to' => '2019-11-29 23:59:00'));
    print_r($sms_in_queue);
} catch (Exception $e) {
    
    echo $e->getMessage();
}

// Example 02: for http

try {
    
    $sms_in_queue = $apiClient->getSmsInQueue(array('filterby_send_through' => 'http', 'filterby_gateway' => 'clickatell', 'filterby_from' => '2019-11-29 12:00:00', 'filterby_to' => '2020-11-29 23:59:00'));
    print_r($sms_in_queue);
} catch (Exception $e) {
    
    echo $e->getMessage();
}




/*


Output
----------


Array
(
    [status] => Success
    [data] => Array
        (
            [0] => Array
                (
                    [id] => 15
                    [schedule_at] => 2019-11-29 23:57:00
                    [queue_id] => 1575050220eee1
                    [mobile_no] => 14156661234
                    [device_model] => 1
                    [sim_id] => 2
                    [username] => admin.sms@ntechpark.com
                    [message] => Hi Mike, This is a test messsage
                    [process_status] => 0
                    [total_try] => 0
                    [response_text] => 
                    [delivery_status] => pending
                    [created_by] => 1
                    [created_at] => 2019-11-29 23:57:00
                )

        )

)

*/