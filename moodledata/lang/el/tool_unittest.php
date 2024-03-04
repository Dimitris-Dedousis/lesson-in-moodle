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
 * Strings for component 'tool_unittest', language 'el', version '4.3'.
 *
 * @package     tool_unittest
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addconfigprefix'] = 'Προσθήκη προθέματος στο αρχείο ρυθμίσεων';
$string['all'] = 'ΟΛΑ';
$string['codecoverageanalysis'] = 'Εκτελέστε ανάλυση κάλυψης κώδικα.';
$string['codecoveragecompletereport'] = '(προβολή πλήρους αναφοράς κάλυψης κώδικα)';
$string['codecoveragedisabled'] = 'Δεν είναι δυνατή η ενεργοποίηση της κάλυψης κώδικα σε αυτόν τον εξυπηρετητή (λείπει η επέκταση xdebug).';
$string['codecoveragelatestdetails'] = '(στις {$a->date}, με {$a->files} αρχεία, {$a->percentage} κάλυψη)';
$string['codecoveragelatestreport'] = '(προβολή τελευταίας πλήρους αναφοράς κάλυψης κώδικα)';
$string['confignonwritable'] = 'Το αρχείο config.php δεν είναι εγγράψιμο από τον εξυπηρετητή ιστού. Παρακαλούμε, είτε αλλάξτε τα δικαιώματά του ή επεξεργαστείτε το με τον κατάλληλο λογαριασμό χρήστη και προσθέστε την ακόλουθη γραμμή πριν από την ετικέτα κλεισίματος php: <br />
$CFG->unittestprefix = \'tst_\' // Αλλαγή του tst_ σε ένα πρόθεμα της αρεσκείας σας, διαφορετικό από το $CFG->prefix';
$string['coveredlines'] = 'Γραμμές που καλύπτονται';
$string['coveredpercentage'] = 'Συνολική κάλυψη κώδικα';
$string['dbtest'] = 'Λειτουργικά τεστ βάσης δεδομένων';
$string['deletingnoninsertedrecord'] = 'Προσπάθεια διαγραφής εγγραφής που δεν προστέθηκε από αυτά τα τεστ (id {$a->id} στον πίνακα {$a->table}).';
$string['deletingnoninsertedrecords'] = 'Προσπάθεια διαγραφής εγγραφής που δεν προστέθηκε από αυτά τα τεστ (στον πίνακα {$a->table}).';
$string['droptesttables'] = 'Διαγραφή πινάκων ελέγχων';
$string['exception'] = 'Εξαίρεση';
$string['executablelines'] = 'Εκτελέσιμες γραμμές';
$string['fail'] = 'Αποτυχία';
$string['ignorefile'] = 'Αγνόησε τους έλεγχους στο αρχείο';
$string['ignorethisfile'] = 'Επανεκτέλεσε τους έλεγχους αγνοώντας αυτό το αρχείο ελέγχων';
$string['installtesttables'] = 'Εγκατάσταση πινάκων ελέγχων';
$string['moodleunittests'] = 'Ελέγχοι μονάδων Moodle: {$a}';
$string['notice'] = 'Σημείωση';
$string['onlytest'] = 'Εκτέλεση τεστ μόνο στο';
$string['othertestpages'] = 'Άλλες σελίδες ελέγχου';
$string['pass'] = 'Επιτυχία';
$string['pathdoesnotexist'] = 'Το μονοπάτι \'{$a}\' δεν υπάρχει.';
$string['pluginname'] = 'Δοκιμές μονάδας';
$string['prefix'] = 'Πρόθεμα πινάκων ελέγχων μονάδων';
$string['prefixnotset'] = 'Το πρόθεμα των πινάκων ελέγχων μονάδας στη βάση δεδομένων δεν έχει καθοριστεί. Συμπληρώστε την παρακάτω φόρμα για να προστεθεί η ρύθμιση στο αρχείο config.php.';
$string['reinstalltesttables'] = 'Επανεγκατάσταση πινάκων ελέγχων';
$string['retest'] = 'Επανεκτέλεση των ελέγχων';
$string['retestonlythisfile'] = 'Επανεκτέλεση μόνο αυτού του αρχείου ελέγχων';
$string['runall'] = 'Εκτέλεση των ελέγχων από όλα τα αρχεία ελέγχων';
$string['runat'] = 'Εκτέλεσηε στις {$a}';
$string['runonlyfile'] = 'Εκτέλεση μόνο των ελέγχων σε αυτό το αρχείο';
$string['runonlyfolder'] = 'Εκτέλεση μόνο των ελέγχων σε αυτό το φάκελο';
$string['runtests'] = 'Εκτέλεση ελέγχων';
$string['rununittests'] = 'Εκτέλεση των ελέγχων μονάδων';
$string['showpasses'] = 'Εμφάνιση επιτυχιών και αποτυχιών.';
$string['showsearch'] = 'Εμφάνιση της αναζήτησης για τεστ αρχεία.';
$string['skip'] = 'Παράλειψη';
$string['stacktrace'] = 'Ίχνος στοίβας:';
$string['summary'] = '{$a->run}/{$a->total} έλεγχοι ολοκληρώθηκαν: <strong>{$a->passes}</strong> επιτυχίες, <strong>{$a->fails}</strong> αποτυχίες και <strong>{$a->exceptions}</strong> εξαιρέσεις.';
$string['tablesnotsetup'] = 'Οι πίνακες δοκιμής μονάδας δεν έχουν ακόμη δημιουργηθεί. Να δημιουργηθούν τώρα;';
$string['testdboperations'] = 'Έλεγχος διαδικασιών βάσης δεδομένων';
$string['testtablescsvfileunwritable'] = 'Το CSV αρχείο των ελέγχων ({$a->filename}) δεν είναι εγγράψιμο';
$string['testtablesneedupgrade'] = 'Οι πίνακες των ελέγχων μονάδων πρέπει να ενημερωθούν. Θέλετε να τους ενημερώσετε τώρα;';
$string['testtablesok'] = 'Οι πίνακες των ελέγχων μονάδων δημιουργήθηκαν επιτυχώς.';
$string['thorough'] = 'Εκτέλεση λεπτομερούς ελέγχου (ίσως καθυστερήσει)';
$string['timetakes'] = 'Χρόνος που έχει χρειάστηκε: {$a}.';
$string['totallines'] = 'Γραμμές συνολικά';
$string['uncaughtexception'] = 'Εξαίρεση που δεν αντιμετωπίστηκε [{$a->getMessage()}] στο [{$a->getFile()}:{$a->getLine()}] ΑΚΥΡΩΣΗ ΤΕΣΤ.';
$string['uncoveredlines'] = 'Ακάλυπτες γραμμές';
$string['unittest:execute'] = 'Εκτέλεση ελέγχων μονάδας';
$string['unittestprefixsetting'] = 'Πρόθεμα ελέγχων μονάδων: <strong>{$a->unittestprefix}</strong> (Τροποποιήστε το config.php για να το αλλάξετε).';
$string['unittests'] = 'Έλεγχοι μονάδων';
$string['updatingnoninsertedrecord'] = 'Προσπάθεια ενημέρωσης εγγραφής που δεν εισήχθηκε από αυτούς τους ελέγχους μονάδων(id {$a->id} στον πίνακα {$a->table}).';
$string['version'] = 'Γίνεται χρήση του <a href="http://sourceforge.net/projects/simpletest/">SimpleTest</a> έκδοση {$a}.';
