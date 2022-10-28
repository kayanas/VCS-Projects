let body = document.getElementsByTagName("body")[0];

let data = [
  [1,`<img src="./images/arsenal.png" width="20px"> Arsenal</img>`, 6, 5, 7, 15],
  [2, `<img src="./images/mancity.png" width="20px"></img> Man City`, 6, 4, 14, 14],
  [3, `<img src="./images/tottenham.png" width="20px"></img>Tottenham`, 6, 4, 7, 14],
  [4, `<img src="./images/brighton.png" width="20px"></img> Brighton`, 6, 4, 6, 13],
  [5, `<img src="./images/manuni.png" width="20px"></img> Man United`, 6, 4, 0, 12],
  [6, `<img src="./images/chelsea.png" width="20px"></img> Chelsea`, 6, 3, -1, 10],
  [7, `<img src="./images/liverpool.png" width="20px"></img> Liverpool`, 6, 2, 9, 9],
  [8, `<img src="./images/brentford.png" width="20px"></img> Brentford`, 6, 2, 6, 9],
];

let imgUrl = "./images/";

let HTML = "";


HTML += `<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container-fluid">
  <a class="nav-link active navbar-brand" href="#"><img src="./images/premier.png" alt="" srcset="" href="https://www.premierleague.com/">
  Premier League</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="https://www.google.com/search?gs_ssp=eJzj4tDP1Tcwii9JNmD04isoSs3NTC1SyElNTC9NBQBphwiG&q=premier+league&oq=priemier&aqs=chrome.1.69i57j46i10j0i10l4j46i10i199i465j0i10l2.4395j0j7&sourceid=chrome&ie=UTF-8#sie=lg;/g/11pz7zbpnb;2;/m/02_tc;mt;fp;1;;;">Matches</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://www.google.com/search?gs_ssp=eJzj4tDP1Tcwii9JNmD04isoSs3NTC1SyElNTC9NBQBphwiG&q=premier+league&oq=priemier&aqs=chrome.1.69i57j46i10j0i10l4j46i10i199i465j0i10l2.4395j0j7&sourceid=chrome&ie=UTF-8#sie=lg;/g/11pz7zbpnb;2;/m/02_tc;nw;fp;1;;;">News</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://www.google.com/search?gs_ssp=eJzj4tDP1Tcwii9JNmD04isoSs3NTC1SyElNTC9NBQBphwiG&q=premier+league&oq=priemier&aqs=chrome.1.69i57j46i10j0i10l4j46i10i199i465j0i10l2.4395j0j7&sourceid=chrome&ie=UTF-8#sie=lg;/g/11pz7zbpnb;2;/m/02_tc;st;fp;1;;;">Standings</a>
      </li>
      <li class="nav-item">
        <a class="nav-link href="https://www.google.com/search?gs_ssp=eJzj4tDP1Tcwii9JNmD04isoSs3NTC1SyElNTC9NBQBphwiG&q=premier+league&oq=priemier&aqs=chrome.1.69i57j46i10j0i10l4j46i10i199i465j0i10l2.4395j0j7&sourceid=chrome&ie=UTF-8#sie=lg;/g/11pz7zbpnb;2;/m/02_tc;pl;fp;1;;;"">Players</a>
      </li>
      
    </ul>
  </div>
</div>
</nav>`;

HTML += `<div class="container">
          <table class="table table-dark table-hover table-bordered">
            <thead>
              <tr class= "top">
                <th scope="col">Place</th>
                <th scope="col">Club</th>
                <th scope="col"title="Matches Played">MP</th>
                <th scope="col">Wins</th>
                <th scope="col" title="Goal Difference">GD</th>
                <th scope="col">Points</th>
                </tr>
            </thead>
            <tbody class="tbody">`;

for (let i = 0; i < data.length; i++) {
  HTML += `<tr>`;

  for (let a = 0; a < data[i].length; a++) {
    HTML += `<td>` + data[i][a] + `</td>`;
  }

  HTML += `<tr>`;
}


HTML += `    
    </table>
    </tbody>
  </div>`;

body.innerHTML += HTML;
