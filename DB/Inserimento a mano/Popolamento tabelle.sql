USE GIACOMELLI_Utenti;
/*Popolamento utenti*/
INSERT INTO Utente
SET Username='fedeGiaco',Password=md5('badia'),Nome='Federico',Cognome='Giacomelli',DataNascita='1999-07-08',Mail='fe.giac99@hotmail.it',Sesso='M',Controllo='0',Note="Admin";

INSERT INTO Utente
SET Username='marioRossi',Password=md5('mario'),Nome='Mario',Cognome='Rossi',DataNascita='2000-03-08',Mail='mario.rossi@hotmail.it',Sesso='M',Controllo='0',Note="Admin";

INSERT INTO Utente
SET Username='pippo',Password=md5('pippo'),Nome='Pippo',Cognome='DePippo',DataNascita='2004-01-01',Mail='pippo.depippo@live.it',Sesso='M',Controllo='0',Note="No admin";

/*Popolamento svolge*/
INSERT INTO Svolge
VALUES('fedeGiaco','GruppoMedie','Animatore',2019);

INSERT INTO Svolge
VALUES('fedeGiaco','GruppoGiovani','Inesistente',2019);

INSERT INTO Svolge
VALUES('fedeGiaco','GruppoGiovanissimi(nonAttuale)','Partecipante',2016);

INSERT INTO Svolge
VALUES('fedeGiaco','Oratorio(nonAttuale)','Animatore',2017);

INSERT INTO Svolge
VALUES('fedeGiaco','GruppoCoro','Inesistente',2017);

INSERT INTO Svolge
VALUES('marioRossi','GruppoGiovani','Inesistente',2019);

INSERT INTO Svolge
VALUES('pippo','GruppoMedie','Animatore',2019);

/*Popolamento attivita*/
INSERT INTO Attivita
VALUES('CatechismoDiSecondaElementare','Ccat2');

INSERT INTO Attivita
VALUES('CatechismoDiTerzaElementare','Ccat3');

INSERT INTO Attivita
VALUES('Catechismo di quarta elementare','Ccat4');

INSERT INTO Attivita
VALUES('CatechismoDiQuintaElementare','Ccat5');

INSERT INTO Attivita
VALUES('CatechismoDiPrimaSuperiore','CcatS1');

INSERT INTO Attivita
VALUES('CatechismoDiSecondaSuperiore','CcatS2');

INSERT INTO Attivita
VALUES('Oraratorio delle elementari','Cora');

INSERT INTO Attivita
VALUES('GruppoMedie','Cmed');

INSERT INTO Attivita
VALUES('GruppoGiovanissimi','Cgiovanis');

INSERT INTO Attivita
VALUES('GruppoGREST','Cgre');

INSERT INTO Attivita
VALUES('GruppoGiovani','Cgio');

INSERT INTO Attivita
VALUES('GruppoPresepeVivente','Cpre');

INSERT INTO Attivita
VALUES('Catechismo','XCcat');

INSERT INTO Attivita
VALUES('Oratorio(nonAttuale)','XCora');

INSERT INTO Attivita
VALUES('GruppoGiovanissimi(nonAttuale)','XCgiovanis');

INSERT INTO Attivita
VALUES('GruppoGREST(nonAttuale)','XCgre');

INSERT INTO Attivita
VALUES('GruppoGiovani(nonAttuale)','XCgio');

INSERT INTO Attivita
VALUES('GruppoFamiglia','XCfam');

INSERT INTO Attivita
VALUES('GruppoCoro','XCgio');

INSERT INTO Attivita
VALUES('Altro','XCalt');

/*Popolamento stanze*/
INSERT INTO Stanze
SET
	Stanza=1,
	GiornoPeriodico=1,
	OrarioInizio=18,
	OrarioFine=19,
	Periodico=1,
	Responsabile="GruppoMedie",
	Note="Regolare svolgimento del gruppo";

INSERT INTO Stanze
SET
	Stanza=1,
	GiornoPeriodico=1,
	OrarioInizio=21,
	OrarioFine=22,
	Periodico=1,
	Responsabile="GruppoPresepeVivente",
	Note="Regolare svolgimento del gruppo";
	
INSERT INTO Stanze
SET
	Stanza=2,
	GiornoPeriodico=3,
	OrarioInizio=21,
	OrarioFine=22,
	Periodico=1,
	Responsabile="GruppoMedie",
	Note="Riunione gruppo";

INSERT INTO Stanze
SET
	Stanza=2,
	GiornoPeriodico=3,
	OrarioInizio=21,
	OrarioFine=22,
	Periodico=1,
	Responsabile="Oratorio",
	Note="Riunione gruppo";

INSERT INTO Stanze
SET
	Stanza=1,
	GiornoPeriodico=3,
	OrarioInizio=21,
	OrarioFine=22,
	Periodico=1,
	Responsabile="GruppoGiovanissimi",
	Note="Regolare svolgimento del gruppo";

INSERT INTO Stanze
SET
	Stanza=1,
	GiornoPeriodico=6,
	OrarioInizio=14,
	OrarioFine=15,
	Periodico=1,
	Responsabile="CatechismoDiSecondaElementare",
	Note="Regolare svolgimento del catechismo";
	
INSERT INTO Stanze
SET
	Stanza=2,
	GiornoPeriodico=6,
	OrarioInizio=14,
	OrarioFine=15,
	Periodico=1,
	Responsabile="CatechismoDiTerzaElementare",
	Note="Regolare svolgimento del catechismo";

INSERT INTO Stanze		
SET
	Stanza=3,
	GiornoPeriodico=6,
	OrarioInizio=14,
	OrarioFine=15,
	Periodico=1,
	Responsabile="CatechismoDiQuartaElementare",
	Note="Regolare svolgimento del catechismo";	

INSERT INTO Stanze
SET
	Stanza=3,
	GiornoPeriodico=6,
	OrarioInizio=14,
	OrarioFine=15,
	Periodico=1,
	Responsabile="CatechismoDiQuintaElementare",
	Note="Regolare svolgimento del catechismo";
	
INSERT INTO Stanze
SET
	Stanza=1,
	GiornoPeriodico=6,
	OrarioInizio=15,
	OrarioFine=17,
	Periodico=1,
	Responsabile="Oratorio",
	Note="Regolare svolgimento del gruppo";

/*Popolamento post*/	
INSERT INTO PostUtenti
SET Proprietario="fedeGiaco",Titolo="Badia on-line!",Testo="Benvenuti nel nuovissimo sito che ospiter&#224 tutti i contenuti parrocchiali. Disponibile da Marzo 2020!",Utenza="all",Immissione=CURRENT_TIMESTAMP;
	
INSERT INTO PostUtenti
SET Proprietario="marioRossi",Titolo="L&#8216anno nuovo porta consiglio",Testo="&#200 da un mese che il nuovo &#233 iniziato e le attivit&#224 procedono spedite. Ottimo lavoro!",Utenza="all",Immissione=CURRENT_TIMESTAMP;

INSERT INTO PostUtenti
SET Proprietario="fedeGiaco",Titolo="La Verna &#233 preistoria :(",Testo="Ormai possiamo definire pi&#249 che lontana l&#8216esperienza del ritiro della La Verna (cui sopra ne &#233 riportata la foto). Grandi momenti!",Utenza="Gruppo Giovani",Immissione=CURRENT_TIMESTAMP;
	
INSERT INTO PostUtenti
SET Proprietario="fedeGiaco",Titolo="Il tempo passa, la voglia rimane",Testo="Non c&#8216&#233 stato un incontro privo di carica. La costante partecipazione, pochissime volte sotto le 15 presenze, &#233 una grande soddisfazione. Noi continueremo cos&#236, non ci deludete",Utenza="Gruppo Medie",Immissione=CURRENT_TIMESTAMP;
	
INSERT INTO PostUtenti
SET Proprietario="pippo",Titolo="Bullismo: piaga infinita",Testo="I 2 incontri sul tema del bullismo sono pi&#249 che piaciuti. Gli spunti di riflessione non sono mancati!!! &#200 sempre un tema ostico!",Utenza="Gruppo Medie",Immissione=CURRENT_TIMESTAMP;

INSERT INTO PostUtenti
SET Proprietario="pippo",Titolo="Mega-Riunione",Testo="Tenetevi pronti! A breve ci sar&#224 la canonica riunione catechisti e animatori per fare il punto della situazione di met&#224 anno",Utenza="allB",Immissione=CURRENT_TIMESTAMP;

INSERT INTO PostCommenti
SET IDPost =1, Proprietario="marioRossi" , Testo="I tempi corrono!!!",Immissione=CURRENT_TIMESTAMP;

INSERT INTO PostCommenti
SET IDPost =1, Proprietario="pippo" , Testo="Ci siamo",Immissione=CURRENT_TIMESTAMP;

