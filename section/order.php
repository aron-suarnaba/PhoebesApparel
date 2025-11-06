<div class="container-fluid p-5">
    <div class="container bg-light rounded border border-1">
        <div class="row my-3">
            <div class="col-sm-12 col-md-4"></div>
            <div class="col-sm-12 col-md-4">
                <div class="form-input-group">
                    <div class="input-group m-2 px-5 justify-content-center">
                        <input type="text" class="form-control" placeholder="Search">
                        <button class="btn btn-success input-group-text">Search</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 d-flex justify-content-end align-items-center pt-2">
                <nav aria-label="Pagination">
                    <ul class="pagination">
                        <li class="page-item"><a href="#" class="page-link">Previous</a></li>
                        <li class="page-item"><a href="#" class="page-link">1</a></li>
                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                        <li class="page-item"><a href="#" class="page-link">3</a></li>
                        <li class="page-item"><a href="#" class="page-link">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="row my-3">
            <?php
                $sql = "SELECT * FROM product";
                $result = $connection->query($sql);

                while($row = $result->fetch_assoc()){
                    echo "
                    <div class='col-sm-12 col-md-3'>
                        <div class='card'>
                            <div class='card-content'>
                                <div class='card-header bg-primary text-white'>
                                    <div class='fw-bold'>
                                        $row[product_name]
                                    </div>
                                </div>
                                <div class='card-body p-2'>
                                    <img src='asset\images\images-1.jpg' alt='Product Image' class='img-fluid'>
                                    <p class='p-1'>$row[description]</p>
                                    <p class='lead px-1 fw-bold'>$row[u_m]$row[price] </p>
                                </div>
                                <div class='card-footer bg-light'>
                                    <div class='button-group d-flex justify-content-between'>
                                        <div class='btn btn-secondary'>Cancel</div>
                                        <div class='btn btn-success'>Add to cart</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
                }
            ?>
            
            
        </div>
    </div>
</div>