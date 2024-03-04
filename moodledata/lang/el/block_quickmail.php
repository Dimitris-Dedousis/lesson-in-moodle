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
 * Strings for component 'block_quickmail', language 'el', version '4.3'.
 *
 * @package     block_quickmail
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Ενέργειες';
$string['additional_emails'] = 'Επιπρόσθετες διευθύνσεις ηλε.ταχυδρομείου';
$string['additional_emails_help'] = 'Άλλες διευθύνσεις διευθύνσεις ηλε.ταχυδρομείου στις οποίες θέλετε να αποσταλεί το μήνυμα, χωρισμένες με κόμμα ή ελληνικό ερωτηματικό. Παράδειγμα:

onomaxristi@tomeas.gr, psevdonimo@istotopos.gr';
$string['additionalemail'] = 'Επιτρέψτε μηνύματα σε εξωτερικές διευθύνσεις ηλε.ταχυδρομείου';
$string['additionalemail_desc'] = 'Εάν αυτή η επιλογή είναι ενεργοποιημένη, ο αποστολέας θα έχει τη δυνατότητα να στέλνει μηνύματα σε πρόσθετες διευθύνσεις ηλε.ταχυδρομείου έξω από το Moodle';
$string['all_in_course'] = 'Όλοι στο μάθημα';
$string['allow_mentor_copy'] = 'Επιτρέψτε στους αποστολείς, όταν αποστέλλουν, να στέλνουν αυτόματα μήνυμα και στους καθοδηγητές ενός παραλήπτη';
$string['allowstudents'] = 'Να επιτρέπεται στους μαθητές να χρησιμοποιούν το Quickmail';
$string['alternate'] = 'Εναλλακτικές διευθύνσεις ηλε.ταχυδρομείου';
$string['alternate_activated'] = 'Η εναλλακτική διεύθυνση ηλε.ταχυδρομείου {$a} μπορεί πλέον να χρησιμοποιείται!';
$string['alternate_already_confirmed'] = 'Αυτό το μήνυμα ηλε.ταχυδρομείου έχει ήδη επιβεβαιωθεί.';
$string['alternate_availability'] = 'Ποιός μπορεί να στέλνει από αυτή τη διεύθυνση ηλε.ταχυδρομείου;';
$string['alternate_availability_course'] = 'Όλοι οι επιτρεπόμενοι ρόλοι στο {$a->courseshortname}';
$string['alternate_availability_only'] = 'Μόνο εγώ, μόνο στο {$a->courseshortname}';
$string['alternate_availability_user'] = 'Μόνο εγώ, σε οποιοδήποτε μάθημα';
$string['alternate_body'] = '<p>
Ο/Η {$a->fullname} πρόσθεσε την {$a->email} ως εναλλακτική διεύθυνση αποστολής για το {$a->plugin_name}.
</p>

<p>
Ο σκοπός του παρόντος μηνύματος ηλε.ταχυδρομείου ήταν η επαλήθευση πως η διεύθυνση αυτή υπάρχει, και ο ιδιοκτήτης της έχει τις κατάλληλες άδειες στο Moodle.
</p>

<p>
Εάν επιθυμείτε να ολοκληρώσετε τη διαδικασία επιβεβαίωσης, συνεχίστε στην ακόλουθη διεύθυνση: {$a->url}.
</p>

<p>
Εάν το μήνυμα αυτό σας φαίνεται άσχετο, τότε μπορεί το έχετε λάβει από λάθος και μπορείτε απλά να το διαγράψετε.
</p>

