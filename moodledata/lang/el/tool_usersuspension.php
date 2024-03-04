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
 * Strings for component 'tool_usersuspension', language 'el', version '4.3'.
 *
 * @package     tool_usersuspension
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:exclude:add:cohort'] = 'Προσθήκη εξαίρεσης συνόλου χρηστών';
$string['action:exclude:add:user'] = 'Προσθήκη εξαίρεσης χρήστη';
$string['button:backtocourse'] = 'Επιστροφή στο μάθημα';
$string['button:backtouploadform'] = 'Επιστροφή στη φόρμα ανεβάσματος';
$string['button:continue'] = 'Συνέχεια';
$string['csv:delimiter'] = 'Διαχωριστικό';
$string['csv:enclosure'] = 'Εισαγωγικά';
$string['csv:upload:continue'] = 'Συνέχεια';
$string['csvdelimiter'] = 'Διαχωριστικό CSV';
$string['csvencoding'] = 'Κωδικοποίηση CSV';
$string['download-sample-csv'] = 'Λήψη υποδείγματος CSV αρχείου';
$string['email:user:delete:subject'] = 'Ο λογαριασμός σας έχει διαγραφεί';
$string['email:user:suspend:subject'] = 'Ο λογαριασμός σας έχει τεθεί σε αναστολή';
$string['email:user:unsuspend:subject'] = 'Ο λογαριασμός σας έχει επανενεργοποιηθεί';
$string['label:users:excluded'] = 'Εξαιρούμενοι χρήστες';
$string['label:users:potential'] = 'Πιθανοί χρήστες';
$string['link:exclude:overview'] = 'Επισκόπηση εξαιρέσεων';
$string['link:log:overview'] = 'Εμφάνιση καταγραφών αλλαγών κατάστασης';
$string['msg:exclusion:cohort:none-selected'] = 'Δεν επιλέχθηκε κανένα σύνολο χρηστών για εξαίρεση';
$string['msg:file-not-readable'] = 'Το ανεβασμένο αρχείο «{$a}» δεν είναι αναγνώσιμο';
$string['msg:file-not-writeable'] = 'Το ανεβασμένο αρχείο «{$a}» δεν είναι εγγράψιμο ή δεν μπορεί να διαγραφεί';
$string['msg:user:not-found'] = 'αδυναμία εύρεσης χρήστη';
$string['msg:user:suspend:failed'] = 'Ο/Η χρήστης «{$a->username}» δεν στάθηκε δυνατό να τεθεί σε αναστολή';
$string['msg:user:suspend:nosuspendmode'] = 'Ο/Η χρήστης «{$a->username}» δεν τέθηκε σε αναστολή (εκτέλεση σε κατάσταση δοκιμών)';
$string['msg:user:suspend:success'] = 'Ο/Η χρήστης «{$a->username}» τέθηκε σε αναστολή επιτυχώς';
$string['msg:user:unsuspend:failed'] = 'Ο/Η χρήστης «{$a->username}» δεν στάθηκε δυνατό να επανέλθει από αναστολή';
$string['msg:user:unsuspend:nounsuspendmode'] = 'Ο/Η χρήστης «{$a->username}» δεν επανήλθε από αναστολή (εκτέλεση σε κατάσταση δοκιμών)';
$string['msg:user:unsuspend:success'] = 'Ο/Η χρήστης «{$a->username}» επανήλθε από αναστολή επιτυχώς';
$string['notify:load-exclude-list'] = 'Φόρτωση λίστας εξαίρεσης χρηστών';
$string['notify:load-file'] = 'Άνοιγμα αρχείου «{$a}»';
$string['notify:load-file-fail'] = 'Αδυναμία ανοίγματος αρχείου «{$a}» για ανάγνωση';
$string['pluginname'] = 'Αναστολή χρήστη';
$string['privacy:metadata:tool_usersuspension:mailsent'] = 'Εάν στάλθηκε ή όχι ένα μήνυμα ηλε.ταχυδρομείου';
$string['privacy:metadata:tool_usersuspension:status'] = 'ΚατάστασηΑναστολής';
$string['privacy:metadata:tool_usersuspension:timecreated'] = 'Χρόνος δημιουργίας εγγραφής.';
$string['setting:cleanup_deleteafter'] = 'Διάστημα διαγραφής';
$string['setting:cleanup_interval'] = 'Διάστημα καθαρισμού';
$string['setting:enablecleanlogs'] = 'Ενεργοποίηση καθαρισμούκαταγραφών';
$string['setting:enablecleanup'] = 'Ενεργοποίηση Καθαρισμού';
$string['setting:enabled'] = 'Ενεργοποίηση';
$string['setting:enablesmartdetect'] = 'Ενεργοποίηση έξυπνης ανίχνευσης';
$string['setting:senddeleteemail'] = 'Αποστολή μηνύματος ηλε.ταχυδρομείου διαγραφής';
$string['setting:sendsuspendemail'] = 'Αποστολή μηνύματος ηλε.ταχυδρομείου αναστολής';
$string['setting:smartdetect_interval'] = 'Διάστημα έξυπνης ανίχνευσης';
$string['setting:smartdetect_suspendafter'] = 'Διάστημα αναστολής λόγω αδράνειας';
$string['setting:uploadfolder'] = 'Φάκελος ανεβάσματος';
$string['status:deleted'] = 'διαγράφηκε';
$string['status:suspended'] = 'σε αναστολή';
$string['status:unsuspended'] = 'επαναφορά από αναστολή';
$string['suspend'] = 'Σε αναστολή';
$string['suspendmode'] = 'Κατάσταση επεξεργασίας';
$string['suspensionsettings'] = 'Ρυθμίσεις αναστολής χρήστη';
$string['suspensionsettingscleanup'] = 'Εκκαθάριση';
$string['suspensionsettingsdesc'] = '';
$string['suspensionsettingsfolder'] = 'Αναστολές από φάκελο';
$string['suspensionsettingssmartdetect'] = 'Έξυπνη ανίχνευση';
$string['table:exclusions'] = 'Εξαιρέσεις';
$string['table:logs'] = 'Καταγραφές';
$string['table:status:delete'] = 'Χρήστες προς διαγραφή';
$string['table:status:suspended'] = 'Χρήστες σε αναστολή';
$string['table:status:tosuspend'] = 'Χρήστες προς αναστολή';
$string['thead:action'] = 'Ενέργεια/-ες';
$string['thead:lastlogin'] = 'Τελευταία σύνδεση';
$string['thead:name'] = 'Όνομα';
$string['thead:status'] = 'Κατάσταση';
$string['thead:timecreated'] = 'Χρόνος δημιουργίας';
$string['thead:timemodified'] = 'Χρόνος τροποποίησης';
$string['thead:type'] = 'Τύπος';
$string['thead:userid'] = 'Αναγνωριστικό χρήστη';
$string['thead:username'] = 'Όνομα χρήστη';
$string['unsuspend'] = 'Κατάργηση αναστολής';
