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
            [
            'price' => 18200000,
            'color' => 'rose'
        ],
        'ipad' =>
            [
            'price' => 9000000,
            'color' => 'gray'
        ],
    ];

// var_dump($products['iphone X']);
// echo $products['iphone X']['price'];
    foreach ($products as $key => $value) {
        foreach ($value as $key1 => $value1) {
            // echo $value1;
        }
    }

// array()

    ?>
</h1>
<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
    crossorigin="anonymous">
</head>

<body>

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

  <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Type</th>
        <th>Price</th>
        <th>Made In</th>
      </tr>
    </thead>
    <tbody></tbody>
    <?php
    for ($i = 0; $i < count($data); $i++) {
        echo "<tr>";
        echo "<th>" . ($i + 1) . "</th>";
        echo "<td>" . $data[$i]['type'] . "</td>";
        echo "<td>" . $data[$i]['property']['price'] . "</td>";
        echo "<td>" . $data[$i]['property']['made']['in'] . "</td>";
        echo "</tr>";
    }
    ?>
    </tbody>
  </table>

</body>

</html>