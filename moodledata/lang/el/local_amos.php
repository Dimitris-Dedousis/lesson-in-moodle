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
 * Strings for component 'local_amos', language 'el', version '4.3'.
 *
 * @package     local_amos
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['about'] = '<p>Το AMOS (Automated Manipulation Of Strings: αυτοματοποιημένη διαχείριση συμβολοσειρών) είναι ένα κεντρικό αποθετήριο συμβολοσειρών του Moodle και του ιστορικού τους. Παρακολουθεί τις προσθήκες συμβολοσειρών στον κώδικα του Moodle στα αγγλικά, συγκεντρώνει μεταφράσεις, χειρίζεται κοινές μεταφραστικές εργασίες και δημιουργεί πακέτα γλώσσας για να εγκατασταθούν/χρησιμοποιηθούν σε εξυπηρετητές Moodle.</p>
<p>Δείτε εδώ την <a href="https://docs.moodle.org/dev/AMOS_manual">τεκμηρίωση του AMOS</a> για περισσότερες πληροφορίες.</p>';
$string['amos'] = 'Εργαλειοθήκη μετάφρασης AMOS';
$string['amos:changecontriblang'] = 'Αλλαγή γλώσσας των συμβολοσειρών της συνεισφοράς';
$string['amos:commit'] = 'Αποδοχή των προς υποβολή συμβολοσειρών στο κύριο αποθετήριο';
$string['amos:execute'] = 'Εκτέλεση του AMOScript που δόθηκε';
$string['amos:importfile'] = 'Εισαγωγή μεταφράσεων από ανεβασμένο αρχείο και προώθηση προς υποβολή';
$string['amos:importstrings'] = 'Κάντε εισαγωγή συμβολοσειρών (συμπεριλαμβανομένων των αγγλικών) απευθείας στο κύριο αποθετήριο';
$string['amos:manage'] = 'Διαχείριση της πύλης (portal) AMOS';
$string['amos:stage'] = 'Χρησιμοποιήστε το μεταφραστικό εργαλείο AMOS (Automated Manipulation Of Strings: αυτοματοποιημένη διαχείριση συμβολοσειρών) και προωθήστε τις συμβολοσειρές σας προς υποβολή';
$string['amos:stash'] = 'Αποθήκευση όλων των προς υποβολή σε ένα πρόχειρο που παραμένει';
$string['amos:usegoogle'] = 'Χρήση υπηρεσιών μετάφρασης της Google';
$string['applangindexfile'] = 'Τοποθεσία αρχείου LangIndex εφαρμογής κινητού Moodle';
$string['applangindexfile_desc'] = 'Πλήρης διεύθυνση URL λήψης του αρχείου.  Θα γίνει από μια εργασία cron.';
$string['branchesall'] = 'Όλες οι γνωστές εκδόσεις Moodle';
$string['branchesall_desc'] = 'Λίστα διαχωρισμένων με κόμμα κωδικών έκδοσης Moodle που υποστηρίζει το AMOS. Αυτό χρησιμοποιείται για τη συμπλήρωση της λίστας εκδόσεων στο φίλτρο του μεταφραστή και σε άλλα σημεία.';
$string['branchsupported'] = 'Η παλαιότερη υποστηριζόμενη έκδοση Moodle';
$string['branchsupported_desc'] = 'Κωδικός της παλαιότερης έκδοσης Moodle που θα πρέπει ακόμα να παρακολουθείται για αλλαγές στις αγγλικές συμβολοσειρές και για την οποία δημιουργούνται ακόμα πακέτα γλώσσας για το πρόγραμμα εγκατάστασης. Χρησιμοποιήστε <https://docs.moodle.org/dev/Releases#Version_support> για αναφορά/τεκμηρίωση.';
$string['cachedef_lists'] = 'Λίστες γλωσσών και στοιχείων που είναι γνωστά στο AMOS';
$string['cachedef_stats'] = 'Στατιστικά δεδομένα που παράγονται από το AMOS';
$string['commitbutton'] = 'Αποδοχή';
$string['commitkeepstaged'] = 'Διατήρηση των συμβολοσειρών στις Προς υποβολή';
$string['commitmessage'] = 'Μήνυμα αποδοχής';
$string['commitmessageempty'] = 'Παρακαλούμε συμπληρώστε το μήνυμα αποδοχής';
$string['commitstage'] = 'Αποδοχή των συμβολοσειρών που υποβλήθηκαν';
$string['commitstage_help'] = 'Μόνιμα αποθηκεύστε όλες τις προς υποβολή μεταφράσεις στο αποθετήριο του AMOS. Από τις προς υποβολή συμβολοσειρές περικόπτονται τυχόν περιττά κενά ή ολόκληρες ταυτόσημες ή παλαιότερες μεταφράσεις προτού υποβληθούν. Μόνο συμβολοσειρές που μπορούν να υποβληθούν αποθηκεύονται. Αυτό σημαίνει ότι μόνο μεταφράσεις με πράσινη φωτο-επισήμανση θα αποθηκευτούν. Οι προς υποβολή συμβολοσειρές μετά την υποβολή καθαρίζονται.';
$string['committable'] = 'Έχετε δικαίωμα αποδοχής συνεισφορών σε αυτό το πακέτο γλώσσας';
$string['committableall'] = 'Όλες οι γλώσσες';
$string['committablenone'] = 'δεν επιτρέπονται γλώσσες - παρακαλούμε επικοινωνήστε με τον διαχειριστή του AMOS';
$string['componentsall'] = 'Όλα';
$string['componentsapp'] = 'Εφαρμογής κινητού Moodle';
$string['componentsnone'] = 'Κανένα';
$string['componentsstandard'] = 'Βασικά & Τυπικά';
$string['confirmaction'] = 'Αυτή η ενέργεια δεν μπορεί να αναιρεθεί. Είστε σίγουροι;';
$string['contribaccept'] = 'Αποδοχή';
$string['contribactions'] = 'Ενέργειες σε συνεισφερόμενη μετάφραση';
$string['contribactions_help'] = 'Ανάλογα με τα δικαιώματά σας και τη ροή επεξεργασίας μιας συνεισφοράς, μπορείτε να έχετε διαθέσιμες μερικές από τις παρακάτω ενέργειες:

* Εφαρμογή - αντιγραφή της συνεισφερόμενης μετάφρασης στα προς υποβολή σας, δεν μεταβάλλει την κατάσταση της συνεισφοράς.
* Ανάθεση σε εμένα - ορίστε τον εαυτό σας ως εξεταστή της συνεισφοράς, δηλαδή του υπεύθυνου εξέτασης και ενσωμάτωσης της συνεισφοράς.
* Ακύρωση ανάθεσης - ορίστε ότι κανένας δεν είναι ορισμένος ως εξεταστής της συνεισφοράς.
* Έναρξη εξέτασης - ανάθεση της νέας συνεισφοράς στον εαυτό σας, ορισμός της κατάστασής της ως «Εξέταση» και αντιγραφή της συνεισφερόμενης μετάφρασης στα προς υποβολή σας.
* Δεκτή - επισήμανση της συνεισφοράς ως δεκτής.
* Μη δεκτή - επισήμανση της συνεισφοράς ως μη δεκτής· παρακαλούμε περιγράψτε τους λόγους απόρριψης σε ένα σχόλιο.

