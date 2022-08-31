<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Builder Pattern</title>
</head>
<style>
    table td,
    th {
        border: 1px solid;
        padding: 5px;
    }
</style>

<body>
    <?php
    include('CarBuilder.php');
    $cars = [];

    $avansa = (new CarBuilder())
        ->setBrand('Toyota')
        ->setMachineType('Petrol')
        ->setMachineCapacity(100)
        ->setMileage(8000)
        ->build();

    array_push($cars, $avansa);

    $fuso = (new CarBuilder())
        ->setBrand('Mithsubishi')
        ->setMachineType('Diesel')
        ->setMachineCapacity(200)
        ->build();

    array_push($cars, $fuso);

    ?>
    <table>
        <tr>
            <th>Brand</th>
            <th>Machine Capacity</th>
            <th>Machine Type</th>
            <th>Mileage</th>
        </tr>
        <?php foreach ($cars as $item) { ?>
            <tr>
                <td><?php echo $item->getBrand(); ?></td>
                <td><?php echo $item->getMachineCapacity(); ?></td>
                <td><?php echo $item->getMachineType(); ?></td>
                <td><?php echo $item->getMileage(); ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>