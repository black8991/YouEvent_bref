<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
            integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Document</title>
</head>
<body >
    <?php
    require_once "header.php";
    ?>
    <div class="ms-3 mb-3">
        <button type="button" class="btn btn-dark p-3 ">Les statistiques et les rapports globaux de l'application :</button>
    </div>
    <div class="d-flex w-100 justify-content-evenly mb-3">
        <div class="bg-dark text-light p-5 fw-bold text-start">Nombre des tickets vendus:</div>
        <div class="bg-dark text-light p-5 fw-bold">Nombre des organisateurs:</div>
        <div class="bg-dark text-light p-5 fw-bold">Nombre des Evenements:</div>
        <div class="bg-dark text-light p-5 fw-bold">Nombre des utilisateurs:</div>
    </div>
    <section>
    <div class="ms-3 mb-3">
        <button type="button" class="btn btn-dark p-3 ">Gérer les utilisateurs et leurs accès à l'application:</button>
    </div>
    <div class="ms-4">
        <button type="button" class="btn btn-danger">Backlist</button>
        <button type="button" class="btn btn-success">Ajouter un utilisateur</button>
    </div>
    <div>
    <table class="table">
  <thead>
    <tr>
    <th scope="col">Image</th>
      <th scope="col">User Id</th>
      <th scope="col">Full name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Role</th>
      <th scope="col">More</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <th scope="row">Mark</th>
        <td>Mark</td>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>
                <a href=""><i class="fa-solid fa-trash text-dark "></i></a>
                <a href=""><i class="fa-solid fa-pen text-dark ms-4"></i></a>
        </td>
    </tr>

    
        </tbody>
        </table>
</div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>