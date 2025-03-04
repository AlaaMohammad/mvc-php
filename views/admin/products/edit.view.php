<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boosted/dist/css/boosted.min.css">
    <style>
        body {
            background-color: #F7F7F7;
        }
        .card {
            border: none;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }
        .card-title {
            font-weight: bold;
        }
        .orange-btn {
            background-color: #FF7900;
            color: white;
            border-radius: 8px;
            padding: 10px 20px;
        }

    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-orange py-2">
    <div class="container d-flex justify-content-between align-items-center">
        <a class="navbar-brand text-white" href="#">
            <img src="https://eshop.orange.jo/Themes/Eshop2021/Content/images/newHeader/logoDesk.svg" alt="Orange" height="40">
        </a>
        <ul class="navbar-nav mx-auto">
            <li class="nav-item"><a class="nav-link" href="/internet-plans">Internet Plans</a></li>
            <li class="nav-item"><a class="nav-link" href="/devices-and-accessories">Devices & Accessories</a></li>
            <li class="nav-item"><a class="nav-link" href="/mobile-lines">Mobile Lines</a></li>
            <li class="nav-item"><a class="nav-link" href="/smart-life">Smart Life</a></li>
            <li class="nav-item"><a class="nav-link" href="/smart-tv">Smart TV and Screens</a></li>
        </ul>
        <div class="header-icons">
            <a href="#" class="text-white"><i class="bi bi-search"></i></a>
            <a href="#" class="text-white"><i class="bi bi-basket"></i></a>
            <span class="badge bg-dark text-white p-2">5G</span>
            <a href="#" class="text-white">العربية</a>
        </div>
    </div>
</nav>

<div class="container mt-4">
    <h1 class="text-center">Prepaid Plans & Lines</h1>
    <p class="text-center">Get exceptional Orange Jordan sim cards and prepaid lines with great offers.</p>

    <div class="row">
        <form action="/products/<?= $product['id'] ?>/edit" method="POST">
            <!-- Use a hidden input to tell your system to treat it as PUT -->
            <input type="hidden" name="_method" value="PUT" />
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <label>
                    <input name="name" type="text" class="form-control"  aria-describedby="username" value="<?= $product['name'] ?>">
                </label>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Price</label>
                <label>
                    <input name="price" type="number" class="form-control"  aria-describedby="username" value="<?= $product['price'] ?>">
                </label>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Image</label>
                <label>
                    <input name="img_url" type="text" class="form-control"  aria-describedby="username" value="<?= $product['img_url'] ?>">
                </label>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Description</label>
                <label>
                    <textarea name="description" class="form-control"  aria-describedby="username"><?= $product['description'] ?></textarea>
                </label>
            </div>

            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
    </div>
</div>

<footer class="bg-dark text-white text-center py-3 mt-4">
    <p>&copy; 2025 Orange Jordan. All rights reserved.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
