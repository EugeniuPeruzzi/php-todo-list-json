# To do list json

### Problema :

***Dobbiamo creare una web-app che permetta di leggere e scrivere una lista di Todo. Deve essere anche gestita la persistenza dei dati leggendoli da, e scrivendoli in un file JSON.*** <br/>
    <sub>Stack: _HTML,CSS,Vue.js(cdn),axios,PHP_ </sub>
### Soluzione:

- Creare il booiler dei documenti di base e collegarli.

- Prendo l'array pre impostato e lo inserisco dentro un file `.json` 
```
[
    {
        "text": "HTML",
        "done": true
    },
    {
        "text": "CSS",
        "done": true
    },
    {
        "text": "Responsive design",
        "done": true
    },
    {
        "text": "Javascript",
        "done": true
    },
    {
        "text": "PHP",
        "done": true
    },
    {
        "text": "Laravel",
        "done": false
    }
]
```

- Creao un file `serve.php` e da la prendo i dati dal file `db.json` tramite `file_get_contents()`
    -  Tramite `json_decode()` converto il file in stringa per farlo comprensibile a js

- Recuperarli tramite axios in vue.js
    - Elaborarli e fare in modo che stampi a schermo l'array predefinito.
        - (con include `server.php` dentro `index.php` dava : *SyntaxError: JSON.parse: unexpected non-whitespace character after JSON data at line 1 column 191 of the JSON data*)

- Prendere l'imput dal utente e spostarlo in una variabile in js

- Fare la funzione che i dati inseriti dall'utente vengano messi nel file `.json`
    - Una volta che l'utente ha inserito ne `input` i valori essi vano messi in una variabile in `.js` tramite `v-model`
    - Nella funzione creata mi porto i valori inseriti 
        - Spedisco con `axios.post` al file `serve.php`

- In `serve.php` elaboro i dati ricevuti mettendogli a sua volta dentro un array
    - L'array vine reso leggibile da `.js` tramite `json_encode()`
        - Con `file_put_contents` inserisco tutto detro il file `.json`
    