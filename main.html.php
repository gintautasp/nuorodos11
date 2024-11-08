<!DOCTYPE html>
<html lang="lt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nuorodų Saugykla</title>
  <!-- link rel="stylesheet" href="style.css" -->
  <style>
	section {
		width: 100%;
	}
	input[type=text], select, button, div.trumpi_parinkimai {
		width: 68%;
		margin: 10px 12px;
		padding: 4px 7px;
		margin-top: 4px;
	}
	label {
		display: block;
		margin: 10px 12px;
		margin-bottom: 4px;
	}
  </style>
</head>
<body>
  <header>
    <h1>Mano Nuorodų Rinkinys</h1>
    <p>Čia galite saugoti svarbias nuorodas ir lengvai jas pasiekti bet kada.</p>
  </header>

  <main>
    <section class="add-link">
         <label>Nuorodos url</label>  
      <input type="text" id="url" placeholder="Įveskite nuorodą">
	<label>Nuorodos pavadinimas</label>
      <input type="text" id="name" placeholder="Nuorodos pavadinimas">
	<label>Žymos, atskirtos kableliu</label>
       <input type="text" id="zymos" placeholder="Žymos, atskirtos kableliu"> 
        <div class="trumpi_parinkimai">
       <input type="checkbox" name="viesa"> - vieša žyma
       </div>
       <label>Nuorodos tipas</label>
       <select name="tipas">
		<option value="vaizdo_irasai">Vaizdo įrašai</option>
		<option value="vaizdai">Vaizdai</option>
		<option value="kiti">Kiti</option>		
       </select>
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