Ο συνεισφέρων πληροφορείται μέσω ηλε.ταχυδρομείου οποτεδήποτε η κατάσταση της συνεισφοράς του αλλάξει.';
$string['contribactions_link'] = 'AMOS#Συνεισφορά_σε_ένα_πακέτο_γλώσσας';
$string['contribapply'] = 'Εφαρμογή';
$string['contribassignee'] = 'Εξεταστής';
$string['contribassigneenone'] = '-';
$string['contribassigntome'] = 'Ανάθεση σε εμένα';
$string['contribauthor'] = 'Συγγραφέας';
$string['contribclosedno'] = 'Απόκρυψη απαντημένων συνεισφορών';
$string['contribclosedyes'] = 'Εμφάνιση απαντημένων συνεισφορών';
$string['contribcomponents'] = 'Στοιχεία λογισμικού';
$string['contribid'] = 'A/A';
$string['contribincomingnone'] = 'Δεν υπάρχουν εισερχόμενες συνεισφορές';
$string['contribincomingsome'] = 'Εισερχόμενες συνεισφορές ({$a})';
$string['contriblanguage'] = 'Γλώσσα';
$string['contriblanguagebutton'] = 'Μετατροπή';
$string['contriblanguagechange'] = 'Διόρθωση λάθους γλώσσας συνεισφοράς';
$string['contriblanguagechange_help'] = 'Αν αυτή η συνεισφορά έχει υποβληθεί σε λάθος γλωσσικό πακέτο κατά λάθος, επιλέξτε την σωστή γλώσσα στο αναδυόμενο μενού παρακάτω και μετά κάντε κλικ στο πλήκτρο Μετατροπή.';
$string['contriblanguagereport'] = 'Αναφορά λάθους γλώσσας συνεισφοράς';
$string['contriblanguagereport_help'] = 'Αν αυτή η συνεισφορά έχει υποβληθεί σε λάθος γλωσσικό πακέτο κατά λάθος, παρακαλούμε αντιγράψτε και επικολλήστε την διεύθυνση URL σε ένα μήνυμα στην διεύθυνση ηλε.ταχυδρομείου «translation@moodle.org». Η συνεισφορά θα μεταφερθεί στην σωστή γλώσσα.';
$string['contriblanguagewrong'] = 'Λάθος γλώσσα;';
$string['contribnotif'] = '[AMOS] Ειδοποίηση συνεισφοράς (#{$a->id})';
$string['contribnotifaccepted'] = 'Ο/Η {$a->fullname} έχει δεχτεί την συνεισφερόμενη μετάφρασή σας
#{$a->id} {$a->subject}

---------------------------------------------------------------------
Σελίδα συνεισφοράς: {$a->contriburl}';
$string['contribnotifcommented'] = 'Ο/Η {$a->fullname} έχει κάνει σχόλια για την συνεισφερόμενη μετάφραση
#{$a->id} {$a->subject}
---------------------------------------------------------------------

{$a->message}

---------------------------------------------------------------------
Σελίδα συνεισφοράς: {$a->contriburl}';
$string['contribnotifconverted'] = 'Ο/Η {$a->fullname} έχει μετατρέψει την συνεισφερόμενη μετάφρασή σας #{$a->id} {$a->subject}

Ευχαριστούμε για την συνεισφορά. Όμως, φαίνεται πως υποβλήθηκε σε λάθος πακέτο γλώσσας εκ παραδρομής.
Έτσι η συνεισφορά σας απορρίφθηκε από το λανθασμένο πακέτο γλώσσας και μεταφέρθηκε στο σωστό πακέτο γλώσσας για εξέταση από τον συντηρητή του πακέτου γλώσσας. Δεν απαιτείται καμία ενέργεια από εσάς.
Στο μέλλον, παρακαλούμε να ελέγχετε ξανά ότι έχετε επιλέξει την σωστή (δική σας) γλώσσα πριν αρχίσετε να μεταφράζετε συμβολοσειρές.

---------------------------------------------------------------------
Σελίδα αρχικής υποβολής: {$a->contriborigurl}
Νέα σελίδα συνεισφοράς: {$a->contribnewurl}';
$string['contribnotifpending'] = 'Υπάρχει μια εκκρεμής συνεισφερόμενη μετάφραση που απαιτεί ενέργειά σας
#{$a->id} {$a->subject}

Ως συντηρητής του πακέτου της γλώσσας, είστε υπεύθυνος να εξετάσετε και τελικά (αν όλα είναι εντάξει) να αποδεχτείτε όλες τις συνεισφορές που υποβλήθηκαν. Όταν τελειώσετε, παρακαλούμε να επισημάνετε καθεμιά ως «Δεκτή» ή «Μη δεκτή».

Δείτε {$a->docsurl} για περισσότερες λεπτομέρειες.
---------------------------------------------------------------------
Σελίδα συνεισφοράς: {$a->contriburl}';
$string['contribnotifrejected'] = 'Ο/Η {$a->fullname} έχει απορρίψει την συνεισφερόμενη μετάφρασή σας
#{$a->id} {$a->subject}

---------------------------------------------------------------------
Σελίδα συνεισφοράς: {$a->contriburl}';
$string['contribnotifsubmitted'] = 'Ο/Η {$a->fullname} έχει υποβάλει μια νέα συνεισφερόμενη μετάφραση
#{$a->id} {$a->subject}
---------------------------------------------------------------------

{$a->message}

* Γλώσσα: {$a->language}
* Στοιχεία λογισμικού: {$a->components}
* Συμβολοσειρές: {$a->strings}

---------------------------------------------------------------------
Σελίδα συνεισφοράς: {$a->contriburl}';
$string['contribreject'] = 'Μη δεκτή';
$string['contribresign'] = 'Ακύρωση ανάθεσης';
$string['contribstaged'] = 'Συνεισφορά «Προς υποβολή» <a href="contrib.php?id={$a->id}">#{$a->id}</a> από τον/την {$a->author}';
$string['contribstagedinfo'] = 'Συνεισφορά «Προς υποβολή»';
$string['contribstagedinfo_help'] = 'Τα «Προς υποβολή» περιέχουν συμβολοσειρές που συνεισέφερε ένα μέλος της κοινότητας. Οι συντηρητές του πακέτου γλώσσας κανονικά θα τις εξετάσουν και κατόπιν θα ορίσουν την κατάστασή τους είτε σε «Δεκτή» (αν συμπεριλήφθηκαν) είτε σε «Μη δεκτή» (αν δεν μπορούν να συμπεριληφθούν στο επίσημο πακέτο γλώσσας για κάποιο λόγο).';
$string['contribstagedinfo_link'] = 'AMOS#Συνεισφορά_σε_ένα_πακέτο_γλώσσας';
$string['contribstartreview'] = 'Έναρξη εξέτασης';
$string['contribstatus'] = 'Κατάσταση';
$string['contribstatus0'] = 'Νέα';
$string['contribstatus10'] = 'Εξέταση';
$string['contribstatus20'] = 'Μη δεκτή';
$string['contribstatus30'] = 'Δεκτή';
$string['contribstatus_help'] = 'Η ροή επεξεργασίας μιας προτεινόμενης/συνεισφερόμενης μετάφρασης αποτελείται από τα ακόλουθα στάδια/καταστάσεις:

