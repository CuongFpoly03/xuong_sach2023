<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-6 col-xl-3">
            <h5 style="background-color: blue; color: white; padding: 5px 0px; text-align: center">Tổng doanh thu hôm nay</h5>
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-line fa-3x text-primary"></i>
                <div class="ms-3">
                    <table class="table">
                        <tr>
                            <th>📉 Tổng doanh thu hôm nay</th>
                        </tr>
                        <tr>
                            <td>$ <?= $totalday ?> ⏫</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <h5 style="background-color: blue; color: white; padding: 5px 0px; text-align: center">Tổng doanh thu 1 tuần</h5>
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-bar fa-3x text-primary"></i>
                <div class="ms-3">
                <table class="table">
                        <tr>
                            <th>📉 Tổng doanh thu 1 tuần</th>
                        </tr>
                        <tr>
                            <td>$ <?= $totalweek ?> ⏫</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
        <h5 style="background-color: blue; color: white; padding: 5px 0px; text-align: center">Tổng doanh thu một tháng</h5>
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-area fa-3x text-primary"></i>
                <div class="ms-3">
                <table class="table">
                        <tr>
                            <th>Tổng doanh thu một tháng</th>
                        </tr>
                        <tr>
                            <td>$ <?= $totalmonth ?> ⏫</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <h5 style="background-color: blue; color: white; padding: 5px 0px; text-align: center">Tổng doanh thu</h5>
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-pie fa-3x text-primary"></i>
                <div class="ms-3">
                <table class="table">
                        <tr>
                            <th>Tổng doanh thu</th>
                        </tr>
                        <tr>
                            <td>$ <?= $totaldoanhthu ?> ⏫</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
        <h5 style="background-color: blue; color: white; padding: 5px 0px; text-align: center">Số lượng Sách bán được</h5>
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-pie fa-3x text-primary"></i>
                <div class="ms-3">
                <table class="table">
                        <tr>
                            <th>Số lượng sách bán được</th>
                        </tr>
                        <tr>
                            <td> <?= $totalsoluongban ?> ⏫</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <h5 style="background-color: blue; color: white; padding: 5px 0px; text-align: center">Số lượng Sách bán được nhiều nhất</h5>
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-pie fa-3x text-primary"></i>
                <div class="ms-3">
                <table class="table">
                        <tr>
                            <th>Tên sản phẩm</th>
                            <th>Sách bán được nhiều nhất</th>
                        </tr>
                        <tr>
                            <td> <?php if ($sp_bannhieunhat !== null) : ?>
                                    <?= $sp_bannhieunhat['ten_sach'] ?>
                                <?php else : ?>
                                    <p>Không có thông tin về sản phẩm bán nhiều nhất.</p>
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php if ($sp_bannhieunhat !== null) : ?>
                                    <?= $sp_bannhieunhat['total_quantity'] ?> ⏫
                                <?php else : ?>
                                    Không có thông tin về sản phẩm bán nhiều nhất.
                                <?php endif; ?>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
        <h5 style="background-color: blue; color: white; padding: 5px 0px; text-align: center">Số lượng khách hàng mới </h5>
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-pie fa-3x text-primary"></i>
                <div class="ms-3">
                <table class="table">
                        <tr>
                            <th>Số lượng khách hàng mới</th>
                        </tr>
                        <tr>
                            <td> <?php if ($khachhangmoi > 0) : ?>
                                    <?= $khachhangmoi ?>
                                <?php else : ?>
                                    <p>Chưa có thông tin về khách hàng mới.</p>
                                <?php endif; ?>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
        <h5 style="background-color: blue; color: white; padding: 5px 0px; text-align: center">Thời gian mua hàng nhiều nhất</h5>
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-pie fa-3x text-primary"></i>
                <div class="ms-3">
                <table class="table">
                        <tr>
                            <th>Thời gian mua hàng nhiều nhất</th>
                            <th>Số lượng đơn hàng</th>
                        </tr>
                        <tr>
                            <td><?= $thoigian['ngay_dh'] ?></td>
                            <td><?= $thoigian['total_ngaydh'] ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
        <h5 style="background-color: blue; color: white; padding: 5px 0px; text-align: center">Liệt kê Sách còn trong kho</h5>
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-pie fa-3x text-primary"></i>
                <div class="ms-3">
                <table class="table">
                <tr>
                    <th>Tên sản phẩm</th>
                    <th>số lượng sách</th>
                </tr>
                <?php foreach ($slctk as $ten_sach => $so_luong) : ?>
                    <tr>
                        <td><?= $ten_sach ?></td>
                        <td> ➡️ <?= -$so_luong ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Sale & Revenue End -->

</div>
<!-- Content End -->
<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>