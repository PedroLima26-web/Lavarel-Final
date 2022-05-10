<!DOCTYPE html>
<html lang="pt">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Produtos</title>
</head>

<body>
      <div style="width: 50%; margin: auto;">
            @csrf
            <table style="width: 100%">
                  <tr class="header">
                        <td>#</td>
                        <td>Nome</td>
                        <td>Valor</td>
                        <td>Estoque</td>                        
                        <td>Deletar</td>
                        <td>Excluir</td>
                  </tr>
                  <?php
                        foreach($produto as $element){
                              echo "<tr>";
                              echo "<td>$element->id</td>";
                              echo "<td>$element->nome</td>";
                              echo "<td>R$$element->valor</td>";
                              echo "<td>$element->estoque</td>";
                              echo "<td style='text-align: center'><button onclick='document.location=\"/editar/{$element->id}\"'>Editar</button></td>";
                              echo "<td style='text-align: center'><button type='button' onclick='document.location=\"/deletar-produto/{$element->id}\"'>Excluir</button></td>";
                              echo "</tr>";
                        }
                  ?>
            </table>
            <div style="width: fit-content; margin: auto; margin-top: 5px;">
                  <button onclick="document.location = '/cadastrar';">Cadastrar</button>
            </div>
      </div>
</body>

</html>
<style>
      .row {
            display: flex;
      }
      .header {
            text-align: center;
      }
      table {
            border-collapse: collapse;
            font-family: arial;
      }
      td {
            border-right: 1px solid black;
            border-bottom: 1px solid black;
            padding-right: 4px;
            padding-left: 4px;
      }
</style>