* Νέα - η συνεισφορά έχει υποβληθεί αλλά δεν έχει εξετασθεί ακόμη
* Εξέταση - η συνεισφορά έχει ανατεθεί σε έναν συντηρητή (εξεταστή) πακέτου γλώσσας και έχει υποβληθεί προς εξέταση
* Μη δεκτή - ο συντηρητής του πακέτου γλώσσας απέρριψε την συνεισφορά και πιθανώς έχει αφήσει μια εξήγηση στα σχόλια
* Δεκτή - η συνεισφορά έχει γίνει δεκτή από τον συντηρητή του πακέτου γλώσσας';
$string['contribstatus_link'] = 'AMOS#Συνεισφορά_σε_ένα_πακέτο_γλώσσας';
$string['contribstrings'] = 'Συμβολοσειρές';
$string['contribstringseq'] = '{$a->orig} νέα';
$string['contribstringsnone'] = '{$a->orig} (όλες ήδη μεταφρασμένες στο πακέτο γλώσσας)';
$string['contribstringssome'] = '{$a->orig} ({$a->same} από αυτά έχουν ήδη πιο πρόσφατη μετάφραση)';
$string['contribsubject'] = 'Θέμα';
$string['contribsubmittednone'] = 'Δεν εκκρεμούν συνεισφορές';
$string['contribsubmittedsome'] = 'Οι συνεισφορές σας ({$a})';
$string['contribtimemodified'] = 'Τροποποιήθηκε';
$string['contribute'] = 'Συνεισφορά';
$string['contributenow'] = 'Συνεισφορά τώρα!';
$string['contributestats'] = 'Συνολικά <strong>{$a->count}</strong> συμβολοσειρές που μεταφράστηκαν από μέλη της κοινότητας έχουν υποβληθεί στο AMOS μέχρι τώρα.';
$string['contributethanks'] = 'Πολλές ευχαριστίες στους: {$a->listcontributors} για τις πρόσφατες συνεισφορές τους!<br /><br />
Παρακαλούμε, συμβουλευτείτε/σχολιάστε το <a href="https://moodle.org/mod/glossary/view.php?id=8542&mode=letter&hook=ALL&sortkey&sortorder=asc&fullsearch=0&page=-1">Γλωσσάριο Αγγλικών & Ελληνικών Όρων του Moodle</a> πριν κάνετε τις συνεισφορές σας.';
$string['contributethankslist'] = '{$a->contributor1}, {$a->contributor2}, {$a->contributor3} και {$a->contributor4}';
$string['contributions'] = 'Συνεισφορές';
$string['creditsaddcontributor'] = 'Προσθήκη συνεισφέροντος';
$string['creditsaddmaintainer'] = 'Προσθήκη συντηρητή';
$string['creditscontact'] = 'Αποστολή μηνύματος';
$string['creditscontributors'] = 'Άλλοι συνεισφέροντες';
$string['creditsdelcontributor'] = 'Διαγραφή συνεισφέροντος';
$string['creditsdelmaintainer'] = 'Διαγραφή συντηρητή';
$string['creditsmaintainedby'] = 'Συντηρούμενο από';
$string['creditsnomaintainer'] = 'Δεν υπάρχει συντηρητής αυτή τη στιγμή. <a href="{$a->url}">Γίνετε εσείς!</a>';
$string['creditsthanks'] = 'Σε αυτή τη σελίδα, επιθυμούμε να ευχαριστήσουμε όλους όσους έχουν συνεισφέρει στις μεταφράσεις του Moodle. Η εργασία τους έχει κάνει δυνατή την εξάπλωση του Moodle σε ολόκληρο τον κόσμο.';
$string['creditstitlelong'] = 'Συντηρητές και συνεισφέροντες πακέτων γλώσσας';
$string['creditstitleshort'] = 'Συντελεστές';
$string['diff'] = 'Σύγκριση';
$string['diffstringmode'] = 'Εναλλακτική σύγκριση';
$string['err_exception'] = 'Σφάλμα: {$a}';
$string['err_invalidlangcode'] = 'Άκυρος κωδικός γλώσσας';
$string['err_parser'] = 'Σφάλμα στην συντακτική ανάλυση: {$a}';
$string['filtercmp'] = 'Στοιχεία λογισμικού';
$string['filtercmp_desc'] = 'Εμφάνιση συμβολοσειρών από αυτά τα στοιχεία λογισμικού (php σελίδες)';
$string['filtercmpnothingselected'] = 'Παρακαλούμε επιλέξτε κάποιο/-α στοιχείο/-α λογισμικού';
$string['filterlng'] = 'Γλώσσες';
$string['filterlng_desc'] = 'Εμφάνιση μεταφράσεων σε αυτές τις γλώσσες';
$string['filterlngnothingselected'] = 'Παρακαλούμε επιλέξτε κάποια γλώσσα';
$string['filtermis'] = 'Διάφορα';
$string['filtermis_desc'] = 'Επιπρόσθετες συνθήκες εμφάνισης συμβολοσειρών';
$string['filtermisfapp'] = 'μόνο της εφαρμογής κινητού';
$string['filtermisfapp_help'] = 'Αυτή η συμβολοσειρά χρησιμοποιείται στην εφαρμογή κινητού Moodle ως {$a}';
$string['filtermisfhas'] = 'μόνο μεταφρασμένες συμβολοσειρές';
$string['filtermisfhlp'] = 'μόνο συμβολοσειρές της βοήθειας';
$string['filtermisfmis'] = 'μόνο με ξεπερασμένη ή καθόλου μετάφραση';
$string['filtermisfout'] = 'μόνο με ξεπερασμένη μετάφραση';
$string['filtermisfstg'] = 'μόνο συμβολοσειρές προς υποβολή';
$string['filtersid'] = 'Όνομα συμβολοσειράς';
$string['filtersid_desc'] = 'Το όνομα της συμβολοσειράς πρέπει να ταυτίζεται με (ή να περιέχει) το κείμενο που δίνεται';
$string['filtersidpartial'] = 'μερικό ταίριασμα';
$string['filtertxt'] = 'Μέρος συμβολοσειράς';
$string['filtertxt_desc'] = 'Η συμβολοσειρά (ή η μετάφρασή της) πρέπει να περιέχει το κείμενο που δίνεται';
$string['filtertxtcasesensitive'] = 'διάκριση κεφαλαίων/πεζών';
$string['filtertxtregex'] = 'κανονική έκφραση';
$string['filterver'] = 'Έκδοση';
$string['filterver_desc'] = 'Εμφάνιση συμβολοσειρών για αυτή την έκδοση Moodle';
$string['filtervernothingselected'] = 'Παρακαλούμε επιλέξτε κάποια έκδοση';
$string['foundmissing'] = 'Λείπουν: {$a}';
$string['foundmissingonthispage'] = 'Σε αυτήν την σελίδα: {$a}';
$string['foundtotal'] = 'Βρέθηκαν: {$a}';
$string['googletranslate'] = 'ρωτήστε το google';
$string['importfile'] = 'Εισαγωγή μεταφρασμένων συμβολοσειρών από αρχείο';
$string['importfile_help'] = 'Αν έχετε μεταφράσει τις συμβολοσειρές σας εκτός σύνδεσης, μπορείτε να τις προωθήσετε προς υποβολή μέσω αυτής της φόρμας.

