---
title: "Report"
...
Report
=========================

<h3>Kmom01</h3>

<h4>Redovisning</h4>

<div>
<h4>1. Gör din egen kunskapsinventering baserat på PHP The Right Way, berätta om dina styrkor och svagheter som du vill förstärka under det kommande året.</h4>

<p>Jag läste igenom artikeln och det var intressant. I artikeln fann jag viktiga informationer som man behöver veta när man ska jobba med PHP.<br>Målet är att bli en bra programmerare och det bästa sätt att lära sig är att börja från grunden för att lära sig rätt.<br>
Php har alltid varit en av mina favorit programmeringsspråk och det var med PHP som jag för första gång  kom i kontakt med programmering. Jag tycker att jag har lärt mig de elementära begrepp inom språket men målet nu är att fördjupa mina kunskaper. Jag vill bli säker på vad jag gör och kunna förklara lättare allt jag implementerar. Jag vill kunna strukturera och utveckla min kod på ett korrekt sätt. Jag vill nå det där nivån som gör att man kan hoppa in i ett projekt med andra programmerare, läsa andras kod utan att få panik. Jag vill kunna känna mig mer bekväm att programmera i PHP och under den kursen tanken är att lägga fokus på att strukturera och förbättra min kod.</p>
</div>

<h4>2. Vilket blev resultatet från din mini-undersökning om vilka ramverk som för närvarande är mest populära inom PHP (ange källa var du fann informationen)?</h4>
<p>Min åsikt runt om kring "Framework" eller "Ramverk" har ändrats kraftigt med tiden. jag har haft lite svårt att acceptera begreppet ramverk på grund av att jag tyckte att det var ett lätt sätt att utvecka sina webbplatser. Jag ville helst skriva min kod på egen hand från början till slut.<br>Nu efter att jag har jobbat ett tag med Anax så såg jag alla fördelar som den tekniken kan ge. Fördelarna är att du får en jättebra kodstruktur och en väl organiserad webbplats. Du sparar ganska mycket tid och slippa göra jobbet från grunden. vi säger till exempel att du ska leverera en webbapplikation till en kund, det bästa med att använda en ramverk är att du kan lägga hela din fokus på själva applikationen istället.</p>
<p>jag fann under min undersökning några intressanta ramverk som jag kunde tänka mig jobba med. De mest populära inom PHP var approximativt : <br> <b></b>Laravel<br> <b></b>Symfony<br>
<b></b>CodeIgniter<br> <b></b>Yii 2<br> <b></b>Phalcon<br>
<a href="http://www.hongkiat.com/blog/best-php-frameworks/">Hongkiat.com</a>
<a href="https://medium.com/@elitechsystems/the-most-popular-php-frameworks-in-2017-a90a1189405e">medium.com</a></p>
<p>Laravel kommer på topplistan i de flesta artiklarna jag läst men andleningen kan variera. Det har en bätttre kodstruktur och en elegant syntax. Det är snabbt och kraftigt. </p>

<h4>3. Berätta om din syn/erfarenhet generellt kring communities och specifikt communities inom opensource och programmeringsdomänen.</h4>
<p>Min generella uppfattning kring communities inom opensource/programmering är att man delar med sig sin kunskap. Ett ställe där man kan finna lösningar och hjälpas åt att utvecklas ett projekt. Du har till exempel : Stack-overflow som är en väldigt kännd plattform som man kan hjälpa eller finna hjälp, lära sig eller lära ut. </p>

<h4>4. Vad tror du om begreppet “en ramverkslös värld” som framfördes i videon?</h4>
<p>Jag tror nog att jag fann, genom att kolla på den videon, varför jag alltid varit lite skeptisk när det gäller Framework. Jag håll med honom att det hade behövt att dela in saker i mindre komponenter så att man kan välja själv vilka delar man vill ha i sin projekt. Det hade också varit bäst om man kunde hitta en standardisering av alla bibliotek så att flera personer kan sammarbeta och på så sätt slipper man att delar in sig i grupper beroende om vilket ramverk man brukar använda. </p>

