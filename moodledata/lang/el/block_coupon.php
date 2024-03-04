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
 * Strings for component 'block_coupon', language 'el', version '4.3'.
 *
 * @package     block_coupon
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action:coupon:delete'] = 'Διαγραφή κουπονιού';
$string['action:coupon:delete:confirm'] = 'Σίγουρα θέλετε να διαγραφεί αυτό το κουπόνι; Αυτό δεν μπορεί να αναιρεθεί!';
$string['action:error:delete'] = 'Σφάλμα διαγραφής';
$string['and'] = 'και';
$string['batchidselect'] = 'Αναγνωριστικό δέσμης';
$string['blockname'] = 'Κουπόνι';
$string['button:continue'] = 'Συνέχεια';
$string['button:next'] = 'Επόμενο';
$string['button:save'] = 'Δημιουργία κουπονιών';
$string['button:submit_coupon_code'] = 'Υποβολή κουπονιού';
$string['cleanup:confirm:confirmmessage'] = 'Ναι, θέλω να διαγραφούν τα κουπόνια με αυτές τις επιλογές';
$string['cleanup:confirm:header'] = 'Παρακαλούμε, επιβεβαιώστε τις ακόλουθες επιλογές καθαρισμού';
$string['cohort'] = 'Σύνολο χρηστών';
$string['confirm_coupons_sent_subject'] = 'Όλα τα κουπόνια έχουν σταλθεί';
$string['coupon:addinstance'] = 'Προσθήκη ενός νέου μπλοκ κουπονιού';
$string['coupon:administration'] = 'Διαχείριση του μπλοκ κουπονιού';
$string['coupon:claim:wronguser'] = 'Αυτό το προσωποποιημένο κουπόνι <i>δεν</i> είναι δικό σας για να το πάρετε';
$string['coupon:cleanup:heading'] = 'Καθαρισμός κουπονιού';
$string['coupon:deleted'] = 'Το κουπόνι διαγράφηκε';
$string['coupon:extendenrol'] = 'Κουπόνια παράτασης εγγραφής';
$string['coupon:extendenrolments'] = 'Δημιουργία κουπονιών για παράταση εγγραφών μαθήματος';
$string['coupon:generatecoupons'] = 'Δημιουργία ενός νέου κουπονιού';
$string['coupon:inputcoupons'] = 'Χρήση ενός κουπονιού για εγγραφή';
$string['coupon:myaddinstance'] = 'Προσθήκη ενός νέου μπλοκ κουπονιού στη σελίδα Το Moodle μου';
$string['coupon:send:fail'] = 'Η αποστολή ηλε.ταχυδρομείου απέτυχε! Αιτία: {$a}';
$string['coupon:senddate:instant'] = 'Στιγμή';
$string['coupon:timeframe'] = 'Τύπος';
$string['coupon:type'] = 'Τύπος';
$string['coupon:type:all'] = 'Όλα';
$string['coupon:type:cohort'] = 'Εγγραφή σε σύνολο χρηστών';
$string['coupon:type:course'] = 'Εγγραφή μαθήματος';
$string['coupon:type:enrolext'] = 'Επέκταση εγγραφής';
$string['coupon:used'] = 'Διαγραφή';
$string['coupon:used:all'] = 'Όλα τα κουπόνια';
$string['coupon:used:no'] = 'Μόνο μη χρησιμοποιούμενα κουπόνια';
$string['coupon:used:yes'] = 'Μόνο χρησιμοποιούμενα κουπόνια';
$string['coupon:user:heading'] = 'Ρυθμίσεις χρήστη για τον/την {$a->firstname} {$a->lastname}';
$string['coupon:viewallreports'] = 'Εμφάνιση αναφορών κουπονιού (για όλα τα κουπόνια)';
$string['coupon:viewreports'] = 'Εμφάνιση αναφορών κουπονιού (για τα δικά σας κουπόνια)';
$string['coupon_mail_content'] = '<p>Αγαπητέ/ή {$a->to_name},</p>
<p>Λάβατε αυτό το μήνυμα επειδή δημιουργήθηκαν πρόσφατα νέα κουπόνια.<br/>
Τα κουπόνια είναι διαθέσιμα για λήψη σε σύνδεση στο περιβάλλον ηλε.μάθησης.<br /><br />
Παρακαλούμε, κάντε κλικ στο {$a->downloadlink} για να λάβετε τα κουπόνια σας.</p>
<p>Με εκτίμηση,<br /><br />
{$a->from_name}</p>';
$string['coupon_mail_subject'] = 'Το κουπόνι Moodle δημιουργήθηκε';
$string['coupon_notification_subject'] = 'Τα κουπόνια δημιουργήθηκαν!';
$string['coupons:cleaned'] = 'Ένα σύνολο από {$a} κουπόνια έχουν καθαριστεί/διαγραφεί';
$string['coupons_sent'] = 'Τα κουπόνια σας έχουν δημιουργηθεί. Μέσα σε λίγα λεπτά θα λάβετε ένα μήνυμα ηλε.ταχυδρομείου με τα κουπόνια στα συνημμένα.';
$string['course'] = 'μάθημα';
$string['days_access'] = '{$a} ημέρες από';
$string['delete:request:confirmmessage'] = 'Επιθυμώ διαγραφή αυτού του αιτήματος';
$string['delete:request:header'] = 'Αίτημα διαγραφής του κουπονιού μου';
$string['delete:request:title'] = 'Αίτημα διαγραφής του κουπονιού μου';
$string['delete:requestuser:confirmmessage'] = 'Ναι, επιθυμώ τη διαγραφή αυτού του χρήστη';
$string['download-sample-csv'] = 'Λήψη υποδείγματος CSV αρχείου';
$string['downloadcoupons:buttontext'] = 'Παρακαλούμε, κάντε κλικ εδώ για να ξεκινήσει η λήψη';
$string['enrolperiod:extension'] = 'για ένα διάστημα {$a}';
$string['enrolperiod:indefinite'] = '<i>Επ\' αόριστον</i>';
$string['err:batchid'] = 'Το όνομα δέσμης υπάρχει ήδη. Παρακαλούμε, επιλέξτε ένα άλλο όνομα δέσμης ή αφήστε αυτό το πεδίο κενό.';
$string['err:coupon:generic'] = 'Κάτι πήγε στραβά. Παρακαλούμε, επικοινωνήστε με τον διαχειριστή συστήματος.';
$string['err:not-a-requestuser'] = 'Δεν έχετε επαρκή δικαιώματα πρόσβασης σε αυτήν τη σελίδα';
$string['error:already-enrolled-in-cohorts'] = 'Έχετε ήδη εγγραφεί σε όλα τα σύνολα χρηστών';
$string['error:already-enrolled-in-courses'] = 'Έχετε ήδη εγγραφεί σε όλα τα μαθήματα';
$string['error:alternative_email_invalid'] = 'Εάν έχετε επιλέξει «χρήση εναλλακτικής διεύθυνσης ηλε.ταχυδρομείου», τότε αυτό το πεδίο πρέπει να περιέχει μια έγκυρη διεύθυνση ηλε.ταχυδρομείου.';
$string['error:alternative_email_required'] = 'Εάν έχετε επιλέξει «χρήση εναλλακτικής διεύθυνσης ηλε.ταχυδρομείου», τότε αυτό το πεδίο απαιτείται.';
$string['error:cohort_sync'] = 'Ένα σφάλμα παρουσιάστηκε κατά τον συγχρονισμό των συνόλων χρηστών. Παρακαλούμε επικοινωνήστε με την υποστήριξη.';
$string['error:coupon_already_used'] = 'Το κουπόνι με αυτόν τον κωδικό έχει ήδη χρησιμοποιηθεί.';
$string['error:coupon_amount-recipients-both-set'] = 'Παρακαλούμε, καθορίστε έναν αριθμό κουπονιών για δημιουργία ή μια λίστα csv παραληπτών.';
$string['error:coupon_amount-recipients-both-unset'] = 'Είτε αυτό το πεδίο είτε το πεδίο Παραλήπτες, πρέπει να οριστεί.';
$string['error:coupon_amount_too_high'] = 'Παρακαλούμε, εισάγετε ένα ποσό μεταξύ {$a->min} και {$a->max}.';
$string['error:coupon_reserved'] = 'Το κουπόνι με τον κωδικό αυτό έχει δεσμευτεί για έναν άλλο χρήστη.';
$string['error:course-not-found'] = 'Δεν ήταν δυνατή η εύρεση του μαθήματος';
$string['error:invalid_coupon_code'] = 'Έχετε εισάγει έναν μη έγκυρο κωδικό κουπονιού.';
$string['error:invalid_email'] = 'Παρακαλούμε δώστε μια έγκυρη διεύθυνση ηλε.ταχυδρομείου.';
$string['error:missing_cohort'] = 'Το(α) σύνολο(α) χρηστών που συνδέονται με αυτό το κουπόνι δεν υπάρχουν πια. Παρακαλούμε επικοινωνήστε με την υποστήριξη.';
$string['error:nopermission'] = 'Δεν έχετε άδεια για αυτό';
$string['error:numeric_only'] = 'Αυτό το πεδίο πρέπει να είναι αριθμητικό.';
$string['error:plugin_disabled'] = 'Το πρόσθετο συγχρονισμού συνόλων χρηστών cohort_sync έχει απενεργοποιηθεί. Παρακαλούμε επικοινωνήστε με την υποστήριξη.';
$string['error:recipients-email-invalid'] = 'Η διεύθυνση ηλε.ταχυδρομείου {$a->email} δεν είναι έγκυρη. Παρακαλούμε, διορθώστε τη στο αρχείο csv.';
$string['error:recipients-empty'] = 'Παρακαλούμε, δώστε τουλάχιστον ένα χρήστη.';
$string['error:recipients-extension'] = 'Μπορείτε να ανεβάσετε μόνο .csv αρχεία.';
$string['error:recipients-invalid'] = 'Δεν ήταν δυνατή η επικύρωση του αρχείου. Είστε σίγουροι ότι δώσατε σωστά στήλες και διαχωριστικό;';
$string['error:recipients-max-exceeded'] = 'Το αρχείο csv σας έχει υπερβεί το μέγιστο όριο των 10.000 χρηστών κουπονιού. Παρακαλούμε, περιορίστε το.';
$string['error:required'] = 'Το πεδίο αυτό απαιτείται.';
$string['error:sessions-expired'] = 'Η σύνοδός σας έχει λήξει. Παρακαλούμε, προσπαθήστε ξανά.';
$string['error:unable_to_enrol'] = 'Ένα σφάλμα παρουσιάστηκε κατά την εγγραφή σας στο νέο μάθημα. Παρακαλούμε, επικοινωνήστε με την υποστήριξη.';
$string['error:validate-courses'] = 'Σφάλματα επικύρωσης μαθήματος:
{$a}';
$string['error:wrong_code_length'] = 'Παρακαλούμε, δώστε έναν αριθμό μεταξύ 6 και 32.';
$string['error:wrong_doc_page'] = 'Προσπαθείτε να αποκτήσετε πρόσβαση σε μια σελίδα που δεν υπάρχει.';
$string['extendaccess'] = '{$a} επιπλέον';
$string['findcohortcourses:noselectionstring'] = 'καμία επιλογή ακόμη';
$string['findcohorts:noselectionstring'] = 'κανένα σύνολο/-α χρηστών δεν επιλέχθηκαν ακόμη';
$string['findcohorts:placeholder'] = '... επιλογή συνόλου/-ων χρηστών ...';
$string['findcourses'] = 'Επιτρεπόμενα μαθήματα';
$string['findcourses:noselectionstring'] = 'δεν επιλέχθηκε ακόμη μάθημα ή μαθήματα';
$string['findcourses:placeholder'] = '... επιλέξτε μάθημα/-ήματα ...';
$string['findusers:noselectionstring'] = 'δεν επιλέχθηκε ακόμη κανένας χρήστης';
$string['findusers:placeholder'] = '... επιλέξτε χρήστη ...';
$string['generator:export:mail:body'] = 'Αγαπητέ/ή {$a->to_name},<br /><br />
Λαμβάνετε αυτό το μήνυμα επειδή έχουν δημιουργηθεί πρόσφατα κουπόνια. <br/>
Μπορεί να γίνει λήψη των κουπονιών από {$a->downloadlink} (απαιτείται σύνδεση στο Moodle).<br />
Παρακαλούμε, σημειώστε ότι αυτός ο σύνδεσμος μπορεί να χρησιμοποιηθεί μόνο μία φορά. Αφού κατεβάσετε τα κουπόνια, αυτός ο σύνδεσμος δεν θα μπορεί πλέον να χρησιμοποιηθεί.<br />
Με εκτίμηση,<br /><br />
{$a->from_name}';
$string['generator:export:mail:subject'] = 'Κουπόνια έτοιμα για λήψη';
$string['heading:administration'] = 'Διαχείριση';
$string['heading:amountForm'] = 'Ρυθμίσεις ποσότητας';
$string['heading:cohortandvars'] = 'Επιλέξτε μεταβλητές κουπονιού, σύνολο/-α χρηστών και μεταβλητές εγγραφής σε μάθημα';
$string['heading:cohortlinkcourses'] = 'Σύνδεση μαθημάτων με σύνολο/-α χρηστών';
$string['heading:coupon_type'] = 'Τύπος κουπονιού';
$string['heading:courseandvars'] = 'Επιλέξτε μεταβλητές κουπονιού, μάθημα/-ήματα και μεταβλητές εγγραφής σε μάθημα';
$string['heading:coursegroups'] = 'Σύνδεση ομάδων μαθήματος με επιλεγμένα μαθήματα';
$string['heading:csvForm'] = 'Ρυθμίσεις CSV';
$string['heading:general_settings'] = 'Τελευταίες ρυθμίσεις';
$string['heading:generatecoupons'] = 'Δημιουργήστε κουπόνια';
$string['heading:generatormethod'] = 'Επιλέξτε πως θέλετε να δημιουργηθούν τα κουπόνια';
$string['heading:imageupload'] = 'Ανέβασμα εικόνας';
$string['heading:info'] = 'Πληροφορίες';
$string['heading:input_cohorts'] = 'Επιλέξτε σύνολο/-α χρηστών';
$string['heading:input_coupon'] = 'Εισαγωγή κουπονιού';
$string['heading:input_course'] = 'Επιλογή μαθήματος/-ων';
$string['heading:input_groups'] = 'Επιλογή ομάδων';
$string['heading:inputcoupons'] = 'Εισαγωγή κουπονιού';
$string['heading:label_instructions'] = 'Οδηγίες';
$string['heading:manualForm'] = 'Χειροκίνητες ρυθμίσεις';
$string['here'] = 'εδώ';
$string['knowncourses'] = 'Γνωστά μαθήματα';
$string['label:alternative_email'] = 'Εναλλακτική διεύθυνση ηλε.ταχυδρομείου';
$string['label:alternative_email_help'] = 'Αποστολή κουπονιών σε αυτή τη διεύθυνση ηλε.ταχυδρομείου από προεπιλογή';
$string['label:api_enabled'] = 'Ενεργοποίηση API';
$string['label:api_enabled_desc'] = 'Το API κουπονιού παρέχει τη δυνατότητα να δημιουργήσετε κουπόνια από ένα εξωτερικό σύστημα.';
$string['label:api_password'] = 'Κωδικός πρόσβασης API';
$string['label:api_password_desc'] = 'Ο κωδικός πρόσβασης που μπορεί να χρησιμοποιηθεί για δημιουργία ενός κουπονιού με χρήση του API';
$string['label:api_user'] = 'Χρήστης API';
$string['label:api_user_desc'] = 'Το όνομα χρήστη που μπορεί να χρησιμοποιηθεί για δημιουργία ενός κουπονιού με χρήση του API';
$string['label:batchid'] = 'Όνομα δέσμης';
$string['label:buttonclass'] = 'Κλάση πλήκτρου/συνδέσμου';
$string['label:buttonclass_desc'] = 'Επιλέξτε κλάση πλήκτρου. Αυτό επηρεάζει τον τρόπο εμφάνισης των συνδέσμων.';
$string['label:cleanupage'] = 'Μέγιστη ηλικία;';
$string['label:cleanupage_help'] = 'Δώστε τη μέγιστη ηλικία ενός μη χρησιμοποιούμενου κουπονιού πριν να διαγραφεί';
$string['label:cohort'] = 'Σύνολο χρηστών';
$string['label:connected_courses'] = 'Συνδεδεμένο μάθημα/-ήματα';
$string['label:coupon_amount'] = 'Ποσότητα κουπονιών';
$string['label:coupon_amount_help'] = 'Αυτή είναι η ποσότητα κουπονιών που θα δημιουργηθούν. Παρακαλούμε, χρησιμοποιήστε αυτό το πεδίο Ή το πεδίο παραλήπτες, όχι και τα δύο.';
$string['label:coupon_code'] = 'Κωδικός κουπονιού';
$string['label:coupon_code_help'] = 'Ο κωδικός κουπονιού είναι ο μοναδικός κωδικός που συνδέεται σε κάθε επιμέρους κουπόνι. Μπορείτε να βρείτε αυτόν τον κωδικό στο κουπόνι σας.';
$string['label:coupon_code_length'] = 'Μήκος κουπονιού';
$string['label:coupon_code_length_help'] = 'Πλήθος χαρακτήρων του κωδικού κουπονιού.';
$string['label:coupon_cohorts'] = 'Σύνολο/-α χρηστών';
$string['label:coupon_cohorts_help'] = 'Επιλέξτε σύνολο ή σύνολα χρηστών στα οποία θα εγγραφούν οι χρήστες σας.';
$string['label:coupon_connect_course'] = 'Προσθήκη μαθήματος/-ων';
$string['label:coupon_connect_course_help'] = 'Επιλέξτε όλα τα μαθήματα στα οποία επιθυμείτε να εγγράψετε τα μέλη του συνόλου.<br /><b><i>Σημείωση:</i></b> Όλα τα τρέχοντα μέλη του συνόλου χρηστών θα εγγραφούν στα επιλεγμένα μαθήματα!';
$string['label:coupon_courses'] = 'Μάθημα/-τα';
$string['label:coupon_courses_help'] = 'Επιλογή των μαθημάτων στα οποία θα εγγραφούν οι χρήστες σας.';
$string['label:coupon_email'] = 'Διεύθυνση ηλε.ταχυδρομείου';
$string['label:coupon_email_help'] = 'Αυτή είναι η διεύθυνση ηλε.ταχυδρομείου προς την οποία θα σταλθούν τα δημιουργούμενα κουπόνια.';
$string['label:coupon_groups'] = 'Προσθήκη ομάδας/-ων';
$string['label:coupon_groups_help'] = 'Επιλογή των ομάδων στις οποίες επιθυμείτε να εγγραφούν οι χρήστες σας κατά την εγγραφή τους στα μαθήματα.';
$string['label:coupon_recipients'] = 'Παραλήπτες';
$string['label:coupon_recipients_help'] = 'Με αυτό το πεδίο μπορείτε να ανεβάσετε ένα αρχείο csv με χρήστες.';
$string['label:coupon_recipients_txt'] = 'Παραλήπτες';
$string['label:coupon_recipients_txt_help'] = 'Σε αυτό το πεδίο μπορείτε να κάνετε τις τελικές σας αλλαγές στο αρχείο csv που ανεβάζετε.';
$string['label:coupon_role'] = 'Ρόλος';
$string['label:coupon_role_help'] = 'Επιλέξτε το ρόλο με τον οποίο τα κουπόνια θα ρυθμιστούν ή αφήστε κενό για την ρυθμισμένη προεπιλογή (συνήθως μαθητής).';
$string['label:coupon_type'] = 'Δημιουργήστε το κουπόνι/-α για';
$string['label:coupon_type_help'] = 'Τα Κουπόνια θα δημιουργηθούν με βάση είτε τα μαθήματα είτε ένα ή περισσότερα σύνολα χρηστών.';
$string['label:current_image'] = 'Τρέχων υπόβαθρο κουπονιού';
$string['label:date_send_coupons'] = 'Ημερομηνία αποστολής';
$string['label:date_send_coupons_help'] = 'Ημερομηνία κατά την οποία τα κουπόνια θα σταλθούν στον/στους παραλήπτη/-ες.';
$string['label:defaultlogo'] = 'Προεπιλεγμένο λογότυπο';
$string['label:defaultlogo_help'] = 'Επιλογή του λογότυπου που θα επιβληθεί σε όλα τα κουπόνια για αυτόν τον χρήστη';
$string['label:defaultrole'] = 'Προεπιλεγμένος ρόλος';
$string['label:defaultrole_help'] = 'Αυτός θα είναι ο προεπιλεγμένος ρόλος που θα αποδίδεται στους χρήστες όταν ζητούν ένα κουπόνι';
$string['label:displayinputhelp'] = 'Εμφάνιση του κειμένου βοήθειας εισόδου κουπονιού';
$string['label:displayinputhelp_help'] = 'Ενεργοποιήστε αυτή την επιλογή για να εμφανίζεται ένα κείμενο προς τους τελικούς χρήστες πάνω από το πεδίο καταχώρησης κουπονιού.';
$string['label:displayregisterhelp'] = 'Εμφάνιση του κειμένου βοήθειας καταχώρησης';
$string['label:email_body'] = 'Μήνυμα ηλε.ταχυδρομείου';
$string['label:email_body_help'] = 'Το μήνυμα ηλε.ταχυδρομείου που θα αποσταλεί προς τους παραλήπτες του κουπονιού.';
$string['label:enablecleanup'] = 'Ενεργοποίηση καθαρίσματος μη χρησιμοποιούμενων κουπονιών;';
$string['label:enablecleanup_help'] = 'Ενεργοποιήστε αυτή την επιλογή για αυτόματο καθαρισμό (διαγραφή) μη χρησιμοποιούμενων κουπονιών';
$string['label:enrolment_period'] = 'Περίοδος εγγραφής';
$string['label:enrolment_period_help'] = 'Περίοδος (σε ημέρες) για την οποία ο χρήστης θα είναι εγγεγραμμένος στα μαθήματα. Αν οριστεί σε 0, δεν θα οριστεί κανένα τέλος.';
$string['label:enrolment_perioddefault'] = 'Προεπιλεγμένη περίοδος εγγραφής';
$string['label:enter_coupon_code'] = 'Παρακαλούμε, δώστε τον κωδικό του κουπονιού σας εδώ';
$string['label:extendperiod'] = 'Περίοδος επέκτασης εγγραφής';
$string['label:forcelogo'] = 'Υποχρεωτικό λογότυπο';
$string['label:forcelogo_help'] = 'Επιλογή ενός λογότυπου που θα επιβληθεί σε όλα τα κουπόνια για αυτόν τον χρήστη';
$string['label:forcerole'] = 'Υποχρεωτικός ρόλος';
$string['label:forcerole_help'] = 'Επιλέξτε τον ρόλο που θα επιβληθεί σε όλα τα κουπόνια για αυτόν τον χρήστη';
$string['label:generate_pdfs'] = 'Δημιουργία ξεχωριστών PDF.';
$string['label:generate_pdfs_help'] = 'Εδώ μπορείτε να επιλέξετε αν θέλετε να λάβετε τα κουπόνια σας σε ένα ενιαίο αρχείο ή κάθε κουπόνι σε ένα ξεχωριστό αρχείο PDF.';
$string['label:generatecodesonly'] = 'Δημιουργία μόνο κωδικών';
$string['label:generatecodesonly_help'] = 'Αν ενεργοποιηθεί αυτή η επιλογή, θα δημιουργηθούν μόνο κωδικοί.<br/>
Αυτό σημαίνει ότι θα γίνει παράλειψη ολόκληρης της επιλογής ταχυδρομείου και της δημιουργίας PDF!';
$string['label:image'] = 'Φόντο κουπονιού';
$string['label:image_desc'] = 'Φόντο για να τοποθετηθεί στο δημιουργούμενα κουπόνια';
$string['label:info_coupon_cohort_courses'] = 'Πληροφορίες για τη σελίδα: Μαθήματα συνόλων χρηστών';
$string['label:info_coupon_cohorts'] = 'Πληροφορίες για τη σελίδα: Επιλέξτε σύνολα χρηστών';
$string['label:info_coupon_confirm'] = 'Πληροφορίες για τη σελίδα: Επιβεβαίωση κουπονιού';
$string['label:info_coupon_course'] = 'Πληροφορίες για τη σελίδα: Επιλέξτε μάθημα';
$string['label:info_coupon_course_groups'] = 'Πληροφορίες για τη σελίδα: Επιλέξτε ομάδες μαθημάτων';
$string['label:info_coupon_type'] = 'Πληροφορίες για τη σελίδα: Επιλέξτε τύπο κουπονιού';
$string['label:info_desc'] = 'Οι πληροφορίες που εμφανίζονται πάνω από τη φόρμα.';
$string['label:info_imageupload'] = 'Πληροφορίες για τη σελίδα: Ανέβασμα εικόνας';
$string['label:logo'] = 'Λογότυπο/υπόβαθρο κουπονιού';
$string['label:mailusers'] = 'Αποστολή κουπονιών μέσω ηλε.ταχυδρομείου σε επιλεγμένους συμμετέχοντες μαθήματος.';
$string['label:max_coupons'] = 'Μέγιστα κουπόνια';
$string['label:max_coupons_desc'] = 'Ποσότητα κουπονιών που μπορεί να δημιουργηθεί σε μία φορά.';
$string['label:no_courses_connected'] = 'Δεν υπάρχουν μαθήματα συνδεδεμένα με αυτό το σύνολο χρηστών.';
$string['label:no_groups_selected'] = 'Δεν υπάρχουν ομάδες συνδεδεμένες με αυτά τα μαθήματα.';
$string['label:redirect_url'] = 'Ανακατεύθυνση διεύθυνσης URL';
$string['label:redirect_url_help'] = 'Ο προορισμός στον οποίο θα προωθούνται οι χρήστες αφού εισαγάγουν τον κωδικό του κουπονιού τους.';
$string['label:renderqrcode'] = 'Χρήση κωδικού QR;';
$string['label:renderqrcode_help'] = 'Ενεργοποιήσετε ή απενεργοποιήσετε αυτήν την επιλογή για να συμπεριλάβετε κωδικούς QR στο δημιουργούμενο PDF.';
$string['label:selected_cohort'] = 'Επιλεγμένα σύνολα χρηστών';
$string['label:selected_courses'] = 'Επιλεγμένα μαθήματα';
$string['label:selected_groups'] = 'Επιλεγμένη/-ες ομάδα/-ες';
$string['label:showform'] = 'Επιλογές δημιουργίας';
$string['label:type_cohorts'] = 'Εγγραφές ανά σύνολο/-α χρηστών';
$string['label:type_course'] = 'Εγγραφή μαθήματος';
$string['label:use_alternative_email'] = 'Χρήση εναλλακτικής διεύθυνσης ηλε.ταχυδρομείου';
$string['label:users'] = 'Χρήστης/-ες';
$string['logo:default'] = 'Προεπιλεγμένο λογότυπο';
$string['logo:none'] = 'Χωρίς χρήση λογότυπου';
$string['messageprovider:coupon_notification'] = 'Ειδοποίηση δημιουργίας κουπονιών';
$string['othersettings'] = 'Άλλες ρυθμίσεις/επιλογές';
$string['page:generate_coupon.php:title'] = 'Δημιουργία κουπονιών';
$string['page:generate_coupon_step_five.php:title'] = 'Δημιουργία κουπονιών';
$string['page:generate_coupon_step_four.php:title'] = 'Δημιουργία κουπονιών';
$string['page:generate_coupon_step_three.php:title'] = 'Δημιουργία κουπονιών';
$string['page:generate_coupon_step_two.php:title'] = 'Δημιουργία κουπονιών';
$string['page:unused_coupons.php:title'] = 'Μη χρησιμοποιούμενα κουπόνια';
$string['pdf-meta:keywords'] = 'Κουπόνι Moodle';
$string['pdf-meta:subject'] = 'Κουπόνι Moodle';
$string['pdf-meta:title'] = 'Κουπόνι Moodle';
$string['pdf:titlename'] = 'Κουπόνι Moodle';
$string['pluginname'] = 'Κουπόνι';
$string['preview-pdf'] = 'Προεπισκόπηση PDF';
$string['privacy:metadata:block_coupon:claimed'] = 'Εάν παραλήφθηκε ή όχι το κουπόνι';
$string['privacy:metadata:block_coupon:timecreated'] = 'Χρόνος δημιουργίας του κουπονιού';
$string['privacy:metadata:block_coupon:timeexpired'] = 'Ημερομηνία λήξης για το κουπόνι';
$string['privacy:metadata:block_coupon:timemodified'] = 'Χρόνος τροποποίησης του κουπονιού';
$string['privacy:metadata:block_coupon:userid'] = 'Το κύριο κλειδί βάσης δεδομένων του χρήστη Moodle';
$string['promo'] = 'Πρόσθετο κουπονιού για το Moodle';
$string['promodesc'] = 'Αυτό το πρόσθετο γράφτηκε από την Sebsoft Managed Hosting & Software Development
(<a href=\'http://www.sebsoft.nl/\' target=\'_new\'>http://sebsoft.nl</a>).<br /><br />
{$a}<br /><br />';
$string['recipient:none'] = 'Κανένας';
$string['recipient:selected:users'] = 'Επιλεγμένοι χρήστες';
$string['remove-count'] = 'Αυτό θα διαγράψει <i>{$a}</i> κουπόνι/-α';
$string['removecourse'] = 'Διαγραφή μαθήματος «{$a}» από τις επιλογές';
$string['report:cohorts'] = 'Σύνολο χρηστών';
$string['report:coupon_code'] = 'Κωδικός εγγραφής';
$string['report:dateformat'] = '%d-%m-%Y %H:%M:%S';
$string['report:dateformatymd'] = '%d-%m-%Y';
$string['report:download-excel'] = 'Λήψη αχρησιμοποίητων κουπονιών';
$string['report:enrolperiod'] = 'Ιδιοκτήτης';
$string['report:for_user_email'] = 'Σχεδιάζεται για';
$string['report:for_user_name'] = 'Όνομα παραλήπτη';
$string['report:heading:action'] = 'Ενέργεια/-ες';
$string['report:heading:cohortname'] = 'Σύνολο(α) χρηστών';
$string['report:heading:coupon'] = 'Κουπόνι';
$string['report:heading:couponcode'] = 'Χρησιμοποιούμενος κωδικός';
$string['report:heading:coursename'] = 'Όνομα μαθήματος';
$string['report:heading:coursetype'] = 'Τύπος μαθήματος';
$string['report:heading:datecomplete'] = 'Ημερομηνία ολοκλήρωσης';
$string['report:heading:datestart'] = 'Ημερομηνία έναρξης';
$string['report:heading:errormessage'] = 'Σφάλμα';
$string['report:heading:errortype'] = 'Τύπος';
$string['report:heading:grade'] = 'Βαθμός';
$string['report:heading:iserror'] = 'Είναι σφάλμα;';
$string['report:heading:status'] = 'Κατάσταση';
$string['report:heading:timecreated'] = 'Ημερομηνία';
$string['report:heading:type'] = 'Τύπος';
$string['report:heading:user'] = 'Χρήστης';
$string['report:immediately'] = 'Αμέσως';
$string['report:issend'] = 'Στάλθηκε';
$string['report:owner'] = 'Ιδιοκτήτης';
$string['report:senddate'] = 'Ημερομηνία αποστολής';
$string['report:status_completed'] = 'Το μάθημα ολοκληρώθηκε';
$string['report:status_not_started'] = 'Το μάθημα δεν ξεκίνησε ακόμη';
$string['report:status_started'] = 'Το μάθημα ξεκίνησε';
$string['report:timeexpired'] = 'Λήξη';
$string['request:accept:subject'] = 'Το αίτημα κουπονιού έγινε δεκτό';
$string['request:coupons'] = 'Ζητείστε κουπόνια';
$string['request:deny:heading'] = 'Αρνηθείτε αυτό το αίτημα κουπονιού';
$string['request:deny:subject'] = 'Το αίτημα κουπονιού απορρίφθηκε';
$string['request:info'] = 'Αίτημα για {$a->amount} κουπόνια';
$string['request:message'] = 'Μήνυμα χρήστη';
$string['request:sendmessage'] = 'Ενημέρωση χρήστη;';
$string['select:logo'] = 'Επιλογή λογότυπου υποδείγματος';
$string['showform-amount'] = 'Επιθυμώ τη δημιουργία μιας απεριόριστης ποσότητας κουπονιών';
$string['showform-csv'] = 'Επιθυμώ τη δημιουργία κουπονιών χρησιμοποιώντας ένα CSV με παραλήπτες';
$string['showform-manual'] = 'Επιθυμώ να ρυθμίσω χειροκίνητα τους παραλήπτες';
$string['signup:login'] = 'Έχω ήδη ένα λογαριασμό και θέλω να συνδεθώ';
$string['str:inputhelp'] = 'Χρησιμοποιήστε το παρακάτω πεδίο εισαγωγής για να αποκτήσετε πρόσβαση σε μαθήματα, αν έχετε λάβει έναν κωδικό κουπονιού';
$string['str:mandatory'] = 'Υποχρεωτικά';
$string['str:optional'] = 'Προαιρετικά';
$string['str:request:add'] = 'Ζητείστε κουπόνια';
$string['str:request:adduser'] = 'Προσθήκη χρήστη';
$string['str:request:details'] = 'Λεπτομέρειες του αιτήματός μου';
$string['str:signuphelp'] = 'Χρησιμοποιήστε τον παρακάτω σύνδεσμο για να δημιουργήσετε ένα νέο λογαριασμό <i>με</i> κωδικό κουπονιού εάν λάβατε έναν αλλά δεν έχετε κανένα ενεργό λογαριασμό ακόμη';
$string['success:coupon_used'] = 'Το κουπόνι χρησιμοποιήθηκε - Μπορείτε τώρα να έχετε πρόσβαση στο/στα μαθήματα';
$string['success:uploadimage'] = 'Η νέα σας εικόνα κουπονιού έχει ανεβεί.';
$string['tab:apidocs'] = 'Τεκμηρίωση API';
$string['tab:cleaner'] = 'Εκκαθάριση';
$string['tab:downloadbatchlist'] = 'Αρχειοθήκες δέσμης';
$string['tab:errors'] = 'Αναφορές σφαλμάτων';
$string['tab:listrequests'] = 'Τα αιτήματά μου';
$string['tab:maillog'] = 'Καταγραφές ηλε.ταχυδρομείου';
$string['tab:personalcoupons'] = 'Προσωποποιημένα κουπόνια';
$string['tab:report'] = 'Έκθεση προόδου';
$string['tab:requests'] = 'Αιτήματα κουπονιού';
$string['tab:requestusers'] = 'Χρήστες αιτημάτων κουπονιού';
$string['tab:unused'] = 'Μη χρησιμοποιούμενα κουπόνια';
$string['tab:used'] = 'Χρησιμοποιούμενα κουπόνια';
$string['tab:wzcouponimage'] = 'Εικόνα υποδείγματος';
$string['tab:wzcoupons'] = 'Δημιουργία κουπονιού/-ών';
$string['task:cleanup'] = 'Καθαρισμός μη χρησιμοποιούμενων παλαιών κουπονιών';
$string['task:sendcoupons'] = 'Αποστολή χρονοπρογραμματισμένων κουπονιών';
$string['tasksettings'] = 'Ρυθμίσεις εργασίας';
$string['tasksettings_desc'] = '';
$string['textsettings'] = 'Ρυθμίσεις κειμένου';
$string['th:action'] = 'Ενέργεια/-ες';
$string['th:batchid'] = 'Δέσμη';
$string['th:cohorts'] = 'Σύνολο χρηστών';
$string['th:course'] = 'Μάθημα';
$string['th:enrolperiod'] = 'Περίοδοςεγγραφής';
$string['th:for_user_email'] = 'Σχεδιάζεται για';
$string['th:fullname'] = 'Πλήρες όνομα';
$string['th:groups'] = 'Ομάδα/-ες';
$string['th:immediately'] = 'Άμεσα';
$string['th:issend'] = 'Απεσταλμένο;';
$string['th:owner'] = 'Ιδιοκτήτης';
$string['th:roleid'] = 'Ρόλος';
$string['th:senddate'] = 'Ημερομηνία αποστολής';
$string['th:submission_code'] = 'Κωδικός εγγραφής';
$string['th:tid'] = 'Αναγνωριστικό χρόνου';
$string['th:timecreated'] = 'Δημιουργήθηκε στις';
$string['th:usedby'] = 'Ζητήθηκε από';
$string['timeafter'] = 'Δημιουργήθηκε μετά από';
$string['timebefore'] = 'Δημιουργήθηκε πριν από';
$string['unlimited_access'] = 'χωρίς περιορισμό';
$string['url:api_docs'] = 'Τεκμηρίωση API';
$string['url:couponsignup'] = 'Εγγραφή με κωδικό κουπονιού';
$string['url:generate_coupons'] = 'Δημιουργία κουπονιού';
$string['url:input_coupon'] = 'Εισαγωγή κουπονιού';
$string['url:managelogos'] = 'Διαχείριση εικόνων κουπονιού';
$string['url:uploadimage'] = 'Αλλαγή εικόνας κουπονιού';
$string['url:view_reports'] = 'Εμφάνιση αναφορών';
$string['url:view_unused_coupons'] = 'Εμφάνιση αχρησιμοποίητων κουπονιών';
$string['userconfig:allowselectenrolperiod'] = 'Να επιτρέπεται η επιλογή της περιόδου εγγραφής';
$string['userconfig:allowselectlogo'] = 'Να επιτρέπεται η επιλογή του λογότυπου του κουπονιού';
$string['userconfig:allowselectqr'] = 'Να επιτρέπεται η επιλογή συμπερίληψης κωδικού QR';
$string['userconfig:allowselectrole'] = 'Να επιτρέπεται η επιλογή ρόλου';
$string['userconfig:allowselectseperatepdf'] = 'Να επιτρέπεται η επιλογή της δυνατότητας δημιουργίας ξεχωριστού PDF';
$string['userconfig:default'] = 'Προεπιλεγμένη ρύθμιση';
$string['userconfig:renderqrcode:default'] = 'Ενεργοποίηση συμπερίληψης κωδικού QR από προεπιλογή';
$string['userconfig:seperatepdf:default'] = 'Ενεργοποίηση δημιουργίας ξεχωριστού PDF από προεπιλογή';
$string['view:api:heading'] = 'API κουπονιού';
$string['view:api:title'] = 'API κουπονιού';
$string['view:api_docs:heading'] = 'Τεκμηρίωση API κουπονιού';
$string['view:api_docs:title'] = 'Τεκμηρίωση API κουπονιού';
$string['view:cleanup:heading'] = 'Καθαρισμός κουπονιών';
$string['view:cleanup:title'] = 'Καθαρισμός κουπονιών';
$string['view:download:heading'] = 'Λήψη των κουπονιών σας';
$string['view:download:title'] = 'Λήψη κουπονιών';
$string['view:errorreport:heading'] = 'Αναφορά - Σφάλματα κουπονιού';
$string['view:errorreport:title'] = 'Αναφορά - Σφάλματα κουπονιού';
$string['view:extendenrolment:heading'] = 'Κουπόνι: επεκτάσεις εγγραφών';
$string['view:extendenrolment:title'] = 'Κουπόνι: επεκτάσεις εγγραφών';
$string['view:extendenrolment_step1:heading'] = 'Επέκταση εγγραφών: επιλογή μαθήματος/-ων';
$string['view:extendenrolment_step1:title'] = 'Επέκταση εγγραφών: επιλογή μαθήματος/-ων';
$string['view:extendenrolment_step2:heading'] = 'Επέκταση εγγραφών: επιλογή χρηστών';
$string['view:extendenrolment_step2:title'] = 'Επέκταση εγγραφών: επιλογή χρηστών';
$string['view:extendenrolment_step3:heading'] = 'Επέκταση εγγραφών: επιβεβαίωση';
$string['view:extendenrolment_step3:title'] = 'Επέκταση εγγραφών: επιβεβαίωση';
$string['view:generate_coupon:heading'] = 'Δημιουργία κουπονιού';
$string['view:generate_coupon:title'] = 'Δημιουργία κουπονιού';
$string['view:generator:cohort:heading'] = 'Δημιουργία κουπονιού/-ών ενός συνόλου χρηστών';
$string['view:generator:cohort:title'] = 'Δημιουργία κουπονιού/-ών ενός συνόλου χρηστών';
$string['view:generator:course:heading'] = 'Δημιουργία κουπονιού/-ών μαθήματος';
$string['view:generator:course:title'] = 'Δημιουργία κουπονιού/-ών μαθήματος';
$string['view:input_coupon:heading'] = 'Εισαγωγή κουπονιού';
$string['view:input_coupon:title'] = 'Εισαγωγή κουπονιού';
$string['view:reports-maillog:heading'] = 'Αναγνωριστικό χρόνου';
$string['view:reports-maillog:title'] = 'Καταγραφές ηλε.ταχυδρομείου';
$string['view:reports-unused:heading'] = 'Αναφορά - Μη χρησιμοποιούμενα κουπόνια';
$string['view:reports-unused:title'] = 'Αναφορά - Μη χρησιμοποιούμενα κουπόνια';
$string['view:reports-used:heading'] = 'Αναφορά - Χρησιμοποιούμενα κουπόνια';
$string['view:reports-used:title'] = 'Αναφορά - Χρησιμοποιούμενα κουπόνια';
$string['view:reports:heading'] = 'Αναφορά - Πρόοδος με βάση κουπόνια';
$string['view:reports:title'] = 'Αναφορά - Πρόοδος με βάση κουπόνια';
$string['view:request:heading'] = 'Ζητήστε κουπόνια';
$string['view:request:title'] = 'Ζητήστε κουπόνια';
$string['view:requests:admin:heading'] = 'Διαχείριση αιτημάτων κουπονιού';
$string['view:requests:admin:title'] = 'Διαχείριση αιτημάτων κουπονιού';
$string['view:uploadimage:heading'] = 'Ανέβασμα ενός νέου υπόβαθρού κουπονιού';
$string['view:uploadimage:title'] = 'Ανέβασμα υπόβαθρού κουπονιού';
$string['view:userrequest:heading'] = 'Τα αιτήματά σας κουπονιού';
$string['view:userrequest:title'] = 'Τα αιτήματά σας κουπονιού';
$string['with-names'] = 'Με τα ακόλουθα ονόματα ή αναγνωριστικά';