* Το αρχείο πρέπει να είναι ένα έγκυρο αρχείο ορισμού συμβολοσειρών του Moodle σε γλώσσα PHP. Δείτε στον φάκελο `/lang/en/` της εγκατάστασης του Moodle σας για παραδείγματα.
* Το όνομα του αρχείου πρέπει να ταιριάζει με το αντίστοιχό του με τους αγγλικούς ορισμούς συμβολοσειρών για το δοσμένο στοιχείο λογισμικού (π.χ. `moodle.php`, `assignment.php` ή `enrol_manual.php`).

Όλες οι συμβολοσειρές που θα βρεθούν στο αρχείο θα προωθηθούν προς υποβολή για την επιλεγμένη έκδοση και γλώσσα.

Πολλαπλά αρχεία PHP μπορούν να υποστούν επεξεργασία ταυτόχρονα αν τις συμπιέσετε σε ένα zip αρχείο.';
$string['importfile_link'] = '';
$string['language'] = 'Γλώσσα';
$string['languagepacks'] = 'Πρόσθετα πακέτα γλώσσας μπορούν να εγκατασταθούν στον Moodle ιστότοπό σας μέσω της σελίδας <em>Διαχείριση> Διαχείριση ιστοτόπου> Γλώσσα> Πακέτα γλώσσας</em> ή χειροκίνητα. Για περισσότερες λεπτομέρειες, ανατρέξτε στην <a href="https://docs.moodle.org/en/Language_packs">Τεκμηρίωση πακέτων γλώσσας</a>.';
$string['languages'] = 'Γλώσσες';
$string['languagesall'] = 'Όλες';
$string['languagesnone'] = 'Καμία';
$string['lastavailable'] = 'Τελευταία διαθέσιμη έκδοση';
$string['lessfilteringoptions'] = 'Λιγότερες επιλογές';
$string['log'] = 'Καταγραφές';
$string['logfilterbranch'] = 'Εκδόσεις';
$string['logfiltercommithash'] = 'σύνοψη κατατεμαχισμού git (αριθμός για ασφαλή επιβεβαίωση ακεραιότητας & αυθεντικότητας)';
$string['logfiltercommitmsg'] = 'Το μήνυμα αποδοχής περιέχει';
$string['logfiltercommits'] = 'Φίλτρο αποδοχής';
$string['logfiltercommittedafter'] = 'Αποδοχή μετά από';
$string['logfiltercommittedbefore'] = 'Αποδοχή πριν από';
$string['logfiltercomponent'] = 'Στοιχεία λογισμικού';
$string['logfilterlang'] = 'Γλώσσες';
$string['logfiltershow'] = 'Εμφάνιση φιλτραρισμένων αποδοχών και συμβολοσειρών';
$string['logfiltersource'] = 'Πηγή';
$string['logfiltersourceamos'] = 'AMOS (Automated Manipulation Of Strings: αυτοματοποιημένη διαχείριση συμβολοσειρών)';
$string['logfiltersourceautomerge'] = 'Αυτόματη συγχώνευση (αντιγραφή μεταφράσεων από άλλο κλάδο)';
$string['logfiltersourcebot'] = '(Ρο)μπότ (δέσμη ενεργειών για μαζικές εργασίες π.χ. στον Ιστό, στο Διαδίκτυο, κλπ)';
$string['logfiltersourcecommitscript'] = 'commitscript (δέσμη ενεργειών AMOScript στο μήνυμα της αποδοχής)';
$string['logfiltersourcefixdrift'] = 'fixdrift (διόρθωση ολίσθησης AMOS-git';
$string['logfiltersourcegit'] = 'git (βοηθητικό ακριβές αντίγραφο ((mirror)) στο git του πηγαίου κώδικα και των πακέτων 1.x του ιστοτόπου του Moodle)';
$string['logfiltersourceimport'] = 'import (εισαγόμενες συμβολοσειρές για ένα συνεισφερόμενο πρόσθετο)';
$string['logfiltersourcerevclean'] = 'revclean (αντίστροφη διαδικασία καθαρισμού)';
$string['logfilterstringid'] = 'Όνομα συμβολοσειράς';
$string['logfilterstrings'] = 'Φίλτρο συμβολοσειράς';
$string['logfilterusergrp'] = 'Αποδεχόμενος';
$string['logfilterusergrpor'] = 'ή';
$string['maintainers'] = 'Συντηρητές';
$string['manageamos'] = 'Διαχείριση AMOS';
$string['markuptodate'] = 'Επισήμανση της μετάφρασης ως ενημερωμένης';
$string['markuptodatelabel'] = 'επισήμανση ως ενημερωμένης';
$string['messageprovider:checker'] = 'Αποτελέσματα ελέγχου πακέτου γλώσσας';
$string['messageprovider:contribution'] = 'Μεταφραστικές συνεισφορές';
$string['morefilteringoptions'] = 'Περισσότερες επιλογές';
$string['newlanguage'] = 'Νέα γλώσσα';
$string['nodiffs'] = 'Δεν βρέθηκαν διαφορές';
$string['nofiletoimport'] = 'Παρακαλούμε δώστε ένα αρχείο για εισαγωγή.';
$string['nologsfound'] = 'Δεν βρέθηκαν συμβολοσειρές, παρακαλούμε τροποποιήστε τα φίλτρα';
$string['nostringsfound'] = 'Δεν βρέθηκαν συμβολοσειρές';
$string['nostringtoimport'] = 'Δεν βρέθηκε καμία έγκυρη συμβολοσειρά στο αρχείο. Βεβαιωθείτε ότι το αρχείο έχει σωστό όνομα και κατάλληλο μορφότυπο.';
$string['nothingtostage'] = 'Η λειτουργία δεν επέστρεψε κάποια συμβολοσειρά που θα μπορούσε να μεταφερθεί στα Προς υποβολή.';
$string['novalidzip'] = 'Αδυναμία αποσυμπίεσης του zip αρχείου.';
$string['numofcommitsabovelimit'] = 'Βρέθηκαν {$a->found} υποβολές που ταιριάζουν με το φίλτρο υποβολών. Θα χρησιμοποιηθούν τα {$a->limit} πιο πρόσφατα.';
$string['numofcommitsunderlimit'] = 'Βρέθηκαν {$a->found} υποβολές που ταιριάζουν με το φίλτρο υποβολών';
$string['numofmatchingstrings'] = 'Ανάμεσα σε αυτές, {$a->strings} τροποποιήσεις σε {$a->commits} αποδοχές ταιριάζουν στο φίλτρο συμβολοσειράς';
$string['outdatednotcommitted'] = 'Απαρχαιωμένη συμβολοσειρά';
$string['outdatednotcommitted_help'] = 'Το AMOS εντόπισε ότι η συμβολοσειρά μπορεί να είναι απαρχαιωμένη καθώς η αγγλική έκδοση τροποποιήθηκε αφού είχε ήδη γίνει η μετάφραση. Παρακαλούμε, εξετάστε την μετάφραση.';
$string['outdatednotcommittedwarning'] = 'Απαρχαιώθηκε';
$string['ownstashactions'] = 'Ενέργειες στα πρόχειρα';
$string['ownstashactions_help'] = '* Προς υποβολή αντιγράφου - αντιγραφή των μεταφρασμένων συμβολοσειρών από τα πρόχειρα στα προς υποβολή και διατήρηση των προχείρων χωρίς τροποποίηση. Εάν άλλη μετάφραση κάποιας συμβολοσειράς βρίσκεται ήδη στα προς υποβολή, υπερισχύει αυτή των προχείρων.
* Προς υποβολή - μεταφορά των μεταφρασμένων συμβολοσειρών από τα πρόχειρα στα προς υποβολή και απόρριψή τους από τα πρόχειρα (δηλαδή Προς υποβολή αντιγράφου και Απόρριψη).
* Απόρριψη - διαγραφή των μεταφρασμένων συμβολοσειρών από τα πρόχειρα.
* Υποβολή - ανοίγει μια φόρμα υποβολής των προχείρων προς τους επίσημους συντηρητές του πακέτου γλώσσας ώστε να συμπεριλάβουν την συνεισφορά σας στο επίσημο πακέτο γλώσσας.';
$string['ownstashes'] = 'Τα πρόχειρά σας';
$string['ownstashes_help'] = 'Λίστα όλων των προχείρων σας';
$string['ownstashesnone'] = 'Δεν υπάρχουν δικά σας πρόχειρα';
$string['permalink'] = 'Μόνιμος σύνδεσμος';
$string['placeholder'] = 'Δεσμευτικά θέσης';
$string['placeholder_help'] = 'Τα δεσμευτικά θέσης (placeholders) είναι ειδικές δηλώσεις όπως `{$a}` ή `{$a->something}` μέσα σε συμβολοσειρές. Αντικαθίστανται από μια τιμή όταν οι συμβολοσειρές εμφανίζονται.

