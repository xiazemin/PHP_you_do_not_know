<?php
function myfunction($value,$key)
{
echo "The key $key has the value $value<br>";
}
$a=array("a"=>"red","b"=>"green","c"=>"blue");
array_walk($a,"myfunction");
$b=array("ax",'bx');
array_walk($b,"myfunction");
array_walk($b,'ucfirst');
array_walk($b,function (&$value, $key) {
            $value = ucfirst($value);
        });
var_dump($b);
array_walk($b,function ($value, $key) {
            $value = ucfirst($value);
        });
var_dump($b);
die();

 function getNDimensionalNewField() {
        $fieldNames = [
            'business_id',
            'carpool_type',
            'airport_type',
            'fixed_price_type',
            'long_rent_type',
            'x_activity_type',
            'region',
            'booking_assign',
            'call_car',
            'car_ticket',
            'line_up',
            'serial_order',
            'destination_fixed',
            'departure_recommend',
            'custom_service',
            'approach_airport',
            'approach_railway',
            'virtual_phone',
        ];

        foreach ($fieldNames as $field) {
            $methodName = _getMethodName($field);

            if (method_exists($instance, $methodName)) {
           //     $output[$field] = $instance->$methodName();
            }
        }

        return $output;
    }

     function _getMethodName($fieldName) {
        $items = explode('_', $fieldName);
var_dump( $items);
var_dump(array_values($items));
        array_walk(array_values($items), 'ucfirst');
        $methodName = 'get' . implode('', $items);

        return $methodName;
    }

getNDimensionalNewField();
