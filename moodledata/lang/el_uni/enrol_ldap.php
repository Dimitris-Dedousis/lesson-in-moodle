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
 * Strings for component 'enrol_ldap', language 'el_uni', version '4.2'.
 *
 * @package     enrol_ldap
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname_desc'] = '<p>Μπορείτε να χρησιμοποιήσετε έναν εξυπηρετητή LDAP για να ελέγξετε τις εγγραφές σας. Θεωρείται πως το LDAP δέντρο σας περιέχει ομάδες που αντιστοιχούν σε μαθήματα και πως κάθε ομάδα/μάθημα θα έχει εγγραφές συνδρομής για να αντιστοιχίσει στους φοιτητές.</p> <p>Θεωρείται ότι τα μαθήματα ορίζονται ως ομάδες στον LDAP, με κάθε ομάδα να έχει πολλαπλά πεδία συνδρομής (<em>member</em> ή <em>memberUid</em>) τα οποία περιέχουν ένα μοναδικό αναγνωριστικό για κάθε χρήστη.</p> <p>Για την χρήση εγγραφής LDAP, οι χρήστες σας <strong>πρέπει</strong> να έχουν ένα έγκυρο πεδίο idnumber. Οι ομάδες LDAP πρέπει να έχουν αυτό το idnumber στα πεδία των μελών για να εγγραφεί ένας χρήστης στο μάθημα. Αυτό δουλεύει καλά εάν χρησιμοποιείτε LDAP πιστοποίηση ήδη.</p> <p>Οι εγγραφές ενημερώνονται όταν ο χρήστης συνδεθεί. Μπορείτε να εκτελέσετε και ένα σενάριο για να συγχρονίζονται οι εγγραφές. Δείτε στο <em>enrol/ldap/enrol_ldap_sync.php</em>.</p> <p> Αυτό το πρόσθετο μπορεί να οριστεί ώστε να δημιουργεί νέα μαθήματα αυτόματα όταν εμφανίζονται νέες ομάδες στον LDAP.</p>';