INSERT INTO PostCommenti
SET IDPost =1, Proprietario="pippo" , Testo="Ora Badia è su un altro livello",Immissione=CURRENT_TIMESTAMP;

INSERT INTO PostCommenti
SET IDPost =2, Proprietario="marioRossi" , Testo="Condivido in parte.",Immissione=CURRENT_TIMESTAMP;

INSERT INTO PostCommenti
SET IDPost =6, Proprietario="fedeGiaco" , Testo="Serviva ed era ora",Immissione=CURRENT_TIMESTAMP;
	
/*Popolamento Santi*/
USE GIACOMELLI_Calendario;

INSERT INTO Santo
SET Nome = "Santa Maria Madre di Dio",Giorno = 1,Mese = 1;

INSERT INTO Santo
SET Nome = "Santissimi Basilio e Gregorio vv.",Giorno = 2,Mese = 1;

INSERT INTO Santo
SET Nome="Santo Nome di Ges&#249",Giorno=3,Mese=1;

INSERT INTO Santo
SET Nome="Santissimi Ermete e Caio mm.",Giorno=4,Mese=1;

INSERT INTO Santo
SET Nome="Santo Edoardo III re, Santa Emiliana vr.",Giorno=5,Mese=1;

INSERT INTO Santo
SET Nome="Epifania di Nostro Signore Ges&#249 Cristo",Giorno=6,Mese=1;

INSERT INTO Santo
SET Nome="San Luciano sac. m. San Raimondo sac.",Giorno=7,Mese=1;

INSERT INTO Santo
SET Nome="San Massimo",Giorno=8,Mese=1;

INSERT INTO Santo
SET Nome="San Giuliano, Sant&#8216Adriano ab.",Giorno=9,Mese=1;

INSERT INTO Santo
SET Nome="Sant&#8216Aldo, San Valerio er.",Giorno=10,Mese=1;

INSERT INTO Santo
SET Nome="Sant&#8216Igino p.",Giorno=11,Mese=1;

INSERT INTO Santo
SET Nome="San Bernardo da Corleone",Giorno=12,Mese=1;

INSERT INTO Santo
SET Nome="Sant&#8216Ilario v.dott.",Giorno=13,Mese=1;

INSERT INTO Santo
SET Nome="San Felice da Nola m.",Giorno=14,Mese=1;

INSERT INTO Santo
SET Nome="San Mauro ab.",Giorno=15,Mese=1;

INSERT INTO Santo
SET Nome="San Marcello I p.",Giorno=16,Mese=1;

INSERT INTO Santo
SET Nome="Sant&#8216Antonio ab.",Giorno=17,Mese=1;

INSERT INTO Santo
SET Nome="Santa Margherita d&#8216Ungheria vr., Santissimi Zenone e C. mm.",Giorno=18,Mese=1;

INSERT INTO Santo
SET Nome="Santissimi Mario e Marta mm.",Giorno=19,Mese=1;

INSERT INTO Santo
SET Nome="Santissimi Sebastiano e Fabiano mm.",Giorno=20,Mese=1;

INSERT INTO Santo
SET Nome="Sant&#8216Agnese vr. m.",Giorno=21,Mese=1;

INSERT INTO Santo
SET Nome="San Gaudenzio",Giorno=22,Mese=1;

INSERT INTO Santo
SET Nome="Santa Emerenziana m.",Giorno=23,Mese=1;

INSERT INTO Santo
SET Nome="San Francesco di Sales v. dott.",Giorno=24,Mese=1;

INSERT INTO Santo
SET Nome="Conversione di San Paolo ap.",Giorno=25,Mese=1;

INSERT INTO Santo
SET Nome="Santissimi Tito e Timoteo",Giorno=26,Mese=1;

INSERT INTO Santo
SET Nome="Sant&#8216Angela Merici vr. fr.",Giorno=27,Mese=1;

INSERT INTO Santo
SET Nome="San Tommaso d&#8216Aquino",Giorno=28,Mese=1;

INSERT INTO Santo
SET Nome="San Costanzo v. m.",Giorno=29,Mese=1;

INSERT INTO Santo
SET Nome="Santa Giacinta vr. fr., San Martina m.",Giorno=30,Mese=1;

INSERT INTO Santo
SET Nome="San Giovanni Bosco sac.",Giorno=31,Mese=1;

INSERT INTO Santo
SET Nome="Santa Verdiana vr., Sant&#8216Orso d&#8216Aosta sac.",Giorno=1,Mese=2;

INSERT INTO Santo
SET Nome="Pres. di Ges&#249 al Tempio",Giorno=2,Mese=2;

INSERT INTO Santo
SET Nome="San Biagio v.m.",Giorno=3,Mese=2;

INSERT INTO Santo
SET Nome="San Gilberto sac.",Giorno=4,Mese=2;

INSERT INTO Santo
SET Nome="Sant&#8216Agata vr. m.",Giorno=5,Mese=2;

INSERT INTO Santo
SET Nome="Santissimi Paolo Miki e Compagni mm.",Giorno=6,Mese=2;

INSERT INTO Santo
SET Nome="San Teodoro m., San Riccardo",Giorno=7,Mese=2;

INSERT INTO Santo
SET Nome="San Girolamo Emiliani",Giorno=8,Mese=2;

INSERT INTO Santo
SET Nome="San Rinaldo v., Sant&#8216Apollonia vr. m.",Giorno=9,Mese=2;

INSERT INTO Santo
SET Nome="Santa Scolastica",Giorno=10,Mese=2;

INSERT INTO Vangelo
SET Testo="In quel tempo, gli scribi, che erano scesi da Gerusalemme, dicevano: &#171Costui &#233 posseduto da Beelzeb&#249l e scaccia i dem&#242ni per mezzo del capo dei dem&#242ni&#187.
Ma egli li chiam&#242 e con parabole diceva loro: &#8220Come pu&#242 Satana scacciare Satana? Se un regno &#233 diviso in se stesso, quel regno non potr&#224 restare in piedi; se una casa &#233 divisa in se stessa, quella casa non potr&#224 restare in piedi. Anche Satana, se si ribella contro se stesso ed &#233 diviso, non pu&#242 restare in piedi, ma &#233 finito.
Nessuno pu&#242 entrare nella casa di un uomo forte e rapire i suoi beni, se prima non lo lega. Soltanto allora potr&#224 saccheggiargli la casa.
In verit&#224 io vi dico: tutto sar&#224 perdonato ai figli degli uomini, i peccati e anche tutte le bestemmie che diranno; ma chi avr&#224 bestemmiato contro lo Spirito Santo non sar&#224 perdonato in eterno: &#233 reo di colpa eterna&#187.
Poich&#233 dicevano: &#8220&#233 posseduto da uno spirito impuro&#8221.",
Evangelista="Marco",Capitolo=3,VersettoInizio=22,VersettoFine=30,Giorno=27,Mese=1;

INSERT INTO Vangelo
SET Testo="In quel tempo, giunsero la madre di Ges&#249 e i suoi fratelli e, stando fuori, mandarono a chiamarlo.
Attorno a lui era seduta una folla, e gli dissero: &#8220Ecco, tua madre, i tuoi fratelli e le tue sorelle stanno fuori e ti cercano&#8221.
Ma egli rispose loro: &#8220Chi &#233 mia madre e chi sono i miei fratelli?&#8221. Girando lo sguardo su quelli che erano seduti attorno a lui, disse: &#8220Ecco mia madre e i miei fratelli! 
Perch&#233 chi fa la volont&#224 di Dio, costui per me &#233 fratello, sorella e madre&#8221.",
Evangelista="Marco",Capitolo=3,VersettoInizio=31,VersettoFine=35,Giorno=28,Mese=1;

