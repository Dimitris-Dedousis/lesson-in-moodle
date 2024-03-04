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
 * Strings for component 'enrol_authorize', language 'el', version '4.3'.
 *
 * @package     enrol_authorize
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adminacceptccs'] = 'Ποιά είδη πιστωτικών καρτών θα γίνονται δεκτά;';
$string['adminaccepts'] = 'Επιλέξτε επιτρεπόμενη μέθοδο πληρωμής και τον τύπο τους';
$string['adminauthorizeccapture'] = 'Προεπισκόπηση παραγγελίας και ρυθμίσεις χρονοπρογραμματισμένης δέσμευσης';
$string['adminauthorizeemail'] = 'Ρυθμίσεις αποστολής ηλε.ταχυδρομείου';
$string['adminauthorizesettings'] = 'Ρυθμίσεις λογαριασμού εμπόρου Authorize.Net';
$string['adminauthorizewide'] = 'Ρυθμίσεις για όλο τον ιστότοπο';
$string['adminconfighttps'] = 'Παρακαλούμε βεβαιωθείτε ότι έχετε <a href="{$a->url}">«ενεργοποιήσει το loginhttps»</a> για τη χρήση αυτής της υπομονάδας λογισμικού<br />στη σελίδα Διαχείριση >> Μεταβλητές >> Ασφάλεια >> Ασφάλεια HTTP.';
$string['adminconfighttpsgo'] = 'Πηγαίνετε στην <a href="{$a->url}">ασφαλή σελίδα</a> για ρύθμιση αυτής της υπομονάδας λογισμικού.';
$string['admincronsetup'] = 'Το σενάριο συντήρησης cron.php δεν έχει εκτελεστεί για τουλάχιστον 24 ώρες.<br />Ο χρονοπρογραμματισμός μέσω cron πρέπει να ενεργοποιηθεί εάν θέλετε να χρησιμοποιήσετε τη δυνατότητα χρονοπρογραμματισμένης δέσμευσης.<br /><b>Ενεργοποιήστε</b> το «Πρόσθετο Authorize.Net» και <b>ρυθμίστε την cron</b> κατάλληλα, ή <b>αποεπιλέξτε/ξετικάρετε το an_review</b> ξανά.<br />Εάν απενεργοποιήσετε την προγραμματισμένη δέσμευση, οι συναλλαγές θα ακυρώνονται εκτός εάν τις εξετάσετε μέσα σε 30 ημέρες.<br />Επιλέξτε/τικάρετε <b>το an_review</b> και εισάγετε <b>«0» στο πεδίο an_capture_day</b><br />εάν θέλετε να δέχεστε/απορρίπτετε πληρωμές <b>χειροκίνητα</b> μέσα σε 30 μέρες.';
$string['adminemailexpiredsort'] = 'Όταν ο αριθμός των παραγγελιών που εκκρεμούν και λήγουν αποστέλλονται στους διδάσκοντες με ηλε.ταχυδρομείο, τί είναι σημαντικό;';
$string['adminemailexpiredsortcount'] = 'Πλήθος παραγγελιών';
$string['adminemailexpiredsortsum'] = 'Συνολικό ποσό';
$string['adminemailexpsetting'] = '(0=απενεργοποίηση αποστολής ηλε.ταχυδρομείου, προεπιλογή=2, μέγιστο=5)<br />(Ρυθμίσεις χειροκίνητης δέσμευσης για την αποστολή μηνυμάτων ηλε.ταχυδρομείου: cron=ενεργοποιημένο, an_review=επιλεγμένο, an_capture_day=0, an_emailexpired=1-5)';
$string['adminhelpcapturetitle'] = 'Ημέρα χρονοπρογραμματισμένης δέσμευσης';
$string['adminhelpreviewtitle'] = 'Προεπισκόπηση παραγγελίας';
$string['adminneworder'] = 'Αγαπητέ διαχειριστή,
λάβατε μια νέα παραγγελία που εκκρεμεί:

