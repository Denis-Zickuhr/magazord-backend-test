<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>{{title}}</title>
  <link rel="icon" href="resources/image/logo-magazord-sm.png">
  <link rel="stylesheet" href="resources/css/page.style.css" />
  <link rel="stylesheet" href="vendor/twbs/bootstrap-icons/font/bootstrap-icons.css" media="screen" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/css/bootstrap.min.css" />
</head>

<body role="document">
  <div class="topbar">
    <div>
      <div class="row align-items-center">
        <div class="col-auto logo">
          <img src="resources/image/logo-magazord.png" alt="Magazord Logo" />
        </div>
        <div class="col nav">
          <a href="/home" class="selected"><i class="bi bi-house-door-fill"></i><span class="icon-text">Tela inicial</span></a>
          <a href="/users" class="selected"><i class="bi bi-person-fill"></i><span class="icon-text">Usuários</span></a>
          <a href="/contacts" class="selected"><i class="bi bi-person-badge-fill"></i><span class="icon-text">Lista de Contatos</span></a>
          <div class="theme-switcher">
            <i class="bi bi-moon-stars" id="dark-icon"></i>
            <i class="bi bi-brightness-alt-high-fill" id="light-icon"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="content">{{content}}</div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    const body = document.body;
    const darkIcon = document.getElementById("dark-icon");
    const lightIcon = document.getElementById("light-icon");
    let isDarkThemePreferred = window.matchMedia(
      "(prefers-color-scheme: dark)"
    ).matches;

    function toggleTheme() {
      if (isDarkThemePreferred) {
        body.classList.remove("bg-light", "text-dark");
        body.classList.add("bg-dark", "text-light");
        darkIcon.style.display = "none";
        lightIcon.style.display = "inline";
      } else {
        body.classList.remove("bg-dark", "text-light");
        body.classList.add("bg-light", "text-dark");
        darkIcon.style.display = "inline";
        lightIcon.style.display = "none";
      }
    }

    darkIcon.addEventListener("click", () => {
      isDarkThemePreferred = true;
      toggleTheme();
    });

    lightIcon.addEventListener("click", () => {
      isDarkThemePreferred = false;
      toggleTheme();
    });

    if (isDarkThemePreferred) {
      toggleTheme();
    }
  </script>
</body>

</html>