INSERT INTO Vangelo
SET Testo="In quel tempo, Ges&#249 cominci&#242 di nuovo a insegnare lungo il mare. Si riun&#236 attorno a lui una folla enorme, tanto che egli, salito su una barca, si mise a sedere stando in mare, mentre tutta la folla 
era a terra lungo la riva. Insegnava loro molte cose con parabole e diceva loro nel suo insegnamento: &#8220Ascoltate. Ecco, il seminatore usc&#236 a seminare. Mentre seminava, una parte cadde lungo la strada; 
vennero gli uccelli e la mangiarono. Un&#8216altra parte cadde sul terreno sassoso, dove non c&#8216era molta terra; e subito germogli&#242 perch&#233 il terreno non era profondo, ma quando spunt&#242 il sole, fu bruciata e, 
non avendo radici, secc&#242. Un&#8216altra parte cadde tra i rovi, e i rovi crebbero, la soffocarono e non diede frutto. Altre parti caddero sul terreno buono e diedero frutto: spuntarono, crebbero e resero il trenta, 
il sessanta, il cento per uno&#8221. E diceva: &#8220Chi ha orecchi per ascoltare, ascolti!&#8221. Quando poi furono da soli, quelli che erano intorno a lui insieme ai Dodici lo interrogavano sulle parabole. 
Ed egli diceva loro: &#8220A voi &#233 stato dato il mistero del regno di Dio; per quelli che sono fuori invece tutto avviene in parabole, affinch&#233 guardino, s&#236, ma non vedano, ascoltino, s&#236, ma non comprendano, 
perch&#233 non si convertano e venga loro perdonato&#8221. E disse loro: &#8220Non capite questa parabola, e come potrete comprendere tutte le parabole? Il seminatore semina la Parola. 
Quelli lungo la strada sono coloro nei quali viene seminata la Parola, ma, quando l&#8216ascoltano, subito viene Satana e porta via la Parola seminata in loro. 
Quelli seminati sul terreno sassoso sono coloro che, quando ascoltano la Parola, subito l&#8216accolgono con gioia, ma non hanno radice in se stessi, sono incostanti e quindi, 
al sopraggiungere di qualche tribolazione o persecuzione a causa della Parola, subito vengono meno. Altri sono quelli seminati tra i rovi: questi sono coloro che hanno ascoltato la Parola, 
ma sopraggiungono le preoccupazioni del mondo e la seduzione della ricchezza e tutte le altre passioni, soffocano la Parola e questa rimane senza frutto. Altri ancora sono quelli seminati sul terreno buono: 
sono coloro che ascoltano la Parola, l&#8216accolgono e portano frutto: il trenta, il sessanta, il cento per uno&#8221.",
Evangelista="Marco",Capitolo=4,VersettoInizio=1,VersettoFine=20,Giorno=29,Mese=1;

INSERT INTO Vangelo
SET Testo="In quel tempo, Ges&#249 diceva [alla folla]: &#8220Viene forse la lampada per essere messa sotto il moggio o sotto il letto? O non invece per essere messa sul candelabro? 
Non vi &#233 infatti nulla di segreto che non debba essere manifestato e nulla di nascosto che non debba essere messo in luce. Se uno ha orecchi per ascoltare, ascolti!&#8221.
Diceva loro: &#8220Fate attenzione a quello che ascoltate. Con la misura con la quale misurate sar&#224 misurato a voi; anzi, vi sar&#224 dato di pi&#249. 
Perch&#233 a chi ha, sar&#224 dato; ma a chi non ha, sar&#224 tolto anche quello che ha&#8221.",
Evangelista="Marco",Capitolo=4,VersettoInizio=21,VersettoFine=25,Giorno=30,Mese=1;

INSERT INTO Vangelo
SET Testo="In quel tempo, Ges&#249 diceva [alla folla]: &#8220Cos&#236 &#233 il regno di Dio: come un uomo che getta il seme sul terreno; dorma o vegli, di notte o di giorno, il seme germoglia e cresce. 
Come, egli stesso non lo sa. Il terreno produce spontaneamente prima lo stelo, poi la spiga, poi il chicco pieno nella spiga; e quando il frutto &#233 maturo, subito egli manda la falce, perch&#233 &#233 arrivata la mietitura&#8221.
Diceva: &#8220A che cosa possiamo paragonare il regno di Dio o con quale parabola possiamo descriverlo? &#233 come un granello di senape che, quando viene seminato sul terreno, &#233 il pi&#249 piccolo di tutti i semi che sono sul terreno; 
ma, quando viene seminato, cresce e diventa pi&#249 grande di tutte le piante dell&#8216orto e fa rami cos&#236 grandi che gli uccelli del cielo possono fare il nido alla sua ombra&#8221.
Con molte parabole dello stesso genere annunciava loro la Parola, come potevano intendere. Senza parabole non parlava loro ma, in privato, 
ai suoi discepoli spiegava ogni cosa.",
Evangelista="Marco",Capitolo=4,VersettoInizio=26,VersettoFine=34,Giorno=31,Mese=1;

INSERT INTO Vangelo
SET Testo="In quel medesimo giorno, venuta la sera, Ges&#249 disse ai suoi discepoli: &#8220Passiamo all&#8216altra riva&#8221. E, congedata la folla, lo presero con s&#233, cos&#236 com&#8216era, nella barca. C&#8216erano anche altre barche con lui.
Ci fu una grande tempesta di vento e le onde si rovesciavano nella barca, tanto che ormai era piena. Egli se ne stava a poppa, sul cuscino, e dormiva. Allora lo svegliarono e gli dissero: 
&#8220Maestro, non t&#8216importa che siamo perduti?&#8221. Si dest&#242, minacci&#242 il vento e disse al mare: &#8220Taci, c&#224lmati!&#8221. Il vento cess&#242 e ci fu grande bonaccia. Poi disse loro: &#8220Perch&#233 avete paura? Non avete ancora fede?&#8221.
E furono presi da grande timore e si dicevano l&#8216un l&#8216altro: &#8220Chi &#233 dunque costui, che anche il vento e il mare gli obbediscono?&#8221",
Evangelista="Marco",Capitolo=4,VersettoInizio=35,VersettoFine=41,Giorno=1,Mese=2;

INSERT INTO Vangelo
SET Testo="Quando furono compiuti i giorni della loro purificazione rituale, secondo la legge di Mos&#233, Maria e Giuseppe portarono il bambino a Gerusalemme per presentarlo al Signore- 
come &#233 scritto nella legge del Signore: &#8220Ogni maschio primogenito sar&#224 sacro al Signore&#8221 - e per offrire in sacrificio una coppia di tortore o due giovani colombi, come prescrive la legge del Signore. 
Ora a Gerusalemme c&#8216era un uomo di nome Simeone, uomo giusto e pio, che aspettava la consolazione d&#8216Israele, e lo Spirito Santo era su di lui. Lo Spirito Santo gli aveva preannunciato che non avrebbe visto 
la morte senza prima aver veduto il Cristo del Signore. Mosso dallo Spirito, si rec&#242 al tempio e, mentre i genitori vi portavano il bambino Ges&#249 per fare ci&#242 che la Legge prescriveva a suo riguardo, 
anch&#8216egli lo accolse tra le braccia e benedisse Dio, dicendo: &#8220Ora puoi lasciare, o Signore, che il tuo servo vada in pace, secondo la tua parola, perch&#233 i miei occhi hanno visto la tua salvezza, 
preparata da te davanti a tutti i popoli: luce per rivelarti alle genti e gloria del tuo popolo, Israele&#8221. Il padre e la madre di Ges&#249 si stupivano delle cose che si dicevano di lui. 
Simeone li benedisse e a Maria, sua madre, disse: &#8220Ecco, egli &#233 qui per la caduta e la risurrezione di molti in Israele e come segno di contraddizione - e anche a te una spada trafigger&#224 l&#8216anima -, 
affinch&#233 siano svelati i pensieri di molti cuori&#8221. C&#8216era anche una profetessa, Anna, figlia di Fanu&#233le, della trib&#249 di Aser. Era molto avanzata in et&#224, aveva vissuto con il marito sette anni dopo il suo matrimonio, 
era poi rimasta vedova e ora aveva ottantaquattro anni. Non si allontanava mai dal tempio, servendo Dio notte e giorno con digiuni e preghiere. 
Sopraggiunta in quel momento, si mise anche lei a lodare Dio e parlava del bambino a quanti aspettavano la redenzione di Gerusalemme. Quando ebbero adempiuto ogni cosa secondo la legge del Signore, 
fecero ritorno in Galilea, alla loro citt&#224 di N&#224zaret. Il bambino cresceva e si fortificava, pieno di sapienza, e la grazia di Dio era su di lui. Parola del Signore.",
Evangelista="Luca",Capitolo=2,VersettoInizio=22,VersettoFine=40,Giorno=2,Mese=2;

