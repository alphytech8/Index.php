<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Selling Price Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Product Selling Price Calculator</h1>
    <form action="calculate.php" method="post">
        <?php for ($i = 1; $i <= 10; $i++): ?>
            <fieldset>
                <legend>Product <?= $i ?></legend>
                <label for="buying_price_<?= $i ?>">Buying Price:</label>
                <input type="number" step="0.01" id="buying_price_<?= $i ?>" name="buying_price_<?= $i ?>" required>
                <br>
                <label for="vat_<?= $i ?>">VAT (%):</label>
                <input type="number" step="0.01" id="vat_<?= $i ?>" name="vat_<?= $i ?>" required>
                <br>
                <label for="general_expenses_<?= $i ?>">General Expenses (%):</label>
                <input type="number" step="0.01" id="general_expenses_<?= $i ?>" name="general_expenses_<?= $i ?>" required>
                <br>
                <label for="profit_margin_<?= $i ?>">Profit Margin (%):</label>
                <input type="number" step="0.01" id="profit_margin_<?= $i ?>" name="profit_margin_<?= $i ?>" required>
            </fieldset>
        <?php endfor; ?>
        <button type="submit">Calculate Selling Prices</button>
    </form>
</body>
</html>
