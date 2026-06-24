<?php

    function dd($data)
    {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }

    $data = [
            [
            'id'=>'1',
            'name'=>'any',
            'mobile'=> '0913'
            ],
            [
                'id'=>'2',
                'name'=>'axx',
                'mobile'=> '0915'
            ],
            [
                'id'=>'3',
                'name'=>'cxx',
                'mobile'=> '0911'
            ]
            ];  


// dd($data);

echo json_encode($data);
?>