<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP課題</title>
</head>
<body>
  <h1>社員情報入力フォーム</h1>

  <form action="confirm.php" method="post">
    <table>
    <tr>
      <td>社員名</td>
      <td>
         <input type="text" name="employee_name" id="">
      </td>
    </tr> 
    <tr>
      <td>年齢</td>
      <td>
        <input type="text" name="employee_age" id="">
      </td>
    </tr>
    <tr>
      <td>所属部署</td>
      <td>
        <select name="depertment" id="">
          <option value="開発部">開発部</option>
          <option value="営業部">営業部</option>
          <option value="人事部">人事部</option>
        </select>

      </td>
    </tr>
    </table>
    <input type="submit" value="送信">


  </form>
</body>
</html>