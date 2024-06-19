<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Dashboard | AdminLTE</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback" />

  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css" />

  <link rel="stylesheet" href="dist/css/adminlte.min2167.css?v=3.2.0" />
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <?php include_once 'header.php'; ?>
    <?php include_once 'sidebar.php'; ?>

    <div class="content-wrapper">
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Starter Page</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Starter Page</li>
              </ol>
            </div>
          </div>
        </div>
      </div>

      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-6">
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>150</h3>
                  <p>New Orders</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>

            <div class="col-lg-3 col-6">
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>53<sup style="font-size: 20px">%</sup></h3>
                  <p>Bounce Rate</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>

            <div class="col-lg-3 col-6">
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3>44</h3>
                  <p>User Registrations</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>

            <div class="col-lg-3 col-6">
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3>65</h3>
                  <p>Unique Visitors</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header border-transparent">
              <h3 class="card-title">Latest Orders</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>

            <div class="card-body p-0">
              <div class="table-responsive">
                <table class="table m-0">
                  <thead>
                    <tr>
                      <th>Order ID</th>
                      <th>Item</th>
                      <th>Status</th>
                      <th>Popularity</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <a href="pages/examples/invoice.html">OR9842</a>
                      </td>
                      <td>Call of Duty IV</td>
                      <td>
                        <span class="badge badge-success">Shipped</span>
                      </td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20">
                          90,80,90,-70,61,-83,63
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="pages/examples/invoice.html">OR1848</a>
                      </td>
                      <td>Samsung Smart TV</td>
                      <td>
                        <span class="badge badge-warning">Pending</span>
                      </td>
                      <td>
                        <div class="sparkbar" data-color="#f39c12" data-height="20">
                          90,80,-90,70,61,-83,68
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="pages/examples/invoice.html">OR7429</a>
                      </td>
                      <td>iPhone 6 Plus</td>
                      <td>
                        <span class="badge badge-danger">Delivered</span>
                      </td>
                      <td>
                        <div class="sparkbar" data-color="#f56954" data-height="20">
                          90,-80,90,70,-61,83,63
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="pages/examples/invoice.html">OR7429</a>
                      </td>
                      <td>Samsung Smart TV</td>
                      <td>
                        <span class="badge badge-info">Processing</span>
                      </td>
                      <td>
                        <div class="sparkbar" data-color="#00c0ef" data-height="20">
                          90,80,-90,70,-61,83,63
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="pages/examples/invoice.html">OR1848</a>
                      </td>
                      <td>Samsung Smart TV</td>
                      <td>
                        <span class="badge badge-warning">Pending</span>
                      </td>
                      <td>
                        <div class="sparkbar" data-color="#f39c12" data-height="20">
                          90,80,-90,70,61,-83,68
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="pages/examples/invoice.html">OR7429</a>
                      </td>
                      <td>iPhone 6 Plus</td>
                      <td>
                        <span class="badge badge-danger">Delivered</span>
                      </td>
                      <td>
                        <div class="sparkbar" data-color="#f56954" data-height="20">
                          90,-80,90,70,-61,83,63
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="pages/examples/invoice.html">OR9842</a>
                      </td>
                      <td>Call of Duty IV</td>
                      <td>
                        <span class="badge badge-success">Shipped</span>
                      </td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20">
                          90,80,90,-70,61,-83,63
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <div class="card-footer clearfix">
              <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
              <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="main-footer">
      <strong>Copyright &copy; 2014-2024
        <a href="#">Alps2Alps</a>.</strong>
      All rights reserved.
    </footer>
  </div>

  <script src="plugins/jquery/jquery.min.js"></script>

  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="dist/js/adminlte.min2167.js?v=3.2.0"></script>
</body>

</html>