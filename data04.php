<?php
    function dd($data)
    {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
   
    $input = $_GET;

    dd($input);

    $data =[
        'num1' => 100,
        'num2' => 50,
        'opt' => '+'
    ];
    ?>

<?php
    // dd($data);
     echo json_encode($data);
?>