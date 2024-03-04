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
 * Strings for component 'mlbackend_php', language 'el', version '4.3'.
 *
 * @package     mlbackend_php
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['datasetsizelimited'] = 'Μόνο ένα μέρος του συνόλου δεδομένων αξιολογήθηκε λόγω του μεγέθους του. Ενεργοποιήστε το $CFG->mlbackend_php_no_memory_limit εάν είστε βέβαιοι ότι το σύστημά σας μπορεί να αντιμετωπίσει ένα σύνολο δεδομένων {$a}.';
$string['errorcantloadmodel'] = 'Το αρχείο μοντέλου {$a} δεν υπάρχει. Το μοντέλο θα πρέπει να έχει εκπαιδευτεί πριν χρησιμοποιηθεί για προβλέψεις.';
$string['errorlowscore'] = 'Η εκτιμώμενη ακρίβεια πρόβλεψης μοντέλου δεν είναι πολύ υψηλή, επομένως ορισμένες προβλέψεις ενδέχεται να μην είναι ακριβείς. Σκορ μοντέλου = {$a->score}, ελάχιστο σκορ = {$a->minscore}';
$string['errornotenoughdata'] = 'Δεν υπάρχουν αρκετά δεδομένα για την αξιολόγηση αυτού του μοντέλου χρησιμοποιώντας το παρεχόμενο χρονικό διάστημα ανάλυσης.';
$string['errornotenoughdatadev'] = 'Τα αποτελέσματα της αξιολόγησης ποικίλλουν πάρα πολύ. Συνιστάται η συλλογή περισσότερων δεδομένων για να διασφαλιστεί ότι το μοντέλο είναι έγκυρο. Αποτελέσματα της αξιολόγησης: τυπική απόκλιση = {$a->deviation}, μέγιστη συνιστώμενη τυπική απόκλιση = {$a->accepteddeviation}';
$string['errorphp7required'] = 'Η υποστήριξη λειτουργίας μηχανικής μάθησης PHP απαιτεί PHP 7';
$string['pluginname'] = 'Υποστήριξη λειτουργίας της μηχανικής μάθησης της PHP';
$string['privacy:metadata'] = 'Το πρόσθετο «Υποστήριξη λειτουργίας της μηχανικής μάθησης της PHP» δεν αποθηκεύει κανένα προσωπικό δεδομένο.';