ID Παραγγελίας: {$a->orderid}
ID Συναλλαγής: {$a->transid}
Χρήστης: {$a->user}
Μάθημα: {$a->course}
Ποσό: {$a->amount}

ΕΝΕΡΓΟΠΟΙΗΜΕΝΗ Η ΧΡΟΝΟΠΡΟΓΡΑΜΜΑΤΙΣΜΕΝΗ ΔΕΣΜΕΥΣΗ;: {$a->acstatus}

Εάν η προγραμματισμένη δέσμευση είναι ενεργοποιημένη, η πιστωτική κάρτα θα δεσμευθεί/χρεωθεί στις {$a->captureon} και στη συνέχεια ο χρήστης θα εγγραφεί στο μάθημα, ειδάλλως θα λήξει στις {$a->expireon} και δε θα μπορεί να χρεωθεί μετά από αυτήν τη μέρα.

Μπορείτε επίσης να δέχεστε/απορρίπτετε την πληρωμή για εγγραφή του μαθητή άμεσα ακολουθώντας αυτόν τον σύνδεσμο: {$a->url}';
$string['adminnewordersubject'] = '{$a->course}: Νέα παραγγελία που εκκρεμεί: {$a->orderid}';
$string['adminpendingorders'] = 'Έχετε απενεργοποιήσει τη δυνατότητα χρονοπρογραμματισμένης δέσμευσης.<br />Συνολικά {$a->count} συναλλαγές σε κατάσταση «Επιβεβαιωμένη/Αναμένεται δέσμευση» θα ακυρωθούν εκτός εάν τις ελέγξετε.<br />Για την αποδοχή/απόρριψη πληρωμών, πηγαίνετε στη σελίδα <a href=\'{$a->url}\'>Διαχείρισης Πληρωμών</a>.';
$string['adminteachermanagepay'] = 'Οι διδάσκοντες μπορούν να διαχειρίζονται τις πληρωμές του μαθήματος.';
$string['allpendingorders'] = 'Όλες οι παραγγελίες που εκκρεμούν';
$string['amount'] = 'Ποσό';
$string['anauthcode'] = 'Αποκτήστε authcode';
$string['anauthcodedesc'] = 'Αν η πιστωτική κάρτα ενός χρήστη δεν μπορεί να δεσμευθεί/χρεωθεί απευθείας μέσω διαδικτύου, αποκτήστε τον κωδικό εξουσιοδότησης μέσω τηλεφώνου από την τράπεζα του πελάτη.';
$string['anavs'] = 'Σύστημα επαλήθευσης διεύθυνσης (AVS)';
$string['anavsdesc'] = 'Επιλέξτε το αν έχετε ενεργοποιήσει το σύστημα επαλήθευσης διεύθυνσης (AVS) στον λογαριασμό εμπόρου Authorize.Net. Αυτό απαιτεί πεδία διευθύνσεων όπως οδός, πολιτεία, χώρα και Τ.Κ. όταν ο χρήστης συμπληρώνει τη φόρμα πληρωμής.';
$string['ancaptureday'] = 'Ημέρα δέσμευσης/χρέωσης';
$string['ancapturedaydesc'] = 'Δεσμεύστε/χρεώστε (αποδοχή χρέωσης) αυτόματα την πιστωτική κάρτα, εκτός εάν ένας διδάσκων ή διαχειριστής ελέγξει την παραγγελία εντός των καθορισμένων ημερών. Η CRON ΠΡΕΠΕΙ ΝΑ ΕΙΝΑΙ ΕΝΕΡΓΟΠΟΙΗΜΕΝΗ.<br />(0 ημέρες σημαίνει ότι θα απενεργοποιήσει την εντολή χρονοπρογραμματισμένης δέσμευσης/χρέωσης, επίσης σημαίνει χειροκίνητη εξέταση της εντολής/παραγγελίας από διδάσκοντα ή διαχειριστή. Η συναλλαγή θα ακυρωθεί εάν απενεργοποιήσετε την προγραμματισμένη δέσμευση/χρέωση ή αν δεν την ελέγξετε εντός 30 ημερών.)';
$string['anemailexpired'] = 'Ειδοποίηση λήξης';
$string['anemailexpireddesc'] = 'Αυτό είναι χρήσιμο για τη «χειροκίνητη δέσμευση/χρέωση». Οι διαχειριστές ενημερώνονται για τον καθορισμένο αριθμό ημερών πριν από την εκπνοή των εκκρεμών εντολών.';
$string['anemailexpiredteacher'] = 'Ειδοποίηση λήξης - Διδάσκων';
$string['anemailexpiredteacherdesc'] = 'Εάν έχετε ενεργοποιήσει τη «χειροκίνητη δέσμευση/χρέωση» (βλέπε παραπάνω) και οι διδάσκοντες μπορούν να διαχειριστούν τις πληρωμές, μπορούν επίσης να ειδοποιηθούν για τις λήγουσες εντολές. Αυτό θα στείλει ένα μήνυμα ηλε.ταχυδρομείου σε κάθε διδάσκοντα του μαθήματος σχετικά με τον αριθμό των εκκρεμών παραγγελιών που λήγουν.';
$string['anlogin'] = 'Authorize.Net: Όνομα χρήστη';
$string['anpassword'] = 'Authorize.net: Κωδικός πρόσβασης';
$string['anreferer'] = 'Παραπέμπων';
$string['anrefererdesc'] = 'Ορίστε τον referer (αναφορέας, αναφέρων) διευθύνσεων URL αν τον έχετε δηλώσει στο λογαριασμό εμπόρου του Authorize.Net. Αυτό θα στείλει μια γραμμή «Referer: URL» ενσωματωμένη στο αίτημα ιστού.';
$string['anreview'] = 'Εξέταση';
$string['anreviewdesc'] = 'Εξέταση της παραγγελίας πριν την επεξεργασία της πιστωτικής κάρτας.';
$string['antestmode'] = 'Δοκιμαστική κατάσταση λειτουργίας';
$string['antestmodedesc'] = 'Εκτέλεση συναλλαγών μόνο σε λειτουργία δοκιμής (δεν θα ληφθούν χρήματα)';
$string['antrankey'] = 'Authorize.Net: Κλειδί συναλλαγής';
$string['approvedreview'] = 'Εγκεκριμένη προεπισκόπηση';
$string['authcaptured'] = 'Εξουσιοδότηση / Δέσμευση';
$string['authcode'] = 'Κωδικός εξουσιοδότησης';
$string['authorize:config'] = 'Διαμόρφωση περιπτώσεων εγγραφής από Authorize.Net';
$string['authorize:manage'] = 'Διαχείριση εγγεγραμένων χρηστών';
$string['authorize:managepayments'] = 'Διαχείριση πληρωμών';
$string['authorize:unenrol'] = 'Απεγγραφή χρηστών από το μάθημα';
$string['authorize:unenrolself'] = 'Απεγγραφή του ιδίου από το μάθημα';
$string['authorize:uploadcsv'] = 'Ανέβασμα αρχείου CSV';
$string['authorizedpendingcapture'] = 'Εξουσιοδότηση / Εκκρεμεί δέσμευση';
$string['authorizeerror'] = 'Σφάλμα Authorize.Net: {$a}';
$string['avsa'] = 'Η διεύθυνση (οδός) ταιρίαζει, ο Τ.Κ. δεν ταιριάζει';
$string['avsb'] = 'Δεν παρέχονται πληροφορίες διεύθυνσης';
$string['avse'] = 'Σφάλμα συστήματος επιβεβαίωσης διεύθυνσης (Address Verification System)';
$string['avsg'] = 'Τράπεζα εκτός Η.Π.Α. έκδοσης καρτών';
$string['avsn'] = 'Η διεύθυνση (οδός) δεν ταιρίαζει, ο Τ.Κ. δεν ταιριάζει';
$string['avsp'] = 'Το σύστημα επιβεβαίωσης διεύθυνσης (Address Verification System) δεν είναι εφαρμόσιμο';
$string['avsr'] = 'Επανάληψη - σύστημα μη διαθέσιμο ή καθυστέρηση εκτός ορίου';
$string['avsresult'] = 'Αποτέλεσμα AVS: {$a}';
$string['avss'] = 'Η υπηρεσία δεν υποστηρίζεται από τον εκδότη';
$string['avsu'] = 'Δεν είναι διαθέσιμες οι πληροφορίες διεύθυνσης';
$string['avsw'] = '9-ψήφιος Τ.Κ. ταιριάζει, η διεύθυνση (οδός) δεν ταιρίαζει';
$string['avsx'] = '9-ψήφιος Τ.Κ. ταιριάζει, η διεύθυνση (οδός) ταιρίαζει';
$string['avsy'] = '5-ψήφιος Τ.Κ. ταιριάζει, η διεύθυνση (οδός) ταιρίαζει';
$string['avsz'] = '5-ψήφιος Τ.Κ. ταιριάζει, η διεύθυνση (οδός) δεν ταιρίαζει';
$string['canbecredit'] = 'Επιστροφή χρημάτων από {$a->upto}';
$string['cancelled'] = 'Ακυρώθηκε';
$string['capture'] = 'Δέσμευση';
$string['capturedpendingsettle'] = 'Αποπληρωμή Δέσμευσης / Εκκρεμότητας';
$string['capturedsettled'] = 'Δέσμευση / Αποπληρωμή';
$string['captureyes'] = 'Θα γίνει δέσμευση του ποσού μέσω της πιστωτικής κάρτας και ο μαθητής θα εγγραφεί στο μάθημα. Είστε σίγουροι;';
$string['cccity'] = 'Πόλη';
$string['ccexpire'] = 'Ημερομηνία λήξης';
$string['ccexpired'] = 'Η πιστωτική κάρτα έχει λήξει';
$string['ccinvalid'] = 'Μη έγκυρος αριθμός πιστωτικής κάρτας';
$string['cclastfour'] = 'Τελευταία τέσσερα ψηφία πιστωτικής κάρτας';
$string['ccno'] = 'Αριθμός πιστωτικής κάρτας';
$string['ccstate'] = 'Πολιτεία';
$string['cctype'] = 'Τύπος πιστωτικής κάρτας';
$string['ccvv'] = 'Επιβεβαίωση πιστωτικής κάρτας';
$string['ccvvhelp'] = 'Δείτε το πίσω μέρος της κάρτας (τελευταία 3 ψηφία)';
$string['choosemethod'] = 'Εάν γνωρίζετε το κλειδί εγγραφής, εισάγετέ το παρακάτω.<br /> Ειδάλλως, θα πρέπει να πληρώσετε για αυτό το μάθημα.';
$string['chooseone'] = 'Συμπληρώστε ένα ή και τα δύο από τα παρακάτω πεδία. Δεν εμφανίζεται ο κωδικός.';
$string['cost'] = 'Κόστος';
$string['costdefaultdesc'] = '<strong>Στις ρυθμίσεις μαθήματος, εισάγετε -1 </strong> για να χρησιμοποιήσετε το προεπιλεγμένο κόστος στο πεδίο κόστος του μαθήματος.';
$string['currency'] = 'Νόμισμα';
$string['cutofftime'] = 'Χρόνος αποκοπής συναλλαγής. ((Πότε, το αργότερο, μπορεί να ξεκινήσει διακανονισμός συναλλαγής.))';
$string['cutofftimedesc'] = 'Χρόνος υποχρεωτικής διακοπής συναλλαγής. Έως πότε να μπορεί να επιλεγεί συναλλαγή για διακανονισμό;';
$string['dataentered'] = 'Δεδομένα που εισήχθησαν';
$string['delete'] = 'Κατέστρεψε';
$string['description'] = 'Το άρθρωμα Authorize.Net, σας επιτρέπει να ρυθμίζετε μαθήματα επί πληρωμή μέσω παρόχων πληρωμής. Υπάρχουν δύο τρόποι για να ορίσετε το κόστος του μαθήματος (1) κόστος ιστοτόπου, ως προεπιλογή για ολόκληρο τον ιστότοπο ή (2) ρύθμιση ανά μάθημα, που μπορείτε να ορίσετε ξεχωριστά για κάθε μάθημα. Το κόστος στη ρύθμιση ανά μάθημα υπερισχύει του κόστους του ιστοτόπου.';
$string['echeckabacode'] = 'Αριθμός ΑΒΑ Τράπεζας';
$string['echeckaccnum'] = 'Αριθμός τραπεζικού λογαριασμού';
$string['echeckacctype'] = 'Τύπος τραπεζικού λογαριασμού';
$string['echeckbankname'] = 'Όνομα τράπεζας';
$string['echeckbusinesschecking'] = 'Έλεγχος επιχείρησης';
$string['echeckchecking'] = 'Έλεγχος';
$string['echeckfirslasttname'] = 'Ιδιοκτήτης λογαριασμού τράπεζας';
$string['echecksavings'] = 'Αποταμιεύσεις';
$string['enrolenddate'] = 'Ημερομηνία λήξης';
$string['enrolenddaterror'] = 'Η ημερομηνία λήξης της εγγραφής δεν μπορεί να είναι προγενέστερη της ημερομηνίας έναρξης';
$string['enrolname'] = 'Πύλη πληρωμής Authorize.Net';
$string['enrolperiod'] = 'Διάρκεια εγγραφής';
$string['enrolstartdate'] = 'Ημερομηνία έναρξης';
$string['expired'] = 'Ληγμένο';
$string['expiremonth'] = 'Μήνας λήξης';
$string['expireyear'] = 'Έτος λήξης';
$string['firstnameoncard'] = 'Όνομα στην κάρτα';
$string['haveauthcode'] = 'Έχω ήδη έναν κωδικό εξουσιοδότησης';
$string['howmuch'] = 'Πόσο;';
$string['httpsrequired'] = 'Με λύπη σας πληροφορούμε πως το αίτημα σας δεν δύναται να επεξεργασθεί αυτήν τη στιγμή. Η ρύθμιση της σελίδας δεν έγινε σωστά.<br /><br />Παρακαλούμε μην εισάγετε τον αριθμό της κάρτας σας, εκτός εάν δείτε μια κίτρινη κλειδαριά στην κάτω περιοχή του browser. Εάν το σύμβολο εμφανισθεί, σημαίνει πως η σελίδα κρυπτογραφεί όλα τα δεδομένα που αποστέλλονται μεταξύ πελάτη και εξυπηρετητή. Δηλαδή, η συναλλαγή μεταξύ των δύο υπολογιστών είναι προστατευμένη, έτσι ο αριθμός της κάρτας σας δεν μπορεί να χρησιμοποιηθεί για δέσμευση/χρέωση χρηματικών ποσών στο διαδίκτυο.';
$string['invalidaba'] = 'Μη έγκυρος αριθμός ABA';
$string['invalidaccnum'] = 'Μη έγκυρος αριθμός λογαριασμού';
$string['invalidacctype'] = 'Μη έγκυρος τύπος λογαριασμού';
$string['isbusinesschecking'] = 'Έχει τον έλεγχο των επιχειρήσεων?';
$string['lastnameoncard'] = 'Επώνυμο στην κάρτα';
$string['logindesc'] = 'Αυτή η επιλογή πρέπει να είναι ενεργή.<br /><br />Παρακαλούμε βεβαιωθείτε ότι έχετε ενεργοποιήσει το <a href="{$a->url}">loginhttps</a> στο Διαχειριστής>> Μεταβλητές >> Ασφάλεια.<br /><br />';
$string['logininfo'] = 'Κατά τη διαμόρφωση του λογαριασμού σας στο Authorize.Net, το όνομα σύνδεσης απαιτείται και πρέπει να πληκτρολογήσετε <strong>είτε</strong> το κλειδί συναλλαγής <strong>είτε</strong> τον κωδικό πρόσβασης στο κατάλληλο πλαίσιο. Σας συνιστούμε να εισαγάγετε το κλειδί συναλλαγής λόγω των προφυλάξεων ασφαλείας.';
$string['messageprovider:authorize_enrolment'] = 'Μηνύματα εγγραφής στο Authorize.Net';
$string['methodcc'] = 'Πιστωτική κάρτα';
$string['methodccdesc'] = 'Επιλέξτε πιστωτική κάρτα και αποδεκτούς τύπους παρακάτω';
$string['methodecheck'] = 'eCheck (ACH)';
$string['methodecheckdesc'] = 'Επιλέξτε eCheck και αποδεκτούς τύπους παρακάτω';
$string['missingaba'] = 'Λείπει ο αριθμός ABA';
$string['missingaddress'] = 'Λείπει η διεύθυνση';
$string['missingbankname'] = 'Λείπει το όνομα της τράπεζας';
$string['missingcc'] = 'Λείπει ο αριθμός της κάρτας';
$string['missingccauthcode'] = 'Λείπει ο κωδικός εξουσιοδότησης';
$string['missingccexpiremonth'] = 'Λείπει ο μήνας λήξης';
$string['missingccexpireyear'] = 'Λείπει το έτος λήξης';
$string['missingcctype'] = 'Λείπει ο τύπος της κάρτας';
$string['missingcvv'] = 'Λείπει ο αριθμός επιβεβαίωσης';
$string['missingzip'] = 'Λείπει ο ταχυδρομικός κωδικός';
$string['mypaymentsonly'] = 'Εμφάνιση μόνο των πληρωμών μου';
$string['nameoncard'] = 'Όνομα στην κάρτα';
$string['new'] = 'Νέο';
$string['nocost'] = 'Δεν υπάρχει κανένα κόστος που σχετίζεται με την εγγραφή σε αυτό το μάθημα μέσω του Authorize.Net!';
$string['noreturns'] = 'Χωρίς επιστροφή!';
$string['notsettled'] = 'Δεν κανονίστηκε';
$string['orderdetails'] = 'Λεπτομέρειες παραγγελίας';
$string['orderid'] = 'Αναγνριστικό Παραγγελίας';
$string['paymentmanagement'] = 'Διαχείριση πληρωμής';
$string['paymentmethod'] = 'Μέθοδος πληρωμής';
$string['paymentpending'] = 'Η πληρωμή σας εκκρεμεί για αυτό το μάθημα με τον αριθμό παραγγελίας {$a->orderid}. Δείτε <a href=\'{$a->url}\'>Λεπτομέρειες Παραγγελίας</a>.';
$string['pendingecheckemail'] = 'Αγαπητέ διαχειριστή,
Υπάρχουν {$a->count} ηλεκτρονικά echecks που εκκρεμούν τώρα και πρέπει να ανεβάσετε ένα αρχείο csv για να εγγραφούν οι χρήστες.
Πατήστε στο σύνδεσμο και διαβάστε τη βοήθεια στη σελίδα που εμφανίζεται: {$a->url}';
$string['pendingechecksubject'] = '{$a->course}: Εκκρεμούν echecks ({$a->count})';
$string['pendingordersemail'] = 'Αγαπητέ διαχειριστή,
{$a->pending} συναλλαγές για το μάθημα «{$a->course}» θα λήξουν εάν δεν αποδεχτείτε την πληρωμή μέσα σε {$a->days} μέρες.
Αυτό είναι ένα προειδοποιητικό μήνυμα, επειδή δεν έχετε ενεργοποιήσει την χρονοπρογραμματισμένη-δέσμευση. Αυτό σημαίνει πως πρέπει να αποδεχτείτε ή να αρνηθείτε τις πληρωμές χειροκίνητα.
Για την αποδοχή ή άρνηση πληρωμών πηγαίνετε στο:
{$a->url}
Για την ενεργοποίηση της προγραμματισμένης-δέσμευσης, δηλαδή για να μην λαμβάνεται προειδοποιητικά μηνύματα, πηγαίνετε στο:
{$a->enrolurl}';
$string['pendingordersemailteacher'] = 'Αγαπητέ καθηγητή,
{$a->pending} συναλλαγές είχαν κόστος {$a->currency} {$a->sumcost} για το μάθημα «{$a->course}»
θα λήξουν εάν δεν δεχτείτε την πληρωμή σε {$a->days} ημέρες.
Πρέπει να δεχτείτε ή να αρνηθείτε τις πληρωμές χειροκίνητα γιατί ο διαχειριστής δεν έχει ενεργοποιήσει την χρονοπρογραμματισμένη-δέσμευση.
{$a->url}';
$string['pendingorderssubject'] = 'ΠΡΟΣΟΧΗ: {$a->course}, {$a->pending} παραγελλίες θα λήξουν μέσα σε {$a->days} μέρες.';
$string['pluginname'] = 'Authorize.Net';
$string['reason11'] = 'Μια διπλότυπη συναλλαγή έχει υποβληθεί.';
$string['reason13'] = 'Το ID εισόδου του εμπόρου είναι μη έγκυρο ή ο λογαριασμός είναι ανενεργός.';
$string['reason16'] = 'Δεν βρέθηκε η συναλλαγή.';
$string['reason17'] = 'Ο έμπορος δεν δέχεται αυτού του τύπου την πιστωτική κάρτα.';
$string['reason245'] = 'Αυτός ο τύπος eCheck δεν επιτρέπεται όταν γίνεται χρήση της φόρμας πληρωμής στην πύλη πληρωμής';
$string['reason246'] = 'Αυτός ο τύπος eCheck δεν επιτρέπεται.';
$string['reason27'] = 'Η συναλλαγή κατέληξε σε αποτυχημένο συνδυασμό AVS. Η διεύθυνση που παρέχθηκε δεν ταιριάζει στη διεύθυνση χρέωσης του ιδιοκτήτη της κάρτας.';
$string['reason28'] = 'Ο έμπορος δεν δέχεται αυτού του τύπου την πιστωτική κάρτα.';
$string['reason30'] = 'Οι ρυθμίσεις για τον επεξεργαστή είναι μη-έγκυρες. Επικοινωνήστε με τον πάροχο υπηρεσιών του εμπόρου.';
$string['reason39'] = 'Ο κωδικός συναλλάγματος δεν είναι έγκυρος, δεν υποστηρίζεται, δεν επιτρέπεται από τον έμπορο ή δεν έχει ισοτιμία.';
$string['reason43'] = 'Ο έμπορος διαμορφώθηκε εσφαλμένα στον επεξεργαστή. Καλέστε τον πάροχο υπηρεσιών  του εμπόρου σας.';
$string['reason44'] = 'Η συναλλαγή απορρίφθηκε. Σφάλμα στο φίλτρο του κωδικού της κάρτας!';
$string['reason45'] = 'Η συναλλαγή απορρίφθηκε. Σφάλμα στο φίλτρο του AVS ή του κωδικού της κάρτας.';
$string['reason47'] = 'Το ποσό που απαιτείται για τον διακανονισμό δεν μπορεί να είναι μεγαλύτερο από το αρχικό ποσό που εξουσιοδοτήθηκε.';
$string['reason5'] = 'Απαιτείται ένα έγκυρο ποσό.';
$string['reason50'] = 'Η συναλλαγή αναμένει διακανονισμό και δεν μπορεί να επιστραφεί.';
$string['reason51'] = 'Το σύνολο των πιστωτικών μονάδων για αυτή την συναλλαγή είναι μεγαλύτερο από το αρχικό ποσό της συναλλαγής.';
$string['reason54'] = 'Η αναφερόμενη συναλλαγή δεν ικανοποιεί τα κριτήρια για την έκδοση πιστωτικής μονάδας.';
$string['reason55'] = 'Το πλήθος των πιστωτικών μονάδων για την αναφερόμενη συναλλαγή ξεπερνά το αρχικό ποσό χρέωσης.';
$string['reason56'] = 'Αυτός ο έμπορος δέχεται συναλλαγές eCheck (ACH) μόνο. Δε γίνονται δεκτές συναλλαγές με πιστωτικές κάρτες.';
$string['refund'] = 'Επιστροφή χρημάτων';
$string['refunded'] = 'Επεστράφησαν χρήματα';
$string['returns'] = 'Επιστροφές';
$string['reviewfailed'] = 'Ο έλεγχος απέτυχε';
$string['reviewnotify'] = 'Η πληρωμή σας θα ελεγχθεί. Να αναμένετε email μέσα σε λίγες ημέρες από τον διδάσκοντα.';
$string['sendpaymentbutton'] = 'Αποστολή πληρωμής';
$string['settled'] = 'Κανονίστηκε';
$string['settlementdate'] = 'Ημερομηνία διακανονισμού';
$string['shopper'] = 'Καταναλωτής';
$string['status'] = 'Να επιτρέπονται οι εγγραφές μέσω Authorize.Net';
$string['subvoidyes'] = 'Η συναλλαγή, το ποσό της οποίας επιστράφηκε, ({$a->transid}) θα ακυρωθεί και αυτό θα προκαλέσει πίστωση {$a->amount} στο λογαριαμό σας. Είστε σίγουρος/η;';
$string['tested'] = 'Δοκιμασμένο';
$string['testmode'] = '[ΦΑΣΗ ΔΟΚΙΜΗΣ]';
$string['testwarning'] = 'Η σύλληψη/ακύρωση/επιστροφή φαίνεται να λειτουργούν στη φάση δοκιμής, αλλά η εγγραφή δεν ενημερώθηκε ή δεν εισήχθη στη βάση δεδομένων.';
$string['transid'] = 'ID Συναλλαγής';
$string['underreview'] = 'Υπό εξέταση';
$string['unenrolselfconfirm'] = 'Θέλετε πραγματικά να αυτο-απεγγραφείτε από το μάθημα «{$a}»;';
$string['unenrolstudent'] = 'Διαγραφή μαθητή;';
$string['uploadcsv'] = 'Ανεβάστε ένα αρχείο CSV';
$string['usingccmethod'] = 'Εγγραφή με χρήση <a href="{$a->url}"><strong> Πιστωτικής Κάρτα</strong></a>';
$string['usingecheckmethod'] = 'Εγγραφή με χρήση <a href="{$a->url}"><strong> eCheck </strong></a>';
$string['verifyaccount'] = 'Επαληθεύστε τον λογαριασμό Authorize.Net του εμπόρου σας.';
$string['verifyaccountresult'] = '<b>Αποτέλεσμα επαλήθευσης:</ b> {$a}';
$string['void'] = 'Κενό';
$string['voidyes'] = 'Η συναλλαγή θα ακυρωθεί. Είστε σίγουρος/η;';
$string['welcometocoursesemail'] = 'Αγαπητέ μαθητή,
Σας ευχαριστούμε για την πληρωμή. Έχετε εγγραφεί στα εξής μαθήματα:
{$a->courses}
Μπορείτε να επεξεργαστείτε το προφίλ σας:
{$a->profileurl}
Μπορείτε να δείτε τις λεπτομέρειες πληρωμής:
{$a->paymenturl}';
$string['youcantdo'] = 'Δεν μπορείτε να κάνετε αυτήν την ενέργεια: {$a->action}';
$string['zipcode'] = 'Ταχυδρομικός κώδικας';
