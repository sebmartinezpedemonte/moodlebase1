<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'tool_reportbuilder', language 'it', version '4.1'.
 *
 * @package     tool_reportbuilder
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accesstab'] = 'Accesso';
$string['actions'] = 'Azioni';
$string['addacondition'] = 'Aggiungi condizione..';
$string['addafilter'] = 'Aggiungi filtro';
$string['addaudience'] = 'Aggiungi audience';
$string['addaudiences'] = 'Aggiungi audeince al report';
$string['addcolumn'] = 'Aggiungi colonna';
$string['adddefault'] = 'Aggiungi configurazione di defaulr';
$string['adddefault_help'] = 'Ciascuna fonte di report definisce anche le colonne e i filtri di default. Se si desidera creare report utilizzando i default, selezionare questo campo';
$string['addemails'] = 'Aggiungi email a mano';
$string['addfieldbyname'] = 'Aggiungi campo \'{$a}\' al report';
$string['addreport'] = 'Nuovo report';
$string['addschedule'] = 'Nuova pianificazione';
$string['addusers'] = 'Aggiungi utente a mano';
$string['addusers_help'] = 'Tutti gli utenti aggiunti manualmente riceveranno il report indipendentemente dalla loro posizione o organizzazione';
$string['aggregation_avg'] = 'Media';
$string['aggregation_count'] = 'Conteggio';
$string['aggregation_countdistinct'] = 'Conteggio unici';
$string['aggregation_groupconcat'] = 'Valori separati da virgola';
$string['aggregation_groupconcatdistinct'] = 'Valori distinti separati da virgola';
$string['aggregation_max'] = 'Massimo';
$string['aggregation_min'] = 'Minimo';
$string['aggregation_percent'] = 'Percentuale';
$string['aggregation_sum'] = 'Somma';
$string['aggregation_unique'] = 'Valori unici';
$string['allusers'] = 'Tutti gli utenti';
$string['allusersdesc'] = 'Aggiungi tutti gli utenti nel report';
$string['and'] = 'And';
$string['asc'] = 'La colonna \'{$a}\' ha ordinamento ascendente';
$string['audience'] = 'Audience';
$string['audiencejobadd'] = 'Aggiungi mansione';
$string['audiencejobremove'] = 'Rimuovi mansione';
$string['audiencejobs'] = 'Mansioni';
$string['audiencejobs_help'] = 'Gli utenti possono visualizzare il report se hanno una delle mansioni selezionate sotto';
$string['audiencejobsempty'] = 'Nessuna mansione aggiunta';
$string['audiencemultiselectpostix'] = 'più {$a} altri';
$string['audiencenotsaved'] = 'Audience non salvata';
$string['audiences'] = 'Audience';
$string['authmethod'] = 'Metodo di autenticazione';
$string['availableinalltenants'] = 'Disponibile in tutti i tenant';
$string['availableinalltenants_help'] = 'Gli utenti (che posseggono gli adeguati privilegi) di tutti i tenant potranno visualizzare questo report. Molte fonti di report limitano automaticamente gli utenti visualizzati ed altri elementi (programmi, certificazioni, corsi) a quelli visibili nel tenant.';
$string['backtoreport'] = 'Torna al report';
$string['basicinformation'] = 'Informazioni di base';
$string['cachedef_userreports'] = 'Report personalizzati visibili all\'utente';
$string['canviewallreports'] = 'Può visualizzare tutti i report';
$string['cardview'] = 'Vista a schede';
$string['cardview_help'] = 'Il report passerà automaticamente alla visualizzazione a schede quando verrà visualizzato su schermi piccoli o in blocchi stretti.';
$string['certificatesissues'] = 'Rilascio di certificti';
$string['certificatetemplates'] = 'Modelli di certificti';
$string['checkboxanyvalue'] = 'Qualsiasi valore';
$string['checkboxischecked'] = 'Si';
$string['checkboxisnotchecked'] = 'No';
$string['choose'] = 'Seleziona...';
$string['columncannotbeconverted'] = 'La colonna  \'{$a}\' non può essere convertita';
$string['conditioncannotbeconverted'] = 'La regola \'{$a}\' non può essere convertita';
$string['conditionoptioncannotbeconverted'] = 'L\'opzione \'{$a->option}\' presente nella condizione \'{$a->condition}\' non può essere convertita';
$string['conditionshelp'] = 'Condizoni';
$string['conditionshelp_help'] = 'Elenco delle condizioni predefinite che saranno applicate quando il report sarà visualizzato.';
$string['conditionstab'] = 'Condizione';
$string['confirm'] = 'Conferma';
$string['confirmdeletecondition'] = 'Sei sicuro di eliminare la condizione \'{$a}\'?';
$string['confirmdeleteschedule'] = 'Sei sicuro di eliminare la pianificazione \'{$a}\' e tutti i suoi dati? L\'azione non potrà essere annullata.';
$string['confirmresetallconditions'] = 'Sei sicuro di resettare tutte le condizioni?';
$string['confirmresetconditions'] = 'Sei sicuro di resettare la condizione \'{$a}\'?';
$string['confirmsendschedule'] = 'Sei sicuro di accodare \'{$a}\' per l\'invio?';
$string['contentvisibility'] = 'Numero di colonne sempre visibile';
$string['convertingreport'] = 'Conversione del report \'{$a}\'';
$string['convertnotimplementeddesc'] = 'Non è stato possibile convertire il report. Lo sviluppatore deve specificare le regole di conversione. Puoi anche provare a creare da zero lo stesso report nella nuova versione del report builder e rimuovere questo.';
$string['convertnotpossibledesc'] = 'Non è stato possibile convertire automaticamente il report. Vedere il messaggio di errore riportato di seguito. È possibile che alcune colonne o altri attributi di questo report non abbiano una corrispondenza esatta nelle nuove fonti di dati. In questo caso è possibile modificare il report e rimuovere gli elementi che non possono essere convertiti automaticamente, quindi riprovare a convertire. Si noti che se si verificano diversi errori durante la conversione del report, sotto viene riportato solo il primo.';
$string['convertocore'] = 'Converti all\'ultima versione';
$string['course_completion_days_course'] = 'Giorni trascorsi sul corso';
$string['course_completion_days_enrolled'] = 'Giorni di iscrizione';
$string['course_completion_daysuntilcompletion'] = 'Giorni al completamento';
$string['course_completion_progress'] = 'Avanzamento';
$string['course_completion_progress_percent'] = 'Avanzamento (%)';
$string['course_completion_reaggregate'] = 'Data e ora di riaggregazione';
$string['course_completion_reaggregated'] = 'Data e ora di riaggregazione';
$string['course_completion_timecompleted'] = 'Data e ora di completamento';
$string['course_completion_timeenrolled'] = 'Data e ora di iscrizone';
$string['course_completion_timestarted'] = 'Data e ora di inizio';
$string['course_enrolment_method'] = 'Metodo';
$string['course_enrolment_status'] = 'Stato dell\'iscrizone';
$string['course_enrolment_timeended'] = 'Iscrizione terminata';
$string['course_enrolment_timestarted'] = 'Iscrizione iniziata';
$string['coursefullnamewithlink'] = 'Tirolo del corso con link';
$string['courseidnumberewithlink'] = 'Codice identificativo del corso con link';
$string['courseshortnamewithlink'] = 'Tirolo abbreviato del corso con link';
$string['customessage'] = 'Messaggio personalizzato';
$string['customfieldcolumn'] = '{$a}';
$string['customizecondition'] = 'Modifica nome della condizione';
$string['customizefilter'] = 'Modifica nome del filtro';
$string['customizeheader'] = 'Modifica intestazione della colonna \'{$a}\'';
$string['customreports'] = 'Report personalizzati';
$string['customreportsdesc'] = 'Report personalizzati, incluse le audience e i dait di pianificazione';
$string['customreportslegacy'] = 'Report personalizzati dalla versione obsoleta';
$string['customreportslimit'] = 'Limite report personalizzati';
$string['customreportslimit_desc'] = 'È possibile limitare il numero di report personalizzati per motivi di prestazioni. Se impostato a zero, non ci sarà nessun limite.';
$string['customreportsliveediting'] = 'Modifica in tempo reale dei report personalizzati';
$string['customreportsliveediting_desc'] = 'Gli utenti potranno visualizzare i dati del report mentre lo modificando. Può essere disabilitato per motivi di prestazioni.';
$string['customreportsliveeditingdisabled'] = 'La visualizzazione dei dati del report durante la modifica è disabilitata dall\'amministratore del sito. Passare alla modalità anteprima per visualizzare i dati.';
$string['customreportssettings'] = 'Impostazioni report personalizzati';
$string['dateanyvalue'] = 'Qualsiasi valore';
$string['datecreated'] = 'Creato';
$string['datecurrent'] = 'Attuale';
$string['dateinthefuture'] = 'Nel futuro';
$string['dateinthepast'] = 'Nel passato';
$string['dateisempty'] = 'E\' vuoto';
$string['dateisnotempty'] = 'Non è vuoto';
$string['datelast'] = 'Ultimi ... giorni';
$string['datenext'] = 'Prossimi ... giorni';
$string['dateprevious'] = 'Pecedente';
$string['daterange'] = 'Intervallo di date';
$string['daterangefrom'] = 'Da';
$string['daterangeto'] = 'A';
$string['datetostart'] = 'Data';
$string['dateupcoming'] = 'Prossimo';
$string['debugsqlparams'] = 'Parametri';
$string['debugsqlquery'] = 'Query attuale';
$string['deleteaudience'] = 'Elimina audience \'{$a}\'';
$string['deletecolumn'] = 'Elimina colonna \'{$a}\'';
$string['deletecondition'] = 'Elimina condizione \'{$a}\'';
$string['deletefilter'] = 'Elimina filtro';
$string['deletereport'] = 'Elimina report';
$string['deletereportmsg'] = 'Sei sicuro di eliminare il report \'{$a}\' e tutti i suoi dati? L\'azione non potrà essere annullata.';
$string['deletereportsuccess'] = 'Report eliminato';
$string['deleteschedule'] = 'Elimina pianificazione';
$string['desc'] = 'La colonna \'{$a}\' ha ordinamento discendente';
$string['description'] = 'Descrizone';
$string['description_help'] = 'Fornire una descrizione circa gli scopi del report.';
$string['duplicate'] = 'Duplica';
$string['duplicatereport'] = 'Duplica report';
$string['editaudience'] = 'Modifica audience';
$string['editinglegacywarning'] = 'Si sta modificando un report proveniente da una versione obsoleta di Report Builder. Si consiglia di convertirlo alla versione più recente.';
$string['editmode'] = 'Passa alla visualizzazione modifca';
$string['editreport'] = 'Modifica contenuto';
$string['editreportdetails'] = 'Modifica dettagli';
$string['editreportname'] = 'Modifica nome del report';
$string['editschedule'] = 'Modifica pianificazione';
$string['edittitle'] = 'Modifica report \'{$a}\'';
$string['enablesortingon'] = 'Abilita ordinamento sulla colonna \'{$a}\'';
$string['enteremail'] = 'Per favore inserire una email valida e premere \\u0027enter\\u0027';
$string['entity_course_enrolment'] = 'Iscrizioni';
$string['entitycertificate'] = 'Certificato';
$string['entitycertificateissue'] = 'Rilascio certificato';
$string['entitycourse'] = 'Corso';
$string['entitycourseaccess'] = 'Accesso ai corsi';
$string['entitycoursecompletion'] = 'Completamento corso';
$string['entitycourseenrolment'] = 'Iscrizioni al corso';
$string['entitydatastorecoursecompletion'] = 'Data store completamento corsi';
$string['entityreportbuilder'] = 'Report personalizzati';
$string['entityschedule'] = 'Pianificazione';
$string['entityuser'] = 'Utente';
$string['error:mustselectformat'] = 'Devi selezionare un formato.';
$string['error:mustselectsource'] = 'Non sei autorizzato a gestire fonti di report.';
$string['errormanageschedules'] = 'Non sei autorizzato a gestire pianificazioni';
$string['errormissingreportsource'] = 'Non è stato possibile trovare una fonte report configurata';
$string['errornorecipients'] = 'E\' necessario selezionare dei destinatari per la pianificazione';
$string['errorunavailablereportsource'] = 'Fonte report configurata non disponibile';
$string['eventreportcreated'] = 'Creazioniste report';
$string['eventreportdeleted'] = 'Eliminazione report';
$string['eventreportschedulecreated'] = 'Creazione pianificazione report';
$string['eventreportscheduledeleted'] = 'Eliminazione pianificazione report';
$string['eventreportscheduleupdated'] = 'Aggiornamento pianificazione report';
$string['eventreportupdated'] = 'Aggiornamento report';
$string['eventreportviewed'] = 'Visualizzazione report';
$string['expandcardview'] = 'Espandi vista a schede';
$string['expandconditions'] = 'Espandi condizioni';
$string['expandfilters'] = 'Espandi filtri';
$string['expandsorting'] = 'Espandi ordinamento';
$string['exportselectall'] = 'Esporta tutti i report personalizzati';
$string['exportselectlimit'] = 'Esporta specifici report personalizzati...';
$string['filtercannotbeconverted'] = 'Il filtro \'{$a}\' non può essere convertito';
$string['filternotvalid'] = 'Il filtro deve essere una subclass di filter_base.';
$string['filtersbutton'] = 'Visualizza/nascondi barra laterale dei filtri';
$string['filtershelp'] = 'Filtri';
$string['filtershelp_help'] = 'Elenco di filtri disponibili agli non applicati automaticamente ma che sono disponibili agli utenti.';
$string['filterstab'] = 'Filtri';
$string['format'] = 'Formato';
$string['fullnamewithlink'] = 'Nome e cognome con link al profilo';
$string['fullnamewithpicture'] = 'Nome e cognome con immagine';
$string['fullnamewithpicturelink'] = 'Nome e cognome con immagine e link al profilo';
$string['gotocorerb'] = 'Vai ai report personalizzati';
$string['hascurrentjobs'] = 'Ha mansioni';
$string['hassystemrole'] = 'Assegnato a ruolo di sistema';
$string['importaudiencelogerror'] = 'Non è stato possibile importare il record dell\'audience';
$string['importaudiencelogsuccess'] = 'Record dell\'audience importato';
$string['importexportreportdefinition'] = 'Definizioni report';
$string['importexportreportdefinition_help'] = 'Includi colonne del report, condizioni e filtri';
$string['importlogconversionfailure'] = 'Il report personalizzato importato \'{$a->name}\' è stato creato con la versione obsoleta di Report Builder e non è stato possibile convertirlo automaticamente. Visitare la pagina <a href="{$a->url}">Report Builder</a> per tentare con la conversione manuale: \'{$a->message}\'';
$string['importlogconversionsuccess'] = 'Il report personalizzato importato \'{$a->name}\' è stato creato con la versione obsoleta di Report Builder';
$string['importlogerror'] = 'Non è stato possibile importare il report \'{$a}\'';
$string['importlogerrorinvalidaudience'] = 'Audience mancante o non valida';
$string['importlogerrorinvalidformat'] = 'Formato pianificazione mancante o non valido';
$string['importlogerrorinvalidsource'] = 'Fonte report mancante o non valida';
$string['importlogerrorinvalidtype'] = 'Tipo di report non valido';
$string['importlogerrorlegacyemails'] = 'Gli indirizzi email non sono più supportati come destinatari della pianificazione';
$string['importlogerrorlegacyemailsimport'] = 'Importa senza indirizzi email';
$string['importlogerrorlegacyemailslog'] = 'Gli indirizzi email non sono più supportati come destinatari della pianificazione, per maggiori informazioni consultare <a href="{$a->docslink}">upgrade note</a>';
$string['importlogerrornorecipients'] = 'Destinatari della pianificazione mancanti o non validi';
$string['importlogsuccess'] = 'Creato report a href="{$a->url}">{$a->name}</a>\' con {$a->columncount} colonne, {$a->conditioncount} condizioni e {$a->filtercount} filtri';
$string['importschedulelogerror'] = 'Non è stato possibile importare  il record della pianificazione';
$string['importschedulelogsuccess'] = 'Record della pianificazione importato';
$string['importselectall'] = 'Importa tutti i report personalizzati';
$string['importselectlimit'] = 'Importa specifici report personalizzati...';
$string['invalidcolumn'] = 'Colonna non valida';
$string['invalidcondition'] = 'Condizione non valida';
$string['invalidemail'] = 'Indirizzo email \'{$a} non valido';
$string['invalidfilter'] = 'Filtro non valido';
$string['ismemberofcohort'] = 'Appartiene al gruppo globale';
$string['isnotempty'] = 'Non è vuoto';
$string['lastcourseaccess'] = 'Ultimo accesso al corso';
$string['lastmodified'] = 'Ultima modifica';
$string['lastsenton'] = 'Ultimo invio il';
$string['legacyreportsview'] = 'Visualizza report';
$string['legacyreportswarning'] = 'Alcuni report non sono stati convertiti all\'ultima versione';
$string['lessthanaday'] = 'Meno di un giorno';
$string['managereports'] = 'Gestione report personalizzati';
$string['manuallyaddedusers'] = 'Utenti inseriti a mano';
$string['message'] = 'Messaggio';
$string['modifiedby'] = 'Modificato da';
$string['movecolumn'] = 'Sposta colonna {$a}';
$string['movefilter'] = 'Sposta filtro {$a}';
$string['movesorting'] = 'Sposta l\'ordinamento della colonna \'{$a}\'';
$string['never'] = 'Mai';
$string['newaggregationfor'] = 'Nuova aggregazione della colonna \'{$a}\'';
$string['newschedule'] = 'Nuova pianificazione';
$string['newvaluefor'] = 'Nuovo valore di \'{$a}\'';
$string['noaggregation'] = 'Nessuna aggregazione';
$string['noaudiences'] = 'Non ci sono audeince';
$string['noaudiencesalert'] = 'La pianificazione del report sarà possibile una volta che saranno aggiunte una o più audience. Per creare una audience, andare alla scheda "Audience"';
$string['noavailablecohorts'] = 'Non ci sono gruppi globali disponibili';
$string['nocolumnsselected'] = 'Aggiungi colonna al report';
$string['noconditions'] = 'Nessuna condizione selezionata.';
$string['nofilters'] = 'Nessuna filtro selezionato.';
$string['nosortablecolumns'] = 'Colonne ordinabili non ancora aggiunte.';
$string['numberanyvalue'] = 'Qualsiasi valore';
$string['numberbetween'] = 'Compreso in un intervallo tra';
$string['numberequalorgreaterthan'] = 'Maggiore o uguale';
$string['numberequalorlessthan'] = 'Minore o uguale';
$string['numberequalto'] = 'Uguale';
$string['numbergreaterthan'] = 'Maggiore di';
$string['numberisempty'] = 'E\' vuoto';
$string['numberisnotempty'] = 'Non è vuoto';
$string['numberlessthan'] = 'Minore di';
$string['or'] = 'OR';
$string['pluginname'] = 'Report builder - versione obsoleta';
$string['preview'] = 'Anteprima';
$string['previewmode'] = 'Vai alla vista anteprima';
$string['privacy:metadata:reportbuilder'] = 'Informazioni sui report personalizzati';
$string['privacy:metadata:reportbuilder:name'] = 'Nome del report';
$string['privacy:metadata:reportbuilder:source'] = 'Fonte del report';
$string['privacy:metadata:reportbuilder:timecreated'] = 'Orario di creazione del report';
$string['privacy:metadata:reportbuilder:timemodified'] = 'Orario della modifica più recente del report';
$string['privacy:metadata:reportbuilder:usercreated'] = 'ID dell\'utente che ha creato il report-';
$string['privacy:metadata:reportbuilder:usermodified'] = 'ID dell\'utente che ha modificato più recentemente il  report';
$string['privacy:metadata:reportbuilder_audience'] = 'Informazioni sulle audience del report personalizzato.';
$string['privacy:metadata:reportbuilder_audience:classname'] = 'Classe utilizzata per questa audience';
$string['privacy:metadata:reportbuilder_audience:configdata'] = 'Configurazione dell\'audeince';
$string['privacy:metadata:reportbuilder_audience:reportid'] = 'ID del report al quale appartiene l\'audience';
$string['privacy:metadata:reportbuilder_audience:timecreated'] = 'Orario di creazione dell’audience';
$string['privacy:metadata:reportbuilder_audience:timemodified'] = 'Orario di modifica dell\'audience';
$string['privacy:metadata:reportbuilder_audience:usercreated'] = 'ID dell\'utente che ha creato l\'audience';
$string['privacy:metadata:reportbuilder_audience:usermodified'] = 'ID dell\'utente che ha modificato l\'audience';
$string['privacywarning'] = 'ATTENZIONE: prima di aggiungere email, verificare di avere una base legale per farlo e che l\'aggiunta sia conforme alla politica della organizzazione.';
$string['profiledepartment'] = 'Reparto del profilo';
$string['quarter'] = 'Trimestrale';
$string['recipients'] = 'Destinatari';
$string['recurrence'] = 'Ripetizione';
$string['recurrenceannualy'] = 'Annuale';
$string['recurrencedaily'] = 'Giornaliera';
$string['recurrencedailyweekday'] = 'Giornaliera - feriali';
$string['recurrencedonorepeat'] = 'Senza ripetizione';
$string['recurrencemonthly'] = 'Mensile';
$string['recurrenceweekly'] = 'Settimanale';
$string['reg_wpreports'] = 'Numero di report personalizzati ({$a})';
$string['removechedulesuccess'] = 'Pianificazione eliminata.';
$string['removeconditionsuccess'] = 'Condizione \'{$a}\'  eliminata.';
$string['report'] = 'Report';
$string['report_access_list'] = 'Report di sistema dell\'elenco utenti che hanno accesso a specifici report';
$string['reportbuilder:edit'] = 'Modificare configurazione report';
$string['reportbuilder:read'] = 'Visualizzare report';
$string['reportconverted'] = 'Il report è stato convertito correttamente';
$string['reportcoursecompletion'] = 'Completamento corsi dal datastore';
$string['reportcourseenrolmentcompletion'] = 'Iscrizioni ai corsi e completamenti';
$string['reportcourseenrolments'] = 'Iscrizioni al corso';
$string['reportcourseparticipants'] = 'Partecipanti e completamenti';
$string['reportlimitreachedsite'] = 'E\' stato raggiunto il numero massimo di report personalizzati. Per favore eliminare dei report oppure contattare l\'amministratore del sito.';
$string['reportlimitreachedtenant'] = 'E\' possibile creare fino a {$a} report personalizzati. Per favore eliminare dei report oppure contattare l\'amministratore del sito.';
$string['reportlimitreachedtitle'] = 'Raggiunto il numero massimo di report';
$string['reportlists'] = 'Report di sistema dell\'elenco dei report';
$string['reportliveeditingdisabled'] = 'La pre-visualizzaione dei sati è stata disabilitata dall\'amministratore del sito.<br />Cliccare "Anteprima" per visualizzare il contenuto del report';
$string['reportname'] = 'Nome del report';
$string['reportname_help'] = 'Inserire il nome del report';
$string['reportschedules'] = 'Report di sistema dell\'elenco delle pianificazioni';
$string['reportsource'] = 'Fonte report';
$string['reportsource_help'] = 'La fonte del report definisce la provenienza dei dati visualizzati';
$string['reportstab'] = 'Report';
$string['reportuserslist'] = 'Elenco utenti';
$string['resetall'] = 'Resetta tutto';
$string['resetallconditions'] = 'Resetta tutte le condizioni';
$string['resetcondition'] = 'Resetta condizioni';
$string['resetfield'] = 'Resetta campo \'{$a}\'';
$string['resettable'] = 'Resetta tabella';
$string['rolemanager'] = 'Manager report builder';
$string['rolemanagerdescription'] = 'Crea e gestisce report personalizzati nel proprio tenant';
$string['saveandcontinue'] = 'Salva e continua';
$string['schedule'] = 'Pianifica';
$string['scheduleaddedastask'] = 'La pianficazione verrà eseguita il prima possibile';
$string['scheduled'] = 'Pianificato';
$string['schedulename'] = 'Nome pianificazione';
$string['schedulenotifyupgrade'] = 'Pianificazioni report aggiornate';
$string['schedulenotifyupgrademessage'] = 'Per effetto del recente aggiornamento di Moodle Workplace, la pianifiazione \'{$a->schedulename}\' del report \'<a href="{$a->reportlink}">$a->reportname}</a>\'  è stata modificata.
<br /><br />
Per motivi di sicurezza, Moodle Workplace non supporta più come destinatari gli indirizzi email di utenti che non sono registrati. Le email rimosse sono le seguenti;
<br /><br />
{$a->emails}
<br /><br />
Per maggiori informazioni consultare <a href="{$a->docslink}">upgrade note sulle audience e sulle pianificazioni</a>.';
$string['schedules'] = 'Pianificazioni';
$string['selectacondition'] = 'Seleziona condizione';
$string['selectafilter'] = 'Seleziona filtro';
$string['selectaggregation'] = 'Seleziona aggregazione della colonna \'{$a}\'';
$string['selectcohorts'] = 'Seleziona gruppo globale';
$string['selectcourses'] = 'Seleziona corsi';
$string['selectsource'] = 'Seleziona fonte report';
$string['send'] = 'Invia';
$string['send_schedulestask'] = 'Invia pianificazione';
$string['settings'] = 'Impostazioni';
$string['shared'] = 'Condiviso';
$string['showfirstcolumntitle'] = 'Visualizza titolo della prima colonna';
$string['sidebarbutton'] = 'Visualizza/nascondi barra laterale';
$string['sortingshelp'] = 'Ordinamento';
$string['sortingshelp_help'] = 'Ordinamento di default del report';
$string['sortingtab'] = 'Ordinamento';
$string['subject'] = 'Oggetto';
$string['tabletab'] = 'Tabella';
$string['teststring2'] = 'Stringa di test 2';
$string['timecreated'] = 'Orario di creazione';
$string['userconfirmed'] = 'Registrazione confermata';
$string['userpicture'] = 'Immagine utente';
$string['usersuspended'] = 'Registrazione sospesa';
$string['userviewreportas'] = 'Visualizza dati del report come';
$string['userviewreportas_help'] = 'Nel report saranno includi i dati che visualizzerebbe l\'utente selezionato. Se lasciato vuoto, sarà utilizzato l\'utente attuale.';
$string['userviewreportasnotice'] = 'Il report può contenere dati provenienti da tutti i tenant';
$string['viewconvertedreport'] = 'Visualizza report convertito';
$string['viewreports'] = 'Report builder';
$string['warningonlegacypage'] = 'Stai utilizzando una versione obsoleta di Report Builder';