Ευχαριστούμε.';
$string['alternate_confirmation_email_resent'] = 'Το μήνυμα ηλε.ταχυδρομείου επιβεβαίωσης έχει αποσταλεί ξανά!';
$string['alternate_confirmed'] = 'Επιβεβαιωμένος';
$string['alternate_created'] = 'Η εναλλακτική διεύθυνση αποστολής ηλε.ταχυδρομείου δημιουργήθηκε με επιτυχία!';
$string['alternate_delete'] = 'Διαγραφή εναλλακτικής διεύθυνσης';
$string['alternate_new'] = 'Προσθήκη εναλλακτικής διεύθυνσης';
$string['alternate_resend_confirmation'] = 'Επαναποστολή μηνύματος (ηλε.ταχυδρομείου) επιβεβαίωσης';
$string['alternate_subject'] = 'Επαλήθευση εναλλακτικής διεύθυνσης ηλε.ταχυδρομείου';
$string['alternate_waiting'] = 'Αναμονή';
$string['attached_files'] = 'Συνημμένα αρχεία ({$a})';
$string['attachments'] = 'Συνημμένα';
$string['back_to_course'] = 'Επιστροφή στο μάθημα';
$string['back_to_mypage'] = 'Επιστροφή στην σελίδα μου';
$string['backup_history'] = 'Να συμπεριληφθεί το ιστορικό του Quickmail';
$string['body'] = 'Σώμα';
$string['broadcast'] = 'Σύνταξη Μηνύματος Διαχειριστή';
$string['compose'] = 'Σύνταξη Μηνύματος Μαθήματος';
$string['condition_grade_greater_than'] = 'Βαθμός μεγαλύτερος από';
$string['condition_grade_less_than'] = 'Βαθμός μικρότερος από';
$string['delete_draft_modal_title'] = 'Διαγραφή προσχεδίου μηνύματος ηλε.ταχυδρομείου';
$string['delete_signature'] = 'Διαγραφή Υπογραφής';
$string['downloads'] = 'Απαιτείται σύνδεση για συνημμένα';
$string['downloads_desc'] = 'Αυτή η ρύθμιση καθορίζει αν τα συνημμένα είναι διαθέσιμα μόνο για τους συνδεδεμένους χρήστες του Moodle';
$string['draft_no_record'] = 'Αδυναμία εύρεσης του προσχεδίου μηνύματος.';
$string['drafts'] = 'Προσχέδια';
$string['duplicate'] = 'Διπλότυπο';
$string['duplicate_draft_confirm_message'] = 'Αυτό θα δημιουργήσει ένα αντίγραφο ενός προσχεδίου. Είστε σίγουροι;';
$string['duplicate_draft_modal_title'] = 'Δημιουργία διπλότυπου προσχεδίου μηνύματος (ηλε.ταχυδρομείου)';
$string['edit_conditions'] = 'Τροποποίηση συνθηκών';
$string['edit_event_details'] = 'Τροποποίηση λεπτομερειών γεγονότος';
$string['edit_message'] = 'Επεξεργασία μηνύματος';
$string['edit_notification'] = 'Επεξεργασία Ειδοποίησης';
$string['edit_schedule'] = 'Επεξεργασία χρονοπρογράμματος';
$string['enable_notification'] = 'Ενεργοποίηση ειδοποίησης';
$string['eventalternateemailadded'] = 'Η εναλλακτική διεύθυνση ηλε.ταχυδρομείου προστέθηκε';
$string['excluded_ids_label'] = 'Εξαίρεση';
$string['ferpa'] = 'Κατάσταση FERPA';
$string['found_filtered_users'] = 'Βρέθηκε/-αν {$a} χρήστης/-ες';
$string['from_email'] = 'Διεύθυνση ηλε.ταχυδρομείου αποστολέα';
$string['here'] = 'εδώ';
$string['included_ids_label'] = 'Έως';
$string['included_recipients_desc'] = 'Ποιός πρέπει να λάβει αυτό το μήνυμα;';
$string['invalid_condition_time_unit'] = 'Μη έγκυρη μονάδα χρόνου για συνθήκη.';
$string['invalid_email'] = 'Εσφαλμένη διεύθυνση ηλε.ταχυδρομείου.';
$string['invalid_time_amount'] = 'Μη έγκυρη διάρκεια χρόνου.';
$string['invalid_time_unit'] = 'Μη έγκυρη μονάδα χρόνου.';
$string['is_enabled'] = 'Ενεργοποιημένο';
$string['last_run_at'] = 'Τελευταία εκτέλεση';
$string['last_updated'] = 'Τελευταία ενημέρωση';
$string['manage_alternates'] = 'Εναλλακτικές διευθύνσεις ηλε.ταχυδρομείου';
$string['manage_drafts'] = 'Εμφάνιση προσχεδίων';
$string['manage_signatures'] = 'Οι Υπογραφές μου';
$string['message_deleted'] = 'Το μήνυμα διαγράφηκε';
$string['message_details'] = 'Λεπτομέρειες μηνύματος';
$string['message_no_record'] = 'Αδυναμία εύρεσης αυτού του μηνύματος.';
$string['message_not_found'] = 'Αδυναμία εύρεσης αυτού του μηνύματος';
$string['message_preview'] = 'προεπισκόπηση';
$string['message_sent_now'] = 'Το μήνυμα στάλθηκε';
$string['message_type_email'] = 'Διεύθυνση ηλε.ταχυδρομείου';
$string['message_type_message'] = 'Μήνυμα Moodle';
$string['migrate'] = 'Μετεγκατάσταση δεδομένων';
$string['migration_chunk_size'] = 'Μέγεθος Τεμαχίων μετεγκατάστασης';
$string['missing_body'] = 'Λείπει το σώμα του μηνύματος.';
$string['missing_email'] = 'Λείπει η διεύθυνση ηλε.ταχυδρομείου.';
$string['missing_firstname'] = 'Λείπει το (μικρό) όνομα.';
$string['missing_lastname'] = 'Λείπει το επώνυμο.';
$string['missing_notification_name'] = 'Λείπει το όνομα της ειδοποίησης.';
$string['missing_subject'] = 'Λείπει η γραμμή θέματος.';
$string['ms_alternate'] = 'Εναλλακτικές διευθύνσεις ηλε.ταχυδρομείου';
$string['ms_compose'] = 'Σύνταξη';
$string['ms_config'] = 'Ρυθμίσεις';
$string['ms_create_notification'] = 'Δημιουργία ειδοποίησης';
$string['ms_drafts'] = 'Προσχέδια';
$string['ms_notifications'] = 'Ειδοποιήσεις';
$string['ms_queued'] = 'Χρονοπρογραμματισμένο';
$string['ms_sent'] = 'Απεσταλμένα μηνύματα ηλε.ταχυδρομείου';
$string['ms_signatures'] = 'Οι Υπογραφές μου';
$string['never'] = 'Ποτέ';
$string['next_run_at'] = 'Επόμενη εκτέλεση';
$string['no_alternates'] = 'Δεν έχετε εναλλακτικές διευθύνσεις ηλε.ταχυδρομείου. Δημιουργήστε μια νέα τώρα!';
$string['no_drafts'] = 'Δεν έχετε προσχέδια μηνυμάτων ηλε.ταχυδρομείου.';
$string['no_excluded_recipients'] = 'Κανένας εξαιρούμενος παραλήπτης';
$string['no_included_recipients'] = 'Κανένας συμπεριλαμβανόμενος παραλήπτης';
$string['no_included_recipients_validation'] = 'Πρέπει να επιλεγεί τουλάχιστον ένας παραλήπτης.';
$string['no_notifications'] = 'Δεν έχουν δημιουργηθεί καθόλου ειδοποιήσεις.';
$string['no_queued'] = 'Δεν έχετε κανένα χρονοπρογραμματισμένο μήνυμα.';
$string['overwrite_history'] = 'Διαγραφή ιστορικού Quickmail';
$string['pluginname'] = 'Quickmail';
$string['prepend_class'] = 'Όνομα μαθήματος ως πρόθεμα';
$string['prepend_class_desc'] = 'Προσθέτει πρόθεμα αναγνώρισης μαθήματος (π.χ. το σύντομο όνομα) στο θέμα του μηνύματος. Αυτή η ρύθμιση μπορεί να παρακαμφθεί από τις ρυθμίσεις του μαθήματος.';
$string['preview_no_body'] = '(Κανένα περιεχόμενο)';
$string['preview_no_subject'] = '(Χωρίς θέμα)';
$string['quickmail:addinstance'] = 'Προσθήκη ενός νέου μπλοκ Quickmail σε μια σελίδα μαθήματος';
$string['quickmail:allowalternate'] = 'Δημιουργία εναλλακτικών διευθύνσεων ηλε.ταχυδρομείου για αποστολή από αυτές';
$string['quickmail:canconfig'] = 'Διαμόρφωση ρυθμίσεων Quickmail σε ένα μάθημα';
$string['quickmail:cansend'] = 'Αποστολή μηνυμάτων Quickmail σε ένα μάθημα';
$string['quickmail:myaddinstance'] = 'Προσθήκη ενός νέου μπλοκ Quickmail στην αρχική σελίδα μου';
$string['receipt'] = 'Λήψη μιας αναφοράς αποστολής';
$string['receipt_help'] = 'Αποστολή ενός μηνύματος (ηλε.ταχυδρομείου) επιβεβαίωσης στον αποστολέα του μηνύματος όταν το μήνυμα έχει σταλεί από προεπιλογή. Αυτή η ρύθμιση μπορεί να παρακαμφθεί από τις ρυθμίσεις του μαθήματος.';
$string['restore_history'] = 'Επαναφορά ιστορικού του Quickmail';
$string['save_draft'] = 'Αποθήκευση πρόχειρου';
$string['signature'] = 'Υπογραφή';
$string['status'] = 'Κατάσταση';
$string['strictferpa'] = 'Πάντα Διαχωρισμός Ομάδων';
$string['subject'] = 'Θέμα';
$string['time_delay_summary'] = 'Χρονική καθυστέρηση';
$string['time_delay_unit'] = 'Χρονική καθυστέρηση';
$string['time_ending'] = 'Τέλος χρόνου';
$string['time_every'] = 'Κάθε';
$string['time_once_a'] = 'Μια φορά κάθε';
$string['time_relation'] = 'Πριν ή Μετά';
$string['time_unit'] = 'Μονάδα χρόνου';
$string['time_unit_day'] = 'Ημέρα';
$string['time_unit_days'] = 'Ημέρες';
$string['time_unit_month'] = 'Μήνας';
$string['time_unit_months'] = 'Μήνες';
$string['time_unit_week'] = 'Εβδομάδα';
$string['time_unit_weeks'] = 'Εβδομάδες';
$string['title'] = 'Τίτλος';
$string['user_signature_deleted'] = 'Η υπογραφή σας έχει διαγραφεί.';
$string['view'] = 'Προβολή';
