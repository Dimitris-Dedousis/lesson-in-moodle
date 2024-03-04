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
 * Strings for component 'webexactivity', language 'el', version '4.3'.
 *
 * @package     webexactivity
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additionalsettings'] = 'Πρόσθετες ρυθμίσεις συνάντησης';
$string['allchat'] = 'Οι συμμετέχοντες μπορούν να συνομιλήσουν με άλλους συμμετέχοντες';
$string['apipassword'] = 'Κωδικός πρόσβασης διαχειριστή WebEx';
$string['apipassword_help'] = 'Ο κωδικός πρόσβασης για έναν λογαριασμό διαχειριστή στον ιστότοπό σας.';
$string['apisettings'] = 'Ρυθμίσεις API';
$string['apiusername'] = 'Όνομα χρήστη διαχειριστή WebEx';
$string['apiusername_help'] = 'Το όνομα χρήστη για έναν λογαριασμό διαχειριστή στον ιστότοπό σας. Αυτός πρέπει να είναι ένας λογαριασμός αφιερωμένος αποκλειστικά στο Moodle για λόγους ασφαλείας.';
$string['availabilityendtime'] = 'Χρόνος λήξης επέκτασης διαθεσιμότητας';
$string['badpassword'] = 'Το όνομα χρήστη και ο κωδικός πρόσβασης στο WebEx δεν ταιριάζουν.';
$string['badpasswordexception'] = 'Ο κωδικός πρόσβασής σας στο WebEx είναι λανθασμένος και δεν μπόρεσε να ενημερωθεί.';
$string['calpublish'] = 'Δημοσίευση συνάντησης στο ημερολόγιο';
$string['confirmrecordingdelete'] = 'Σίγουρα θέλετε να διαγραφεί η εγγραφή <b>{$a->name}</b>, με μήκος {$a->time}; Αυτό δεν μπορεί να αναιρεθεί.';
$string['confirmrecordingsdelete'] = 'Σίγουρα θέλετε να διαγραφεί η επιλεγμένη εγγραφή; Αυτό δεν μπορεί να αναιρεθεί.';
$string['connectionexception'] = 'Παρουσιάστηκε σφάλμα κατά την σύνδεση: {$a->error}';
$string['curlsetupexception'] = 'Παρουσιάστηκε κάποιο σφάλμα κατά την εγκατάσταση του curl.';
$string['defaultmeetingtype'] = 'Προεπιλεγμένος τύπος συνάντησης';
$string['defaultmeetingtype_help'] = 'Ο τύπος συνάντησης που θα προεπιλέγεται όταν δημιουργείται μια νέα συνάντηση.';
$string['deletelink'] = '<a href="{$a->url}">Διαγραφή</a>';
$string['deletetime'] = 'Χρόνος διαγραφής';
$string['deletionin'] = '<div>{$a->time} μέχρι τη διαγραφή.</div>';
$string['deletionsoon'] = '<div>Θα διαγραφεί σύντομα.</div>';
$string['description'] = 'Περιγραφή';
$string['directlinks'] = 'Άμεσοι σύνδεσμοι';
$string['duration'] = 'Προβλεπόμενη διάρκεια';
$string['entermeeting'] = 'Μπείτε στην συνάντηση';
$string['error_'] = '';
$string['error_HM_AccessDenied'] = 'Άρνηση πρόσβασης για φιλοξενία αυτής της συνάντησης.';
$string['error_JM_MeetingLocked'] = 'Αυτή η συνάντηση είναι κλειδωμένη και δεν μπορείτε να ενταχθείτε σε αυτή.';
$string['error_JM_MeetingNotInProgress'] = 'Η συνάντηση δεν είναι αυτή τη στιγμή σε εξέλιξη. Μπορεί να μην άρχισε ακόμα, ή να τελείωσε ήδη.';
$string['error_LI_AccessDenied'] = 'Ο χρήστης δεν μπόρεσε να συνδεθεί στο WebEx.';
$string['error_LI_AccountLocked'] = 'Ο λογαριασμός χρήστη WebEx είναι κλειδωμένος.';
$string['error_LI_AutoLoginDisabled'] = 'Οι αυτόματες συνδέσεις είναι απενεργοποιημένες για αυτόν τον χρήστη.';
$string['error_unknown'] = 'Παρουσιάστηκε κάποιο άγνωστο σφάλμα.';
$string['errordeletingrecording'] = 'Σφάλμα διαγραφής εγγραφής';
$string['event_meeting_ended'] = 'Η συνάντηση τελείωσε';
$string['event_recording_created'] = 'Η εγγραφή δημιουργήθηκε';
$string['event_recording_deleted'] = 'Η εγγραφή διαγράφηκε';
$string['event_recording_downloaded'] = 'Έγινε λήψη της εγγραφής';
$string['event_recording_undeleted'] = 'Η διαγραμμένη εγγραφή επαναφέρθηκε';
$string['event_recording_viewed'] = 'Η εγγραφή εμφανίστηκε';
$string['host'] = 'Κεντρικός Η/Υ';
$string['inprogress'] = 'Σε εξέλιξη';
$string['invalidtype'] = 'Μη έγκυρος τύπος';
$string['joinmeetinglink'] = '<a href="{$a->url}">Ένταξη στην συνάντηση</a>';
$string['longavailability'] = 'Επέκταση διαθεσιμότητας';
$string['manageallrecordings'] = 'Διαχείριση όλων των εγγραφών WebEx';
$string['meetingclosegrace'] = 'Περίοδος χάριτος συνάντησης';
$string['meetingpassword'] = 'Κωδικός πρόσβασης συνάντησης';
$string['meetingpast'] = 'Αυτή η συνάντηση έχει περάσει.';
$string['meetingsettings'] = 'Ρυθμίσεις συνάντησης';
$string['meetingtemplate'] = 'Υπόδειγμα WebEx';
$string['meetingtype'] = 'Τύπος συνάντησης';
$string['meetingtypes'] = 'Τύποι συνάντησης';
$string['meetingupcoming'] = 'Αυτή η συνάντηση δεν είναι ακόμη διαθέσιμη για ένταξη.';
$string['modulename'] = 'Σύσκεψη WebEx';
$string['modulenameplural'] = 'Συσκέψεις WebEx';
$string['page_managerecordings'] = 'Διαχείριση εγγραφών';
$string['page_manageusers'] = 'Διαχείριση χρηστών';
$string['pluginname'] = 'Σύσκεψη WebEx';
$string['pluginnamepural'] = 'Συσκέψεις WebEx';
$string['prefix'] = 'Πρόθεμα χρήστη';
$string['privacy:metadata:webexactivity'] = 'Στιγμιότυπο δραστηριότητας Webex';
$string['privacy:metadata:webexactivity:password'] = 'Ο κωδικός πρόσβασης της συνάντησης';
$string['privacy:metadata:webexactivity_recording'] = 'Εγγραφή Webex';
$string['privacy:metadata:webexactivity_user:webexid'] = 'Όνομα χρήστη Webex ενός χρήστη του Webex';
$string['privacy:metadata:webexactivity_user:webexuserid'] = 'Αναγνωριστικό χρήστη Webex ενός χρήστη του Webex';
$string['recordingfileurl'] = 'Λήψη';
$string['recordinglength'] = '({$a->time}, {$a->size})';
$string['recordingname'] = 'Όνομα εγγραφής';
$string['recordings'] = 'Εγγραφές';
$string['recordingsettings'] = 'Ρυθμίσεις εγγραφών';
$string['recordingstreamurl'] = 'Αναπαραγωγή';
$string['requiremeetingpassword'] = 'Απαίτηση για κωδικούς πρόσβασης συναντήσεων';
$string['search:activity'] = 'Σύσκεψη WebEx - πληροφορίες δραστηριότητας';
$string['selectnone'] = 'Αποεπιλογή όλων';
$string['settings'] = 'Ρυθμίσεις συνάντησης WebEx';
$string['sitename'] = 'Όνομα ιστοτόπου';
$string['starttime'] = 'Ώρα έναρξης';
$string['stream'] = 'Συνεχής ροή πολυμέσου';
$string['studentvisible'] = 'Ορατό στους μαθητές';
$string['task_deleterecordings'] = 'Εκκαθάριση διαγραμμένων εγγραφών';
$string['task_updateallrecordings'] = 'Ενημέρωση όλων των εγγραφών';
$string['task_updatemediumrecordings'] = 'Ενημέρωση μέσων προηγούμενων ηχογραφήσεων';
$string['task_updateopensessions'] = 'Ενημέρωση ανοιχτών συνόδων';
$string['task_updaterecentrecordings'] = 'Ενημέρωση πρόσφατων προηγούμενων ηχογραφήσεων';
$string['typeforall'] = 'Διαθέσιμο σε όλους τους χρήστες';
$string['typeinstalled'] = 'Διαθέσιμο';
$string['typemeetingcenter'] = 'Κέντρο συναντήσεων';
$string['typemeetingcenter_desc'] = '';
$string['typepwreq'] = 'Απαιτείται κωδικός συνάντησης';
$string['typetrainingcenter'] = 'Εκπαιδευτικό κέντρο';
$string['typetrainingcenter_desc'] = '';
$string['undeletelink'] = '<a href="{$a->url}">Αναίρεση διαγραφής</a>';
$string['unknownhostwebexidexception'] = 'Το αναγνωριστικό κεντρικού Η/Υ του WebEx δεν υπάρχει';
$string['webexactivity:allavailabletypes'] = 'Δημιουργήστε συναντήσεις όλων των εγκατεστημένων τύπων';
$string['webexactivity:reports'] = 'Χρήση αναφορών WebEx';
$string['webexactivity:view'] = 'Προβολή Σύσκεψης WebEx';
$string['webexactivityname'] = 'Όνομα σύσκεψης';
$string['webexid'] = 'Αναγνωριστικό WebEx';
$string['webexrecordings'] = 'Εγγραφές ήχου/βίντεο WebEx';
$string['webexusercollision'] = 'Διένεξη με υπάρχοντα χρήστη WebEx.';
