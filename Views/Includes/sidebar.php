<section id="menu">
    <div class="logo">
      <div class="d-flex align-items-center">
        <img class="" src="./Public/Assets/logo.png" alt="LOGO">
        <i id="close" class="bi bi-x-circle fs-2 ms-5" style="display: none;"></i>
      </div>
    </div>

    <div class="items">
      <li>
        <a href="dashboardArtistes">
          <i class="fa-solid fa-chart-line">
          </i>Dashboard</a>
      </li>
      <li>
        <a href="Postuler">
          <i class="fa-solid fa-signs-post">
          </i>Poste</a>
      </li>
      <li>
        <a href="Profile">
        <i class="fa-solid fa-user">
        </i>Profile</a>
      </li>
      <li>
        <a href="contactArtiste">
          <i class="fa-solid bi bi-person-lines-fill"></i>
        </i>Contact</a>
      </li>
      <li>
        <a href="Settings">
          <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
        <i class="fa-solid fa-gear">
        </i>Settings</a>
      </li>
      <li>
        <a href="logout">
        <i class="fa-solid fa-arrow-right-from-bracket">
        </i>Se Deconnecter</a>
      </li>
    </div>
  </section>