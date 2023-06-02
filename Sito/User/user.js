function showProfile() {
    let info = document.getElementById('info');
    // qui inserisci il codice per recuperare i dati del profilo dell'utente
    info.innerHTML = `<h2>Profilo</h2>
                      <p>Nome: [nome]</p>
                      <p>Cognome: [cognome]</p>
                      <p>Email: [email]</p>
                      <p>Password: ****</p>
                      <button onclick="editProfile()">Modifica</button>`;
}

function showAddress() {
    let info = document.getElementById('info');
    // qui inserisci il codice per recuperare l'indirizzo dell'utente
    info.innerHTML = `<h2>Indirizzo</h2>
                      <p>Via: [via]</p>
                      <p>CAP: [CAP]</p>
                      <p>Stato: [Stato]</p>
                      <p>Regione: [Regione]</p>
                      <button onclick="editAddress()">Modifica</button>`;
}

function logout() {
    // qui inserisci il codice per effettuare il logout
}
