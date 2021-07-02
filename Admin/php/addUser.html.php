<div class="register-container">

  <main class="flex-column">

    <form action="" method="post" class="flex-column gap" enctype="multipart/form-data">
      <input type="text" placeholder="First-Name" name="firstName" <?php if (isset($_POST['firstName'])) : ?> value="<?= $_POST['firstName'] ?>" <?php endif ?> required />
      <!-- For invalid data -->
      <?php if (!empty($invalid['firstName'])) : ?>
        <p class="invalidMessage"> <?= $invalid['firstName'] ?> </p>
      <?php endif; ?>
      <input type="text" placeholder="Last-Name" name="lastName" <?php if (isset($_POST['lastName'])) : ?> value="<?= $_POST['lastName'] ?>" <?php endif ?> required />
      <!-- For invalid data -->
      <?php if (!empty($invalid['lastName'])) : ?>
        <p class="invalidMessage"> <?= $invalid['lastName'] ?> </p>
      <?php endif; ?>

      <input type="email" placeholder="E-mail" name="email" <?php if (isset($_POST['email'])) : ?> value="<?= $_POST['email'] ?>" <?php endif ?> required />

      <input type="password" onpaste="return false;" minlength="8" maxlength="16" placeholder="Password" name="password" <?php if (isset($_POST['password'])) : ?> value="<?= $_POST['password'] ?>" <?php endif ?> required />
      <input type="password" onpaste="return false;" minlength="8" maxlength="16" placeholder="Confirm Password" name="confirmPassword" <?php if (isset($_POST['confirmPassword'])) : ?> value="<?= $_POST['confirmPassword'] ?>" <?php endif ?> required />

      <select name="gender">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
      </select>

      <input type="file" name="picture" accept="image/png, image/jpeg" class="file-image" />
      <textarea name="description" cols="38" rows="10" placeholder="You can describe yourself here."></textarea>

      <label for="isAuthor" style="text-align: center">
        Do you want to be an author,
        to upload your own Articles and more other things ?
      </label>
      <input onclick="toggleAuthorInfo()" type="checkbox" name="author" id="isAuthor">

      <!-- ===== for author only ===== -->
      <input type="number" name="age" class="authorInfo" placeholder="Age" <?php if (!empty($age)) :  ?> value="<?= $age ?>" <?php endif ?>>

      <input type="text" name="nationality" class="authorInfo" placeholder="Nationality" <?php if (!empty($nationality)) :  ?> value="<?= $nationality ?>" <?php endif ?>>

      <input type="text" name="speciality" class="authorInfo" placeholder="Speciality" <?php if (!empty($speciality)) :  ?> value="<?= $speciality ?>" <?php endif ?>>

      <input type="text" name="degree" class="authorInfo" placeholder="Degree" <?php if (!empty($degree)) :  ?> value="<?= $degree ?>" <?php endif ?>>

      <input onclick="toggleAuthorInfo()" type="submit" value="Create" name="create" />

    </form>

</div><br>

</main>

</div>