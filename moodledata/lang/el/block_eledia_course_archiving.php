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
 * Strings for component 'block_eledia_course_archiving', language 'el', version '4.3'.
 *
 * @package     block_eledia_course_archiving
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['archive'] = 'Έναρξη Αρχειοθέτησης';
$string['configure_description'] = 'Εδώ μπορείτε να ρυθμίσετε τη διαδικασία αρχειοθέτησης. Αρχειοθέτηση σημαίνει ότι το μάθημα θα γίνει αόρατο, θα μεταφερθεί στην ορισμένη κατηγορία αρχειοθέτησης και θα γίνει ακύρωση της εγγραφής στο μάθημα όλων των μαθητών.
Όλα τα μαθήματα που βρίσκονται άμεσα στις κατηγορίες πηγών θα ελεγχθούν με βάση την επιλεγμένη χρονική σήμανση.
Ανάλογα με τη χρονική σήμανση θα υπάρχει η ακόλουθη ροή.<br />

Ημερομηνία έναρξης μαθήματος: <br />
Αν η ημερομηνία είναι εντός του χρονικού διαστήματος μεταξύ της τρέχουσας ημερομηνίας και των επιλεγμένων ημερών κατά το παρελθόν, το μάθημα θα αρχειοθετείται. Σε δεύτερο στάδιο όλα τα μαθήματα στις κατηγορίες αρχειοθέτησης ελέγχονται.
Αν είναι προγενέστερο από τον επιλεγμένο αριθμό ημερών κατά το παρελθόν το μάθημα θα διαγραφεί.<br />
<br />
Τελευταία δραστηριότητα μαθήματος:<br />
Αν η ημερομηνία είναι προγενέστερη από τις επιλεγμένες ημέρες στο παρελθόν, τα μαθήματα θα αρχειοθετηθούν.
Σε δεύτερο στάδιο όλα τα μαθήματα στις κατηγορίες αρχειοθέτησης ελέγχονται.
Αν τα μαθήματα υπάρχουν ανενεργά για περισσότερο από το διπλάσιο αριθμό ημερών στη ρύθμιση τα μαθήματα θα διαγραφούν οριστικά.<br />
<br />
Η διαδικασία μπορεί να ξεκινήσει μέσα από μία φόρμα η οποία είναι συνδεδεμένη στο μπλοκ. Το μπλοκ μπορεί να προστεθεί μόνο στην κεντρική σελίδα.
Ως εναλλακτική λύση, μπορείτε να ρυθμίσετε τη διαδικασία για να τρέξει ως μια εργασία cron.';
$string['confirm_archiving'] = 'Θα αρχειοθετηθούν τα ακόλουθα μαθήματα:<br />
<br />
{$a->archived}<br />
<br />
Θα διαγραφούν τα ακόλουθα μαθήματα:<br />
<br />
{$a->deleted}';
$string['confirm_header'] = 'Επιβεβαίωση Αρχειοθέτησης';
$string['course_archiving_task'] = 'Αρχειοθέτηση μαθημάτων';
$string['days'] = 'Αριθμός ημερών για αρχειοθέτηση';
$string['eledia_course_archiving:addinstance'] = 'προσθήκη μπλοκ αρχειοθέτηση μαθήματος';
$string['eledia_course_archiving:use'] = 'χρήση μπλοκ αρχειοθέτηση μαθήματος';
$string['include_subcategories'] = 'Συμπερίληψη όλων των υποκατηγοριών';
$string['last_activity'] = 'τελευταία δραστηριότητα μαθήματος';
$string['nothing_to_archive'] = 'δεν υπάρχουν μαθήματα για αρχειοθέτηση ή διαγραφή';
$string['notice'] = 'Τα ακόλουθα μαθήματα αρχειοθετήθηκαν:<br />
<br />
{$a->archived}<br />
<br />
Τα ακόλουθα μαθήματα διαγράφηκαν:<br />
<br />
{$a->deleted}';
$string['pluginname'] = 'Αρχειοθέτηση Μαθήματος';
$string['remove_error'] = '- Σφάλματα κατά την αφαίρεση';
$string['remove_success'] = '- Αφαιρέθηκε επιτυχώς';
$string['run_cron'] = 'ενεργοποίηση εργασίας cron για αρχειοθέτηση';
$string['sourcecat'] = 'Κατηγορίες για αρχειοθέτηση';
$string['targetcat'] = 'Κατηγορία αρχειοθήκης';
$string['targettimestamp'] = 'Χρονικό αποτύπωμα για έλεγχο';
$string['title'] = 'Αρχειοθέτηση Μαθήματος';