Είναι σημαντικό να αντιγράφονται με ακρίβεια από την αρχική συμβολοσειρά. Μην τα μεταφράσετε!';
$string['placeholderwarning'] = 'δεσμευτικά θέσης';
$string['pluginclasscore'] = 'Βασικά υποσυστήματα (πυρήνα)';
$string['pluginclassnonstandard'] = 'Μη τυπικά πρόσθετα';
$string['pluginclassstandard'] = 'Τυπικά πρόσθετα';
$string['pluginname'] = 'AMOS';
$string['plugintypelocations'] = 'Τοποθεσίες τύπων προσθήκης';
$string['plugintypelocations_desc'] = 'Επιτρέπει τον καθορισμό τοποθεσιών τύπων πρόσθετων τυπικών πρόσθετων, όπως τύπων υπο-πρόσθετων παρεχόμενων από τυπικά πρόσθετα ή παλαιώτερων τύπων.';
$string['presetcommitmessage'] = 'Μεταφραστική συνεισφορά #{$a->id} από {$a->author}';
$string['presetcommitmessage2'] = 'Συγχωνευμένες συμβολοσειρές που λείπουν από {$a->source} προς {$a->target} κλάδο';
$string['presetcommitmessage3'] = 'Διορθώσεις διαφορών ανάμεσα στην έκδοση {$a->versiona} και την {$a->versionb}';
$string['privacy:commitnumber'] = 'Αποδοχή {$a}';
$string['privacy:contribnumber'] = 'Συνεισφορά {$a}';
$string['privacy:filterusage'] = 'Χρήση φίλτρου';
$string['privacy:metadata:db:amoscommits'] = 'Διατηρεί όλα τα σχετικά με την αποδοχή μετα-δεδομένα.';
$string['privacy:metadata:db:amoscommits:commitmsg'] = 'Μήνυμα αποδοχής που παρέχεται από τον χρήστη.';
$string['privacy:metadata:db:amoscommits:timecommitted'] = 'Χρονοσήμανση της αποδοχής.';
$string['privacy:metadata:db:amoscommits:userinfo'] = 'Αναγνωριστικό χρήστη όπως παρέχεται στην τοποθεσία πηγής αποδοχής, π.χ. στο Git.';
$string['privacy:metadata:db:amoscontributions'] = 'Συνεισφερόμενες μεταφράσεις από τα μέλη της κοινότητας.';
$string['privacy:metadata:db:amoscontributions:lang'] = 'Ο κωδικός της γλώσσας στην οποία ανήκει αυτή η συνεισφορά.';
$string['privacy:metadata:db:amoscontributions:message'] = 'Αρχικό μήνυμα που περιγράφει την υποβολή.';
$string['privacy:metadata:db:amoscontributions:stashid'] = 'Εσωτερικό αναγνωριστικό του συνημμένου προχείρου.';
$string['privacy:metadata:db:amoscontributions:status'] = 'Η κατάσταση ροής εργασίας της συνεισφοράς".';
$string['privacy:metadata:db:amoscontributions:subject'] = 'Θέμα της συνεισφερόμενης υποβολής.';
$string['privacy:metadata:db:amoscontributions:timecreated'] = 'Χρονοσήμανση του πότε δημιουργήθηκε η συνεισφερόμενη εγγραφή.';
$string['privacy:metadata:db:amoscontributions:timemodified'] = 'Χρονοσήμανση του πότε τροποποιήθηκε πρόσφατα η συνεισφερόμενη εγγραφή.';
$string['privacy:metadata:db:amosfilterusage'] = 'Καταγραφές της χρήσης του μεταφραστικού φίλτρου AMOS.';
$string['privacy:metadata:db:amosfilterusage:currentlang'] = 'Η γλώσσα της τρέχουσας συνόδου.';
$string['privacy:metadata:db:amosfilterusage:ismaintainer'] = 'Έχει ο χρήστης δικαίωμα να κάνει αποδοχή στο αποθετήριο AMOS;';
$string['privacy:metadata:db:amosfilterusage:numofcomponents'] = 'Αριθμός επιλεγμένων στοιχείων';
$string['privacy:metadata:db:amosfilterusage:numoflanguages'] = 'Αριθμός επιλεγμένων γλωσσών';
$string['privacy:metadata:db:amosfilterusage:numofversions'] = 'Αριθμός επιλεγμένων εκδόσεων';
$string['privacy:metadata:db:amosfilterusage:showexistingonly'] = 'Να εμφανίζονται μόνο υπάρχουσες μεταφράσεις;';
$string['privacy:metadata:db:amosfilterusage:showgreylistedonly'] = 'Πρέπει να εμφανιστούν μόνο συμβολοσειρές υπό κατάργηση;';
$string['privacy:metadata:db:amosfilterusage:showhelpsonly'] = 'Πρέπει να εμφανιστούν μόνο συμβολοσειρές βοήθειας;';
$string['privacy:metadata:db:amosfilterusage:showmissingonly'] = 'Πρέπει να εμφανιστούν μόνο συμβολοσειρές με ξεπερασμένη ή καθόλου μετάφραση;';
$string['privacy:metadata:db:amosfilterusage:showoutdatedonly'] = 'Πρέπει να εμφανιστούν μόνο συμβολοσειρές με ξεπερασμένη μετάφραση;';
$string['privacy:metadata:db:amosfilterusage:showstagedonly'] = 'Πρέπει να εμφανιστούν μόνο συμβολοσειρές προς υποβολή;';
$string['privacy:metadata:db:amosfilterusage:showwithoutgreylisted'] = 'Πρέπει οι υπό κατάργηση συμβολοσειρές να εξαιρεθούν από τα αποτελέσματα;';
$string['privacy:metadata:db:amosfilterusage:stringidpartial'] = 'Ζητήθηκε μερικό ταίριασμα για το όνομα συμβολοσειράς;';
$string['privacy:metadata:db:amosfilterusage:substringcasesensitive'] = 'Πρέπει το μέρος συμβολοσειράς να αναζητηθεί με διάκριση κεφαλαίων-πεζών;';
$string['privacy:metadata:db:amosfilterusage:substringregex'] = 'Πρέπει το μέρος συμβολοσειράς να θεωρηθεί κανονική έκφραση;';
$string['privacy:metadata:db:amosfilterusage:timesubmitted'] = 'Χρονοσήμανση του πότε η φόρμα φίλτρου υποβλήθηκε';
$string['privacy:metadata:db:amosfilterusage:usercountry'] = 'Κωδικός χώρας χρήστη όπως επιλέχθηκε στο προφίλ του';
$string['privacy:metadata:db:amosfilterusage:userlang'] = 'Προτιμώμενη γλώσσα χρήστη από το προφίλ του';
$string['privacy:metadata:db:amosfilterusage:usesdefaultlang'] = 'Χρησιμοποίησε ο χρήστης τις προ-επιλεγμένες γλώσσες;';
$string['privacy:metadata:db:amosfilterusage:usesdefaultversion'] = 'Χρησιμοποίησε ο χρήστης τις προ-επιλεγμένες εκδόσεις στην φόρμα;';
$string['privacy:metadata:db:amosfilterusage:withstringid'] = 'Καθορίστηκε το αναγνωριστικό/όνομα συμβολοσειράς;';
$string['privacy:metadata:db:amosfilterusage:withsubstring'] = 'Καθορίστηκε ένα μέρος συμβολοσειράς για αναζήτηση;';
$string['privacy:metadata:db:amosstashes'] = 'Διατηρεί τις πληροφορίες για τα πρόχειρα στην δεξαμενή προχείρων';
$string['privacy:metadata:db:amosstashes:components'] = 'Λίστα στοιχείων που αποθηκεύονται στο πρόχειρο μεταφράσεων προς υποβολή';
$string['privacy:metadata:db:amosstashes:id'] = 'Εσωτερικό αναγνωριστικό του προχείρου';
$string['privacy:metadata:db:amosstashes:languages'] = 'Λίστα γλωσσών που περιλαμβάνονται στις μεταφράσεις στο πρόχειρο προς υποβολή';
$string['privacy:metadata:db:amosstashes:message'] = 'Το πλήρες μήνυμα που περιγράφει το πρόχειρο, το οποίο χρησιμοποιείται ως προεπιλεγμένο μήνυμα αποδοχής κατά την υποβολή του προχείρου ως μια συνεισφερόμενη μετάφραση.';
$string['privacy:metadata:db:amosstashes:name'] = 'Το όνομα ή ο τίτλος του προχείρου';
$string['privacy:metadata:db:amosstashes:strings'] = 'Ο τίτλος του προχείρου';
$string['privacy:metadata:db:amosstashes:timecreated'] = 'Χρονοσήμανση του χρόνου δημιουργίας του προχείρου';
$string['privacy:metadata:db:amosstashes:timemodified'] = 'Χρονοσήμανση του χρόνου πρόσφατης τροποποίησης της εγγραφής';
$string['privacy:metadata:db:amostranslators'] = 'Περιγράφει τη σχέση μεταξύ ενός πακέτου γλώσσας και ενός χρήστη. Αυτός μπορεί να είναι είτε συντηρητής (με δικαιώματα εγκρίσεων για το πακέτο γλώσσας) είτε ρητός συνεισφέρων (εμφανίζεται στη σελίδα συντελεστών ακόμη και χωρίς υποβληθείσες συνεισφορές).';
$string['privacy:metadata:db:amostranslators:lang'] = 'Ο κωδικός της γλώσσας για την οποία ο μεταφραστής επιτρέπεται να μεταφράζει, ή αστερίσκος για όλες τις γλώσσες.';
$string['privacy:metadata:db:amostranslators:status'] = 'Καθορίζει αν ο χρήστης είναι συντηρητής (0) ή ρητός συνεισφέρων (1) του πακέτου γλώσσας.';
$string['privacy:metadata:external:languagepacks'] = 'Οι συνεισφορές μεταφράσεων εξάγονται σε αρχεία zip που διανέμονται παγκοσμίως και εγκαθίστανται σε ιστοτόπους Moodle.';
$string['privacy:metadata:external:languagepacks:email'] = 'Η διεύθυνση ηλε.ταχυδρομείου του συνεισφέροντος μπορεί να περιλαμβάνεται στα αρχεία πακέτων γλώσσας.';
$string['privacy:metadata:external:languagepacks:firstname'] = 'Το μικρό όνομα του συνεισφέροντος μπορεί να συμπεριλαμβάνεται στα αρχεία γλώσσας.';
$string['privacy:metadata:external:languagepacks:lastname'] = 'Το επώνυμο του συνεισφέροντος μπορεί να συμπεριλαμβάνεται στα αρχεία γλώσσας.';
$string['privacy:metadata:subsystem:comment'] = 'Περιγράψτε πώς χρησιμοποιείται το υποσύστημα σχολίων από το πρόσθετο.';
$string['privacy:stashnumber'] = 'Πρόχειρο {$a}';
$string['privileges'] = 'Τα προνόμιά σας';
$string['privilegesnone'] = 'Έχετε ορίσει δικαίωμα μόνο ανάγνωσης για δημόσια πληροφορία.';
$string['processing'] = 'Αναζήτηση ...';
$string['quicklinks'] = 'Γρήγοροι σύνδεσμοι';
$string['quicklinks_amos'] = 'Μεταφραστής AMOS';
$string['quicklinks_forum'] = 'Φόρουμ μετάφρασης';
$string['quicklinks_manual'] = 'Εγχειρίδιο χρήστη';
$string['quicklinks_newcomers'] = 'Βοήθεια για αρχάριους';
$string['requestactions'] = 'Ενέργεια';
$string['requestactions_help'] = '* Εφαρμογή - αντιγραφή των μεταφρασμένων συμβολοσειρών από το αίτημα άντλησης προς τις δικές σας συμβολοσειρές προς υποβολή. Αν η συμβολοσειρά είναι ήδη στις προς υποβολή, αντικαθίσταται από αυτήν του προχείρου.
* Απόκρυψη - μπλοκάρει το αίτημα άντλησης έτσι ώστε να μην εμφανίζεται πλέον σε εσάς.';
$string['savefilter'] = 'Εμφάνιση συμβολοσειρών';
$string['script'] = 'AMOScript (δέσμη ενεργειών του AMOS)';
$string['script_help'] = 'AMOScript είναι μια δέσμη ενεργειών προς εκτέλεση πάνω στις συμβολοσειρές του αποθετηρίου.';
$string['scriptexecute'] = 'Εκτέλεσε και θέσε το αποτέλεσμα προς υποβολή';
$string['sourceversion'] = 'Έκδοση κλάδου-πηγής';
$string['stage'] = 'Προς υποβολή';
$string['stageactions'] = 'Ενέργειες προς υποβολή';
$string['stageactions_help'] = '* Επεξεργασία των «Προς υποβολή» - τροποποιεί τις ρυθμίσεις φίλτρων του μεταφραστή ώστε να εμφανιστούν μόνο οι μεταφράσεις προς υποβολή.
* Αφαίρεση ανεπίτρεπτων - αφαίρεση από τις «Προς υποβολή» μεταφράσεις όσων δεν σας επιτρέπεται να υποβάλλετε. Αφαίρεση ανεπίτρεπτων γίνεται και αυτόματα πριν την υποβολή των «Προς υποβολή» συμβολοσειρών.
* Αφαίρεση μη πρόσφατων - αφαίρεση από τις «Προς υποβολή» μεταφράσεις όσων είτε δεν τροποποιούν την τρέχουσα μετάφραση είτε υπάρχει νεότερη στο αποθετήριο. Αφαίρεση μη πρόσφατων γίνεται και αυτόματα πριν την υποβολή των «Προς υποβολή».
* Ακύρωση όλων - καθαρίζει τα «Προς υποβολή», όλες οι μεταφράσεις προς υποβολή χάνονται.';
$string['stagedownload'] = 'Λήψη';
$string['stageedit'] = 'Επεξεργασία των «Προς υποβολή»';
$string['stageprune'] = 'Αφαίρεση ανεπίτρεπτων';
$string['stagerebase'] = 'Αφαίρεση μη πρόσφατων';
$string['stagestringsnocommit'] = 'Υπάρχουν {$a->staged} συμβολοσειρές προς υποβολή';
$string['stagestringsnone'] = 'Δεν υπάρχουν συμβολοσειρές προς υποβολή';
$string['stagestringssome'] = 'Υπάρχουν {$a->staged} συμβολοσειρές προς υποβολή, {$a->committable} από τις οποίες μπορούν να γίνουν αποδεκτές';
$string['stagesubmit'] = 'Στείλτε τις συμβολοσειρές στους συντηρητές του πακέτου γλώσσας';
$string['stagetoolopen'] = 'Έτοιμος προς υποβολή';
$string['stagetranslation'] = 'Μετάφραση';
$string['stagetranslation_help'] = 'Εμφανίζει την προς υποβολή μετάφραση. Το χρώμα υπόβαθρου του κελιού σημαίνει:

