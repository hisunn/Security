<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="/css/table.css">

    <title>Admin Registration</title>
</head>

<body>
    <!-- Header -->
    <nav class="navbar navbar-dark" style="background-color: #646464 ;">
        <a class="navbar-brand" href="index.php">
            <img src="/img/logo.svg" width="30" height="30" class="d-inline-block align-top" alt="">
            Author Wannabe System
        </a>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h3>Register Admin</h3>
                <hr>
            </div>

            <div class="col-12">
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th style="width: 10%;">Admin ID</th>
                            <th style="width: auto;">Admin Name</th>
                            <th style="width: 18%;">Update</th>
                            <th style="width: 12%;">Delete</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        include "../../DB.php";

                        $sql = "SELECT id, name FROM admin";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) { ?>

                                <tr>
                                    <th id="admin_id"><?php echo $row["id"] ?></th>
                                    <td id="admin_name" style="text-transform: uppercase;"><?php echo $row["name"] ?></td>
                                    <td><button onclick="edit()" class="btn btn-sm btn-primary">Update</button></td>
                                    <td><a class="btn btn-sm btn-danger" onclick='javascript:confirmationDelete($(this));return false;' href="../delete.php?table=admin&id=<?php echo $row['id']; ?>">Delete</a></td>
                                </tr>

                        <?php
                            }
                        } else {
                            echo "0 results";
                        }
                        $conn->close();
                        ?>

                        <tr>
                            <form method="POST">
                                <td><input style="width: 60px;" name="id" value="" type="text" minlength="4" maxlength="4" pattern="\d*" required></td>
                                <td><input style="width: 360px;" name="name" value="" type="text" required></td>
                                <td></td>
                                <td><button name="add" class="btn btn-sm btn-success" href="#?">Add New</button></td>
                            </form>
                        </tr>

                        <?php

                        include "../../DB.php";

                        if (isset($_POST['add'])) {
                            $id = $_POST['id'];
                            $name = $_POST['name'];
                            $sql = "INSERT INTO admin (id, name) VALUES ('$id', '$name')";

                            if ($conn->query($sql) === true) {
                                // Success
                                echo "<meta http-equiv='refresh' content='0'>";
                            } else {
                                // Failed
                                echo "Error: " . $sql . "<br>" . $conn->error;
                            }
                        }

                        $conn->close();
                        ?>


                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <script>
        function confirmationDelete(anchor) {
            var id = document.getElementById(admin_id).innerText;
            var msg = "Are you sure want to delete this record?";
            var conf = confirm(msg);
            if (conf)
                window.location = anchor.attr("href");
        }

        function edit() {

        }
    </script>

</body>

</html>