<?php

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!empty($username) && !empty($password)) {
        $query = "SELECT id FROM users WHERE username = ? AND password = ?;";

        $statement = $connection->prepare($query);
        $statement->bind_param("ss", $username, $password);
        $statement->execute();
        $statement->bind_result($userID);

        $result = $statement->fetch();
        if (empty($userID)) {
            echo 'User not found';
        } else {
            $_SESSION['userID'] = $userID;
            echo $_SESSION['userID'];
            header('Location: index.php');
        }
    } else {
        echo 'You have to fill all fields';
    }
}

?>

<form id="loginform" action="<?php /** @noinspection PhpUndefinedVariableInspection */
echo $current_file; ?>" method='POST'>

    <table>
        <tr>
            <td><span style="color: white; ">Username:</span></td>
            <td><label>
                    <input type="text" size='20' name='username'>
                </label></td>
        <tr>
            <td><span style="color: white; ">Password:</span></td>
            <td><label>
                    <input type="password" size='20' name='password'>
                </label></td>
        <tr>
            <td colspan="2" align="right">
                <button type="submit" class="btn btn-success" name='submit'>Log in</button>
            </td>
        </tr>
    </table>

</form>