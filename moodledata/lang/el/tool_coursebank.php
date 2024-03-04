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
 * Strings for component 'tool_coursebank', language 'el', version '4.3'.
 *
 * @package     tool_coursebank
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['ERROR_MAX_ATTEMPTS_REACHED'] = 'Επιτεύχθηκε ο μέγιστος αριθμός προσπαθειών.';
$string['ERROR_TIMEOUT'] = 'Η σύνδεση έχει λήξει.';
$string['backupdate'] = 'Ημερομηνία αντιγράφου ασφαλείας';
$string['backupfailed'] = 'Αποτυχία κατά την αποστολή αντιγράφου ασφαλείας {$a}.';
$string['backupfilename'] = 'Όνομα αρχείου';
$string['backupfiles'] = '{$a} αρχεία/-ο';
$string['backupqueue'] = 'Ουρά μεταφοράς αντιγράφων ασφαλείας τράπεζας μαθημάτων';
$string['backupsummary'] = 'Αναφορά μεταφοράς αντιγράφων ασφαλείας τράπεζας μαθημάτων';
$string['check_delete'] = 'Είστε βέβαιοι ότι θέλετε να διαγράψετε το {$a} από την ουρά μεταφοράς;';
$string['check_go'] = 'Είστε βέβαιοι ότι θέλετε να συνεχίσετε τη μεταφορά του {$a};';
$string['check_stop'] = 'Είστε βέβαιοι ότι θέλετε να θέσετε σε αναστολή τη μεταφορά του {$a};';
$string['checking'] = 'Έλεγχος...';
$string['completion'] = 'Ολοκλήρωση';
$string['conncheckbutton'] = 'Έλεγχος σύνδεσης';
$string['conncheckfail'] = 'Η σύνδεση με το «{$a}» απέτυχε. Επιβεβαιώστε ότι οι εξωτερικές ρυθμίσεις τράπεζας μαθημάτων και η διαμόρφωση δικτύου είναι σωστές.';
$string['connchecksuccess'] = 'Ο έλεγχος σύνδεσης στο «{$a}» πέρασε!';
$string['connchecktitle'] = 'Έλεγχος σύνδεσης';
$string['coursebank:download'] = 'Λήψη αρχείων αντιγράφων ασφαλείας τράπεζας μαθημάτων';
$string['coursebank:edit'] = 'Επεξεργασία αρχείων αντιγράφων ασφαλείας τράπεζας μαθημάτων';
$string['coursebank:view'] = 'Δείτε μια λίστα αρχείων αντιγράφων ασφαλείας τράπεζας μαθημάτων';
$string['coursebank:viewlogs'] = 'Δείτε τις καταγραφές της τράπεζας μαθημάτων';
$string['coursebanklogging'] = 'Καταγραφές τράπεζας μαθημάτων';
$string['coursefullname'] = 'Όνομα μαθήματος';
$string['coursename'] = 'Όνομα μαθήματος';
$string['cron_sending'] = 'Αποστολή αντιγράφων ασφαλείας ...';
$string['delete'] = 'Διαγραφή από την ουρά';
$string['deletefailed'] = 'Αποτυχία διαγραφής αντιγράφων ασφαλείας {$a}.';
$string['disabled'] = 'Η αποστολή αντιγράφων ασφαλείας μαθημάτων είναι απενεργοποιημένη.';
$string['download'] = 'Λήψη αρχείου αντιγράφου ασφαλείας';
$string['errordownloading'] = 'Σφάλμα κατά τη λήψη του αρχείου αντιγράφου ασφαλείας.';
$string['errorsonly'] = 'Μόνο σφάλματα';
$string['errorupdatingstatus'] = 'Σφάλμα κατά την ενημέρωση της κατάστασης';
$string['event_backup_transfer_completed'] = 'Η μεταφορά αντιγράφου ασφαλείας με {$a} ολοκληρώθηκε.';
$string['event_backup_transfer_started'] = 'Η μεταφορά αντιγράφου ασφαλείας με {$a} ξεκίνησε.';
$string['event_backup_update'] = 'Η εγγραφή μεταφοράς αντιγράφου ασφαλείας με {$a} ενημερώθηκε.';
$string['event_backup_update_interrupted'] = 'Η μεταφορά αντιγράφου ασφαλείας με {$a} διακόπηκε λόγω αποτυχίας ενημέρωσης αντιγράφου ασφαλείας.';
$string['event_download_view_failed'] = 'Ο χρήστης με αναγνωριστικό «{$a}» επιχείρησε να δει τη σελίδα λήψεων αντιγράφων ασφαλείας, αλλά προέκυψε κάποιο σφάλμα.';
$string['event_downloads_viewed'] = 'Ο χρήστης με αναγνωριστικό «{$a}» είδε τη σελίδα λήψεων αντιγράφων ασφαλείας.';
$string['eventbackupdeleted'] = 'Το αρχείο αντιγράφου ασφαλείας διαγράφηκε';
$string['eventbackupdeletefailed'] = 'Η διαγραφή αντιγράφου ασφαλείας απέτυχε';
$string['eventbackupdeleteskipped'] = 'Η διαγραφή αντιγράφου ασφαλείας παραλείφθηκε';
$string['eventbackupdownloaded'] = 'Έγινε λήψη του αντιγράφου ασφαλείας';
$string['eventbackupdownloadfailed'] = 'Η λήψη αντιγράφου ασφαλείας απέτυχε';
$string['eventbackupsendfailed'] = 'Η αποστολή αντιγράφου ασφαλείας απέτυχε';
$string['eventbackupupdated'] = 'Η εγγραφή αντιγράφου ασφαλείας ενημερώθηκε';
$string['eventconnectionchecked'] = 'Connection checked';
$string['eventconnectioncheckfailed'] = 'Ο έλεγχος σύνδεσης απέτυχε';
$string['eventhttprequest'] = 'Αίτημα HTTP';
$string['eventhttprequestfailed'] = 'Το αίτημα HTTP απέτυχε';
$string['eventloggedas'] = '{$a->realusername} ως {$a->asusername}';
$string['filename'] = 'Όνομα αρχείου';
$string['filesize'] = 'Μέγεθος αρχείου';
$string['filetimemodified'] = 'Ημερομηνία αντιγράφου ασφαλείας';
$string['filterisequalto'] = 'είναι ίσο με';
$string['filterlessthan'] = 'μικρότερο από';
$string['filtermorethan'] = 'περισσότερο από';
$string['nav_download'] = 'Λήψη αντιγράφων ασφαλείας';
$string['notavailable'] = 'Μη διαθέσιμο';
$string['notcompleted'] = 'Μη ολοκληρωμένο';
$string['notstarted'] = 'Δεν ξεκίνησε';
$string['settings_authtoken'] = 'Κουπόνι αυθεντικοποίησης';
$string['settings_disablestring'] = 'Απενεργοποίηση';
$string['settings_enable'] = 'Ενεργός';
$string['settings_enablestring'] = 'Ενεργοποίηση';
$string['settings_proxypass'] = 'Κωδικός πρόσβασης';
$string['settings_proxyport'] = 'Θύρα';
$string['settings_proxyport_desc'] = 'Θύρα διακομιστή μεσολάβησης';
$string['settings_proxyurl'] = 'Διεύθυνση URL διακομιστή μεσολάβησης';
$string['settings_proxyuser'] = 'Όνομα χρήστη';
$string['settings_requestretries'] = 'Επαναπροσπάθειες αιτήματος HTTP';
$string['settings_sessionkey'] = 'Κλειδί συνόδου';
$string['settings_url'] = 'Διεύθυνση URL στόχου';
$string['settingspage'] = 'Ρυθμίσεις';
$string['speedtestbutton'] = 'Δοκιμή ταχύτητας μεταφοράς';
$string['speedtesttitle'] = 'Δοκιμή ταχύτητας σύνδεσης';
$string['status'] = 'Κατάσταση';
$string['statuscancelled'] = 'Η μεταφορά ακυρώθηκε';
$string['statuserror'] = 'Σφάλμα';
$string['statusfinished'] = 'Η μεταφορά ολοκληρώθηκε';
$string['statusinprogress'] = 'Η μεταφορά είναι σε εξέλιξη';
$string['statusnotstarted'] = 'Η μεταφορά εκκρεμεί';
$string['statusonhold'] = 'Η μεταφορά είναι σε παύση';
$string['stop'] = 'Θέση σε παύση';
$string['timecompleted'] = 'Η μεταφορά ολοκληρώθηκε';
$string['timecreated'] = 'Η μεταφορά ξεκίνησε';
$string['timetransferstarted'] = 'Η μεταφορά ξεκίνησε';
$string['valuefor'] = 'αξία {$a}';
