{extends file="../masters/masterTemp.tpl"}
{block name="title"}
    Login Page
{/block}

{block name="style"}
    <link rel="stylesheet" href="../front/css/Login.css">
{/block}


{block name="body"}
    <div class="container">
        <h2>Login</h2>
        <form method="post" action="login.php">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" class="input-field" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" class="input-field" required>

            <button type="submit" id="submit" name="submit" class="submit-btn">Login</button>
            <div class="error-message"></div>
        </form>
    </div>
{/block}