INSERT INTO Vangelo
SET Testo="In quel tempo, Ges&#249 e i suoi discepoli giunsero all&#8216altra riva del mare, nel paese dei Geras&#232ni. Sceso dalla barca, subito dai sepolcri gli venne incontro un uomo posseduto da uno spirito impuro.
Costui aveva la sua dimora fra le tombe e nessuno riusciva a tenerlo legato, neanche con catene, perch&#233 pi&#249 volte era stato legato con ceppi e catene, ma aveva spezzato le catene e spaccato i ceppi, e nessuno riusciva pi&#249 a domarlo. Continuamente, notte e giorno, fra le tombe e sui monti, gridava e si percuoteva con pietre.
Visto Ges&#249 da lontano, accorse, gli si gett&#242 ai piedi e, urlando a gran voce, disse: &#171Che vuoi da me, Ges&#249, Figlio del Dio altissimo? Ti scongiuro, in nome di Dio, non tormentarmi!&#187. Gli diceva infatti: &#171Esci, spirito impuro, da quest&#8216uomo!&#187. E gli domand&#242: &#171Qual &#232 il tuo nome?&#187. 
&#171Il mio nome &#232 Legione &#8211 gli rispose &#8211 perch&#233 siamo in molti&#187. E lo scongiurava con insistenza perch&#233 non li cacciasse fuori dal paese.
C&#8216era l&#224, sul monte, una numerosa mandria di porci al pascolo. E lo scongiurarono: &#171Mandaci da quei porci, perch&#233 entriamo in essi&#187. Glielo permise. E gli spiriti impuri, dopo essere usciti, entrarono nei porci e la mandria si precipit&#242 gi&#249 dalla rupe nel mare; erano circa duemila e affogarono nel mare.
I loro mandriani allora fuggirono, portarono la notizia nella citt&#224 e nelle campagne e la gente venne a vedere che cosa fosse accaduto. Giunsero da Ges&#249, videro l&#8216indemoniato seduto, vestito e sano di mente, lui che era stato posseduto dalla Legione, ed ebbero paura. Quelli che avevano visto, spiegarono loro che cosa era accaduto all&#8216indemoniato e il fatto dei porci. Ed essi si misero a pregarlo di andarsene dal loro territorio.
Mentre risaliva nella barca, colui che era stato indemoniato lo supplicava di poter restare con lui. Non glielo permise, ma gli disse: &#171Va&#8216 nella tua casa, dai tuoi, annuncia loro ci&#242 che il Signore ti ha fatto e la misericordia che ha avuto per te&#187. Egli se ne and&#242 e si mise a proclamare per la Dec&#224poli quello che Ges&#249 aveva fatto per lui e tutti erano meravigliati.",
Evangelista="Marco",Capitolo=5,VersettoInizio=1,VersettoFine=20,Giorno=3,Mese=2;

INSERT INTO Vangelo
SET Testo="In quel tempo, essendo Ges&#249 passato di nuovo in barca all&#8216altra riva, gli si radun&#242 attorno molta folla ed egli stava lungo il mare. E venne uno dei capi della sinagoga, di nome Gi&#224iro, il quale, come lo vide, gli si gett&#242 ai piedi e lo supplic&#242 con insistenza: &#171La mia figlioletta sta morendo: vieni a imporle le mani, perch&#233 sia salvata e viva&#187. And&#242 con lui. Molta folla lo seguiva e gli si stringeva intorno.
Ora una donna, che aveva perdite di sangue da dodici anni e aveva molto sofferto per opera di molti medici, spendendo tutti i suoi averi senza alcun vantaggio, anzi piuttosto peggiorando, udito parlare di Ges&#249, venne tra la folla e da dietro tocc&#242 il suo mantello. Diceva infatti: &#171Se riuscir&#242 anche solo a toccare le sue vesti, sar&#242 salvata&#187. E subito le si ferm&#242 il flusso di sangue e sent&#204 nel suo corpo che era guarita dal male.
E subito Ges&#249, essendosi reso conto della forza che era uscita da lui, si volt&#242 alla folla dicendo: &#171Chi ha toccato le mie vesti?&#187. I suoi discepoli gli dissero: &#171Tu vedi la folla che si stringe intorno a te e dici: &#8220Chi mi ha toccato?&#8221&#187. Egli guardava attorno, per vedere colei che aveva fatto questo. E la donna, impaurita e tremante, sapendo ci&#242 che le era accaduto, venne, gli si gett&#242 davanti e gli disse tutta la verit&#224. Ed egli le disse: &#171Figlia, la tua fede ti ha salvata. Va&#8216 in pace e sii guarita dal tuo male&#187.
Stava ancora parlando, quando dalla casa del capo della sinagoga vennero a dire: &#171Tua figlia &#232 morta. Perch&#233 disturbi ancora il Maestro?&#187. Ma Ges&#249, udito quanto dicevano, disse al capo della sinagoga: &#171Non temere, soltanto abbi fede!&#187. E non permise a nessuno di seguirlo, fuorch&#233 a Pietro, Giacomo e Giovanni, fratello di Giacomo.
Giunsero alla casa del capo della sinagoga ed egli vide trambusto e gente che piangeva e urlava forte. Entrato, disse loro: &#171Perch&#233 vi agitate e piangete? La bambina non &#232 morta, ma dorme&#187. E lo deridevano. Ma egli, cacciati tutti fuori, prese con s&#233 il padre e la madre della bambina e quelli che erano con lui ed entr&#242 dove era la bambina. Prese la mano della bambina e le disse: &#171Talit&#224 kum&#187, che significa: &#171Fanciulla, io ti dico: &#224lzati!&#187. E subito la fanciulla si alz&#242 e camminava; aveva infatti dodici anni. Essi furono presi da grande stupore. E raccomand&#242 loro con insistenza che nessuno venisse a saperlo e disse di darle da mangiare.",
Evangelista="Marco",Capitolo=5,VersettoInizio=21,VersettoFine=43,Giorno=4,Mese=2;

INSERT INTO Vangelo
SET Testo="In quel tempo, Ges&#249 venne nella sua patria e i suoi discepoli lo seguirono.
Giunto il sabato, si mise a insegnare nella sinagoga. E molti, ascoltando, rimanevano stupiti e dicevano: &#171Da dove gli vengono queste cose? E che sapienza &#232 quella che gli &#232 stata data? E i prodigi come quelli compiuti dalle sue mani? Non &#232 costui il falegname, il figlio di Maria, il fratello di Giacomo, di Ioses, di Giuda e di Simone? E le sue sorelle, non stanno qui da noi?&#187. Ed era per loro motivo di scandalo.
Ma Ges&#249 disse loro: &#171Un profeta non &#232 disprezzato se non nella sua patria, tra i suoi parenti e in casa sua&#187. E l&#204 non poteva compiere nessun prodigio, ma solo impose le mani a pochi malati e li guar&#204. E si meravigliava della loro incredulit&#224.
Ges&#249 percorreva i villaggi d&#8216intorno, insegnando.",
Evangelista="Marco",Capitolo=6,VersettoInizio=1,VersettoFine=6,Giorno=5,Mese=2;

INSERT INTO Vangelo
SET Testo="In quel tempo, Ges&#249 chiam&#242 a s&#233 i Dodici e prese a mandarli a due a due e dava loro potere sugli spiriti impuri. E ordin&#242 loro di non prendere per il viaggio nient&#8216altro che un bastone: n&#233 pane, n&#233 sacca, n&#233 denaro nella cintura; ma di calzare sandali e di non portare due tuniche.
E diceva loro: &#171Dovunque entriate in una casa, rimanetevi finch&#233 non sarete partiti di l&#204. Se in qualche luogo non vi accogliessero e non vi ascoltassero, andatevene e scuotete la polvere sotto i vostri piedi come testimonianza per loro&#187.
Ed essi, partiti, proclamarono che la gente si convertisse, scacciavano molti dem&#242ni, ungevano con olio molti infermi e li guarivano.",
Evangelista="Marco",Capitolo=6,VersettoInizio=7,VersettoFine=13,Giorno=6,Mese=2;

INSERT INTO Vangelo
SET Testo="In quel tempo, il re Erode sent&#204 parlare di Ges&#249, perch&#233 il suo nome era diventato famoso. Si diceva: &#171Giovanni il Battista &#232 risorto dai morti e per questo ha il potere di fare prodigi&#187. Altri invece dicevano: &#171&#232 El&#204a&#187. Altri ancora dicevano: &#171&#232 un profeta, come uno dei profeti&#187. Ma Erode, al sentirne parlare, diceva: &#171Quel Giovanni che io ho fatto decapitare, &#232 risorto!&#187.
Proprio Erode, infatti, aveva mandato ad arrestare Giovanni e lo aveva messo in prigione a causa di Erod&#204ade, moglie di suo fratello Filippo, perch&#233 l&#8216aveva sposata. Giovanni infatti diceva a Erode: &#171Non ti &#232 lecito tenere con te la moglie di tuo fratello&#187. Per questo Erod&#204ade lo odiava e voleva farlo uccidere, ma non poteva, perch&#233 Erode temeva Giovanni, sapendolo uomo giusto e santo, e vigilava su di lui; nell&#8216ascoltarlo restava molto perplesso, tuttavia lo ascoltava volentieri.
Venne per&#242 il giorno propizio, quando Erode, per il suo compleanno, fece un banchetto per i pi&#249 alti funzionari della sua corte, gli ufficiali dell&#8216esercito e i notabili della Galilea. Entrata la figlia della stessa Erod&#204ade, danz&#242 e piacque a Erode e ai commensali. Allora il re disse alla fanciulla: &#171Chiedimi quello che vuoi e io te lo dar&#242&#187. E le giur&#242 pi&#249 volte: &#171Qualsiasi cosa mi chiederai, te la dar&#242, fosse anche la met&#224 del mio regno&#187. Ella usc&#204 e disse alla madre: &#171Che cosa devo chiedere?&#187. Quella rispose: &#171La testa di Giovanni il Battista&#187. E subito, entrata di corsa dal re, fece la richiesta, dicendo: &#171Voglio che tu mi dia adesso, su un vassoio, la testa di Giovanni il Battista&#187. Il re, fattosi molto triste, a motivo del giuramento e dei commensali non volle opporle un rifiuto.
E subito il re mand&#242 una guardia e ordin&#242 che gli fosse portata la testa di Giovanni. La guardia and&#242, lo decapit&#242 in prigione e ne port&#242 la testa su un vassoio, la diede alla fanciulla e la fanciulla la diede a sua madre. I discepoli di Giovanni, saputo il fatto, vennero, ne presero il cadavere e lo posero in un sepolcro.",
Evangelista="Marco",Capitolo=6,VersettoInizio=14,VersettoFine=29,Giorno=7,Mese=2;