* Πράσινο - προστέθηκε μια μετάφραση που έλειπε και επιτρέπεται να υποβληθεί.
* Κίτρινο - τροποποιήθηκε μία συμβολοσειρά και επιτρέπεται να υποβληθεί η αλλαγή.
* Μπλε - τροποποιήθηκε η μετάφραση ή προστέθηκε μια μετάφραση που έλειπε αλλά δεν επιτρέπεται να υποβληθεί στην γλώσσα αυτή.
* Χωρίς χρώμα - η μετάφραση προς υποβολή είναι ίδια με την τρέχουσα και έτσι δεν θα υποβληθεί.';
$string['stageunstageall'] = 'Ακύρωση όλων';
$string['standardcomponents'] = 'Λίστα τυπικών στοιχείων λογισμικού';
$string['standardcomponents_desc'] = 'Λίστα των  τυπικών στοιχείων λογισμικού του Moodle. Ο προαιρετικός αριθμός υποδηλώνει τον κωδικό έκδοσης, τη στιγμή που το στοιχείο έγινε τυπικό. Εάν ο αριθμός είναι αρνητικός, δείχνει την τελευταία έκδοση όταν το στοιχείο ήταν ακόμη τυπικό. Μπορούν να είναι παρόντες και οι δύο αριθμοί. Παράδειγμα:

