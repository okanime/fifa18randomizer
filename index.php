<?php
//List of teams to select from goes into the array
//5 star teams
$fivestarteams = array("Manchester City",
                "Manchester United",
                "Champions Chelsea",
                "Bayern Munich",
                "PSG",
                "Juventus",
                "Barcelona",
                "Real Madrid",
                "Atlético Madrid",
                "Tottenham Hotspur"
            );
//we select 2 teams
$team_keys = array_rand($fivestarteams, 2);
//we shuffle the 2 teams selected from all the teams listed in the array
shuffle($team_keys);
//we assign a number to selected team and wrap it in a variable
$randomfivestarteams1 = $fivestarteams[$team_keys[0]];
$randomfivestarteams2 = $fivestarteams[$team_keys[1]];

//------------------------------------------------
//List of teams to select from goes into the array
//4.5 star teams
$fourhalfteams = array("Porto",
				"Benfica",
				"Dortmund",
				"Napoli",
				"Liverpool",
				"AC Milan",
				"Arsenal",
				"Roma",
				"Monaco",
				"Inter",
				"Villareal",
				"Sevilla",
				"Everton",
				"Sporting CP",
				"Lazio",
				"Athletic Bilbao",
				"Valencia",
				"Besiktas",
				"Schalke",
				"Bayer 04",
            );
//we select 2 teams
$team_keys = array_rand($fourhalfteams, 2);
//we shuffle the 2 teams selected from all the teams listed in the array
shuffle($team_keys);
//we assign a number to selected team and wrap it in a variable
$randomfourhalfteam1 = $fourhalfteams[$team_keys[0]];
$randomfourhalfteam2 = $fourhalfteams[$team_keys[1]];
//--------------------------------------------------------------
//List of teams to select from goes into the array
//BPL Top 6 Teams
$bpltopsixteams = array("Manchester City",
                "Manchester United",
                "Champions Chelsea",
                "Liverpool",
                "Tottenham Hotspur",
                "Arsenal"
                     );
//we select 2 teams
$team_keys = array_rand($bpltopsixteams, 2);
//we shuffle the 2 teams selected from all the teams listed in the array
shuffle($team_keys);
//we assign a number to selected team and wrap it in a variable
$randombpltopsixteam1 = $bpltopsixteams[$team_keys[0]];
$randombpltopsixteam2 = $bpltopsixteams[$team_keys[1]];
//--------------------------------------------------------------
//List of teams to select from goes into the array
//National Teams
$nationalteams = array("Australia",
                "Brazil",
                "Canada",
                "China PR",
                "England",
                "France",
                "Germany",
                "Italy",
                "Mexico",
                "Netherlands",
                "New Zealand",
                "Norway",
                "Spain",
                "Sweden",
                "United States"
                     );
//we select 2 teams
$team_keys = array_rand($nationalteams, 2);
//we shuffle the 2 teams selected from all the teams listed in the array
shuffle($team_keys);
//we assign a number to selected team and wrap it in a variable
$randomnationalteam1 = $nationalteams[$team_keys[0]];
$randomnationalteam2 = $nationalteams[$team_keys[1]];
?>
<!DOCTYPE html>
<html>
        <title>FIFA 18 Team Randomizer</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="rights" content="Code by: Gabriel Nwoffiah, Content by: Teodor Roelofse" />
        <meta name="description" content="Fifa 18 Team Randomizer for those moments when you can't choose which team to play with or just add a twist to your friendly games." />
	<link href="https://fonts.googleapis.com/css?family=Oswald:300|Roboto+Condensed:300" rel="stylesheet">	
    <link href="style.css" rel="stylesheet" type="text/css">	
    </head>
    <body>
		<div class="outer">
			<div class="container">
				<table border="0" cellpadding="10" cellspacing="0" class="centered">
		  <tbody>
			<tr>
			  <td colspan="5" align="center" valign="middle"><h1>FIFA 18 Team Randomizer</h1></td>
			  </tr>
			<tr>
			  <td colspan="5" align="center" valign="middle"><h2>5 Star Teams</h2></td>
			  </tr>
			<tr bgcolor="#EEEEEE">
			  <td width="12%" align="center" valign="middle" class="home">Home</td>
			  <td width="32%" align="center" valign="middle" class="opponent"><?php echo $randomfivestarteams1; ?></td>
			  <td width="12%" align="center" valign="middle" class="versus">Vs</td>
			  <td width="32%" align="center" valign="middle"><?php echo $randomfivestarteams2; ?></td>
			  <td width="12%" align="center" valign="middle" class="away">Away</td>
			</tr>
			<tr>
			  <td colspan="5" align="center" valign="middle"><h2>4.5 Star Teams</h2></td>
			  </tr>
			<tr bgcolor="#EEEEEE">
			  <td align="center" valign="middle" class="home">Home</td>
			  <td align="center" valign="middle"><?php echo $randomfourhalfteam1; ?></td>
			  <td align="center" valign="middle" class="versus">Vs</td>
			  <td align="center" valign="middle"><?php echo $randomfourhalfteam2; ?></td>
			  <td align="center" valign="middle" class="away">Away</td>
			</tr>
			<tr>
			  <td colspan="5" align="center" valign="middle"><h2>BPL Top 6 Teams</h2></td>
			  </tr>
			<tr bgcolor="#EEEEEE">
			  <td align="center" valign="middle" class="home">Home</td>
			  <td align="center" valign="middle"><?php echo $randombpltopsixteam1; ?></td>
			  <td align="center" valign="middle" class="versus">Vs</td>
			  <td align="center" valign="middle"><?php echo $randombpltopsixteam2; ?></td>
			  <td align="center" valign="middle" class="away">Away</td>
			</tr>
			<tr>
			  <td colspan="5" align="center" valign="middle"><h2>National Teams</h2></td>
			  </tr>
			<tr bgcolor="#EEEEEE">
			  <td align="center" valign="middle" class="home">Home</td>
			  <td align="center" valign="middle"><?php echo $randomnationalteam1; ?></td>
			  <td align="center" valign="middle" class="versus">Vs</td>
			  <td align="center" valign="middle"><?php echo $randomnationalteam2; ?></td>
			  <td align="center" valign="middle" class="away">Away</td>
			</tr>
			<tr>
			  <td colspan="5" align="center" valign="middle"><button class="btn" onClick="window.location.reload();">Randomize</button>	</td>
			  </tr>
			<tr>
			  <td colspan="5" align="center" valign="middle"><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<!-- samwu -->
		<ins class="adsbygoogle"
			 style="display:block"
			 data-ad-client="ca-pub-0259746469141395"
			 data-ad-slot="1939959491"
			 data-ad-format="auto"></ins>
		<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
		</script></td>
			</tr>
		  </tbody>
		</table>
				</div>
		</div>
    </body>
</html>
