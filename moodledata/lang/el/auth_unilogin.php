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
 * Strings for component 'auth_unilogin', language 'el', version '4.3'.
 *
 * @package     auth_unilogin
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['application_id'] = 'Αναγνωριστικό εφαρμογής';
$string['application_id_description'] = 'Κάθε εφαρμογή έχει ένα μοναδικό αναγνωριστικό που χρησιμοποιείται για αναγνώριση στο UNI C';
$string['application_info_description'] = 'Βασικές πληροφορίες σχετικά με την εφαρμογή σας. Λάβετε αυτές τις πληροφορίες κάνοντας εγγραφή στο UNI C';
$string['application_info_header'] = 'Πληροφορίες εφαρμογής';
$string['application_secret'] = 'Μυστικό εφαρμογής';
$string['application_secret_description'] = 'Το μυστικό που χρησιμοποιείται, μαζί με το αναγνωριστικό εφαρμογής για την ταυτοποίηση σε UNI C';
$string['application_settings_description'] = 'Ρυθμίσεις για το πώς θα πρέπει να συνδέεται ο χρήστης';
$string['application_settings_header'] = 'Ρυθμίσεις σύνδεσης';
$string['auth_unilogindescription'] = 'Ένα πρόσθετο για σύνδεση χρηστών που χρησιμοποιούν την υπηρεσία σύνδεσης Danish UNI.';
$string['fieldlocks'] = 'Επιλέξτε τι θα συμβεί σε κάθε πεδίο του χρήστη.';
$string['login_behaviour'] = 'Συμπεριφορά σύνδεσης';
$string['login_behaviour_link'] = 'Σύνδεσμος';
$string['login_behaviour_link_selector'] = 'Επιλογέας εισαγωγής συνδέσμου';
$string['login_behaviour_link_selector_default'] = '#login';
$string['login_behaviour_link_text'] = 'Κείμενο συνδέσμου';
$string['login_behaviour_link_text_default'] = 'UNI•Login';
$string['login_behaviour_link_text_description'] = 'Το κείμενο που χρησιμοποιείται για να εμφανίζεται ένας σύνδεσμος προς την σελίδα UNI•Login. Το κείμενο αποστέλλεται μέσω
 [`format_string`](https://docs.moodle.org/dev/Output_functions#format_string.28.29) πριν δοθεί στην έξοδο, ώστε να υποστηρίζει
 [Πολυγλωσσικές συμβολοσειρές](https://docs.moodle.org/28/en/Multi-language_content_filter)';
$string['login_behaviour_redirect'] = 'Ανακατεύθυνση';
$string['login_type'] = 'Τύπος σύνδεσης';
$string['login_type_description'] = 'Πώς πρέπει να λειτουργεί η διαδικασία σύνδεσης για τους χρήστες. Η μία και μόνο ενιαία αυθεντικοποίηση (SSO) σημαίνει ότι εάν ο χρήστης είναι ήδη συνδεδεμένος σε άλλη υπηρεσία που χρησιμοποιεί το UNI C, ο χρήστης δεν θα χρειαστεί να εισάγει τον κωδικό πρόσβασης, ενώ η Ενιαία Σύνδεση (SLI) σημαίνει ότι οι χρήστες θα πρέπει πάντα να πληκτρολογήστε τον κωδικό πρόσβασής τους, παρόλο που έχουν συνδεθεί σε άλλες υπηρεσίες UNI C που χρησιμοποιούν SSO.';
$string['login_type_sli'] = 'Ενιαία σύνδεση';
$string['login_type_sso'] = 'Μία και μόνη ενιαία σύνδεση (SSO)';
$string['pluginname'] = 'Σύνδεση UNI';
$string['validatetime'] = 'Χρονικό όριο επικύρωσης';
$string['validatetime_description'] = 'Η μέγιστη ηλικία σε δευτερόλεπτα για ένα εισιτήριο για να θεωρηθεί έγκυρο.';
$string['validation_behaviour'] = 'Συμπεριφορά επικύρωσης';
$string['validation_behaviour_db'] = 'Βάση δεδομένων';
$string['validation_behaviour_time'] = 'Ώρα';
$string['ws_id'] = 'Αναγνωριστικό WebService';
$string['ws_secret'] = 'Μυστικό WebService';
$string['ws_secret_description'] = 'Το μυστικό που χρησιμοποιείται, μαζί με το αναγνωριστικό webservice για την ταυτοποίηση σε UNI C';