INSERT INTO Vangelo
SET Testo="In quel tempo, Gesù disse ai suoi discepoli:
«Avete inteso che fu detto: “Occhio per occhio e dente per dente”. Ma io vi dico di non opporvi al malvagio; anzi, se uno ti dà uno schiaffo sulla guancia destra, tu pórgigli anche l’altra, e a chi vuole portarti in tribunale e toglierti la tunica, tu lascia anche il mantello. E se uno ti costringerà ad accompagnarlo per un miglio, tu con lui fanne due. Da’ a chi ti chiede, e a chi desidera da te un prestito non voltare le spalle.
Avete inteso che fu detto: 'Amerai il tuo prossimo e odierai il tuo nemico'. Ma io vi dico: amate i vostri nemici e pregate per quelli che vi perseguitano, affinché siate figli del Padre vostro che è nei cieli; egli fa sorgere il suo sole sui cattivi e sui buoni, e fa piovere sui giusti e sugli ingiusti. Infatti, se amate quelli che vi amano, quale ricompensa ne avete? Non fanno così anche i pubblicani? E se date il saluto soltanto ai vostri fratelli, che cosa fate di straordinario? Non fanno così anche i pagani? Voi, dunque, siate perfetti come è perfetto il Padre vostro celeste».",
Evangelista="Matteo",Capitolo=5,VersettoInizio=38,VersettoFine=48,Giorno=23,Mese=2;

INSERT INTO Vangelo
SET Testo="In quel tempo, [Gesù, Pietro, Giacomo e Giovanni, scesero dal monte] e arrivando presso i discepoli, videro attorno a loro molta folla e alcuni scribi che discutevano con loro.
E subito tutta la folla, al vederlo, fu presa da meraviglia e corse a salutarlo.
Ed egli li interrogò: «Di che cosa discutete con loro?».
E dalla folla uno gli rispose: «Maestro, ho portato da te mio figlio, che ha uno spirito muto. Dovunque lo afferri, lo getta a terra ed egli schiuma, digrigna i denti e si irrigidisce. Ho detto ai tuoi discepoli di scacciarlo, ma non ci sono riusciti».
Egli allora disse loro: «O generazione incredula! Fino a quando sarò con voi? Fino a quando dovrò sopportarvi? Portatelo da me». E glielo portarono.
Alla vista di Gesù, subito lo spirito scosse con convulsioni il ragazzo ed egli, caduto a terra, si rotolava schiumando.
Gesù interrogò il padre: «Da quanto tempo gli accade questo?». Ed egli rispose: «Dall’infanzia; anzi, spesso lo ha buttato anche nel fuoco e nell’acqua per ucciderlo. Ma se tu puoi qualcosa, abbi pietà di noi e aiutaci».
Gesù gli disse: «Se tu puoi! Tutto è possibile per chi crede».
Il padre del fanciullo rispose subito ad alta voce: «Credo; aiuta la mia incredulità!».
Allora Gesù, vedendo accorrere la folla, minacciò lo spirito impuro dicendogli: «Spirito muto e sordo, io ti ordino, esci da lui e non vi rientrare più». Gridando, e scuotendolo fortemente, uscì. E il fanciullo diventò come morto, sicché molti dicevano: «È morto».
Ma Gesù lo prese per mano, lo fece alzare ed egli stette in piedi.
Entrato in casa, i suoi discepoli gli domandavano in privato: «Perché noi non siamo riusciti a scacciarlo?».
Ed egli disse loro: «Questa specie di demòni non si può scacciare in alcun modo, se non con la preghiera».",
Evangelista="Marco",Capitolo=9,VersettoInizio=14,VersettoFine=29,Giorno=24,Mese=2;

INSERT INTO Vangelo
SET Testo="In quel tempo, Gesù e i suoi discepoli attraversavano la Galilea, ma egli non voleva che alcuno lo sapesse. Insegnava infatti ai suoi discepoli e diceva loro: «Il Figlio dell’uomo viene consegnato nelle mani degli uomini e lo uccideranno; ma, una volta ucciso, dopo tre giorni risorgerà». Essi però non capivano queste parole e avevano timore di interrogarlo.
Giunsero a Cafàrnao. Quando fu in casa, chiese loro: «Di che cosa stavate discutendo per la strada?». Ed essi tacevano. Per la strada infatti avevano discusso tra loro chi fosse più grande. Sedutosi, chiamò i Dodici e disse loro: «Se uno vuole essere il primo, sia l’ultimo di tutti e il servitore di tutti».
E, preso un bambino, lo pose in mezzo a loro e, abbracciandolo, disse loro: «Chi accoglie uno solo di questi bambini nel mio nome, accoglie me; e chi accoglie me, non accoglie me, ma colui che mi ha mandato».",
Evangelista="Marco",Capitolo=9,VersettoInizio=30,VersettoFine=37,Giorno=25,Mese=2;

INSERT INTO Vangelo
SET Testo="In quel tempo, Gesù disse ai suoi discepoli:
«State attenti a non praticare la vostra giustizia davanti agli uomini per essere ammirati da loro, altrimenti non c'è ricompensa per voi presso il Padre vostro che è nei cieli.
Dunque, quando fai l'elemosina, non suonare la tromba davanti a te, come fanno gli ipòcriti nelle sinagoghe e nelle strade, per essere lodati dalla gente. In verità io vi dico: hanno già ricevuto la loro ricompensa. Invece, mentre tu fai l'elemosina, non sappia la tua sinistra ciò che fa la tua destra, perché la tua elemosina resti nel segreto; e il Padre tuo, che vede nel segreto, ti ricompenserà.
E quando pregate, non siate simili agli ipòcriti che, nelle sinagoghe e negli angoli delle piazze, amano pregare stando ritti, per essere visti dalla gente. In verità io vi dico: hanno già ricevuto la loro ricompensa. Invece, quando tu preghi, entra nella tua camera, chiudi la porta e prega il Padre tuo, che è nel segreto; e il Padre tuo, che vede nel segreto, ti ricompenserà.
E quando digiunate, non diventate malinconici come gli ipòcriti, che assumono un'aria disfatta per far vedere agli altri che digiunano. In verità io vi dico: hanno già ricevuto la loro ricompensa. Invece, quando tu digiuni, profùmati la testa e làvati il volto, perché la gente non veda che tu digiuni, ma solo il Padre tuo, che è nel segreto; e il Padre tuo, che vede nel segreto, ti ricompenserà».",
Evangelista="Matteo",Capitolo=6,VersettoInizio=1,VersettoFine=18,Giorno=26,Mese=2;

INSERT INTO Vangelo
SET Testo="In quel tempo, Gesù disse ai suoi discepoli: «Il Figlio dell'uomo deve soffrire molto, essere rifiutato dagli anziani, dai capi dei sacerdoti e dagli scribi, venire ucciso e risorgere il terzo giorno».
Poi, a tutti, diceva: «Se qualcuno vuole venire dietro a me, rinneghi se stesso, prenda la sua croce ogni giorno e mi segua. Chi vuole salvare la propria vita, la perderà, ma chi perderà la propria vita per causa mia, la salverà. Infatti, quale vantaggio ha un uomo che guadagna il mondo intero, ma perde o rovina se stesso?».",
Evangelista="Luca",Capitolo=9,VersettoInizio=22,VersettoFine=25,Giorno=27,Mese=2;

INSERT INTO Vangelo
SET Testo="In quel tempo, si avvicinarono a Gesù i discepoli di Giovanni e gli dissero: «Perché noi e i farisei digiuniamo molte volte, mentre i tuoi discepoli non digiunano?».
E Gesù disse loro: «Possono forse gli invitati a nozze essere in lutto finché lo sposo è con loro? Ma verranno giorni quando lo sposo sarà loro tolto, e allora digiuneranno».",
Evangelista="Matteo",Capitolo=9,VersettoInizio=14,VersettoFine=15,Giorno=28,Mese=2;






