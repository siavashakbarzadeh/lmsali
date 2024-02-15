<?php

return [

'accepted' => 'Il campo :attribute deve essere accettato.',
'active_url' => 'Il campo :attribute non è un URL valido.',
'after' => 'Il campo :attribute deve essere una data successiva al :date.',
'after_or_equal' => 'Il campo :attribute deve essere una data successiva o uguale al :date.',
'alpha' => 'Il campo :attribute può contenere solo lettere.',
'alpha_dash' => 'Il campo :attribute può contenere solo lettere, numeri, trattini e underscore.',
'alpha_num' => 'Il campo :attribute può contenere solo lettere e numeri.',
'array' => 'Il campo :attribute deve essere un array.',
'before' => 'Il campo :attribute deve essere una data precedente al :date.',
'before_or_equal' => 'Il campo :attribute deve essere una data precedente o uguale al :date.',
'between' => [
    'numeric' => 'Il campo :attribute deve essere compreso tra :min e :max.',
    'file' => 'Il campo :attribute deve essere compreso tra :min e :max kilobyte.',
    'string' => 'Il campo :attribute deve essere compreso tra :min e :max caratteri.',
    'array' => 'Il campo :attribute deve avere tra :min e :max elementi.',
],
'boolean' => 'Il campo :attribute deve essere vero o falso.',
'confirmed' => 'La conferma del campo :attribute non corrisponde.',
'date' => 'Il campo :attribute non è una data valida.',
'date_equals' => 'Il campo :attribute deve essere una data uguale a :date.',
'date_format' => 'Il campo :attribute non corrisponde al formato :format.',
'different' => 'I campi :attribute e :other devono essere diversi.',
'digits' => 'Il campo :attribute deve essere di :digits cifre.',
'digits_between' => 'Il campo :attribute deve essere compreso tra :min e :max cifre.',
'dimensions' => 'Il campo :attribute ha dimensioni dell\'immagine non valide.',
'distinct' => 'Il campo :attribute ha un valore duplicato.',
'email' => 'Il campo :attribute deve essere un indirizzo email valido.',
'ends_with' => 'Il campo :attribute deve terminare con uno dei seguenti: :values.',
'exists' => 'Il campo :attribute selezionato non è valido.',
'file' => 'Il campo :attribute deve essere un file.',
'filled' => 'Il campo :attribute deve avere un valore.',
'gt' => [
    'numeric' => 'Il campo :attribute deve essere maggiore di :value.',
    'file' => 'Il campo :attribute deve essere maggiore di :value kilobyte.',
    'string' => 'Il campo :attribute deve essere maggiore di :value caratteri.',
    'array' => 'Il campo :attribute deve avere più di :value elementi.',
],
'gte' => [
    'numeric' => 'Il campo :attribute deve essere maggiore o uguale a :value.',
    'file' => 'Il campo :attribute deve essere maggiore o uguale a :value kilobyte.',
    'string' => 'Il campo :attribute deve essere maggiore o uguale a :value caratteri.',
    'array' => 'Il campo :attribute deve avere :value elementi o più.',
],
'image' => 'Il campo :attribute deve essere un\'immagine.',
'in' => 'Il campo :attribute selezionato non è valido.',
'in_array' => 'Il campo :attribute non esiste in :other.',
'integer' => 'Il campo :attribute deve essere un numero intero.',
'ip' => 'Il campo :attribute deve essere un indirizzo IP valido.',
'ipv4' => 'Il campo :attribute deve essere un indirizzo IPv4 valido.',
'ipv6' => 'Il campo :attribute deve essere un indirizzo IPv6 valido.',
'json' => 'Il campo :attribute deve essere una stringa JSON valida.',
'lt' => [
    'numeric' => 'Il campo :attribute deve essere minore di :value.',
    'file' => 'Il campo :attribute deve essere minore di :value kilobyte.',
    'string' => 'Il campo :attribute deve essere minore di :value caratteri.',
    'array' => 'Il campo :attribute deve avere meno di :value elementi.',
],
'lte' => [
    'numeric' => 'Il campo :attribute deve essere minore o uguale a :value.',
    'file' => 'Il campo :attribute deve essere minore o

 uguale a :value kilobyte.',
    'string' => 'Il campo :attribute deve essere minore o uguale a :value caratteri.',
    'array' => 'Il campo :attribute non deve avere più di :value elementi.',
],
'max' => [
    'numeric' => 'Il campo :attribute non può essere maggiore di :max.',
    'file' => 'Il campo :attribute non può essere maggiore di :max kilobyte.',
    'string' => 'Il campo :attribute non può essere maggiore di :max caratteri.',
    'array' => 'Il campo :attribute non può avere più di :max elementi.',
],
'mimes' => 'Il campo :attribute deve essere un file di tipo: :values.',
'mimetypes' => 'Il campo :attribute deve essere un file di tipo: :values.',
'min' => [
    'numeric' => 'Il campo :attribute deve essere almeno :min.',
    'file' => 'Il campo :attribute deve essere almeno :min kilobyte.',
    'string' => 'Il campo :attribute deve avere almeno :min caratteri.',
    'array' => 'Il campo :attribute deve avere almeno :min elementi.',
],
'not_in' => 'Il campo :attribute selezionato non è valido.',
'not_regex' => 'Il formato del campo :attribute non è valido.',
'numeric' => 'Il campo :attribute deve essere un numero.',
'password' => 'La password è incorretta.',
'password_or_username' => 'La password o il nome utente sono incorretti.',
'present' => 'Il campo :attribute deve essere presente.',
'regex' => 'Il formato del campo :attribute non è valido.',
'required' => 'Il campo :attribute è richiesto.',
'required_if' => 'Il campo :attribute è richiesto quando :other è :value.',
'required_unless' => 'Il campo :attribute è richiesto a meno che :other sia in :values.',
'required_with' => 'Il campo :attribute è richiesto quando :values è presente.',
'required_with_all' => 'Il campo :attribute è richiesto quando :values sono presenti.',
'required_without' => 'Il campo :attribute è richiesto quando :values non è presente.',
'required_without_all' => 'Il campo :attribute è richiesto quando nessuno dei :values è presente.',
'same' => 'I campi :attribute e :other devono corrispondere.',
'size' => [
    'numeric' => 'Il campo :attribute deve essere :size.',
    'file' => 'Il campo :attribute deve essere :size kilobyte.',
    'string' => 'Il campo :attribute deve essere di :size caratteri.',
    'array' => 'Il campo :attribute deve contenere :size elementi.',
],
'starts_with' => 'Il campo :attribute deve iniziare con uno dei seguenti: :values.',
'string' => 'Il campo :attribute deve essere una stringa.',
'timezone' => 'Il campo :attribute deve essere una zona valida.',
'unique' => 'Il campo :attribute è già stato preso.',
'uploaded' => 'Il caricamento del campo :attribute è fallito.',
'url' => 'Il formato del campo :attribute non è valido.',
'uuid' => 'Il campo :attribute deve essere un UUID valido.',

/*
|--------------------------------------------------------------------------
| Custom Validation Language Lines
|--------------------------------------------------------------------------
|
| Qui puoi specificare messaggi di validazione personalizzati per gli attributi
| utilizzando la convenzione "attribute.rule" per nominare le linee. Questo
| rende rapido specificare un messaggio di lingua personalizzato per una data
| regola di attributo.
|
*/

'custom' => [
    'attribute-name' => [
        'rule-name' => 'messaggio-personalizzato',
    ],
],

'captcha' => 'Captcha incorretto...',
/*
|--------------------------------------------------------------------------
| Custom Validation Attributes
|--------------------------------------------------------------------------
|
| Le seguenti linee di lingua sono utilizzate per scambiare il nostro segnaposto
| di attributo con qualcosa di più leggibile, come "Indirizzo E-Mail" invece
| di "email". Questo semplicemente ci aiuta a rendere il nostro messaggio più espressivo.
|
*/

'attributes' => [],

];
