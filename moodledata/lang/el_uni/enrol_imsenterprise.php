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
 * Strings for component 'enrol_imsenterprise', language 'el_uni', version '4.2'.
 *
 * @package     enrol_imsenterprise
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowunenrol'] = 'Να επιτρέπεται στα IMS δεδομένα να <strong>ακυρώνουν την εγγραφή</strong> φοιτητών/καθηγητών';
$string['processphotowarning'] = 'Προσοχή: Η επεξεργασία εικόνας είναι πιθανό να προσθέσει σημαντικό φόρτο στον εξυπηρετητή. Προτείνεται να μην ενεργοποιήσετε αυτή την επιλογή εάν αναμένεται να γίνει επεξεργασία μεγάλου αριθμού φοιτητών.';
$string['sourcedidfallback_desc'] = 'Στα δεδομένα IMS, το πεδίο <sourcedid> αντιπροσωπεύει τον σταθερό κωδικό αναγνώρισης για ένα άτομο όπως χρησιμοποιείται στο σύστημα προέλευσης. Το πεδίο <userid> είναι ένα ξεχωριστό πεδίο το οποίο πρέπει να περιέχει τον κωδικό αναγνώρισης που χρησιμοποιεί ο χρήστης κατά τη σύνδεση. Σε πολλές περιπτώσεις αυτοί οι δύο κωδικοί μπορεί να είναι ίδιοι - αλλά όχι πάντα.

Ορισμένα συστήματα πληροφοριών φοιτητών αποτυγχάνουν να εξάγουν το πεδίο <userid>. Εάν συμβαίνει αυτό, θα πρέπει να ενεργοποιήσετε αυτήν τη ρύθμιση ώστε να επιτρέπεται η χρήση του <sourcedid> ως αναγνωριστικό χρήστη Moodle. Διαφορετικά, αφήστε αυτήν τη ρύθμιση απενεργοποιημένη.';
$string['usecapitafix_desc'] = 'Το σύστημα δεδομένων φοιτητών που παράγεται από το Capita έχει βρεθεί ότι έχει ένα μικρό σφάλμα στην έξοδο XML του. Εάν χρησιμοποιείτε το Capita θα πρέπει να ενεργοποιήσετε αυτή τη ρύθμιση - διαφορετικά αφήστε την μη επιλεγμένη.';
