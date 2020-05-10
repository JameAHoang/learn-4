<!DOCTYPE html>
<html>
<head>
    <title>Danh sách đăng ký</title>
    <style type="text/css">
        table
        {
            border: 1px solid black;
            width: 100%;
            font-size: 20px;

        }
        table, th, td {
          border: 1px solid black;
          border-collapse: collapse;
        }
        table td
        {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Danh sách tài khoản</h1>
    <table>
        <tr>
            <th>userName</th>
            <th>password</th>
        </tr>
            <?php
        $myFile = "users.json";
        $data = file_get_contents($myFile);
        $data_convert = json_decode($data, true);
        foreach ($data_convert as $key => $value) {
            $user = $value['username'];
            $pass = $value['password'];
            echo "<tr>";
            echo "<td>" . $user . "</td>";
            echo "<td>" . $pass . "</td>";
            echo "</tr>";
        }
        ?>  
    </table>
</body>
</html>