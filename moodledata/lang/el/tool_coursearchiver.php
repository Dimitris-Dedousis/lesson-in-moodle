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
 * Strings for component 'tool_coursearchiver', language 'el', version '4.3'.
 *
 * @package     tool_coursearchiver
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessafter'] = 'Τελευταία πρόσβαση μετά';
$string['accessbefore'] = 'Τελευταία πρόσβαση πριν';
$string['accessbeforeafter'] = 'Πρόσβαση πριν / μετά';
$string['anycategory'] = 'Οποιαδήποτε κατηγορία';
$string['archive'] = 'Αρχειοθέτηση μαθημάτων';
$string['archivedeletesetting'] = 'Καθυστέρηση διαγραφής αρχειοθήκης';
$string['archivedeletesetting_help'] = 'Πόσες ημέρες θα καθυστερήσει η διαγραφή μιας αρχειοθήκης.';
$string['archiveemail'] = 'Αποστολή μηνυμάτων «Μαθήματα προς αρχειοθέτηση»';
$string['archivelimit'] = 'Περιοριστής αναζήτησης αρχείων';
$string['archivelimit_help'] = 'Μέγιστος αριθμός αποτελεσμάτων για εμφάνιση στην οθόνη';
$string['archivelimitstring'] = 'Μέγιστο εμφανίσεων';
$string['archivelist'] = 'Αρχειοθήκες Μαθημάτων';
$string['archivelocation'] = 'Υποκατάλογος αρχειοθηκών μαθημάτων';
$string['archiverecoverform'] = 'Εκκρεμεί διαγραφή';
$string['archivewarningemailsetting'] = 'Προεπιλεγμένη προειδοποίηση μέσω ηλε.ταχυδρομείου για αρχειοθέτηση μαθημάτων';
$string['archivewarningemailsetting_help'] = 'Αυτό είναι το περιεχόμενο ενός μηνύματος ηλε.ταχυδρομείου που θα σταλεί σε όλους τους διδάσκοντε ενός μαθήματος που έχει επιλεγεί για αρχειοθέτηση.';
$string['archivewarningemailsettingdefault'] = '%to

Θα θέλαμε να σας ενημερώσουμε ότι το/τα ακόλουθα μαθήματα Moodle που έχετε διδάξει, σύντομα θα αρχειοθετηθούν.
Αυτό σημαίνει ότι θα δημιουργηθεί αντίγραφο του κάθε μαθήματος στην τρέχουσα κατάστασή του και στη συνέχεια θα αφαιρεθεί από το Moodle. Εάν θέλετε να εξαιρέσετε από αυτήν τη διαδικασία κάποιο από τα παρακάτω μαθήματα, παρακαλούμε, κάντε κλικ στον σύνδεσμο δίπλα στο μάθημα.

%courses

