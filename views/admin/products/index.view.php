<!-- views/users/index.view.php -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>All Product</title>
</head>

<body>
<h1>All Users</h1>

<!-- Example: Display users in a table -->
<?php if (!empty($products)): ?>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Description</th>
            <th>IMG</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($products as $product): ?>
            <tr>
                <td><?= htmlspecialchars($product['id']) ?></td>
                <td><?= htmlspecialchars($product['name']) ?></td>
                <td><?= htmlspecialchars($product['price']) ?></td>
                <td><?= htmlspecialchars($product['description']) ?></td>
                <td><img class="custom-class" src="<?= htmlspecialchars($product['img_url']) ?>" alt="<?= htmlspecialchars($product['name']) ?>" height="40"></td>
                <td>
                    <!-- Show link (GET) -->
                    <a href="/products/<?= $product['id'] ?>">Show</a>
                    <!-- Edit link (GET) -->
                    <a href="/products/<?= $product['id'] ?>/edit">Edit</a>
                    &nbsp;|&nbsp;

                    <!-- Delete form (simulating DELETE via _method) -->
                    <form action="/products/<?= $product['id'] ?>" method="POST" style="display:inline;">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" onclick="return confirm('Are you sure?')">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>No products found.</p>
<?php endif; ?>

<!-- Link to Create a new user -->
<p>
    <a href="/products/create">Create New product</a>
</p>
</body>
</html>
