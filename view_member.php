<?php require("controller_member.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Membership</title>
</head>

<body>
    <div class="container p-3">
        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="view_member.php">Member List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="view_addmember.php">New Member</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">

                <div class="container p-3">
                    <h1>Membership</h1>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Email</th>
                                <th scope="col">Note</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $counter = 0;
                            $allmembers = getAllMembers();
                            foreach ($allmembers as $index => $member) {
                                    $counter++;
                                ?>
                                    <tr>
                                    <th scope="row"><?=$counter?></th>
                                    <td><?= $member->name?></td>
                                    <td><?= $member->phone?></td>
                                    <td><?= $member->email?></td>
                                    <td><?= $member->note?></td>
                                    <td>
                                    <a href="view_updatemember.php?updateID=<?=$index?>">
                                        <button class="btn btn-warning">Update</button>
                                    </a>
                                        <a href="controller_member.php?deleteID=<?=$index?>">
                                            <button class="btn btn-danger">Delete</button>
                                        </a>
                                    </td>
                                </tr>

                            <?php
                            }
                            ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</body>

</html>