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
 * Strings for component 'atto_styles', language 'el', version '4.3'.
 *
 * @package     atto_styles
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['code_example'] = '{<br />
&nbsp;&nbsp;&nbsp;&nbsp;"τίτλος": "Μπλε κουτί",<br />
&nbsp;&nbsp;&nbsp;&nbsp;"τύπος": "μπλοκ",<br />
&nbsp;&nbsp;&nbsp;&nbsp;"κλάσεις": "κουτί μπλε",<br />
&nbsp;&nbsp;&nbsp;&nbsp;"προεπισκόπηση": αληθής<br />
}';
$string['code_example_bootstrap'] = '{<br />
&nbsp;&nbsp;&nbsp;&nbsp;"τίτλος": "Επαγρύπνηση επιτυχίας",<br />
&nbsp;&nbsp;&nbsp;&nbsp;"τύπος": "μπλοκ",<br />
&nbsp;&nbsp;&nbsp;&nbsp;"κλάσεις": "επαγρύπνηση επαγρύπνηση-επιτυχίας"<br />
}';
$string['code_example_bootstrap_multiple'] = '[{<br />
&nbsp;&nbsp;&nbsp;&nbsp;"title": «Επαγρύπνηση επιτυχίας»,<br />
&nbsp;&nbsp;&nbsp;&nbsp;"type": "block",<br />
&nbsp;&nbsp;&nbsp;&nbsp;"classes": "alert alert-success"<br />
},{<br />
&nbsp;&nbsp;&nbsp;&nbsp;"title": "Danger alert",<br />
&nbsp;&nbsp;&nbsp;&nbsp;"type": "block",<br />
&nbsp;&nbsp;&nbsp;&nbsp;"classes": "alert alert-danger"<br />
}]';
$string['config'] = 'Διαμόρφωση των στυλ';
$string['config_desc'] = 'Διαμόρφωση για το γραφικό στοιχείο στυλ για τον (επεξεργαστή κειμένου) Atto σε μορφότυπο JSON.<br />
Μπορείτε να βρείτε ένα εκτεταμένο παράδειγμα στο README.md στην ενότητα <a href="https://github.com/moodleuulm/moodle-atto_styles/blob/master/README.md#usage--settings">«Χρήση και ρυθμίσεις»</a>.
<hr />
Για παράδειγμα:<br />
{$a->code_example}
<hr />
Το χαρακτηριστικό <em>title</em> καθορίζει το όνομα για το στυλ στο γραφικό στοιχείο στυλ του Atto.<br />
<br />
Ένας τίτλος μπορεί επίσης να υποστηρίξει το πολυγλωσσικό φίλτρο του Moodle (αν είναι ενεργοποιημένο), αλλά για επιπλέον διπλά εισαγωγικά θα πρέπει να προηγείται η  ανάστροφη κάθετος.<br />
Παρακαλούμε ρίξτε μια ματιά στο αρχείο README του πρόσθετου για ένα παράδειγμα.<br />
<hr />
Το χαρακτηριστικό <em>type</em> μπορεί να περιέχει μια από τις δυο τιμές: «block» ή «inline».<br />
<br />
Η τιμή «block» θα δημιουργήσει μια ετικέτα div με την δεδομένη κλάση/-εις και θα λειτουργήσει ως πρότυπο στοιχείο επιπέδου μπλοκ. Αυτό θα καταλάβει το τρέχον στοιχείο επίπεδου μπλοκ και μπορεί να εφαρμοστεί για περισσότερο από απλώς το επιλεγμένο κείμενο.
<hr />
Η τιμή «inline» θα δημιουργήσει μια ετικέτα span με τη δεδομένη κλάση/-εις  και θα λειτουργήσει ως πρότυπο ενσωματωμένο στοιχείο. Αυτό θα εφαρμοστεί μόνο στο επιλεγμένο κείμενο.
<hr />
Το χαρακτηριστικό <em>classes</em> παίρνει το όνομα της κλάσης CSS που θα εφαρμοστεί στο block / inline κείμενο.<br />
<br />
Μπορούν να καθοριστούν πολλαπλές κλάσεις για κάθε στοιχείο, διαχωρισμένες με κενό διάστημα. Αυτές θα εφαρμοστούν στο κείμενο block / inline.<br />
<br />
Οι ορισμοί κλάσεων CSS δεν μπορούν να γίνουν μέσα σε αυτό το πρόσθετο. Θα πρέπει να προσθέσετε τους ορισμούς των κλάσεων CSS σας στο αισθητικό θέμα σας ή στις επιπλέον ρυθμίσεις HTML του Moodle.
<hr />
Το χαρακτηριστικό <em>preview</em> παίρνει τις δυαδικές τιμές true (αληθής) ή false (ψευδής) (προεπιλογή). Εάν αυτή η τιμή οριστεί σε true , τότε το στοιχείο στυλ θα λάβει μια πραγματική προεπισκόπηση του στυλ. Διαφορετικά, το στοιχείο στυλ θα εμφανίζει τον τίτλο του σε απλό κείμενο.<br />
<br />
Παρακαλούμε, σημειώστε ότι, εάν επιλέξετε να εμφανιστεί η προεπισκόπηση για ένα στοιχείο στυλ, αυτή η κλάση πρέπει να οριστεί σε CSS με τρόπο που να μπορεί να εφαρμοστεί σε ετικέτες span, ακόμα κι αν το ίδιο το στοιχείο στυλ είναι ένα στοιχείο επιπέδου μπλοκ.
<hr />
Σε εγκαταστάσεις Moodle με αισθητικά θέματα με βάση το bootstrap (ειδικά το <em>Boost</em>), μπορείτε επίσης να δημιουργήσετε στυλ με τις κλάσεις CSS του bootstrap αντί να καθορίσετε τις δικές σας κλάσεις.
<br /><br />
Για παράδειγμα:<br />
{$a->code_example_bootstrap}
<br/><br/>
Για περισσότερες πληροφορίες σχετικά με τις κλάσεις bootstrap, παρακαλούμε επισκεφτείτε τους ακόλουθους συνδέσμους στην τεκμηρίωση Bootstrap 4:
<ul>
<li><a href="https://getbootstrap.com/docs/4.3/components/badge/">Διακριτικά Bootstrap </a></li>
<li><a href="https://getbootstrap.com/docs/4.3/components/alerts/">Επαγρυπνήσεις Bootstrap</a></li>
<li><a href="https://getbootstrap.com/docs/4.3/utilities/">Βοηθητικές κλάσεις Bootstrap</a></li>
</ul>
<hr />
Παρακαλούμε σημειώστε, ότι οι πολλαπλοί ορισμοί πρέπει να περιβάλλονται από αγκύλες.
<br /><br />
Για παράδειγμα:<br />
{$a->code_example_bootstrap_multiple}';
$string['inlinehint'] = 'Επιλέξτε κάποιο κείμενο πρώτα για να εφαρμοστεί αυτό το στυλ';
$string['jsondecodemessage'] = 'Ο κώδικας JSON που δόθηκε δεν είναι έγκυρος.';
$string['nostyle'] = 'Χωρίς στυλ';
$string['pluginname'] = 'Στυλ';
$string['privacy:metadata'] = 'Το πρόσθετο «atto_styles» δεν αποθηκεύει κανένα προσωπικό δεδομένο.';
$string['settings'] = 'Ρυθμίσεις στυλ';
