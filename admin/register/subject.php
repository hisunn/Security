<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="/css/table.css">

    <title>Subject Registration</title>
</head>

<body>
    <!-- Header -->
    <nav class="navbar navbar-dark" style="background-color: #646464 ;">
        <a class="navbar-brand" href="/index.php">
            <img src="/img/logo.svg" width="30" height="30" class="d-inline-block align-top" alt="">
            Author Wannabe System
        </a>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h3>Register Subject</h3>
                <hr>
            </div>

            <div class="col-12">
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th style="width: 5%;">Subject ID</th>
                            <th style="width: auto;">Subject Name</th>
                            <th style="width: 20%;">Modified By</th>
                            <th style="width: 20%;">Modified On</th>
                            <th style="width: 5%;">Update</th>
                            <th style="width: 5%;">Delete</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <th>BIC20404</th>
                            <td>OBJECT ORIENTED PROGRAMMING</td>
                            <td>FARIDAH SUPANJI</td>
                            <td>09/05/2021 13:10:42</td>
                            <td><button class="btn btn-sm btn-primary">Update</button></td>
                            <td><button class="btn btn-sm btn-danger">Delete</button></td>
                        </tr>

                        <tr>
                            <th>BIS20404</th>
                            <td>CRYPTOGRAPHY</td>
                            <td>SAMSUDIN ABDULLAH</td>
                            <td>09/05/2021 13:11:22</td>
                            <td><button class="btn btn-sm btn-primary">Update</button></td>
                            <td><button class="btn btn-sm btn-danger">Delete</button></td>
                        </tr>

                        <tr>
                            <th>BIC10303</th>
                            <td>ALGEBRA</td>
                            <td>FARIDAH SUPANJI</td>
                            <td>09/05/2021 13:10:42</td>
                            <td><button class="btn btn-sm btn-primary">Update</button></td>
                            <td><button class="btn btn-sm btn-danger">Delete</button></td>
                        </tr>

                        <tr>
                            <th>BIC11111</th>
                            <td>MATH</td>
                            <td>SAMSUDIN ABDULLAH</td>
                            <td>09/05/2021 13:11:22</td>
                            <td><button class="btn btn-sm btn-primary">Update</button></td>
                            <td><button class="btn btn-sm btn-danger">Delete</button></td>
                        </tr>

                        <tr>
                            <th>BIT20803</th>
                            <td>DATABASE</td>
                            <td>FARIDAH SUPANJI</td>
                            <td>09/05/2021 13:10:42</td>
                            <td><button class="btn btn-sm btn-primary">Update</button></td>
                            <td><button class="btn btn-sm btn-danger">Delete</button></td>
                        </tr>

                        <tr>
                            <td><input style="width: 85px;" value="BIC21404" type="text"></td>
                            <td><input style="width: 330px;" value="DATABASE" type="text"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><button class="btn btn-sm btn-success">Add</button></td>
                        </tr>

                    </tbody>
                </table>


                <!-- page navigation start -->

                <!-- <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav> -->

                <!-- page navigation end -->

            </div>
        </div>
    </div>
</body>

</html>