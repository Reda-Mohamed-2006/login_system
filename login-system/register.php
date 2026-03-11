<form action="signup-process.php" method="POST">
    <fieldset>
        <legend><h1>Create New Account</h1></legend>

        <div>
            <label for="user"><strong>Username</strong></label><br>
            <input type="text" name="username" id="user" placeholder="Enter your username" required>
        </div>

        <br>

        <div>
            <label for="email"><strong>Email Address</strong></label><br>
            <input type="email" name="email" id="email" placeholder="example@mail.com" required>
        </div>

        <br>

        <div>
            <label for="pass"><strong>Password</strong></label><br>
            <input type="password" name="password" id="pass" placeholder="Enter strong password" required>
        </div>

        <br>

        <button type="submit" name="signup">Sign Up</button>
        
        <p>Already have an account? <a href="login.php">Login here</a></p>
    </fieldset>
</form>