Ευχαριστούμε.';
$string['archivewarningsubject'] = 'Σημείωση: Προγραμματίστηκε αρχειοθέτηση μαθημάτων.';
$string['back'] = 'Εκκίνηση';
$string['cannotdeletecoursenotexist'] = 'Δεν είναι δυνατή η διαγραφή ενός μαθήματος που δεν υπάρχει';
$string['category'] = 'Κατηγορία';
$string['cli_cannot_continue'] = '\\nΔΙΑΚΟΠΗ: Δεν υπάρχουν αρκετά δεδομένα για να συνεχίσετε.\\n';
$string['cli_question_archive'] = 'Αρχειοθέτηση και διαγραφή αυτών των μαθημάτων {$a};';
$string['cli_question_archiveemail'] = 'Να σταλεί σε αυτούς τους {$a} χρήστες ένα μήνυμα ηλε.ταχυδρομείου «Μάθημα προς αρχειοθέτηση»;';
$string['cli_question_delete'] = 'Διαγραφή αυτών των {$a} μαθημάτων;';
$string['cli_question_hide'] = 'Απόκρυψη αυτών των {$a} μαθημάτων;';
$string['cli_question_hideemail'] = 'Να σταλεί σε αυτούς τους {$a} χρήστες ένα μήνυμα ηλε.ταχυδρομείου «Μάθημα προς απόκρυψη»;';
$string['confirm'] = 'Συνέχεια';
$string['confirmdelete'] = 'Είστε βέβαιοι ότι θέλετε διαγραφή;';
$string['confirmmessage'] = 'Είστε βέβαιοι ότι θέλετε {$a}';
$string['confirmmessagearchive'] = 'αρχειοθέτηση και κατάργηση αυτών των {$a} μαθημάτων;';
$string['confirmmessagearchiveemail'] = 'αποστολή ενός μηνύματος ηλε.ταχυδρομείου στους ιδιοκτήτες  αυτών των {$a} μαθημάτων;';
$string['confirmmessagedelete'] = 'πλήρη διαγραφή αυτών των {$a} μαθημάτων;';
$string['confirmmessagehide'] = 'απόκρυψη αυτών των μαθημάτων {$a};';
$string['confirmmessagehideemail'] = 'αποστολή ενός μηνύματος ηλε.ταχυδρομείου στους ιδιοκτήτες  αυτών των {$a} μαθημάτων;';
$string['confirmmessageoptout'] = 'να εξαιρεθούν αυτά τα {$a} μαθήματα;';
$string['confirmrestore'] = 'Επαναφορά επικείμενης διαγραφής αρχειοθήκης;';
$string['course_readded'] = 'To {$a->fullname} αφαιρέθηκε από τη λίστα εξαίρεσης.
Ευχαριστούμε.';
$string['course_skipped'] = '{$a->fullname} θα παραλειφθούν για τους επόμενους {$a->optoutmonths} μήνες. Σας ευχαριστούμε.';
$string['coursearchiver'] = 'Αρχειοθέτης μαθημάτων';
$string['coursearchiver_help'] = 'Αναζητήστε μαθήματα με τα ακόλουθα κριτήρια: ταίριασμα σύντομου ονόματος, ονοματεπώνυμου, αναγνωριστικού αριθμού, αναγνωριστικού μαθήματος, ημερομηνίας τελευταίας πρόσβασης στο μάθημα ή *κενών μαθημάτων.\\n
Τα μαθήματα εμφανίζονται ως γριζαρισμένα αν είναι ήδη σε απόκρυψη.  Το πλήρες όνομα του μαθήματος θα έχει μια γραμμή πάνω του εάν το μάθημα είναι ένα *κενό μάθημα.\\n\\n
ΣΗΜΕΙΩΣΗ: Η αναζήτηση τελευταία πρόσβασης θα επιστρέψει μόνο τα μαθήματα που δημιουργήθηκαν πριν από την ημερομηνία που δόθηκε.\\n
ΣΗΜΕΙΩΣΗ: Ο αριθμός των διευθύνσεων ηλεκτρονικού ταχυδρομείου που βρέθηκαν μπορεί να διαφέρει από τον αριθμό των μηνυμάτων ηλεκτρονικού ταχυδρομείου που στάλθηκαν.  Αυτό έχει 2 αιτίες. \\n
   1. Για ένα μάθημα που είναι ήδη σε απόκρυψη δεν θα σταλεί μήνυμα ηλεκτρονικού ταχυδρομείου για να ειδοποιηθεί ο/οι ιδιοκτήτες ή ο/οί κάτοχοι ότι το μάθημα επιλέχθηκε για απόκρυψη.\\n
   2. Για μια ίδια διεύθυνση που εμφανίζεται σε πολλά μαθήματα θα σταλεί ένα μόνο μήνυμα ηλεκτρονικού ταχυδρομείου.\\n\\n
