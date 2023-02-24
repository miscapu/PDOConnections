<?php
// include header
include __DIR__."/../Layouts/header.php";
?>

<!-- Table HTML -->

    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Description</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row"><?=  isset($products ) ? $products[ 'id' ]: "";?></th>
            <td><?=  isset($products ) ? $products[ 'name' ]: "";?></td>
            <td><?=  isset($products ) ? $products[ 'price' ]: "";?></td>
            <td><?=  isset($products ) ? $products[ 'description' ]: "";?></td>
        </tr>

        </tbody>
    </table>

<!-- End Table HTML -->



<?php
// include header
include __DIR__."/../Layouts/footer.php";