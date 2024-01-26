<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png">
        <link rel="stylesheet" type="text/css"href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
        <link href="/assets/css/nucleo-icons.css" rel="stylesheet" />
        <link href="/assets/css/nucleo-svg.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
        <link id="pagestyle" href="/assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
        <title>Add Product to Inventory</title>
    </head>
    <body>
        <div class="col-md-12">
            <!-- Add Product Form -->
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div
                        class="bg-gradient-success shadow-primary border-radius-lg pt-4 pb-3 d-flex justify-content-between align-items-center">
                        <h6 class="text-white text-capitalize ps-3">Add Drinks</h6>
                    </div>
                </div>

                <div class="card-body px-4 pb-3">
                <form action="<?= base_url('addhotcoffee')?>" class="row g-3" method="POST">
                        <div class="input-group input-group-outline my-3">
                            <label for="coffee-name" class="form-label"></label>
                            <input type="text" class="form-control" id="product-name" name="prod_name" placeholder="Product Name">
                        </div>
                        <div class="input-group input-group-outline my-3">
                            <label for="Quantity" class="form-label"></label>
                            <input type="number" class="form-control" id="quantity" name="prod_quantity" placeholder="Quantity">
                        </div>
                        <div class="input-group input-group-outline my-3">
                            <label for="medium" class="form-label"></label>
                            <input type="text" class="form-control" id="medium" name="prod_mprice" placeholder="Medium Price">
                        </div>
                        <div class="input-group input-group-outline my-3">
                            <label for="large" class="form-label"></label>
                            <input type="text" class="form-control" id="large" name="prod_lprice" placeholder="Large Price">
                        </div>
                        <div class="input-group input-group-outline my-3">
                            <label for="Category" class="form-label"></label>
                            <select name="prod_categ" id="Category">
                                <option value="Hot Coffee">Hot Coffee</option>
                            </select>
                        </div>
                        <div class="input-group input-group-outline my-3">
                            <label for="Code" class="form-label"></label>
                            <input type="text" class="form-control" id="Code" name="prod_code" placeholder="Product Code">
                        </div>
                        <div class="input-group input-group-outline my-3">
                            <button type="submit" class="btn btn-success">Add Drink</button>
                        </div>
                        <div><a href="<?= base_url('/inventoryhotcoffee')?>" class="btn btn-info">BACK</a></div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>