INSERT INTO Lettura
SET Libro="Secondo",Profeta="Samuele",Testo="In quei giorni, vennero tutte le trib&#249 d&#8216Israele da Davide a Ebron, e gli dissero: &#8220Ecco noi siamo tue ossa e tua carne. Gi&#224 prima, quando regnava Saul su di noi, tu conducevi 
e riconducevi Israele. Il Signore ti ha detto: &#8220Tu pascerai il mio popolo Israele, tu sarai capo d&#8216Israele&#8220&#8221. Vennero dunque tutti gli anziani d&#8216Israele dal re a Ebron, il re Davide concluse con loro un&#8216alleanza 
a Ebron davanti al Signore ed essi unsero Davide re d&#8216Israele. Davide aveva trent&#8216anni quando fu fatto re e regn&#242 quarant&#8216anni. A Ebron regn&#242 su Giuda sette anni e sei mesi e a Gerusalemme regn&#242 trentatr&#233 anni 
su tutto Israele e su Giuda. Il re e i suoi uomini andarono a Gerusalemme contro i Gebusei che abitavano in quella regione. Costoro dissero a Davide: &#8220Tu qui non entrerai: i ciechi e gli zoppi ti respingeranno&#8221, 
per dire: &#8220Davide non potr&#224 entrare qui&#8221. Ma Davide espugn&#242 la rocca di Sion, cio&#233 la Citt&#224 di Davide. Davide andava sempre pi&#249 crescendo in potenza e il Signore, Dio degli eserciti, era con lui.",
Capitolo=5,VersettoInizio=1,VersettoFine=10,Giorno=27,Mese=1;

INSERT INTO Lettura
SET Libro="Secondo",Profeta="Samuele",Testo="In quei giorni, Davide and&#242 e fece salire l&#8216arca di Dio dalla casa di Obed-Edom alla Citt&#224 di Davide, con gioia. Quando quelli che portavano l&#8216arca del Signore ebbero fatto sei passi,
egli immol&#242 un giovenco e un ariete grasso. Davide danzava con tutte le forze davanti al Signore. Davide era cinto di un efod di lino. Cos&#236 Davide e tutta la casa d&#8216Israele facevano salire l&#8216arca del Signore con grida e 
al suono del corno. Introdussero dunque l&#8216arca del Signore e la collocarono al suo posto, al centro della tenda che Davide aveva piantato per essa; Davide offr&#236 olocausti e sacrifici di comunione davanti al Signore.
Quando ebbe finito di offrire gli olocausti e i sacrifici di comunione, Davide benedisse il popolo nel nome del Signore degli eserciti e distribu&#236 a tutto il popolo, a tutta la moltitudine d&#8216Israele, uomini e donne, 
una focaccia di pane per ognuno, una porzione di carne arrostita e una schiacciata di uva passa. Poi tutto il popolo se ne and&#242, ciascuno a casa sua.",
Capitolo=6,VersettoInizio=12,VersettoFine=19,Giorno=28,Mese=1;

INSERT INTO Lettura
SET Libro="Secondo",Profeta="Samuele",Testo="In quei giorni, fu rivolta a Natan questa parola del Signore: &#8220Va&#8216 e di&#8216 al mio servo Davide: Cos&#236 dice il Signore: &#8220Forse tu mi costruirai una casa, perch&#233 io vi abiti? 
Io infatti non ho abitato in una casa da quando ho fatto salire Israele dall&#8216Egitto fino ad oggi; sono andato vagando sotto una tenda, in un padiglione. Durante tutto il tempo in cui ho 
camminato insieme con tutti gli Israeliti, ho forse mai detto ad alcuno dei giudici d&#8216Israele, a cui avevo comandato di pascere il mio popolo Israele: Perch&#233 non mi avete edificato una casa di cedro?&#8220.
Ora dunque dirai al mio servo Davide: Cos&#236 dice il Signore degli eserciti: &#8220Io ti ho preso dal pascolo, mentre seguivi il gregge, perch&#233 tu fossi capo del mio popolo Israele. Sono stato con te dovunque sei andato, 
ho distrutto tutti i tuoi nemici davanti a te e render&#242 il tuo nome grande come quello dei grandi che sono sulla terra. Fisser&#242 un luogo per Israele, mio popolo, e ve lo pianter&#242 perch&#233 vi abiti e non tremi pi&#249 
e i malfattori non lo opprimano come in passato e come dal giorno in cui avevo stabilito dei giudici sul mio popolo Israele. Ti dar&#242 riposo da tutti i tuoi nemici. Il Signore ti annuncia che far&#224 a te una casa.
Quando i tuoi giorni saranno compiuti e tu dormirai con i tuoi padri, io susciter&#242 un tuo discendente dopo di te, uscito dalle tue viscere, e render&#242 stabile il suo regno. 
Egli edificher&#224 una casa al mio nome e io render&#242 stabile il trono del suo regno per sempre. Io sar&#242 per lui padre ed egli sar&#224 per me figlio. Se far&#224 il male, lo colpir&#242 con verga d&#8216uomo e con percosse di figli d&#8216uomo, 
ma non ritirer&#242 da lui il mio amore, come l&#8216ho ritirato da Saul, che ho rimosso di fronte a te. La tua casa e il tuo regno saranno saldi per sempre davanti a te, il tuo trono sar&#224 reso stabile per sempre&#8220&#8221.
Natan parl&#242 a Davide secondo tutte queste parole e secondo tutta questa visione.",
Capitolo=7,VersettoInizio=4,VersettoFine=17,Giorno=29,Mese=1;

INSERT INTO Lettura
SET Libro="Secondo",Profeta="Samuele",Testo="Dopo che Natan gli ebbe parlato, il re Davide and&#242 a presentarsi davanti al Signore e disse: &#8220Chi sono io, Signore Dio, e che cos&#8216&#233 la mia casa, perch&#233 tu mi abbia condotto fin qui? 
E questo &#233 parso ancora poca cosa ai tuoi occhi, Signore Dio: tu hai parlato anche della casa del tuo servo per un lontano avvenire: e questa &#233 legge per l&#8216uomo, Signore Dio! Hai stabilito il tuo popolo Israele come 
popolo tuo per sempre, e tu, Signore, sei diventato Dio per loro. Ora, Signore Dio, la parola che hai pronunciato sul tuo servo e sulla sua casa confermala per sempre e fa&#8216 come hai detto. Il tuo nome sia magnificato 
per sempre cos&#236: &#8220Il Signore degli eserciti &#233 il Dio d&#8216Israele!&#8220. La casa del tuo servo Davide sia dunque stabile davanti a te! Poich&#233 tu, Signore degli eserciti, Dio d&#8216Israele, hai rivelato questo al tuo servo e 
gli hai detto: &#8220Io ti edificher&#242 una casa!&#8220. Perci&#242 il tuo servo ha trovato l&#8216ardire di rivolgerti questa preghiera. Ora, Signore Dio, tu sei Dio, le tue parole sono verit&#224. Hai fatto al tuo servo queste belle promesse. 
D&#233gnati dunque di benedire ora la casa del tuo servo, perch&#233 sia sempre dinanzi a te! Poich&#233 tu, Signore Dio, hai parlato e per la tua benedizione la casa del tuo servo &#233 benedetta per sempre!&#8221.",
Capitolo=7,VersettoInizio=18,VersettoFine=29,Giorno=30,Mese=1;

