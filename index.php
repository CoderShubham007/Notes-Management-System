<?php session_start(); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyNotes</title>
    <!-- Bootstrap CSS Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Datatable CSS Link -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
</head>

<body>
    <!-- Access Denied -->
    <?php 
        if (!isset($_SESSION['loggedin'])) {
            header("location: /Notes/login.php");
            exit();
        }
    ?>
    <!-- Header -->
    <?php include_once './includes/header.php'; ?>
    <!-- Modal -->
    <?php include_once './includes/modal.php'; ?>

    <!-- Add a Note Form -->
    <div class="container px-5 my-5">
        <h2>Add a Note</h2>
        <form id="add-note-form">
            <div class="mb-3">
                <label for="note-title" class="form-label">Note Title</label>
                <input type="text" class="form-control" id="note-title">
            </div>
            <div class="mb-3">
                <label for="note-description" class="form-label">Note Description</label>
                <textarea class="form-control" id="note-description" rows="3"></textarea>
            </div>
            <!-- <div class="mb-3">
                <label for="formFile" class="form-label">Add File</label>
                <input class="form-control" type="file" id="formFile">
            </div> -->
            <button type="submit" class="btn btn-primary" id="add-note">Add Note</button>
        </form>
    </div>

    <!-- Notes Table -->
    <div class="container px-5 mt-4">
        <table class="table" id="myTable">
            <thead class="table-dark">
                <tr>
                    <th scope="col">S.No</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody id="notes-table">
            </tbody>
        </table>
    </div>
    <!-- Footer -->
    <!-- <?php include_once './includes/footer.php'; ?> -->
    <!-- Bootstrap Js Link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <!-- jQuery Link -->
    <script src="./assets/js/jquery-3.7.1.min.js"></script>
    <!-- Datatable Js Link -->
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
    <script>
        let table = new DataTable('#myTable');
        // $(document).ready(function() {
        //     $('#myTable').DataTable();
        // });
    </script>
    <script src="./assets/js/note.js"></script>
</body>

</html>