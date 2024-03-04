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
 * Strings for component 'allocationform', language 'el', version '4.3'.
 *
 * @package     allocationform
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessdenied'] = 'Δεν επιτράπηκε η πρόσβαση στη φόρμα εκχώρησης';
$string['add_option'] = 'Προσθήκη νέας επιλογής';
$string['al_notwant'] = 'Μη επιθυμητό';
$string['al_notwant_help'] = 'Επιλέξτε μια επιλογή στην οποία δεν θέλετε να εκχωρηθείτε';
$string['allocationform'] = 'Φόρμα εκχώρησης';
$string['allocationform:addinstance'] = 'Προσθήκη μιας νέας φόρμας εκχώρησης';
$string['allocationform:edit'] = 'Επεξεργασία φορμών εκχώρησης';
$string['allocationform:exportallocations'] = 'Εξαγωγή εκχωρήσεων';
$string['allocationform:exportchoices'] = 'Εξαγωγή επιλογών';
$string['allocationform:reallocate'] = 'Επιβολή επανάληψης εκχώρησης';
$string['allocationform:viewallocations'] = 'Εμφάνιση όλων των εκχωρήσεων που έγιναν';
$string['allocationform:viewform'] = 'Εμφάνιση φορμών εκχώρησης';
$string['allocationformname'] = 'Όνομα φόρμας εκχώρησης';
$string['allocationformname_help'] = 'Το όνομα αυτής της φόρμας εκχώρησης. Θα χρησιμοποιηθεί ως σύνδεσμος προς την φόρμα.';
$string['allocations'] = 'Εκχωρήσεις';
$string['allocations_not_visible'] = 'Οι εκχωρήσεις μπορούν να εμφανιστούν μόνο σε διορθωτές.';
$string['allocationsexported'] = 'Οι εκχωρήσεις έχουν εξαχθεί';
$string['allocationviewed'] = 'Η φόρμα εκχώρησης εμφανίστηκε';
$string['aria:delete'] = 'Διαγραφή {$a}';
$string['aria:edit'] = 'Επεξεργασία {$a}';
$string['aria:restrict'] = 'Περιορισμός {$a}';
$string['availabilityheading'] = 'Διαθεσιμότητα φόρμας';
$string['back_to_edit'] = 'Εναλλαγή στην κατάσταση λειτουργίας επεξεργασίας';
$string['back_to_edit_warning'] = 'Αυτό θα διαγράψει όλες τις πληροφορίες που υποβλήθηκαν στην φόρμα.';
$string['before_start'] = 'Η ημερομηνία έναρξης αυτής της φόρμας εκχώρησης δεν έχει ακόμη περάσει.';
$string['calendar:avaliable'] = 'Εκχωρήσεις που έγιναν για {$a}';
$string['calendar:deadline'] = 'Προθεσμία για {$a}';
$string['cannoteditinapp'] = 'Δεν μπορεί να γίνει επεξεργασία της φόρμας εκχώρησης στην εφαρμογή κινητού Moodle';
$string['changestateto'] = 'Σίγουρα θέλετε να αλλάξει η φόρμα στην κατάσταση {$a};';
$string['choice'] = 'Επιλογή {$a->choice}';
$string['choice_help'] = 'Επιλέξτε μια επιλογή στην οποία θα θέλατε να εκχωρηθείτε.';
$string['choicealreadyselected'] = 'Μία επιλογή μπορεί να επιλεγεί μόνο μία φορά';
$string['choiceheading'] = 'Ρύθμιση επιλογών';
$string['choiceincorrectstate'] = 'Η φόρμα δεν είναι ανοικτή. Παρακαλούμε, ανανεώστε τη σελίδα.';
$string['choiceinvalid'] = 'Έχετε επιλέξει μια επιλογή που δεν είναι μέρος της φόρμας';
$string['choicerequired'] = 'Κάντε μια επιλογή';
$string['choicesexported'] = 'Εξαγωγή επιλογών ΟΚ';
$string['cron'] = 'Επεξεργασία παρασκηνίου για φόρμες εκχώρησης';
$string['csvgenerated'] = 'CSV δημιουργήθηκε';
$string['deadline'] = 'Προθεσμία';
$string['deadline_help'] = 'Ο αργότερος χρόνος στον οποίο οι χρήστες θα μπορούν να επιλέξουν τις εκχωρήσεις τους. Είναι επίσης ο νωρίτερος χρόνος στον οποίο μια φόρμα εκχώρησης θα τίθεται σε ουρά αναμονής ώσπου να εκτελεστεί η διαδικασία εκχώρησης.';
$string['deadline_message'] = 'Η προθεσμία για την συμπλήρωση αυτής της φόρμας είναι: {$a->deadline}';
$string['deadline_passed'] = 'Η προθεσμία για αυτή τη φόρμα έχει περάσει. Αν την ενεργοποιήσετε τώρα, θα ξεκινήσει η εκτέλεση αμέσως.';
$string['defaultrole'] = 'Προεπιλεγμένος ρόλος';
$string['defaultrole_help'] = 'Ορίστε τον προεπιλεγμένο ρόλο που θα χρησιμοποιηθεί για την επιλογή των χρηστών που θα διατεθούν μέσω της δραστηριότητας';
$string['deleteuserdata'] = 'Διαγραφή δεδομένων χρήστη';
$string['disallow_list'] = 'Λίστα μη επιτρεπόμενων';
$string['disallow_list_help'] = 'Όλοι οι επιλεγμένοι χρήστες δεν θα μπορούν να επιλέξουν {$a->option_name}';
$string['duplicate_choice'] = 'Μπορείτε να επιλέξετε μια επιλογή μόνο μία φορά';
$string['duplicateoption'] = 'Οι αλλαγές σας δεν μπόρεσαν να αποθηκευτούν στην βάση δεδομένων. Αυτό οφείλεται πιθανότατα σε πληκτρολόγηση υπάρχοντος (διπλότυπου) ονόματος επιλογής';
$string['editingmode'] = 'Επεξεργασία';
$string['editingoption'] = 'Επεξεργασία επιλογής';
$string['event:optiondcreated'] = 'Η επιλογή δημιουργήθηκε';
$string['event:optiondeleted'] = 'Η επιλογή διαγράφηκε';
$string['form_allocation_error'] = 'ΣΦΑΛΜΑ στο αναγνωριστικό φόρμας {$a->formid}:';
$string['form_allocation_error2'] = 'ΣΦΑΛΜΑ: Αδυναμία εκχώρησης αναγνωριστικού χρήστη {$a->userid}';
$string['generate_allocation_csv'] = 'Δημιουργία csv με την εκχωρήσεις χρηστών';
$string['generate_csv'] = 'Δημιουργία csv με τις επιλογές χρήστη';
$string['in_editingmode'] = 'Γίνεται επεξεργασία της φόρμας. Στάδιο 1 από 5.';
$string['in_processedmode'] = 'Οι εκχωρήσεις έχουν ανακοινωθεί. Στάδιο 5 από 5.';
$string['in_processmode'] = 'Εκχωρούνται χρήστες. Στάδιο 3 από 5.';
$string['in_readymode'] = 'Η φόρμα είναι ενεργή, στάδιο 2 από 5.';
$string['in_reviewmode'] = 'Οι εκχωρήσεις εξετάζονται, στάδιο 4 από 5.';
$string['incorrectnumberofchoices'] = 'Η φόρμα δεν έχει το σωστό αριθμό επιλογών';
$string['instructions'] = 'Πρέπει να δώσετε στη σειρά {$a->choices} επιλογές. Θα σας εκχωρηθούν {$a->allocation} από αυτές.';
$string['instructionsnotwant'] = 'Πρέπει να δώσετε στη σειρά {$a->choices} επιλογές. Θα σας εκχωρηθούν {$a->allocation} από αυτές. Μπορείτε να επιλέξετε 1 επιλογή που δεν επιθυμείτε να σας εκχωρηθεί.';
$string['invalidstate'] = 'Μια μη έγκυρη αλλαγή κατάστασης, πέρασε στην φόρμα εκχώρησης';
$string['invalidstatechange'] = 'Έγινε προσπάθεια για μη έγκυρη αλλαγή κατάστασης';
$string['make_active'] = 'Ενεργοποίηση της φόρμας';
$string['makechoice'] = 'Κάντε τις επιλογές σας';
$string['modulename'] = 'Φόρμα εκχώρησης';
$string['modulename_help'] = 'Η φόρμα εκχώρησης μπορεί να χρησιμοποιηθεί για την εκχώρηση μαθητών σε μία έως δέκα επιλογές (για παράδειγμα ενότητες, εργασίες, τοποθετήσεις ...)

Ο διδάσκων ορίζει:

* Τη λίστα των επιλογών που διατίθενται στους μαθητές.
* Τον αριθμό των μαθητών που μπορούν να ανατεθούν σε μια επιλογή.
* Πόσες επιλογές ανατίθενται στους μαθητές (μεταξύ μίας και δέκα)
* Πόσες επιλογές μπορεί να κατατάξει ένας μαθητής (μεταξύ μίας και δέκα)
* Εάν οι μαθητές μπορούν να επιλέξουν μια επιλογή στην οποία δεν επιθυμούν να εκχωρηθούν.
* Το τελευταίο σημείο στο οποίο οι μαθητές μπορούν να υποβάλουν μια επιλογή.

Προειδοποίηση: Όταν αλλάζετε τη δραστηριότητα από την ενεργή λειτουργία σε λειτουργία επεξεργασίας, τυχόν επιλογές από μαθητές θα διαγραφούν.

Μετά την ημερομηνία κλεισίματος, η φόρμα θα προσπαθήσει να κάνει μια κατανομή των μαθητών με «βέλτιστη εφαρμογή» έτσι ώστε:

* Όσο γίνεται περισσότεροι μαθητές να ανατίθενται σε επιλογές όσο το δυνατόν υψηλότερες στην κατάταξή τους.
* Οι μαθητές δεν θα ανατεθούν ποτέ σε μια επιλογή που επιλέγουν ως «Δεν επιθυμώ».
* Οι μαθητές δεν θα εκχωρηθούν σε επιλογές που δεν τους επιτράπηκε να επιλέξουν.
* Οι μαθητές που δεν έκαναν επιλογή θα διατεθούν τελευταίοι.

Μετά την επεξεργασία των κατανομών οι εκπαιδευτικοί μπορούν:

* Ελέγξουν το αποτέλεσμα και να τροποποιήσουν τον αριθμό των μαθητών που έχουν διατεθεί σε επιλογές προτού ανακοινώσουν τα αποτελέσματα στους μαθητές.
* Λάβουν ένα csv των επιλογών των μαθητών.
* Λάβουν ένα csv των εκχωρήσεων.';
$string['modulenameplural'] = 'Φόρμες εκχώρησης';
$string['no_allocations'] = 'Δεν βρέθηκαν εκχωρήσεις';
$string['noallocationforms'] = 'Δεν βρέθηκαν φόρμες εκχώρησης για αυτό το μάθημα';
$string['noformdatapassed'] = 'Δεν δόθηκαν δεδομένα φόρμας. Δεν έγινε ενημέρωση.';
$string['nopermission'] = 'Δεν μπορεί να σας εκχωρηθεί η φόρμα. Οι επιλογές σας δεν αποθηκεύτηκαν.';
$string['not_active'] = 'Η φόρμα εκχώρησης δεν είναι διαθέσιμη. Παρακαλούμε, προσπαθήστε πάλι αργότερα.';
$string['not_enough_slots'] = 'Δεν υπάρχουν αρκετές χρονοθυρίδες για όλα τα πρόσωπα που μπορούν να επιλεγούν για εκχώρηση';
$string['not_set'] = 'Πρέπει να κάνετε μια επιλογή';
$string['notrequired'] = 'Δεν απαιτείται';
$string['notwant'] = 'Να περιλαμβάνεται επιλογή μη προτίμησης';
$string['notwant_help'] = 'Αν επιλεγεί, κάθε χρήστης θα έχει την ευκαιρία να επιλέξει μία επιλογή στην οποία δεν θέλει να εκχωρηθεί.';
$string['nousersallocated'] = 'Δεν εκχωρήθηκε κανένας χρήστης';
$string['numberofallocations'] = 'Εκχωρήσεις ανά χρήστη';
$string['numberofallocations_help'] = 'Ο αριθμός των επιλογών στις οποίες θα εκχωρηθεί ένας χρήστης.';
$string['numberofchoices'] = 'Αριθμός επιλογών';
$string['numberofchoices_help'] = 'Ο αριθμός των επιλογών που ένας χρήστης θα πρέπει να επιλέξετε';
$string['ok_to_continue'] = 'Σίγουρα θέλετε να συνεχίσετε;';
$string['option_form_header'] = 'Νέα επιλογή';
$string['option_heading'] = 'Επικεφαλίδα';
$string['option_heading_help'] = 'Μια επικεφαλίδα για να εμφανίζεται αμέσως πάνω από αυτή την επιλογή.';
$string['option_list'] = 'Λίστα επιλογών';
$string['option_maxallocation'] = 'Μέγιστος αριθμός εκχωρήσεων';
$string['option_maxallocation_help'] = 'Ο μέγιστος αριθμός ατόμων που μπορούν να εκχωρηθούν σε αυτήν την επιλογή.';
$string['option_maxallocation_invalid'] = 'Ο μέγιστος αριθμός εκχωρήσεων δεν ορίστηκε';
$string['option_name'] = 'Όνομα επιλογής';
$string['option_name_help'] = 'Το όνομα της επιλογής όπως θα εμφανίζεται στο χρήστη.';
$string['option_restricted'] = 'Περιορισμένοι χρήστες';
$string['optioncreated'] = 'Δημιουργήθηκε η επιλογή: {$a}';
$string['optiondeleted'] = 'Διαγράφηκε η επιλογή: {$a}';
$string['optionedited'] = 'Η επιλογή τροποποιήθηκε';
$string['optionmodified'] = 'Τροποποιήθηκε η επιλογή: {$a}';
$string['optionnamenumber'] = '{$a->name} ({$a->allocation})';
$string['overviewclose'] = 'Ημερομηνία λήξης: {$a->closedate}';
$string['overviewname'] = 'Εκχώρηση: {$a->link}';
$string['overviewready'] = 'Η εκχώρησή σας είναι διαθέσιμη';
$string['overviewreview'] = 'Έτοιμα για εξέταση. Οι άνθρωποι που εκχωρήθηκαν δεν μπορούν να δουν τα αποτελέσματα.';
$string['people'] = 'Αριθμός των ατόμων που θα εκχωρηθούν';
$string['permissionedited'] = 'Το δικαίωμα τροποποιήθηκε';
$string['permissionviewed'] = 'Το δικαίωμα εμφανίστηκε';
$string['pluginadministration'] = 'Διαχείριση φόρμας εκχώρησης';
$string['pluginname'] = 'Φόρμες εκχώρησης (eForms)';
$string['privacy:export:allocations'] = 'Εκχωρήσεις';
$string['privacy:export:choices'] = 'Επιλογές';
$string['privacy:export:restrictions'] = 'Περιορισμοί';
$string['privacy:metadata:allocationform_allocations'] = 'Αποθηκεύει τις εκχωρήσεις που έγιναν για τον χρήστη';
$string['privacy:metadata:allocationform_allocations:allocation'] = 'Η επιλογή στην οποία εκχωρήθηκε ο χρήστης';
$string['privacy:metadata:allocationform_allocations:userid'] = 'Ο χρήστης που εκχωρείται';
$string['privacy:metadata:allocationform_choices'] = 'Αποθηκεύει τις επιλογές που έκανε ένας χρήστης σε μια φόρμα εκχώρησης';
$string['privacy:metadata:allocationform_choices:choice1'] = 'Η πρώτη προτίμηση του χρήστη';
$string['privacy:metadata:allocationform_choices:choice10'] = 'Η δέκατη προτίμηση του χρήστη';
$string['privacy:metadata:allocationform_choices:choice2'] = 'Η δεύτερη προτίμηση του χρήστη';
$string['privacy:metadata:allocationform_choices:choice3'] = 'Η τρίτη προτίμηση του χρήστη';
$string['privacy:metadata:allocationform_choices:choice4'] = 'Η τέταρτη προτίμηση του χρήστη';
$string['privacy:metadata:allocationform_choices:choice5'] = 'Η πέμπτη προτίμηση του χρήστη';
$string['privacy:metadata:allocationform_choices:choice6'] = 'Η έκτη προτίμηση του χρήστη';
$string['privacy:metadata:allocationform_choices:choice7'] = 'Η έβδομη προτίμηση του χρήστη';
$string['privacy:metadata:allocationform_choices:choice8'] = 'Η όγδοη προτίμηση του χρήστη';
$string['privacy:metadata:allocationform_choices:choice9'] = 'Η ένατη προτίμηση του χρήστη';
$string['privacy:metadata:allocationform_choices:notwant'] = 'Μια επιλογή για την οποία ο χρήστης δεν επιθυμεί να εκχώρηση';
$string['privacy:metadata:allocationform_choices:userid'] = 'Ο χρήστης που κάνει τις επιλογές';
$string['privacy:metadata:allocationform_disallow'] = 'Αποθηκεύει τις επιλογές τις οποίες ο χρήστης εμποδίζεται να επιλέξει';
$string['privacy:metadata:allocationform_disallow:disallow_allocation'] = 'Η επιλογή της οποίας η χρήση από τον χρήστη περιορίζεται';
$string['privacy:metadata:allocationform_disallow:userid'] = 'Ο χρήστης που περιορίζεται';
$string['processedmode'] = 'Τροποποιήθηκε';
$string['processmode'] = 'Επεξεργασία...';
$string['queued_for_processing'] = 'Η φόρμα εκχώρησης βρίσκεται σε αναμονή επεξεργασίας... παρακαλούμε, επιστρέψτε αργότερα.';
$string['readymode'] = 'Ενεργό';
$string['reprocess'] = 'Επιβολή επανάληψης εκχώρησης';
$string['reprocess_warning'] = 'Αυτό θα διαγράψει όλες τις τρέχουσες εκχωρήσεις';
$string['requirechoice'] = 'Απαιτείται επιλογή';
$string['resetstate'] = 'Επαναρχικοποίηση στην κατάσταση επεξεργασίας';
$string['restrict'] = 'Περιορισμός';
$string['restrictionsexceeded'] = 'Έχετε υπερβεί τον αριθμό των εφαρμόσιμων περιορισμών για  {$a->users} χρήστες.  Απαιτούνται τουλάχιστον {$a->numberofchoices} διαθέσιμες επιλογές ανά χρήστη.';
$string['restrictionsmodified'] = 'Οι περιορισμοί ενημερώθηκαν.';
$string['reviewmode'] = 'Εξέταση';
$string['roleselect'] = 'Ρόλος προς εκχώρηση';
$string['roleselect_help'] = 'Επιλογή ρόλου χρηστών σε αυτό το μάθημα που θα εκχωρηθούν με χρήση αυτής της φόρμας.';
$string['saved'] = 'Οι επιλογές σας έχουν αποθηκευτεί.';
$string['savefail'] = 'Αδυναμία αποθήκευσης των επιλογών σας στο Moodle';
$string['search:activity'] = 'Φόρμα εκχώρησης - πληροφορίες δραστηριότητας';
$string['show_allocations'] = 'Κάντε τις εκχωρήσεις διαθέσιμες';
$string['slots'] = 'Αριθμός χρονοθυρίδων για την εκχώρηση';
$string['startdate'] = 'Ημερομηνία έναρξης';
$string['startdate_help'] = 'Ο νωρίτερος χρόνος κατά τον οποίο οι χρήστες θα είναι σε θέση να επιλέξουν τις εκχωρήσεις τους.';
$string['statechanged'] = 'Η κατάσταση άλλαξε';
$string['statechangefailed'] = 'Αδυναμία αλλαγής κατάστασης';
$string['trackcompletion'] = 'Να απαιτείται υποβολή επιλογής για ολοκλήρωση αυτής της δραστηριότητας;';
$string['unallocated'] = 'Χωρίς εκχώρηση';
$string['youralloactions'] = 'Έγινε εκχώρησή σας σε:';