INSERT INTO Lettura
SET Libro="Secondo",Profeta="Samuele",Testo="All&#8216inizio dell&#8216anno successivo, al tempo in cui i re sono soliti andare in guerra, Davide mand&#242 Ioab con i suoi servitori e con tutto Israele a compiere devastazioni 
contro gli Ammoniti; posero l&#8216assedio a Rabb&#224, mentre Davide rimaneva a Gerusalemme. Un tardo pomeriggio Davide, alzatosi dal letto, si mise a passeggiare sulla terrazza della reggia. 
Dalla terrazza vide una donna che faceva il bagno: la donna era molto bella d&#8216aspetto. Davide mand&#242 a informarsi sulla donna. Gli fu detto: &#8220&#233 Betsabea, figlia di Eli&#224m, moglie di Ur&#236a l&#8216Ittita&#8221. 
Allora Davide mand&#242 messaggeri a prenderla. La donna concep&#236 e mand&#242 ad annunciare a Davide: &#8220Sono incinta&#8221. Allora Davide mand&#242 a dire a Ioab: &#8220Mandami Ur&#236a l&#8216Ittita&#8221. Ioab mand&#242 Ur&#236a da Davide. 
Arrivato Ur&#236a, Davide gli chiese come stessero Ioab e la truppa e come andasse la guerra. Poi Davide disse a Ur&#236a: &#8220Scendi a casa tua e l&#224vati i piedi&#8221. Ur&#236a usc&#236 dalla reggia e gli fu mandata dietro 
una porzione delle vivande del re. Ma Ur&#236a dorm&#236 alla porta della reggia con tutti i servi del suo signore e non scese a casa sua. La cosa fu riferita a Davide: &#8220Ur&#236a non &#233 sceso a casa sua&#8221.
Davide lo invit&#242 a mangiare e a bere con s&#233 e lo fece ubriacare; la sera Ur&#236a usc&#236 per andarsene a dormire sul suo giaciglio con i servi del suo signore e non scese a casa sua.
La mattina dopo Davide scrisse una lettera a Ioab e gliela mand&#242 per mano di Ur&#236a. Nella lettera aveva scritto cos&#236: &#8220Ponete Ur&#236a sul fronte della battaglia pi&#249 dura; poi ritiratevi da lui 
perch&#233 resti colpito e muoia&#8221. Allora Ioab, che assediava la citt&#224, pose Ur&#236a nel luogo dove sapeva che c&#8216erano uomini valorosi. Gli uomini della citt&#224 fecero una sortita e attaccarono Ioab; 
caddero parecchi della truppa e dei servi di Davide e per&#236 anche Ur&#236a l&#8216Ittita.",
Capitolo=11,VersettoInizio=1,VersettoFine=17,Giorno=31,Mese=1;

INSERT INTO Lettura
SET Libro="Secondo",Profeta="Samuele",Testo="In quei giorni, il Signore mand&#242 il profeta Natan a Davide, e Natan and&#242 da lui e gli disse: &#8220Due uomini erano nella stessa citt&#224, uno ricco e l&#8216altro povero. 
Il ricco aveva bestiame minuto e grosso in gran numero, mentre il povero non aveva nulla, se non una sola pecorella piccina, che egli aveva comprato. Essa era vissuta e cresciuta insieme con lui e con i figli,
mangiando del suo pane, bevendo alla sua coppa e dormendo sul suo seno. Era per lui come una figlia. Un viandante arriv&#242 dall&#8216uomo ricco e questi, evitando di prendere dal suo bestiame minuto e grosso quanto era 
da servire al viaggiatore che era venuto da lui, prese la pecorella di quell&#8216uomo povero e la serv&#236 all&#8216uomo che era venuto da lui&#8221. Davide si adir&#242 contro quell&#8216uomo e disse a Natan: &#8220Per la vita del Signore, 
chi ha fatto questo &#233 degno di morte. Pagher&#224 quattro volte il valore della pecora, per aver fatto una tal cosa e non averla evitata&#8221. Allora Natan disse a Davide: &#8220Tu sei quell&#8216uomo! Cos&#236 dice il Signore, Dio d&#8216Israele: 
&#8220La spada non si allontaner&#224 mai dalla tua casa, poich&#233 tu mi hai disprezzato e hai preso in moglie la moglie di Ur&#236a l&#8216Ittita&#8220. Cos&#236 dice il Signore: &#8220Ecco, io sto per suscitare contro di te il male dalla tua stessa casa; 
prender&#242 le tue mogli sotto i tuoi occhi per darle a un altro, che giacer&#224 con loro alla luce di questo sole. Poich&#233 tu l&#8216hai fatto in segreto, ma io far&#242 questo davanti a tutto Israele e alla luce del sole&#8220&#8221.
Allora Davide disse a Natan: &#8220Ho peccato contro il Signore!&#8221. Natan rispose a Davide: &#8220Il Signore ha rimosso il tuo peccato: tu non morirai. Tuttavia, poich&#233 con quest&#8216azione tu hai insultato il Signore, 
il figlio che ti &#233 nato dovr&#224 morire&#8221. Natan torn&#242 a casa.Il Signore dunque colp&#236 il bambino che la moglie di Ur&#236a aveva partorito a Davide e il bambino si ammal&#242 gravemente. Davide allora fece suppliche a 
Dio per il bambino, si mise a digiunare e, quando rientrava per passare la notte, dormiva per terra. Gli anziani della sua casa insistevano presso di lui perch&#233 si alzasse da terra, ma egli non volle e non prese 
cibo con loro.",
Capitolo=12,VersettoInizio=1,VersettoFine=17,Giorno=1,Mese=2;

INSERT INTO Lettura
SET Libro="unico",Profeta="Malachia",Testo="Cos&#236 dice il Signore Dio: &#8220Ecco, io mander&#242 un mio messaggero a preparare la via davanti a me e subito entrer&#224 nel suo tempio il Signore che voi cercate; 
e l&#8216angelo dell&#8216alleanza, che voi sospirate, eccolo venire, dice il Signore degli eserciti. Chi sopporter&#224 il giorno della sua venuta? Chi resister&#224 al suo apparire? Egli &#233 come il fuoco del fonditore e 
come la lisciva dei lavandai. Sieder&#224 per fondere e purificare l&#8216argento; purificher&#224 i figli di Levi, li affiner&#224 come oro e argento, perch&#233 possano offrire al Signore un&#8216offerta secondo giustizia. 
Allora l&#8216offerta di Giuda e di Gerusalemme sar&#224 gradita al Signore come nei giorni antichi, come negli anni lontani&#8221.",
Capitolo=3,VersettoInizio=1,VersettoFine=4,Giorno=2,Mese=2;

INSERT INTO Lettura
SET Libro="Secondo",Profeta="Samuele",Testo="In quei giorni, arriv&#242 un informatore da Davide e disse: &#171Il cuore degli Israeliti &#232 
con Assalonne&#187. Allora Davide disse a tutti i suoi servi che erano con lui a Gerusalemme: &#171Alzatevi, fuggiamo; altrimenti nessuno 
di noi scamper&#224 dalle mani di Assalonne. Partite in fretta, perch&#233 non si affretti lui a raggiungerci e faccia cadere su di noi la rovina 
e passi la citt&#224 a fil di spada&#187. Davide saliva l&#8216erta degli Ulivi, saliva piangendo e camminava con il capo coperto e a piedi scalzi; 
tutta la gente che era con lui aveva il capo coperto e, salendo, piangeva. Quando poi il re Davide fu giunto a Bacur&#204m, ecco uscire di l&#224 
un uomo della famiglia della casa di Saul, chiamato Simei, figlio di Ghera. Egli usciva imprecando e gettava sassi contro Davide e contro tutti 
i servi del re Davide, mentre tutto il popolo e tutti i prodi stavano alla sua destra e alla sua sinistra. Cos&#204 diceva Simei, maledicendo Davide: 
&#171Vattene, vattene, sanguinario, malvagio! Il Signore ha fatto ricadere sul tuo capo tutto il sangue della casa di Saul, al posto del quale regni; 
il Signore ha messo il regno nelle mani di Assalonne, tuo figlio, ed eccoti nella tua rovina, perch&#233 sei un sanguinario&#187.
Allora Abis&#224i, figlio di Serui&#224, disse al re: &#171Perch&#233 questo cane morto dovr&#224 maledire il re, mio signore? Lascia che io vada e 
gli tagli la testa!&#187. Ma il re rispose: &#171Che ho io in comune con voi, figli di Serui&#224? Se maledice, &#232 perch&#233 il Signore gli ha 
detto: &#8220Maledici Davide!&#8221. E chi potr&#224 dire: &#8220Perch&#233 fai cos&#204?&#8221&#187. Poi Davide disse ad Abis&#224i e a tutti i suoi servi: &#171Ecco, 
il figlio uscito dalle mie viscere cerca di togliermi la vita: e allora, questo Beniaminita, lasciatelo maledire, 
poich&#233 glielo ha ordinato il Signore. Forse il Signore guarder&#224 la mia afflizione e mi render&#224 il bene in cambio della maledizione 
di oggi&#187. Davide e la sua gente continuarono il cammino.",
Capitolo=15,VersettoInizio=13,VersettoFine=30,Giorno=3,Mese=2;

