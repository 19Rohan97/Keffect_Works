<?php
require_once 'controllers/authController.php';
require_once 'controllers/emailController.php';
?>

<!-- Verifiction -->
<?php if (isset($_SESSION['message'])): ?>
    <!-- importing alert classes from authController.php -->
    <div class="alert <?php echo $_SESSION['alert-class']; ?>">
      <?php echo $_SESSION['message'];
unset($_SESSION['message']);
unset($_SESSION['alert-class']);
?>
    </div>
    <?php endif;?>
    <?php if (!$_SESSION['verified']): ?>

    <div class="alert alert-warning">
      You need to verify your account.Click on the link we just emailed you at
      <a href="https://www.gmail.com"><strong><?php echo $_SESSION['email']; ?></strong></a>
    </div>
    <?php endif;?>
    <?php if ($_SESSION['verified']): ?>
                <button class="btn btn-block btn-lg btn-primary">I am Verified</button>
                <?php endif;?>
    <!-- Verification End -->