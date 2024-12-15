<?php
$title = $titlehead = "Регистрация"; 
include 'utils/header.php'; ?>
    <main>
        <h1><?= $titlehead ?></h1>
        <form action="reg.php" method="post">
            <table>
                <tr>
                    <td><label for="name">Имя:</label></td>
                    <td><input type="text" name="name" maxlength="40" size="20" required id="name"></td>
                </tr>
                <tr>
                    <td><label for="surname">Фамилия:</label></td>
                    <td><input type="text" name="surname" maxlength="40" size="20" id="surname"></td>
                </tr>
                <tr>
                    <td><label for="email">E-mail:</label></td>
                    <td><input type="email" name="email" maxlength="40" size="20" required id="email"></td>
                </tr>
                <tr>
                    <td><label for="pwd">Пароль:</label></td>
                    <td><input type="password" name="pwd" maxlength="40" size="20" required id="pwd"></td>
                </tr>
                <tr>
                    <td><label for="pwd2">Повторите пароль:</label></td>
                    <td><input type="password" name="pwd2" maxlength="40" size="20" required id="pwd2"></td>
                </tr>             
                <tr>
                    <td><input type="submit" value="Зарегистрироваться"></td>
                    <td><input type="reset" value="Сбросить"></td>
                </tr>
            </table>
        </form>
    </main>
    <?php include 'utils/footer.php'; ?>
</body>
</html>