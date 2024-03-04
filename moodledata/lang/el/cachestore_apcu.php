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
 * Strings for component 'cachestore_apcu', language 'el', version '4.3'.
 *
 * @package     cachestore_apcu
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clusternotice'] = 'Παρακαλούμε, έχετε υπόψιν σας πως η APCu είναι κατάλληλη επιλογή μόνο για ιστοτόπους ενός κόμβου ή κρυφή μνήμη που μπορεί να αποθηκευτεί τοπικά. Για περισσότερες πληροφορίες, δείτε την <a href="{$a}">τεκμηρίωση της κρυφής μνήμης APC χρήστη</a>.';
$string['notice'] = 'Ειδοποίηση';
$string['pluginname'] = 'Κρυφή μνήμη APC χρήστη (APCu)';
$string['prefix'] = 'Πρόθεμα';
$string['prefix_help'] = 'Το παραπάνω πρόθεμα χρησιμοποιείται για όλα τα κλειδιά που είναι αποθηκευμένα σε αυτό το στιγμιότυπο αποθήκευσης APC. Από προεπιλογή χρησιμοποιείται το πρόθεμα βάσης δεδομένων.';
$string['prefixinvalid'] = 'Το πρόθεμα που έχετε επιλέξει δεν είναι έγκυρο. Μπορείτε να χρησιμοποιήσετε μόνο a-z A-Z 0-9-_.';
$string['prefixnotunique'] = 'Το πρόθεμα που έχετε επιλέξει δεν είναι μοναδικό. Επιλέξτε ένα μοναδικό πρόθεμα.';
$string['privacy:metadata'] = 'Η κρυφή μνήμη APC χρήστη (APCu) αποθηκεύει στοιχεία για λίγο ως μέρος της λειτουργικότητας της κρυφής μνήμης, αλλά τα δεδομένα αυτά εκκαθαρίζονται τακτικά και δεν αποστέλλονται εξωτερικά με κανέναν τρόπο.';
$string['testperformance'] = 'Δοκιμή απόδοσης';
$string['testperformance_desc'] = 'Αν ενεργοποιηθεί, η απόδοση της APCu θα συμπεριληφθεί κατά την προβολή της σελίδας απόδοσης δοκιμής. Δεν συνιστάται η ενεργοποίησή της σε έναν ιστότοπο παραγωγής.';
