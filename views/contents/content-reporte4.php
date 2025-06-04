<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <style>
    table{
      width: 100%;
      border-collapse: collapse;
    }
    thead th{
      background-color: aquamarine;
    }
    td, th{
      border: .5px solid black;
      padding: 5px;
    }

    tr:nth-child(even){
      background-color: gray;
    }
  </style>
  <div>
    <table>
    <colgroup>
      <col style="width: 10%">
      <col style="width: 40%">
      <col style="width: 40%">
    </colgroup>
      <thead>
        <tr>
          <th>ID</th>
          <th>APELLIDO PROPIETARIO</th>
          <th>NOMBRE PROPIETARIO</th>
        </tr>
      </thead>
      <tbody>
  <?php foreach($listaPropietarios as $propietario): ?>
    <tr>
      <td><?= $propietario->idPropietario ?></td>
      <td><?= $propietario->apellidos ?></td>
      <td><?= $propietario->nombres ?></td>
    </tr>
  <?php endforeach ?>
</tbody>

    </table>
  </div>
</body>
</html>