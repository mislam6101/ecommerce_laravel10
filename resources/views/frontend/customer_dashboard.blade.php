@extends('frontend.customar_app')

@section('content')
<div class="col-md-9 col-lg-10">

    <!-- Topbar -->
    <div class="topbar">
        <h5 class="m-0">Dashboard</h5>

        <div class="user-box">
            <span>Mahmudul</span>
            <img src="https://via.placeholder.com/35">
        </div>
    </div>

    <div class="p-4">

        <!-- Cards -->
        <div class="row g-4 mb-4">
            <div class="col-md-4">
                <div class="dashboard-card text-center">
                    <h6>Total Orders</h6>
                    <h2>12</h2>
                </div>
            </div>

            <div class="col-md-4">
                <div class="dashboard-card text-center">
                    <h6>Pending</h6>
                    <h2>3</h2>
                </div>
            </div>

            <div class="col-md-4">
                <div class="dashboard-card text-center">
                    <h6>Completed</h6>
                    <h2>9</h2>
                </div>
            </div>
        </div>

        <!-- Orders Table -->
        <div class="dashboard-card">
            <h5 class="mb-3">Recent Orders</h5>

            <div class="table-responsive">
                <table class="table align-middle table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Order ID</th>
                            <th>Status</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>#1001</td>
                            <td><span class="badge" style="background: var(--warning); color:#fff;"">Pending</span></td>
                            <td>$120</td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>#1002</td>
                            <td><span class="badge" style="background: var(--success); color:#fff;"">Completed</span></td>
                            <td>$250</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

</div>
@endsection