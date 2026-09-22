<?php require_once 'database/dbConnection.php'; ?>
<?php require_once 'core/functionForQuery.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Document</title>
</head>

<body>
  <?php 
    $tasks = selectData($conn);
  ?>

    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto">
                <form action="handelers/addTask.php" method="POST" class="form border p-2 my-5">
                    <h3 class="text-center">Todo List</h3>
                    <?php if (isset($_SESSION['errors'])) : ?>
                        <div class="alert alert-danger text-center">
                            <?php
                                echo $_SESSION['errors'];
                                unset($_SESSION['errors']);
                            ?>
                        </div>
                    <?php endif; ?>
                    
                    <?php if (isset($_SESSION['success'])) : ?>
                        <div class="alert alert-success text-center">
                            <?php
                                echo $_SESSION['success'];
                                unset($_SESSION['success']);
                            ?>
                        </div>
                    <?php endif; ?>

                    <input type="text" name="title" class="form-control my-3 border border-success" placeholder="add new todo">
                    <select name="is_completed" class="form-control my-3 border border-success">
                        <option value="Completed">Completed</option>
                        <option value="Not_completed">Not completed</option>
                    </select>
                    <input type="submit" value="Add" class="form-control btn btn-primary my-3">
                </form>
            </div>

            <div class="col-12">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Task</th>
                            <th>Status</th>
                            <th>Created_at</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($tasks as $index => $task) : ?>
                            <tr>
                                <td><?= $index + 1; ?></td>
                                <td><?= $task['title']; ?></td>
                                <td><?= $task['is_completed']; ?></td>
                                <td><?= $task['created_at']; ?></td>
                                <td>
                                    <a href="handelers/delete.php?id=<?= $task['id']; ?>" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>
                                    <a href="views/update.php?id=<?= $task['id']; ?>" class="btn btn-info"><i class="fa-solid fa-edit"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>

</html>