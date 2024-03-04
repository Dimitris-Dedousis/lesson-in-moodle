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
 * Strings for component 'block_enrolmenttimer', language 'el', version '4.3'.
 *
 * @package     block_enrolmenttimer
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activecountdown'] = 'Ενεργητική αντίστροφη μέτρηση';
$string['activecountdown_help'] = 'Ενεργητική αντίστροφη μέτρηση του υπόλοιπου χρόνου που έχει ο μαθητής για να πραγματοποιήσει πρόσβαση στο μάθημα με χρήση javascript';
$string['completionpercentage'] = 'Ποσοστό κοινοποίησης';
$string['completionpercentage_help'] = 'Αυτό είναι το ποσοστό που πρέπει να πετύχει ο μαθητής στο «Σύνολο Μαθήματος» για να του σταλεί με ηλε.ταχυδρομείο το μήνυμα ολοκλήρωσης';
$string['completionsmessage'] = 'Μήνυμα ολοκλήρωσης μαθήματος';
$string['completionsmessage_help'] = 'Μήνυμα ηλε.ταχυδρομείου που θα σταλεί συγχαίροντας τον μαθητή για την ολοκλήρωση του μαθήματος. Εδώ μπορείτε να χρησιμοποιήσετε τις ακόλουθες προσαρμογές. [[user_name]] [[course_name]]';
$string['completionsmessagechk'] = 'Ενεργοποίηση μηνύματος ολοκλήρωσης';
$string['completionsmessagechk_help'] = 'Ενεργοποιεί/απενεργοποιεί το μήνυμα ολοκλήρωσης';
$string['daystoalertenrolmentend'] = 'Ημέρες πριν για επαγρύπνηση';
$string['daystoalertenrolmentend_help'] = 'Ο αριθμός των ημερών πριν τη λήξη των εγγραφών για να αποσταλεί η επαγρύπνηση με μήνυμα ηλε.ταχυδρομείου';
$string['displayNothingNoDateSet'] = 'Απόκρυψη μπλοκ (Δεν ορίστηκε ημερομηνία τέλους)';
$string['displayNothingNoDateSet_help'] = 'Απόκρυψη του μπλοκ από χρήστες που δεν έχουν ορισμένη την ημερομηνία τέλους. Αν απενεργοποιηθεί, ένα μήνυμα θα εμφανιστεί σε αυτούς τους μαθητές.';
$string['displayTextCounter'] = 'Εμφάνιση μετρητή σε κείμενο';
$string['displayTextCounter_help'] = 'Εμφανίζει τον μετρητή σε κείμενο που βρίσκεται κάτω από το κεντρικό μετρητή';
$string['displayUnitLabels'] = 'Εμφάνιση ονομάτων μονάδων';
$string['displayUnitLabels_help'] = 'Εμφανίζει κάθε μονάδα κάτω από τον κύριο μετρητή';
$string['emailsubject'] = 'Θέμα μηνύματος';
$string['emailsubject_completion_default'] = 'Το μάθημα ολοκληρώθηκε';
$string['emailsubject_expiring_default'] = 'Εγγραφή προς λήξη';
$string['emailsubject_help'] = 'Το θέμα του μηνύματος ηλε.ταχυδρομείου που θα σταλεί στο χρήστη';
$string['enrolmenttimer'] = 'Χρονόμετρο εγγραφής';
$string['enrolmenttimer:addinstance'] = 'Προσθήκη ενός νέου μπλοκ χρονόμετρου εγγραφής';
$string['expirytext'] = 'μέχρι να λήξει η εγγραφή σας';
$string['forceDefaults'] = 'Επιβολή Προεπιλεγμένων Τιμών';
$string['forceDefaults_help'] = 'Απενεργοποιεί τη δυνατότητα των διδασκόντων να αλλάζουν τις ρυθμίσεις για κάθε στιγμιότυπο του μπλοκ';
$string['forceTwoDigits'] = 'Επιβολή 2 δεκαδικών';
$string['forceTwoDigits_help'] = 'Επιβάλλει στο κύριο χρονόμετρο αντίστροφης μέτρησης να εμφανίζει πάντα τουλάχιστον 2 ψηφία (π.χ. 01 ώρες ακόμη)';
$string['instance_title'] = 'Ορίστε τον τίτλο αυτού του στιγμιοτύπου μπλοκ';
$string['key_days'] = 'ημέρες';
$string['key_hours'] = 'ώρες';
$string['key_minutes'] = 'λεπτά';
$string['key_months'] = 'μήνες';
$string['key_seconds'] = 'δευτερόλεπτα';
$string['key_weeks'] = 'εβδομάδες';
$string['key_years'] = 'έτη';
$string['noDateSet'] = 'Η εγγραφή σας δεν λήγει';
$string['pluginname'] = 'Χρονόμετρο Εγγραφής';
$string['privacy:metadata'] = 'Το μπλοκ Χρονόμετρου Εγγραφής επεξεργάζεται μόνο δεδομένα χρήστη.';
$string['settings_general'] = 'Γενικές ρυθμίσεις';
$string['settings_notifications_alert'] = 'Ρυθμίσεις επαγρυπνήσεων με μηνύματα ηλε.ταχυδρομείου';
$string['settings_notifications_completion'] = 'Ρυθμίσεις ειδοποιήσεων ολοκλήρωσης με μηνύματα ηλε.ταχυδρομείου';
$string['settings_notifications_defaults'] = 'Ορισμός προεπιλογών για ρυθμίσεις στιγμιοτύπου';
$string['timeleftmessage'] = 'Προειδοποιητικό μήνυμα χρόνου που απομένει';
$string['timeleftmessage_help'] = 'Μήνυμα ηλε.ταχυδρομείου που θα σταλεί συμβουλεύοντας/ενημερώνοντας τον μαθητή για το πόσο χρόνο έχει ακόμη στο μάθημα. Εδώ μπορείτε να χρησιμοποιήσετε τις ακόλουθες προσαρμογές. [[user_name]] [[days_to_alert]]';
$string['timeleftmessagechk'] = 'Ενεργοποίηση μηνυμάτων ηλε.ταχυδρομείου χρονικής προειδοποίησης';
$string['timeleftmessagechk_help'] = 'Ενεργοποίηση/Απενεργοποίηση μηνυμάτων ηλε.ταχυδρομείου επαγρύπνησης';
$string['viewoptions'] = 'Οι προσαυξήσεις προβλήθηκαν';
$string['viewoptions_desc'] = 'Επιλέξτε τις προσαυξήσεις που θα εμφανίζονται στο μπλοκ';
