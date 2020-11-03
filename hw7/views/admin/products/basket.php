<table>
    <?php foreach ($products as $product): ?>
        <tr>
            <td>
                <?= $product['id'] ?>
            </td>
            <td>
                <a href="/admin/products.php?id=<?=$product['id']?>">
                    <?= $product['name'] ?>
                </a>
            </td>
            <tb>
                <a href="">Купить</a>
                <div class="form">
                    <button>-</button>
                    <input type="text">
                    <button>+</button>
                </div>
            </tb>
        </tr>
    <?php endforeach; ?>
    <a href="">Купить</a>
</table>