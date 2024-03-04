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
 * Strings for component 'tool_uploadenrolmentmethods', language 'el', version '4.3'.
 *
 * @package     tool_uploadenrolmentmethods
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cohortnotfound'] = '{$a->line} {$a->linenum} [{$a->oplabel} {$a->method}]: Αδυναμία εύρεσης συνόλου χρηστών «{$a->parentname}». {$a->skipped}.';
$string['csvfile'] = '';
$string['csvfile_help'] = 'Ο μορφότυπος του αρχείου CSV έχει ως εξής:

* Κάθε γραμμή του αρχείου περιέχει μια εγγραφή.
* Κάθε εγγραφή είναι μια σειρά δεδομένων σε οποιαδήποτε σειρά, διαχωρισμένων με κόμματα ή άλλα τυπικά διαχωριστικά.
* Τα πεδία είναι: λειτουργία, μέθοδος εγγραφής, σύντομο όνομα μαθήματος στόχου, σύντομο όνομα γονικού μαθήματος ή αριθμός αναγνωριστικού συνόλου χρηστών, κατάσταση απενεργοποίησης, όνομα ομάδας[, όνομα ομάδας, ρόλος].
* Όλα τα πεδία είναι υποχρεωτικά εκτός από την ομάδα και το ρόλο.
* Οι λειτουργίες είναι add, del(ete) και upd(ate). (δηλ. προσθήκη, διαγραφή & ενημέρωση)
* Οι υποστηριζόμενες μέθοδοι εγγραφής είναι meta και cohort.
* Οι τιμές κατάστασης απενεργοποίησης είναι 1 (απενεργοποιημένος) ή 0 (ενεργοποιημένος).
* Οι μαθητές που θα εγγραφούν μέσω της μεθόδου θα τοποθετηθούν στην ομάδα που καθορίζεται στο πεδίο όνομα ομάδας. Αν η ομάδα δεν υπάρχει ήδη, θα δημιουργηθεί.
* Το πεδίο ρόλου πρέπει να είναι έγκυρο όνομα ρόλου, όπως δάσκαλος συντάκτης, μαθητής κλπ.';
$string['heading'] = 'Ανέβασμα μεθόδων εγγραφής σε μαθήματα από ένα αρχείο CSV';
$string['invalidmethod'] = 'Μη έγκυρη μέθοδος.';
$string['invalidop'] = 'Μη έγκυρη λειτουργία.';
$string['method'] = 'Μέθοδος';
$string['methoddisabledwarning'] = 'Η μέθοδος εγγραφής «{$a}» απενεργοποιήθηκε.';
$string['methodscreated'] = 'Δημιουργήθηκε: {$a}';
$string['methodsdeleted'] = 'Διαγράφηκε: {$a}';
$string['methodserrors'] = 'Σφάλματα: {$a}';
$string['methodstotal'] = 'Σύνολο: {$a}';
$string['methodsupdated'] = 'Ενημερώθηκε: {$a}';
$string['operation'] = 'Λειτουργία';
$string['pluginname'] = 'Ανέβασμα μεθόδων εγγραφής';
$string['reladderror'] = 'Σφάλμα σύνδεσης μεθόδου σε μάθημα.';
$string['relalreadyexists'] = 'Η μέθοδος έχει ήδη συνδεθεί με το μάθημα.';
$string['reldoesntexist'] = 'Η μέθοδος δεν υπάρχει.';
$string['result'] = 'Αποτέλεσμα';
$string['results'] = 'Ανέβασμα αποτελεσμάτων μεθόδων εγγραφής';
$string['targetnotfound'] = 'Άγνωστο μάθημα.';
