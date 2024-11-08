<!DOCTYPE html>
<html lang="lt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nuorodų Saugykla</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Mano Nuorodų Rinkinys</h1>
    <p>Čia galite saugoti svarbias nuorodas ir lengvai jas pasiekti bet kada.</p>
  </header>

  <main>
    <section class="add-link">
      <input type="text" id="url" placeholder="Įveskite nuorodą">
      <input type="text" id="name" placeholder="Nuorodos pavadinimas">
      <button onclick="addLink()">Pridėti nuorodą</button>
    </section>

    <section class="links-list">
      <h2>Jūsų Nuorodos</h2>
      <ul id="links">
        <!-- Dynamically added links will appear here -->
<?php
	// Pateikti nuorodų sąrašą
?>
      </ul>
    </section>
  </main>

  <footer>
    <p>&copy; 2024 - Mano Nuorodų Rinkinys</p>
  </footer>

  <script src="script.js"></script>
</body>
</html>