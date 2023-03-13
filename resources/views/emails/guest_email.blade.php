{{-- questo è il contenuto del messaggio che invierò tramite email --}}
<h1>Nuovo contatto ricevuto da form</h1>

<p>
    Nome: {{ $lead->name }}<br/>
    Cognome: {{ $lead->surname }}<br/>
    Telefono: {{ $lead->phone }}<br/>
    Email: {{ $lead->email }}<br/>
    Messaggio: {{ $lead->message }}<br/>
</p>