<h4>Hur gick dina förberedelser inför kommentarssystemet?</h4>
<p>Jag hade lite svårt att ha en konkret bild på hur det mest lämpligaste kommentarssystemet kunde utvecklas eftersom att jag tänker att implementera något väldigt enkelt men stabilt. Jag gick då runt och kollade på facebook, twitter och jag försökte bygga mig en uppfattning om de olika strukturer. Jag har tillslut fått ett bra tänk över hur strukturen kommer se ut och vi får se vad jag kommer hitta på de kommande kursmomenterna.</p>

<hr>

<h3>Kmom02</h3>
<h4>Redovisning</h4>
<h4>1. Vilka tidigare erfarenheter har du av MVC? Använde du någon speciell källa för att läsa på om MVC? Kan du med egna ord förklara någon fördel med kontroller/modellbegreppet, så som du ser på det?</h4>

Jag tror inte att jag har jobbat specifikt med MVC sen tidigare. Dock känns det som att jag har jobbat med ungefär sama struktur tidigare. Som i kurserna OOPython och Webapp med respektivt flask och mithrill.
Jag måste erkänna att jag tyckte att kurmomenten var svårt. Det tog ganska lång tid för att förstå hela konceptet mellan modellen, vyn och kontrollern. Det som tog mest tid var att förstår hur konden ska interagera osv. Jag använde kursmaterialet som källa och kollade också runt på nätet för att ha mer förklaringar.
<h4>2. Kom du fram till vad begreppet SOLID innebar och vilka källor använde du? Kan du förklara SOLID på ett par rader med dina egna ord?</h4>

Detta begreppet, SOLID, är fortfarande fräsch i huvudet. Vissa principer är ganska svårt att uppfatta. Man får bara ge det tiden och läsa om det flera gånger tills det sitter. Principernas mål är att göra system enklare att utveckla, förstå och utökas.

Single responsibility principle : En klass ska ha endast ett enda ansvarsområde och därmed endast ett enda skäl att ändras. Det är den enklast principen att förstå enligt mig. Det är rimligt att en klass ska endast ha en uppgift att utföra.

Open/closed principle : Klasser ska vara öppna för utökning (genom arv), men låsta för modifiering. Jag vet inte om jag förstår den här principen rätt men jag tror nog att det menas att du ska kunna lätt och enkelt lägga till funktioner i din klass utan att modifiera själva klasset.

Liskov substitution principle : Objekt av en klass ska kunna ersättas med objekt av subklasser utan att programmets funktion ändras.

Interface segregation principle : Gränssnitt ska vara många och enkla, inte få och omfattande, så att ett program inte är beroende av metoder som det inte använder. Väldigt enkelt!

Dependency inversion principle : Klasser ska inte vara beroende av varandra utan av abstrakta gränssnitt som tillhandahålls på en högre nivå.

<span>wikipedia</span>

<span>scotch.io</span>
<h4>3. Gick arbetet med REM servern bra och du lyckades integrera den i din me-sida?</h4>

Det gick hur lätt som helst att jobba med REM servern och sen att inkludera den i min me-sida. Det var i sortsett endast att läsa artikeln och följa instruktionerna.

<h4>4. Berätta om arbetet med din kommentarsmodul, hur långt har du kommit och hur tänker du?</h4>

Jag försökte kopiera samma struktur som REM servern. Jag skapade en fil som innehåller routrar som anropar min Controller och som i sin tur anropar min Modell. Jag lagrar än så länge datat i session men tanken är att använda en databas i försättningen.
Det finns många funktionalitet som jag har tänkt att implementera senare till exempel att man ska kunna logga in och användaren ska kunna ladda up eller välja sin egen gravatar. Användaren ska kunna ta bort endast sina kommentarer men däremot det ska finnas en administratör som kan tabort alla kommentarer och till och med en användare om det behövs. En admistratör som kommer ha alla rättigheter alltså.


<h3>Kmom03</h3>

<h4>Redovisning</h4>

<p>
Här skriver jag text
</p>
