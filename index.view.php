<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boodschappenlijst</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <table id="productTabel">
        <tbody>
            <tr>
                <th>Product</th>
                <th>Prijs</th>
                <th>Aantal</th>
                <th>Subtotaal</th>
            </tr>
            <?php foreach($products as $product) :  ?>
            <tr>
                <td><?= htmlspecialchars($product["name"]) ?></td>
                <td class="price"><?= number_format($product["price"], 2) ?></td>
                <td><input class="quantity" type="number" min="0" value="<?= $product["quantity"]?>"></td>
                <td class="subTotal"><?= number_format($product['subTotal'], 2) ?></td>
            </tr>
            <?php endforeach; ?>
            <tr>
                <th>Totaal</th>
                <th></th>
                <th></th>
                <td id="totalPrice"><?= number_format($totalPrice, 2) ?></td>
            </tr>
        </tbody>
    </table>
    <script src="Boodschappenlijst.js"></script>
</body>
</html>