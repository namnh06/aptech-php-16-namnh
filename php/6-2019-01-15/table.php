<?php
require './helper.php';
$conn = connectDatabase();
$sql = "SELECT users.name, users.email, users.password,users.role, roles.name as role_name from users join roles 
where users.role = roles.id";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    echo "
    <table>
        <tr>
            <th>name</th>
            <th>email</th>
            <th>password</th>
            <th>role</th>
            <th>role_name</th>
        </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["name"]. "</td>
                <td>" . $row["email"]. "</td>
                <td>" . $row["password"]. "</td>
                <td>" . $row["role"]. "</td>
                <td>" . $row["role_name"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?> 