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
    'name'=> 'any',
    'mobile' => '0912'
],
[
    'id'=>'2',
    'name'=> 'abo',
    'mobile' => '0913'
],
[
    'id'=>'3',
    'name'=> 'ido',
    'mobile' => '0915'
]
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<style>
table,
td,
th {
    border: 1 solid black;
    border-collapse: collapse;
    text-align: center;
}
</style>


<body>
    <table style="width: 100%;">
        <tr>
            <th width="30%">id</th>
            <th width="30%">name</th>
            <th width="">mobile</th>
        </tr>
    </table>

    <?php foreach($data as $key=>$value):?>

    <tr>
        <td><?= $value['id'] ?></td>
        <td><?= $value['name'] ?></td>
        <td><?= $value['mobile'] ?></td>
    </tr>
    <?php endforeach; ?>


</body>

</html>

<?php
 dd($data);
// echo json_encode($data);
?>
