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
 * Strings for component 'tool_bloglevelupgrade', language 'el', version '4.3'.
 *
 * @package     tool_bloglevelupgrade
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bloglevelupgradedescription'] = '<p>Αυτός ο ιστότοπος αναβαθμίστηκε πρόσφατα στο Moodle 2.0.</p>
<p>Η ορατότητα του ιστολογίου απλοποιήθηκε στο 2.0, αλλά ο ιστότοπός σας εξακολουθεί να χρησιμοποιεί έναν από τους παλιούς τύπους ορατότητας.</p>
<p>Για να διατηρήσετε την ορατότητα με βάση το μάθημα ή την ομάδα των αναρτήσεων του ιστολογίου στον ιστότοπό σας, πρέπει να εκτελέσετε το ακόλουθο σενάριο αναβάθμισης, το οποίο θα δημιουργήσει ένα ειδικό φόρουμ τύπου «ιστολογίου» σε κάθε μάθημα του οποίου οι εγγεγραμμένοι χρήστες έχουν δημοσιεύσει αναρτήσεις ιστολογίου και θα αντιγράψει αυτές τις αναρτήσεις ιστολογίου σε αυτό το ειδικό φόρουμ.</p>
<p>Τα ιστολόγια θα απενεργοποιηθούν εντελώς σε επίπεδο ιστοτόπου. Δεν θα διαγραφούν αναρτήσεις ιστολογίου κατά τη διαδικασία.</p>
<p>Μπορείτε να εκτελέσετε το σενάριο μεταβαίνοντας στη <a href="{$a->fixurl}">σελίδα αναβάθμισης επιπέδου ιστολογίου</a>.</p>';
$string['bloglevelupgradeinfo'] = 'Η ορατότητα του ιστολογίου απλοποιήθηκε στο 2.0, αλλά ο ιστότοπός σας εξακολουθεί να χρησιμοποιεί έναν από τους παλιούς τύπους ορατότητας. Για να διατηρήσετε την ορατότητα με βάση το μάθημα ή την ομάδα των αναρτήσεων του ιστολογίου στον ιστότοπό σας, πρέπει να εκτελέσετε το ακόλουθο σενάριο αναβάθμισης, το οποίο θα δημιουργήσει ένα ειδικό φόρουμ τύπου «ιστολογίου» σε κάθε μάθημα του οποίου οι εγγεγραμμένοι χρήστες έχουν δημοσιεύσει αναρτήσεις ιστολογίου και θα αντιγράψει αυτές τις αναρτήσεις ιστολογίου σε αυτό το ειδικό φόρουμ. Τα ιστολόγια θα απενεργοποιηθούν εντελώς σε επίπεδο ιστοτόπου. Δεν θα διαγραφούν αναρτήσεις ιστολογίου κατά τη διαδικασία.';
$string['bloglevelupgradeprogress'] = 'Πρόοδος μετατροπής: ελέγχθηκαν {$a->userscount} χρήστες, μετατράπηκαν {$a->blogcount} καταχωρίσεις.';
$string['pluginname'] = 'Αναβάθμιση ορατότητας ιστολογίου';