* «mod_workshop» - χωρίς εκδόσεις, αυτό το στοιχείο θεωρείται ως τυπικό σε όλες τις εκδόσεις
* «report_infectedfiles 310» - υποδεικνύει ένα στοιχείο που πρέπει να θεωρηθεί ως βασικό ξεκινώντας από το Moodle έκδοσης 3.10
* «theme_clean 25 -36» - τυπικό στοιχείο που ξεκινά από το Moodle έκδοσης 2.5 έως και 3.6';
$string['stashactions'] = 'Αποθηκεύστε την εργασία σε εξέλιξη';
$string['stashactions_help'] = 'Ένα πρόχειρο αποθηκεύει τις τρέχουσες προς υποβολή συμβολοσειρές. Τα πρόχειρα μπορούν να υποβληθούν στους επίσημους συντηρητές του πακέτου γλώσσας για να περιληφθούν στο πακέτο γλώσσας.';
$string['stashapply'] = 'Προς υποβολή αντιγράφου';
$string['stashautosave'] = 'Αυτόματα δημιουργημένο εφεδρικό πρόχειρο';
$string['stashautosave_help'] = 'Αυτό το πρόχειρο περιέχει το πιο πρόσφατο στιγμιότυπο των Προς υποβολή. Μπορείτε να το χρησιμοποιήσετε ως εφεδρικό αντίγραφο, για παράδειγμα, όταν όλες οι συμβολοσειρές ακυρωθούν κατά λάθος. Χρησιμοποιήστε την ενέργεια «Προς υποβολή αντιγράφου» για να αντιγράψετε όλες τις συμβολοσειρές από αυτό το πρόχειρο προς τα Προς υποβολή (θα υπερισχύσει τυχόν άλλων ήδη στα Προς υποβολή).';
$string['stashcomponents'] = '<span>Στοιχεία λογισμικού:</span> {$a}';
$string['stashdownload'] = 'Λήψη';
$string['stashdrop'] = 'Απόρριψη';
$string['stashdropconfirm'] = 'Θέλετε πραγματικά να διαγράψετε οριστικά το αποθηκευμένο πρόχειρο <em>«{$a}»</em>;';
$string['stashes'] = 'Πρόχειρα';
$string['stashlanguages'] = '<span>Γλώσσες:</span> {$a}';
$string['stashpop'] = 'Προς υποβολή';
$string['stashpush'] = 'Αποθήκευση όλων των προς υποβολή συμβολοσειρών σε ένα νέο πρόχειρο';
$string['stashstrings'] = '<span>Αριθμός συμβολοσειρών:</span> {$a}';
$string['stashsubmit'] = 'Υποβολή στους συντηρητές';
$string['stashsubmitdetails'] = 'Λεπτομέρειες υποβολής';
$string['stashsubmitmessage'] = 'Μήνυμα';
$string['stashsubmitsubject'] = 'Θέμα';
$string['stashtitle'] = 'Τίτλος προχείρου';
$string['stashtitledefault'] = 'Εργασία σε εξέλιξη - {$a->time}';
$string['stdvernotebetween'] = 'Τυπικό από {$a->from} έως {$a->to}';
$string['stdvernotefrom'] = 'Τυπικό από {$a->from}';
$string['stdvernoteto'] = 'Τυπικό έως {$a->to}';
$string['stringhistory'] = 'ιστορικό';
$string['strings'] = 'Συμβολο-<br />σειρές';
$string['stringversionnotlatest'] = 'υπάρχει πιο πρόσφατη έκδοση';
$string['submitting'] = 'Υποβολή συνεισφοράς...';
$string['submitting_help'] = 'Εδώ γίνεται η υποβολή της συνεισφοράς στους επίσημους συντηρητές του πακέτου γλώσσας. Θα έχουν την δυνατότητα να περιλάβουν την εργασία σας στα δικά τους αιτήματα προς υποβολή, να την εξετάσουν και αν όλα είναι εντάξει να την κάνουν αποδεκτή. Παρακαλούμε, περιγράψτε τους στο μήνυμά σας την εργασία σας και γιατί θα θέλατε να την συμπεριλάβουν.';
$string['targetversion'] = 'Έκδοση κλάδου-στόχου';
$string['timeline'] = 'Χρονολόγιο';
$string['timelineheading'] = 'Χρονολόγιο συμβολοσειράς: {$a->component} | {$a->strname}';
$string['translatortool'] = 'Μεταφραστής';
$string['translatortoolopen'] = 'Άνοιγμα μεταφραστή AMOS';
$string['translatortranslation'] = 'Μετάφραση';
$string['translatortranslation_help'] = 'Κάνετε κλικ στο κελί για να το μετατρέψετε σε επεξεργαστή κειμένου. Εισαγάγετε την μετάφραση και κάνετε κλικ εκτός κελιού για να προωθήσετε την μετάφραση στα προς υποβολή. Το χρώμα στο υπόβαθρο του κελιού σημαίνει:

* Πράσινο - η συμβολοσειρά είναι ήδη μεταφρασμένη, μπορείτε αν χρειαστεί, να τροποποιήσετε την μετάφραση.
* Κίτρινο - η συμβολοσειρά μπορεί να είναι απαρχαιωμένη. Η αγγλική αρχική πιθανώς τροποποιήθηκε αφού η συμβολοσειρά είχε ήδη μεταφραστεί.
* Κόκκινο - η συμβολοσειρά δεν έχει μεταφραστεί ακόμη.
* Μπλε - έχετε τροποποιήσει την μετάφραση και είναι τώρα προς υποβολή.
* Γκρι - Το AMOS δεν μπορεί να χρησιμοποιηθεί για να μεταφράσει αυτή τη συμβολοσειρά . Για παράδειγμα συμβολοσειρές για το Moodle 1.9 πρέπει να τροποποιούνται μόνο μέσω της παλαιότερου τύπου πρόσβασης σε CSV αρχείο.

Οι συντηρητές πακέτων γλώσσας μπορούν να δουν ένα μικρό κόκκινο σύμβολο στη γωνία των κελιών τα οποία μπορούν να κάνουν αποδεκτά.';
$string['typecontrib'] = 'Μη τυπικά πρόσθετα';
$string['typecontribbadge'] = 'Μη τυπικό';
$string['typecore'] = 'Βασικά υποσυστήματα (πυρήνα)';
$string['typecorebadge'] = 'Βασικό';
$string['typestandard'] = 'Τυπικά πρόσθετα';
$string['typestandardbadge'] = 'Τυπικό';
$string['unableenfixaddon'] = 'Διορθώσεις αγγλικών επιτρέπονται μόνο για τα τυπικά πρόσθετα';
$string['unableenfixcountries'] = 'Τα ονόματα χωρών αντιγράφηκαν από το πρότυπο ISO 3166-1 (στα αγγλικά και από την Βικιπαίδεια στα ελληνικά)';
$string['unableunmaintained'] = 'Το πακέτο γλώσσας «{$a}» δεν έχει αυτή τη στιγμή συντηρητές, οπότε δεν μπορούν να γίνουν δεκτές συνεισφορές μεταφραστών. Παρακαλούμε σκεφτείτε αν θέλετε να γίνετε εθελοντικά συντηρητής πακέτου γλώσσας «{$a}».';
$string['unstage'] = 'Ακύρωση';
$string['unstageconfirm'] = 'Σίγουρα;';
$string['unstageconfirmlong'] = '<p>Θα ακυρώσετε τη μετάφραση της συμβολοσειράς με αναγνωριστικό <code>{$a->stringid}</code>, <code> του στοιχείου λογισμικού {$a->compoonent}</code>, του πακέτου γλώσσας <code>{$a->language}</code>.</p><p>Είστε βέβαιοι;</p>';
$string['unstaging'] = 'Ακύρωση...';
$string['untranslate'] = 'διαγραφή';
$string['untranslateconfirm'] = '<p>Πρόκειται να διαγράψετε την υπάρχουσα μετάφραση της συμβολοσειράς με αναγνωριστικό <code>{$a->stringid}</code>, του στοιχείου λογισμικού <code>{$a->component}</code>, από την έκδοση <code>{$a->since}</code> και μετά του πακέτου γλώσσας <code>{$a->language}</code>.</p><p>Είστε σίγουροι;</p>';
$string['untranslatetitle'] = 'Διαγραφή μετάφρασης από το πακέτο γλώσσας';
$string['untranslating'] = 'Διαγραφή μετάφρασης...';
$string['userdefaultreset'] = 'Επαναφορά στις προεπιλογές μου';
$string['userdefaultsave'] = 'Αποθήκευση ως προεπιλογές μου';
$string['version'] = 'Έκδοση';
