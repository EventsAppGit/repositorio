<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
</head>
<body>
    <h1 align="center">Introduce tus datos</h1>
    <form align="center" action="comprueba_login.php" method="post" autocomplete="off">
        <table align="center">
            <tr>
                <td>
                    Login:
                </td>
                <td>
                    <input type="text" name="login" autocomplete="off"/>
                </td>
            </tr>
            <tr>
                <td>
                    Contraseña:
                </td>
                <td>
                    <input type="password" name="password" value="" autocomplete="off"/>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="enviar" value="Login" align="center" />
                </td>
            </tr>       
        </table>
    </form>   
</body>
</html>
