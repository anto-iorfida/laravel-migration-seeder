Creiamo un nuovo database con phpmyadmin e settate le credenziali di accesso nel file .envCreiamo una tabella trains e relativa MigrationOgni treno dovrà avere:
Azienda
Stazione di partenza
Stazione di arrivo
Orario di partenza
Orario di arrivo
Codice Treno
Numero Carrozze
In orario
CancellatoÈ probabile che siano necessarie altre colonne per far funzionare la tabella nel modo corretto ;) ...Aggiungiamo un seeder per la classe Train usando FakerPHP.Create Model relativo ed un Controller per mostrare nella home page tutti i treni che sono in partenza dalla data odierna.Buone migrations :razzo: