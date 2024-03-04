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
 * Strings for component 'ratingallocate', language 'el', version '4.3'.
 *
 * @package     ratingallocate
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['algorithmtimeout'] = 'Χρονικό όριο αλγορίθμου';
$string['allocation_manual_explain_all'] = 'Διαλέξτε μια επιλογή για εκχώρηση σε έναν χρήστη.';
$string['allocation_statistics'] = 'Στατιστικά εκχωρήσεων';
$string['allocations_table'] = 'Επισκόπηση εκχωρήσεων';
$string['allocations_table_choice'] = 'Επιλογή';
$string['allocations_table_noallocation'] = 'Καμία εκχώρηση';
$string['allocations_table_users'] = 'Χρήστες';
$string['choice_active'] = 'Η επιλογή είναι ενεργή';
$string['choice_active_help'] = 'Μόνο ενεργές επιλογές εμφανίζονται στον χρήστη. Ανενεργές επιλογές δεν εμφανίζονται.';
$string['choice_added_notification'] = 'Η επιλογή αποθηκεύτηκε.';
$string['choice_deleted_notification'] = 'Η επιλογή «{$a}» διαγράφηκε.';
$string['choice_deleted_notification_error'] = 'Αδυναμία εύρεσης ζητούμενης για διαγραφή επιλογής.';
$string['choice_explanation'] = 'Περιγραφή (προαιρετικά)';
$string['choice_maxsize'] = 'Μέγ. αριθμός συμμετεχόντων';
$string['choice_maxsize_display'] = 'Μέγιστος αριθμός μαθητών';
$string['choice_table_active'] = 'Ενεργός';
$string['choice_table_explanation'] = 'Περιγραφή';
$string['choice_table_maxsize'] = 'Μέγ. μέγεθος';
$string['choice_table_title'] = 'Τίτλος';
$string['choice_table_tools'] = 'Επεξεργασία';
$string['choice_title'] = 'Τίτλος';
$string['choicestatusheading'] = 'Κατάσταση';
$string['delete_choice'] = 'Διαγραφή επιλογής';
$string['deletechoice'] = 'Διαγραφή επιλογής';
$string['deleteconfirm'] = 'Σίγουρα να διαγραφεί η επιλογή «{$a}»;';
$string['distribution_algorithm'] = 'Αλγόριθμος κατανομής';
$string['distribution_published'] = 'Η εκχώρηση έχει δημοσιευτεί.';
$string['distribution_table'] = 'Πίνακας κατανομής';
$string['edit_choice'] = 'Τροποποίηση επιλογής';
$string['err_maximum'] = 'Η μέγιστη τιμή για αυτό το πεδίο είναι {$a}.';
$string['err_minimum'] = 'Η ελάχιστη τιμή για αυτό το πεδίο είναι {$a}.';
$string['err_positivnumber'] = 'Πρέπει να δώσετε έναν θετικό αριθμό εδώ.';
$string['err_required'] = 'Χρειάζεται να δώσετε μια τιμή για αυτό το πεδίο.';
$string['export_choice_alloc_suffix'] = '- Εκχώρηση';
$string['export_choice_text_suffix'] = '- Κείμενο';
$string['export_options'] = 'Επιλογές Εξαγωγής';
$string['filter_show_alloc_necessary'] = 'Απόκρυψη χρηστών με εκχώρηση';
$string['filtertabledesc'] = 'Περιγράφει τα φίλτρα που εφαρμόζονται στον πίνακα εκχωρήσεων.';
$string['invalid_dates'] = 'Οι ημερομηνίες είναι μη έγκυρες. Η ημερομηνία έναρξης πρέπει να είναι πριν την ημερομηνία λήξης.';
$string['last_algorithm_run_date_none'] = '-';
$string['last_algorithm_run_status'] = 'Κατάσταση τελευταίας εκτέλεσης';
$string['last_algorithm_run_status_-1'] = 'Απέτυχε';
$string['last_algorithm_run_status_0'] = 'Δεν ξεκίνησε';
$string['last_algorithm_run_status_1'] = 'Εκτελείται';
$string['last_algorithm_run_status_2'] = 'Πέτυχε';
$string['log_distribution_triggered'] = 'Η κατανομή προκλήθηκε';
$string['log_distribution_triggered_description'] = 'Ο/Η χρήστης με αναγνωριστικό «{$a->userid}» προκάλεσε την κατανομή για την Δίκαιη Εκχώρηση με αναγνωριστικό «{$a->ratingallocateid}». Ο αλγόριθμος χρειαζόταν {$a->time_needed}δευτερόλεπτα.';
$string['log_index_viewed'] = 'Ο/Η χρήστης εμφάνισε όλα τα στιγμιότυπα της Δίκαιης Εκχώρησης';
$string['log_index_viewed_description'] = 'Ο/Η χρήστης με αναγνωριστικό «{$a->userid}» εμφάνισε όλα τα στιγμιότυπα της Δίκαιης Εκχώρησης αυτού του μαθήματος.';
$string['log_manual_allocation_saved'] = 'Η χειροκίνητη εκχώρηση αποθηκεύτηκε';
$string['log_manual_allocation_saved_description'] = 'Ο/Η χρήστης με αναγνωριστικό «{$a->userid}» αποθήκευσε μια χειροκίνητη εκχώρηση για την Δίκαιη Εκχώρηση με αναγνωριστικό «{$a->ratingallocateid}».';
$string['log_rating_deleted'] = 'Η αξιολόγηση χρήστη διαγράφηκε';
$string['log_rating_saved'] = 'Η αξιολόγηση χρήστη αποθηκεύτηκε';
$string['log_rating_viewed'] = 'Η αξιολόγηση χρήστη εμφανίστηκε';
$string['manual_allocation'] = 'Χειροκίνητη εκχώρηση';
$string['manual_allocation_form'] = 'Φόρμα χειροκίνητης εκχώρησης';
$string['manual_allocation_nothing_to_be_saved'] = 'Δεν υπάρχει τίποτα προς αποθήκευση.';
$string['manual_allocation_saved'] = 'Η χειροκίνητη εκχώρησή σας αποθηκεύτηκε.';
$string['messageprovider:allocation'] = 'Ειδοποίηση για εκχώρηση που έχει εκδοθεί';
$string['messageprovider:notifyalloc'] = 'Ειδοποίηση εκχώρησης επιλογών';
$string['modify_allocation_group'] = 'Τροποποίηση εκχώρησης';
$string['modify_choices'] = 'Τροποποίηση επιλογών';
$string['modify_choices_group'] = 'Επιλογές';
$string['modify_choices_group_desc_too_early'] = 'Εδώ, μπορούν να καθοριστούν οι επιλογές, που θα είναι διαθέσιμες στους μαθητές.';
$string['modulename'] = 'Δίκαιη Εκχώρηση';
$string['modulenameplural'] = 'Δίκαιες Εκχωρήσεις';
$string['newchoice'] = 'Προσθήκη νέας επιλογής';
$string['newchoicetitle'] = 'Νέα επιλογή {$a}';
$string['no_choice_to_rate'] = 'Δεν υπάρχουν επιλογές για να αξιολογηθούν!';
$string['no_rating_given'] = 'Μη αξιολογημένη';
$string['no_rating_possible'] = 'Αυτή τη στιγμή, δεν είναι δυνατή καμία αξιολόγηση!';
$string['no_user_to_allocate'] = 'Δεν υπάρχει κανένας χρήστης που θα μπορούσατε να αξιολογήσετε';
$string['pluginadministration'] = 'Διαχείριση δίκαιης εκχώρησης';
$string['pluginname'] = 'Δίκαιη Εκχώρηση';
$string['privacy:metadata:ratingallocate_allocations:choiceid'] = 'Το αναγνωριστικό της επιλογής στην οποία εκχωρήθηκε ο χρήστης';
$string['privacy:metadata:ratingallocate_allocations:userid'] = 'Το αναγνωριστικό του χρήστη που εκχωρήθηκε σε μια επιλογή';
$string['privacy:metadata:ratingallocate_ratings'] = 'Πληροφορίες σχετικά με τις αξιολογήσεις του χρήστη για δεδομένες επιλογές.';
$string['privacy:metadata:ratingallocate_ratings:choiceid'] = 'Το αναγνωριστικό της επιλογής που αξιολόγησε ο χρήστης';
$string['privacy:metadata:ratingallocate_ratings:rating'] = 'Η αξιολόγηση που έδωσε ο χρήστης σε μια επιλογή.';
$string['privacy:metadata:ratingallocate_ratings:userid'] = 'Το αναγνωριστικό του χρήστη που αξιολογεί αυτή την επιλογή';
$string['publish_allocation'] = 'Έκδοση εκχώρησης';
$string['publish_allocation_group'] = 'Έκδοση εκχώρησης';
$string['publishdate'] = 'Εκτίμηση ημερομηνίας έκδοσης';
$string['publishdate_estimated'] = 'Εκτίμηση ημερομηνίας έκδοσης';
$string['rateable_choices'] = 'Αξιολογήσιμες επιλογές';
$string['rated'] = 'αξιολόγησε {$a}';
$string['rating_begintime'] = 'Η αξιολόγηση ξεκινά στις';
$string['rating_endtime'] = 'Η αξιολόγηση τελειώνει στις';
$string['rating_is_over'] = 'Η αξιολόγηση τελείωσε.';
$string['rating_is_over_no_allocation'] = 'Η αξιολόγηση τελείωσε. Δεν μπορείτε να εκχωρηθείτε σε καμία επιλογή.';
$string['rating_is_over_with_allocation'] = 'Η αξιολόγηση τελείωσε. Εκχωρηθήκατε σε «{$a}».';
$string['rating_raw'] = '{$a}';
$string['ratingallocate'] = 'Δίκαιη εκχώρηση';
$string['ratingallocate:addinstance'] = 'Προσθήκη νέου στιγμιοτύπου Δίκαιης εκχώρησης';
$string['ratingallocate:export_ratings'] = 'Δυνατότητα εξαγωγής των αξιολογήσεων χρήστη';
$string['ratingallocate:give_rating'] = 'Δημιουργία ή τροποποίηση επιλογής';
$string['ratingallocate:start_distribution'] = 'Έναρξη εκχώρησης χρηστών σε επιλογές';
$string['ratingallocate:view'] = 'Εμφάνιση στιγμιοτύπων Δίκαιης εκχώρησης';
$string['ratingallocatename'] = 'Το όνομα αυτής της Δίκαιης εκχώρησης';
$string['ratingallocatename_help'] = 'Παρακαλούμε, επιλέξτε ένα όνομα για αυτήν την δραστηριότητα Δίκαιης εκχώρησης.';
$string['ratings_deleted'] = 'Οι αξιολογήσεις σας έχουν διαγραφεί.';
$string['ratings_saved'] = 'Οι αξιολογήσεις σας έχουν αποθηκευτεί.';
$string['ratings_table'] = 'Αξιολογήσεις και Εκχωρήσεις';
$string['ratings_table_sum_allocations'] = 'Αριθμός εκχωρήσεων / Μέγιστο';
$string['ratings_table_sum_allocations_value'] = '{$a->sum} / {$a->max}';
$string['ratings_table_user'] = 'Χρήστης';
$string['reports_group'] = 'Αναφορές';
$string['results_not_yet_published'] = 'Τα αποτελέσματα δεν έχουν ακόμη εκδοθεί.';
$string['runalgorithmbycron'] = 'Αυτόματη εκχώρηση μετά την περίοδο αξιολόγησης';
$string['saveandcontinue'] = 'Αποθήκευση και Συνέχεια';
$string['saveandnext'] = 'Αποθήκευση και προσθήκη επόμενης';
$string['select_strategy'] = 'Στρατηγική αξιολόγησης';
$string['show_choices_header'] = 'Λίστα όλων των επιλογών';
$string['show_table'] = 'Εμφάνιση Αξιολογήσεων και Εκχωρήσεων';
$string['start_distribution'] = 'Εκτέλεση αλγόριθμου εκχώρησης';
$string['strategy_lickert_setting_maxno'] = 'Μέγιστος αριθμός επιλογών του μπορεί ο χρήστης να αξιολογήσει με 0';
$string['strategy_not_specified'] = 'Πρέπει να επιλέξετε μια στρατηγική.';
$string['strategy_order_choice_none'] = 'Παρακαλούμε, επιλέξετε μια επιλογή';
$string['strategy_order_header_description'] = 'Διαθέσιμες επιλογές';
$string['strategy_order_name'] = 'Κατάταξη επιλογών';
$string['strategy_order_no_choice'] = '{$a}. Επιλογή';
$string['strategy_points_name'] = 'Δώστε πόντους';
$string['strategy_tickyes_accept'] = 'Αποδοχή';
$string['strategy_tickyes_not_accept'] = '-';
$string['strategy_tickyes_setting_mintickyes'] = 'Ελάχιστος αριθμός επιλογών προς αποδοχή';
$string['strategy_yesmaybeno_name'] = 'Αποδοχή-Ουδέτερος-Άρνηση';
$string['strategy_yesmaybeno_rating_maybe'] = 'Ουδέτερος';
$string['strategy_yesmaybeno_rating_no'] = 'Άρνηση';
$string['strategy_yesmaybeno_rating_yes'] = 'Αποδοχή';
$string['strategy_yesno_name'] = 'Αποδοχή-Άρνηση';
$string['strategy_yesno_rating_choose'] = 'Αποδοχή';
$string['strategy_yesno_rating_crossout'] = 'Άρνηση';
$string['strategyname'] = 'Η στρατηγική είναι «{$a}»';
$string['strategyspecificoptions'] = 'Επιλογές για τη συγκεκριμένη στρατηγική';
$string['timeremaining'] = 'Χρόνος που απομένει';
$string['too_early_to_distribute'] = 'Πολύ νωρίς για ανακοίνωση. Η αξιολόγηση δεν είναι έτοιμη ακόμη.';
$string['too_early_to_rate'] = 'Είναι πολύ νωρίς για αξιολόγηση.';
$string['unassigned_users'] = 'Χρήστες που αφαιρέθηκαν';
$string['update_filter'] = 'Ενημέρωση φίλτρου';
$string['you_are_not_allocated'] = 'Δεν εκχωρηθήκατε σε καμία επιλογή!';
$string['your_allocated_choice'] = 'Η εκχώρησή σας';
$string['your_rating'] = 'Η αξιολόγησή σας';