Τα *κενά μαθήματα ορίζονται ως 0 αναθέσεις εργασιών, 0 πόροι, 0 κατηγορίες στο βαθμολόγιο και 0 στοιχεία βαθμού στο βαθμολόγιο.';
$string['coursearchiver_settings'] = 'Ρυθμίσεις αρχειοθέτη μαθημάτων';
$string['coursearchiverpath'] = 'Μονοπάτι φακέλου για αποθήκευση αρχειοθετημένων μαθημάτων';
$string['coursearchiverpath_help'] = 'Αυτό το μονοπάτι είναι σχετικό με το Moodle $CFG->dataroot';
$string['coursearchiverpreview'] = 'Ανέβασμα προεπισκόπησης μαθημάτων';
$string['coursearchiverresult'] = 'Ανέβασμα αποτελεσμάτων μαθημάτων';
$string['coursedeleted'] = 'Το μάθημα διαγράφηκε';
$string['coursedeletionnotallowed'] = 'Δεν επιτρέπεται διαγραφή μαθήματος';
$string['coursefullname'] = 'Πλήρες όνομα μαθήματος';
$string['courseid'] = 'Αναγνωριστικό μαθήματος';
$string['courseidnum'] = 'Αναγνωριστικός αριθμός μαθήματος';
$string['courseselector'] = 'Αποτελέσματα αναζήτησης μαθήματος';
$string['courseshortname'] = 'Σύντομο όνομα μαθήματος';
$string['courseteacher'] = 'Όνομα χρήστη / διεύθυνση ηλε.ταχυδρομείου διδάσκοντα';
$string['createdafter'] = 'Δημιουργήθηκε μετά από';
$string['createdbefore'] = 'Δημιουργήθηκε πριν από';
$string['createdbeforeafter'] = 'Δημιουργήθηκε πριν/μετά από';
$string['crontask'] = 'Εργασία διαγραφής αρχειοθηκών μαθημάτων';
$string['delete'] = 'Διαγραφή μαθημάτων';
$string['deletedarchiveemails'] = 'Διευθύνσεις ηλε.ταχυδρομείου διδάσκοντος';
$string['deselectall'] = 'Αποεπιλογή όλων';
$string['email'] = 'Αποστολή μηνύματος ηλε.ταχυδρομείου';
$string['emailselector'] = 'Χρήστες που επιλέχθηκαν να λάβουν μηνύματα ηλε.ταχυδρομείου.';
$string['empty'] = 'κενό';
$string['emptycourse'] = 'Κενό μάθημα';
$string['emptyonly'] = 'Επιστροφή μόνο κενών μαθημάτων';
$string['endafter'] = 'Τελειώνει μετά από';
$string['endbefore'] = 'Τελειώνει πριν από';
$string['error_key'] = 'Το κλειδί ασφαλείας είναι λανθασμένο.';
$string['error_nocourseid'] = 'Η εγγραφή μαθήματος δεν περιείχε αναγνωριστικό';
$string['errorarchivefile'] = 'Το αρχείο αρχειοθήκης μαθήματος δεν υπάρχει.';
$string['errorarchivepath'] = 'Αδυναμία δημιουργίας της διαδρομής αρχειοθήκης.';
$string['errorarchivingcourse'] = 'Μάθημα: ({$a->id}) {$a->fullname} δεν ήταν δυνατό να αρχειοθετηθεί.';
$string['errorbackup'] = 'Η δημιουργία αντιγράφου ασφαλείας απέτυχε.';
$string['errordeletingcourse'] = 'Μάθημα: ({$a->id}) {$a->fullname} δεν ήταν δυνατό να διαγραφεί.';
$string['erroremptysearch'] = 'Δεν δόθηκε κανένα κριτήριο αναζήτησης.';
$string['errorhidingcourse'] = 'Μάθημα: ({$a->id}) {$a->fullname} δεν ήταν δυνατό να αποκρυφτεί.';
$string['errorinsufficientdata'] = 'Μη επαρκείς πληροφορίες για εκτέλεση αυτής της ενέργειας';
$string['errormissingcourses'] = 'Η μεταβλητή %course έλειπε από το υπόδειγμα μηνύματος ηλε.ταχυδρομείου. Αυτή είναι μια λίστα με τα μαθήματα.';
$string['errormissingto'] = 'Η μεταβλητή %to έλειπε από το υπόδειγμα μηνύματος ηλε.ταχυδρομείου. Αυτό είναι το όνομα του παραλήπτη.';
$string['errornoform'] = 'Η φόρμα δεν δόθηκε.';
$string['errornonnumericid'] = 'Το αναγνωριστικό μαθήματος πρέπει να είναι αριθμητικό';
$string['errornonnumerictimestamp'] = 'Η χρονοσήμανση πρέπει να είναι αριθμός (χρονοσήμανση UNIX)';
$string['erroroptoutcourse'] = 'Το μάθημα: ({$a->id}) {$a->fullname} δεν ήταν δυνατό να εξαιρεθεί.';
$string['errors'] = 'Σφάλματα';
$string['errors_count'] = 'Σφάλματα: {$a}';
$string['errorsendingemail'] = 'Αποτυχία μηνύματος ηλε.ταχυδρομείου προς {$a->firstname} {$a->lastname} ({$a->email}).';
$string['errorvalidarchive'] = 'Μη έγκυρο αρχείο αντιγράφου ασφαλείας.';
$string['hidden'] = 'σε απόκρυψη';
$string['hide'] = 'Απόκρυψη μαθημάτων';
$string['hideemail'] = 'Αποστολή μηνυμάτων ηλε.ταχυδρομείου για «Μάθημα προς απόκρυψη»';
$string['hidewarningemailsetting'] = 'Προεπιλεγμένο προειδοποιητικό μήνυμα ηλε.ταχυδρομείου για απόκρυψη μαθήματος';
$string['hidewarningemailsetting_help'] = 'Αυτό είναι το περιεχόμενο ενός μηνύματος ηλε.ταχυδρομείου που θα σταλεί σε όλους τους διδάσκοντες ενός μαθήματος που έχει επιλεγεί για απόκρυψη.';
$string['hidewarningemailsettingdefault'] = '%to

