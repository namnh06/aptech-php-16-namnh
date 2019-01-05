<h1>
  <?php
// declare variable named a and assign 5 for it
/*
$a = 5; //int
$b = 6.6; //float
echo $a + $b; //float
 */
// strings
$address = '38 Yen Bai';
// echo $address;

$so = '5aasdfasd';
$hihi = '6';
$sau = 6;
// echo $so . '-' . $hihi . $sau;

$nam = 'Nam';
if ($nam == 'Nam') {
    // echo $nam;
}

$age = '18';
if ($age == 18) {
    // echo 'You are too young to me !!!';
}

// array
$lopPHP16 = [0 => 'Nam', 1 => 'Vu', 2 => 'Na', 3 => 'Link'];
// echo count($lopPHP16);
for ($i = 0; $i < count($lopPHP16); $i = $i + 1) {
    // echo $lopPHP16[$i] . '<br>';
}

$products = [
    'iphone X' =>
    ['price' => 18200000,
        'color' => 'rose'],
    'ipad' =>
    ['price' => 9000000,
        'color' => 'gray'],
];

// var_dump($products['iphone X']);
// echo $products['iphone X']['price'];
foreach ($products as $key => $value) {
    foreach ($value as $key1 => $value1) {
        echo $value1;
    }
}

// array()

?>
</h1>


<table>
  <thead>
    <tr>
      <th>#</th>
      <th>Name</th>
      <th>Price</th>
      <th>Color</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>1</th>
      <td>iphone</td>
      <td>18.000.000</td>
      <td>Rose</td>
    </tr>
  </tbody>
</table>



<?php
$data = [
    [
        'type' => 'iphone',
        'property' => [
            'price' => 100,
            'size' => 6.5,
            'ram' => '2 GB',
            'made' => [
                'by' => 'California',
                'in' => 'China',
            ],
        ],
    ],
    [
        'type' => 'ipad',
        'property' => [
            'price' => 190,
            'size' => 7.9,
            'ram' => '4 GB',
            'made' => [
                'by' => 'California',
                'in' => 'China',
            ],
        ],
    ],
];
?>