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
 * Strings for component 'block_tutorlink', language 'el', version '4.3'.
 *
 * @package     block_tutorlink
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['blocksettings'] = 'Ρυθμίσεις μπλοκ';
$string['cantreadcsv'] = 'Αδυναμία ανάγνωσης αρχείου CSV';
$string['cantremoveold'] = 'Αδυναμία διαγραφής παλιού αρχείου cron. Παρακαλούμε, ελέγξτε τα δικαιώματα αρχείου.';
$string['cronfile'] = 'Τοποθεσία αρχείου για αυτόματη επεξεργασία';
$string['cronmoved'] = '{$a->old} μετακινήθηκε στο {$a->new}';
$string['cronprocessed'] = 'Τοποθεσία επεξεργασμένου αρχείου';
$string['csv'] = 'Αρχείο CSV';
$string['csvfile'] = 'Επιλογή αρχείου CSV';
$string['invalidop'] = 'Γραμμή {$a->line}: Μη έγκυρη λειτουργία {$a->op}';
$string['keepprocessed'] = 'Διατήρηση επεξεργασμένων αρχείων';
$string['keepprocessedfor'] = 'Ημέρες διατήρησης επεξεργασμένων αρχείων';
$string['keepprocessedlong'] = 'Αν επιλεγεί, τα επεξεργασμένα αρχεία θα αποθηκεύονται στην παρακάτω τοποθεσία.';
$string['musthavefile'] = 'Πρέπει να επιλέξετε ένα αρχείο';
$string['nocronfile'] = 'Ανύπαρκτο αρχείο cron.';
$string['nodir'] = 'Το {$a} δεν υπάρχει ή δεν είναι εγγράψιμο. Παρακαλούμε, ελέγξτε τα δικαιώματά σας στον φάκελο.';
$string['nopermission'] = 'Δεν έχετε άδεια να ανεβάσετε σχέσεις εκπαιδευτικών.';
$string['norelforwildstudent'] = 'Ο εκπαιδευτικός {$a->student} (or {$a->tutor} ???) δεν έχει εκπαιδευόμενους για να διαγράψει';
$string['norelforwildtutor'] = 'Ο μαθητής {$a->student} δεν έχει προσωπικούς εκπαιδευτικούς για να διαγράψει';
$string['notutorrole'] = 'Πριν χρησιμοποιήσετε αυτό το μπλοκ, πρέπει να επιλέξετε έναν ρόλο εκπαιδευτικού στο';
$string['pluginname'] = 'Ανέβασμα σχέσεων εκπαιδευτικών';
$string['pluginnameplural'] = 'Ανέβασμα σχέσεων εκπαιδευτικών';
$string['reladded'] = 'Ο/Η {$a->tutor} εκχωρήθηκε με επιτυχία στον/στην {$a->student}';
$string['reladderror'] = 'Σφάλμα εκχώρησης {$a->tutor} στον/στην {$a->student}';
$string['relalreadyexists'] = 'Ο/Η {$a->tutor} ήδη εκχωρήθηκε στον/στην {$a->student}';
$string['reldeleted'] = 'Ο/Η {$a->tutor} απο-εκχωρήθηκε από τον/την {$a->student}';
$string['reldoesntexist'] = 'Ο/Η {$a->tutor} δεν έχει εκχωρηθεί στον/στην {$a->student}, κι έτσι δεν μπορεί να αφαιρεθεί.';
$string['removedold'] = 'Έγινε διαγραφή {$a} παλαιών αρχείων cron';
$string['toofewcols'] = 'Το αρχείο CSV έχει πολύ λίγες στήλες στην γραμμή {$a}· αναμένονται 3.';
$string['toomanycols'] = 'Το αρχείο CSV έχει πάρα πολλές στήλες στην γραμμή {$a}· αναμένονται 3.';
$string['tuteenotfound'] = 'Γραμμή {$a->line}: Δεν βρέθηκε ο βοηθούμενος μαθητής';
$string['tutorlink:addinstance'] = 'Δυνατότητα προσθήκης ενός νέου μπλοκ σύνδεσμου βοηθού εκμάθησης';
$string['tutorlink:myaddinstance'] = 'Δυνατότητα προσθήκης ενός νέου μπλοκ σύνδεσμου βοηθού εκμάθησης στην αρχική μου';
$string['tutorlink:use'] = 'Δυνατότητα ανεβάσματος αρχείων στο μπλοκ σύνδεσμου βοηθού εκμάθησης';
$string['tutornotfound'] = 'Γραμμή {$a->line}: Ο εκπαιδευτικός δεν βρέθηκε';
$string['tutorrole'] = 'Ρόλος εκπαιδευτικού';
$string['wildcarddeletion'] = 'Επιτρέπεται διαγραφή με χαρακτήρες μπαλαντέρ;';
