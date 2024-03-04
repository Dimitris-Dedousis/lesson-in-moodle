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
 * Strings for component 'report_customsql', language 'el', version '4.3'.
 *
 * @package     report_customsql
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcategory'] = 'Προσθήκη μιας νέας κατηγορίας';
$string['addreport'] = 'Προσθήκη ενός νέου ερωτήματος';
$string['addreportcategory'] = 'Προσθήκη μιας νέας κατηγορίας για αναφορές';
$string['archivedversions'] = 'Αρχειοθετημένες εκδόσεις αυτού του ερωτήματος';
$string['at'] = 'σε';
$string['automaticallydaily'] = 'Χρονοπρογραμματισμένο, καθημερινά';
$string['automaticallymonthly'] = 'Χρονοπρογραμματισμένο, την πρώτη ημέρα κάθε μήνα';
$string['automaticallyweekly'] = 'Προγραμματισμένη, την πρώτη ημέρα κάθε εβδομάδας';
$string['availablereports'] = 'Ερωτήματα κατ&quote;απαίτηση';
$string['availableto'] = 'Διαθέσιμο σε {$a}.';
$string['backtoreportlist'] = 'Επιστροφή στη λίστα των ερωτημάτων';
$string['category'] = 'Κατηγορία';
$string['categorycontent'] = '({$a->manual} κατ&quote; απαίτηση, {$a->daily} καθημερινά, {$a->weekly} εβδομαδιαία, {$a->monthly} μηνιαία)';
$string['categoryexists'] = 'Τα ονόματα κατηγοριών πρέπει να είναι μοναδικά, αυτό το όνομα υπάρχει ήδη';
$string['categorynamex'] = 'Όνομα κατηγορίας: {$a}';
$string['changetheparameters'] = 'Αλλαγή των παραμέτρων';
$string['crontask'] = 'Ερωτήματα βάσης δεδομένων ειδικού σκοπού: εκτέλεση εργασίας προγραμματισμένων αναφορών';
$string['customdir'] = 'Εξαγωγή αναφοράς csv στο μονοπάτι / κατάλογο';
$string['customdirmustexist'] = 'Ο κατάλογος «{$a}» δεν υπάρχει.';
$string['customdirnotadirectory'] = 'Το μονοπάτι «{$a}» δεν είναι κατάλογος.';
$string['customdirnotwritable'] = 'Ο κατάλογος «{$a}» δεν είναι εγγράψιμος.';
$string['customsql:definequeries'] = 'Ορίστε προσαρμοσμένα ερωτήματα';
$string['customsql:managecategories'] = 'Ορίστε προσαρμοσμένες κατηγορίες';
$string['customsql:view'] = 'Προβολή αναφοράς προσαρμοσμένων ερωτημάτων';
$string['dailyheader'] = 'Καθημερινά';
$string['dailyheader_help'] = 'Αυτά τα ερωτήματα εκτελούνται αυτόματα κάθε μέρα την καθορισμένη ώρα. Αυτοί οι σύνδεσμοι σας επιτρέπουν να δείτε τα αποτελέσματα που έχουν ήδη συγκεντρωθεί.';
$string['defaultcategory'] = 'Διάφορα';
$string['delete'] = 'Διαγραφή';
$string['deletereportx'] = 'Διαγραφή ερωτήματος «{$a}»';
$string['description'] = 'Περιγραφή';
$string['displayname'] = 'Όνομα ερωτήματος';
$string['displaynamerequired'] = 'Πρέπει να δώσετε ένα όνομα ερωτήματος';
$string['displaynamex'] = 'Όνομα ερωτήματος: {$a}';
$string['edit'] = 'Προσθήκη/Επεξεργασία';
$string['editcategory'] = 'Ενημέρωση κατηγορίας';
$string['editcategoryx'] = 'Τροποποίηση κατηγορίας «{$a}»';
$string['editingareport'] = 'Τροποποίηση ενός ερωτήματος βάσης δεδομένων ειδικού σκοπού';
$string['editreportx'] = 'Τροποποίηση ερωτήματος «{$a}»';
$string['emailbody'] = 'Αγαπητέ/-ή {$a}';
$string['emailsubject'] = 'Ερώτημα {$a}';
$string['emailsubject1row'] = 'Ερώτημα {$a} [1 γραμμή]';
$string['emailsubjectnodata'] = 'Ερώτημα {$a} [κανένα αποτέλεσμα]';
$string['emailsubjectxrows'] = 'Ερώτημα {$a->name} [{$a->rows} γραμμές]';
$string['emailto'] = 'Αυτόματη ηλε.ταχυδρόμηση προς';
$string['emailwhat'] = 'Τι να αποσταλεί με ηλε.ταχυδρομείο';
$string['enterparameters'] = 'Δώστε παραμέτρους για ερώτημα βάσης δεδομένων ειδικού σκοπού';
$string['errordeletingreport'] = 'Σφάλμα διαγραφής ενός ερωτήματος.';
$string['errorinsertingreport'] = 'Σφάλμα εισαγωγής ενός ερωτήματος.';
$string['errorupdatingreport'] = 'Σφάλμα ενημέρωσης ενός ερωτήματος.';
$string['invalidreportid'] = 'Μη έγκυρο αναγνωριστικό ερωτήματος {$a}.';
$string['managecategories'] = 'Διαχείριση κατηγοριών αναφοράς';
$string['messageprovider:notification'] = 'Ειδοποιήσεις ερωτημάτων βάσης δεδομένων ειδικού σκοπού';
$string['monthlyheader'] = 'Μηνιαία';
$string['nodatareturned'] = 'Αυτό το ερώτημα δεν επέστρεψε καθόλου δεδομένα.';
$string['noreportsavailable'] = 'Κανένα διαθέσιμο ερώτημα';
$string['note'] = 'Σημειώσεις';
$string['notrunyet'] = 'Αυτό το ερώτημα δεν έχει εκτελεστεί ακόμη.';
$string['parametervalue'] = '{$a->name}: {$a->value}';
$string['pluginname'] = 'Ερωτήματα βάσης δεδομένων ειδικού σκοπού';
$string['privacy:metadata'] = 'Το πρόσθετο «Ερωτήματα βάσης δεδομένων ειδικού σκοπού» δεν αποθηκεύει κανένα προσωπικό δεδομένο.';
$string['privacy:metadata:reportcustomsqlqueries'] = 'Ερωτήματα βάσης δεδομένων ειδικού σκοπού';
$string['privacy:metadata:reportcustomsqlqueries:at'] = 'Η ώρα για την ημερήσια αναφορά';
$string['privacy:metadata:reportcustomsqlqueries:capability'] = 'Η δυνατότητα που ένας χρήστης χρειάζεται να έχει για να εκτελέσει αυτή την αναφορά';
$string['privacy:metadata:reportcustomsqlqueries:customdir'] = 'Εξαγωγή αναφοράς csv στο μονοπάτι / κατάλογο';
$string['privacy:metadata:reportcustomsqlqueries:description'] = 'Μια αναγνώσιμη από άνθρωπο περιγραφή του ερωτήματος.';
$string['privacy:metadata:reportcustomsqlqueries:descriptionformat'] = 'Μορφότυπος κειμένου περιγραφής ερωτήματος';
$string['privacy:metadata:reportcustomsqlqueries:displayname'] = 'Το όνομα της αναφοράς όπως εμφανίζεται στην Διεπαφή Χρήστη';
$string['privacy:metadata:reportcustomsqlqueries:emailto'] = 'Μια λίστα διαχωρισμένων με κόμμα αναγνωριστικών χρηστών';
$string['privacy:metadata:reportcustomsqlqueries:lastrun'] = 'Πότε εκτελέστηκε τελευταία φορά αυτή η αναφορά';
$string['privacy:metadata:reportcustomsqlqueries:querylimit'] = 'Περιορισμός του αριθμού των αποτελεσμάτων που επιστρέφονται';
$string['privacy:metadata:reportcustomsqlqueries:queryparams'] = 'Οι παράμετροι SQL για τη δημιουργία αυτής της αναφοράς';
$string['privacy:metadata:reportcustomsqlqueries:querysql'] = 'Οι εντολές SQL για τη δημιουργία αυτής της αναφοράς';
$string['privacy:metadata:reportcustomsqlqueries:timecreated'] = 'Χρόνος δημιουργίας';
$string['privacy:metadata:reportcustomsqlqueries:timemodified'] = 'Χρόνος τροποποίησης';
$string['privacy:metadata:reportcustomsqlqueries:usermodified'] = 'Τροποποιημένο από χρήστη';
$string['privacy_somebodyelse'] = 'Κάποιος άλλος';
$string['privacy_you'] = 'Εσείς';
$string['query_deleted'] = 'Το ερώτημα διαγράφηκε';
$string['query_edited'] = 'Το ερώτημα τροποποιήθηκε';
$string['query_viewed'] = 'Το ερώτημα εμφανίστηκε';
$string['queryfailed'] = 'Σφάλμα κατά την εκτέλεση του ερωτήματος: {$a}';
$string['querylimit'] = 'Περιορισμός στις γραμμές που επεστράφησαν';
$string['querylimitdefault'] = 'Προεπιλεγμένο όριο στις γραμμές που επιστρέφονται';
$string['querylimitrange'] = 'Ο αριθμός πρέπει να είναι μεταξύ 1 και {$a}';
$string['queryparameters'] = 'Παράμετροι ερωτήματος';
$string['queryparams'] = 'Παρακαλούμε, δώστε τις προεπιλεγμένες τιμές για τις παραμέτρους του ερωτήματος.';
$string['queryparamschanged'] = 'Οι κρατήσεις θέσεων στο ερώτημα έχουν αλλάξει.';
$string['querysql'] = 'Ερώτημα SQL';
$string['querysqlrequried'] = 'Πρέπει να δώσετε κάποιες εντολές SQL.';
$string['recordcount'] = 'Αυτή η αναφορά έχει {$a} γραμμές.';
$string['reportfor'] = 'Ερώτημα που εκτελέστηκε στις {$a}';
$string['requireint'] = 'Απαιτείται ακέραιος';
$string['runable'] = 'Εκτέλεση';
$string['runablex'] = 'Εκτέλεση: {$a}';
$string['runquery'] = 'Εκτέλεση ερωτήματος';
$string['scheduledqueries'] = 'Χρονοπρογραμματισμένα ερωτήματα';
$string['startofweek'] = 'Ημέρα για εκτέλεση των εβδομαδιαίων αναφορών';
$string['startofweek_default'] = 'Χρήση έναρξης εβδομάδας ημερολογίου ({$a}) του ιστοτόπου';
$string['startofweek_desc'] = 'Αυτή είναι η ημέρα που πρέπει να θεωρείται η πρώτη ημέρα της εβδομάδας, για τις χρονοπρογραμματισμένες εβδομαδιαίες αναφορές.';
$string['timecreated'] = '<span class="font-weight-bold">Χρόνος δημιουργίας:</span> {$a}';
$string['timemodified'] = '<span class="font-weight-bold">Τελευταία τροποποίηση:</span> {$a}';
$string['typeofresult'] = 'Τύπος αποτελέσματος';
$string['weeklyheader'] = 'Εβδομαδιαία';
$string['whocanaccess'] = 'Ποιός έχει πρόσβαση σε αυτό το ερώτημα';