Θα θέλαμε να σας ενημερώσουμε ότι το/τα ακόλουθα μαθήματα Moodle που έχετε διδάξει σύντομα θα κρυφτούν.
Αυτό σημαίνει ότι οι μαθητές που είναι ακόμη εγγεγραμμένοι στο μάθημα δεν θα έχουν πλέον πρόσβαση στα μαθήματα. Εάν θέλετε να εξαιρεθείτε από αυτήν τη διαδικασία για ένα από τα παρακάτω μαθήματα, παρακαλούμε κάντε κλικ στον σύνδεσμο δίπλα στο μάθημα.

%courses

Ευχαριστούμε.';
$string['hidewarningsubject'] = 'Σημείωση: Θα γίνει απόκρυψη μαθημάτων σύντομα.';
$string['includesubcat'] = 'Συμπερίληψη μαθημάτων σε υποκατηγορίες';
$string['invalidmode'] = 'Δεν δόθηκε έγκυρη κατάσταση για το εργαλείο.';
$string['messageprovider:courseowner'] = 'Ειδοποιήσεις από το εργαλείο αρχειοθέτησης/απόκρυψης μαθήματος.';
$string['never'] = 'Ποτέ';
$string['nocoursesfound'] = 'Η αναζήτηση είχε ως αποτέλεσμα 0 ευρεθέντα μαθήματα.';
$string['nocoursesselected'] = 'Για να εκτελέσετε αυτή την ενέργεια πρέπει να έχετε τουλάχιστον 1 μάθημα επιλεγμένο.';
$string['noticecoursehidden'] = 'Μάθημα: ({$a->id}) {$a->fullname} ήταν ήδη σε απόκρυψη.';
$string['notices'] = 'Σημειώσεις';
$string['notices_count'] = 'Σημειώσεις: {$a}';
$string['nousersfound'] = 'Δεν υπάρχουν ιδιοκτήτες μαθήματος για να ειδοποιηθούν';
$string['nousersselected'] = 'Για να εκτελέσετε αυτή την ενέργεια πρέπει να έχετε τουλάχιστον 1 χρήστη επιλεγμένο.';
$string['optout'] = 'Εξαιρούμενα μαθήματα';
$string['optoutarchive'] = 'Να μην αρχειοθετηθεί αυτό το μάθημα';
$string['optoutby'] = 'Ζητήθηκε από';
$string['optouthide'] = 'Να μην γίνει απόκρυψη αυτού του μαθήματος';
$string['optoutleft'] = '{$a} ημέρες ακόμα';
$string['optoutlist'] = 'Διαχείριση λίστας εξαίρεσης';
$string['optoutmonthssetting'] = 'Μονιμότητα επιλογής εγκατάλειψης μαθήματος';
$string['optoutmonthssetting_help'] = 'Για πόσους μήνες θα εφαρμοστεί η εξαίρεση για κάθε μάθημα.';
$string['optouttime'] = 'Εναπομείναντας χρόνος';
$string['outaccess'] = 'Τελευταία πρόσβαση';
$string['outemail'] = 'Διεύθυνση ηλε.ταχυδρομείου';
$string['outfirstname'] = 'Μικρό/βαπτιστικό όνομα';
$string['outfullname'] = 'Πλήρες όνομα';
$string['outid'] = 'Αναγνωριστικό';
$string['outidnumber'] = 'Αναγνωριστικός αριθμός';
$string['outlastname'] = 'Επώνυμο';
$string['outowners'] = 'Ιδιοκτήτες μαθήματος';
$string['outselected'] = 'Επιλεγμένοι';
$string['outshortname'] = 'Σύντομο όνομα';
$string['outuse'] = 'Τελευταία χρήση';
$string['pluginname'] = 'Αρχειοθέτης μαθημάτων';
$string['privacy:metadata'] = 'Το πρόσθετο δεν περιέχει δεδομένα χρήστη.';
$string['processarchiving'] = 'Αρχειοθέτηση επιλεγμένων μαθημάτων';
$string['processcomplete'] = 'Η διαδικασία ολοκληρώθηκε';
$string['processdeleting'] = 'Διαγραφή επιλεγμένων μαθημάτων...';
$string['processemailing'] = 'Αποστολή μηνυμάτων ηλε.ταχυδρομείου';
$string['processhiding'] = 'Απόκρυψη επιλεγμένων μαθημάτων';
$string['processoptout'] = 'Να εξαιρεθούν τα επιλεγμένα μαθήματα';
$string['processstarted'] = 'Η διαδικασία άρχισε ήδη';
$string['recover'] = 'Ανάκτηση μαθημάτων';
$string['results'] = 'Αποτελέσματα';
$string['results_archive'] = 'Αρχειοθετημένα μαθήματα: {$a}';
$string['results_archiveemail'] = 'Απεσταλμένα μηνύματα ηλε.ταχυδρομείου προειδοποίησης για αρχειοθέτηση μαθημάτων: {$a}';
$string['results_courselist'] = 'Μαθήματα σε λίστα: {$a}';
$string['results_delete'] = 'Διαγραμμένα μαθήματα: {$a}';
$string['results_getemails'] = 'Διευθύνσεις ηλε.ταχυδρομείου που συγκεντρώθηκαν: {$a}';
$string['results_hide'] = 'Μαθήματα σε απόκρυψη: {$a}';
$string['results_hideemail'] = 'Προειδοποιητικά μηνύματα ηλε.ταχυδρομείου που στάλθηκαν: {$a}';
$string['results_optout'] = 'Εξαιρούμενα μαθήματα: {$a}';
$string['resume'] = 'Συνέχιση';
$string['resumenone'] = 'Δεν βρέθηκαν αποθηκεύσεις';
$string['resumeselect'] = 'Επιλογή ενός σημείου αποθήκευσης';
$string['save'] = 'Δημιουργία ενός σημείου αποθήκευσης';
$string['saved'] = 'Το σημείο αποθήκευσης δημιουργήθηκε';
$string['search'] = 'Αναζήτηση για μαθήματα';
$string['selectall'] = 'Επιλογή όλων';
$string['startafter'] = 'Ξεκινά μετά από';
$string['startbefore'] = 'Ξεκινά πριν από';
$string['startend'] = 'Ημερομηνίες αρχής/τέλους';
$string['status'] = 'Κατάσταση';
$string['step2savetitle'] = '{$a} αποθήκευση λίστας μαθημάτων';
$string['step3savetitle'] = 'αποθήκευση λίστας ηλε.ταχυδρομείου {$a}';
$string['unknownerror'] = 'Η διαδικασία είχε ως αποτέλεσμα ένα σφάλμα που απαιτεί την επανεκκίνηση της διαδικασίας.';
$string['visible'] = 'ορατό';