INSERT INTO Lettura
SET Libro="Secondo",Profeta="Samuele",Testo="In quei giorni, Assalonne s&#8216imbatt&#233 nei servi di Davide. Assalonne cavalcava il mulo; 
il mulo entr&#242 sotto il groviglio di una grande quercia e la testa di Assalonne rimase impigliata nella quercia e cos&#204 egli rest&#242 
sospeso fra cielo e terra, mentre il mulo che era sotto di lui pass&#242 oltre. Un uomo lo vide e venne a riferire a Ioab: &#171Ho visto Assalonne 
appeso a una quercia&#187. Allora Ioab prese in mano tre dardi e li ficc&#242 nel cuore di Assalonne, che era ancora vivo nel folto della quercia. 
Poi Ioab disse all&#8216Et&#204ope: &#171Va&#8216 e riferisci al re quello che hai visto&#187. Davide stava seduto fra le due porte; 
la sentinella sal&#204 sul tetto della porta sopra le mura, alz&#242 gli occhi, guard&#242, ed ecco vide un uomo correre tutto solo. 
La sentinella grid&#242 e l&#8216annunci&#242 al re. Il re disse: &#171Se &#232 solo, ha in bocca una bella notizia&#187.
Il re gli disse: &#171Mettiti l&#224, da parte&#187. Quegli si mise da parte e aspett&#242. Ed ecco arrivare l&#8216Et&#204ope che disse: 
&#171Si rallegri per la notizia il re, mio signore! Il Signore ti ha liberato oggi da quanti erano insorti contro di te&#187. 
Il re disse all&#8216Et&#204ope: &#171Il giovane Assalonne sta bene?&#187. L&#8216Et&#204ope rispose: &#171Diventino come quel 
giovane i nemici del re, mio signore, e quanti insorgono contro di te per farti del male!&#187. Allora il re fu scosso da un tremito, 
sal&#204 al piano di sopra della porta e pianse; diceva andandosene: &#171Figlio mio Assalonne! Figlio mio, figlio mio Assalonne! 
Fossi morto io invece di te, Assalonne, figlio mio, figlio mio!&#187. Fu riferito a Ioab: &#171Ecco il re piange e fa lutto per Assalonne&#187. 
La vittoria in quel giorno si cambi&#242 in lutto per tutto il popolo, perch&#233 il popolo sent&#204 dire in quel giorno: &#171Il re 
&#232 desolato a causa del figlio&#187.",
Capitolo=19,VersettoInizio=9,VersettoFine=30,Giorno=4,Mese=2;

INSERT INTO Lettura
SET Libro="Secondo",Profeta="Samuele",Testo="In quei giorni, il re Davide disse a Ioab, capo dell&#8216esercito a lui affidato: 
&#171Percorri tutte le trib&#249 d&#8216Israele, da Dan fino a Bersabea, e fate il censimento del popolo, perch&#233 io conosca il numero 
della popolazione&#187. Ioab consegn&#242 al re il totale del censimento del popolo: c&#8216erano in Israele ottocentomila uomini abili in 
grado di maneggiare la spada; in Giuda cinquecentomila. Ma dopo che ebbe contato il popolo, il cuore di Davide gli fece sentire il rimorso ed 
egli disse al Signore: &#171Ho peccato molto per quanto ho fatto; ti prego, Signore, togli la colpa del tuo servo, poich&#233 io ho commesso 
una grande stoltezza&#187. Al mattino, quando Davide si alz&#242, fu rivolta questa parola del Signore al profeta Gad, veggente di Davide: 
&#171Va&#8216 a riferire a Davide: Cos&#204 dice il Signore: &#8220Io ti propongo tre cose: scegline una e quella ti far&#242&#8221&#187. 
Gad venne dunque a Davide, gli rifer&#204 questo e disse: &#171Vuoi che vengano sette anni di carestia nella tua terra o tre mesi di fuga 
davanti al nemico che ti insegue o tre giorni di peste nella tua terra? Ora rifletti e vedi che cosa io debba riferire a chi mi ha mandato&#187. 
Davide rispose a Gad: &#171Sono in grande angustia! Ebbene, cadiamo nelle mani del Signore, perch&#233 la sua misericordia &#232 grande, ma che 
io non cada nelle mani degli uomini!&#187. Cos&#204 il Signore mand&#242 la peste in Israele, da quella mattina fino al tempo fissato; da Dan a 
Bersabea morirono tra il popolo settantamila persone. E quando l&#8216angelo ebbe stesa la mano su Gerusalemme per devastarla, il Signore 
si pent&#204 di quel male e disse all&#8216angelo devastatore del popolo: &#171Ora basta! Ritira la mano!&#187.
L&#8216angelo del Signore si trovava presso l&#8216aia di Araun&#224, il Gebuseo. Davide, vedendo l&#8216angelo che colpiva il popolo, 
disse al Signore: &#171Io ho peccato, io ho agito male; ma queste pecore che hanno fatto? La tua mano venga contro di me e contro la casa 
di mio padre!&#187.",
Capitolo=24,VersettoInizio=2,VersettoFine=17,Giorno=5,Mese=2;

INSERT INTO Lettura
SET Libro="Primo",Profeta="Re",Testo="I giorni di Davide si erano avvicinati alla morte, ed egli ordin&#242 a Salomone, 
suo figlio: &#171Io me ne vado per la strada di ogni uomo sulla terra. Tu sii forte e m&#243strati uomo. Osserva la legge del Signore, 
tuo Dio, procedendo nelle sue vie ed eseguendo le sue leggi, i suoi comandi, le sue norme e le sue istruzioni, come sta scritto nella legge 
di Mos&#232, perch&#233 tu riesca in tutto quello che farai e dovunque ti volgerai, perch&#233 il Signore compia la promessa che mi ha fatto 
dicendo: &#8220Se i tuoi figli nella loro condotta si cureranno di camminare davanti a me con fedelt&#224, con tutto il loro cuore e con tutta la loro 
anima, non ti sar&#224 tolto un discendente dal trono d&#8216Israele&#8221&#187. Davide si addorment&#242 con i suoi padri e fu sepolto 
nella Citt&#224 di Davide. La durata del regno di Davide su Israele fu di quarant&#8216anni: a Ebron regn&#242 sette anni e a Gerusalemme 
regn&#242 trentatr&#233 anni. Salomone sedette sul trono di Davide, suo padre, e il suo regno si consolid&#242 molto.",
Capitolo=2,VersettoInizio=1,VersettoFine=12,Giorno=6,Mese=2;

INSERT INTO Lettura
SET Libro="unico",Profeta="Sir&#224cide",Testo="Come dal sacrificio di comunione si preleva il grasso,
cos&#204 Davide fu scelto tra i figli d&#8216Israele.
Egli scherz&#242 con leoni come con capretti,
con gli orsi come con agnelli.
Nella sua giovinezza non ha forse ucciso il gigante
e cancellato l&#8216ignominia dal popolo,
alzando la mano con la pietra nella fionda
e abbattendo la tracotanza di Gol&#204a?
Egli aveva invocato il Signore, l&#8216Altissimo,
che concesse alla sua destra la forza
di eliminare un potente guerriero
e innalzare la potenza del suo popolo.
Cos&#204 lo esaltarono per i suoi diecimila,
lo lodarono nelle benedizioni del Signore
offrendogli un diadema di gloria.
Egli infatti stermin&#242 i nemici all&#8216intorno
e annient&#242 i Filistei, suoi avversari;
distrusse la loro potenza fino ad oggi.
In ogni sua opera celebr&#242 il Santo,
l&#8216Altissimo, con parole di lode;
cant&#242 inni a lui con tutto il suo cuore
e am&#242 colui che lo aveva creato.
Introdusse musici davanti all&#8216altare
e con i loro suoni rese dolci le melodie.
Confer&#204 splendore alle feste,
abbell&#204 i giorni festivi fino alla perfezione,
facendo lodare il nome santo del Signore
ed echeggiare fin dal mattino il santuario.
Il Signore perdon&#242 i suoi peccati,
innalz&#242 la sua potenza per sempre,
gli concesse un&#8216alleanza regale
e un trono di gloria in Israele.",
Capitolo=47,VersettoInizio=2,VersettoFine=13,Giorno=7,Mese=2;





INSERT INTO Lettura
SET Libro="unico",Profeta="Levitico",Testo="",
Capitolo=19,VersettoInizio=1.2,VersettoFine="13",Giorno=23,Mese=2;

INSERT INTO Lettura
SET Libro="unico",Profeta="Sir&#224cide",Testo="",
Capitolo=47,VersettoInizio=2,VersettoFine=13,Giorno=24,Mese=2;

INSERT INTO Lettura
SET Libro="unico",Profeta="Sir&#224cide",Testo="",
Capitolo=47,VersettoInizio=2,VersettoFine=13,Giorno=25,Mese=2;

INSERT INTO Lettura
SET Libro="unico",Profeta="Sir&#224cide",Testo="",
Capitolo=47,VersettoInizio=2,VersettoFine=13,Giorno=26,Mese=2;

INSERT INTO Lettura
SET Libro="unico",Profeta="Sir&#224cide",Testo="",
Capitolo=47,VersettoInizio=2,VersettoFine=13,Giorno=27,Mese=2;

INSERT INTO Lettura
SET Libro="unico",Profeta="Sir&#224cide",Testo="",
Capitolo=47,VersettoInizio=2,VersettoFine=13,Giorno=28,Mese=2;